angular.module("vavaGaming").controller('bannerCtrl', function($scope, $http, error) {
	
    $http.get("banner/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.master	= srv_resp.data;
            
            $scope.new_banner                   = {};
            $scope.new_banner.sort_of_banner    = 0;
            
            $scope.resetNewBanner($scope.master.sites[0]);
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.saveBannerForm = function() {
		$http.post("banner/api/post-save-banner", $scope.new_banner)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;
                $scope.resetNewBanner($scope.master.sites[0]);
                error.launchModal();
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.changeSiteId = function(site) {
		$scope.new_banner                   = {};
        $scope.new_banner.sort_of_banner    = 0;
        $scope.resetNewBanner(site);
	}
    
    $scope.changeBannerSort = function(sort_id) {
        $scope.new_banner.sort_of_banner    = sort_id;
	}
    
    $scope.saveBannersForm = function() {
        $http.post("banner/api/post-save-banners", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;
                error.launchModal();
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteBannersForm = function() {
        $http.post("banner/api/post-delete-banners", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.loadBannerInf = function(banner) {
        var cur_site_id                     = $scope.new_banner.site_id;
        
        $scope.new_banner                   = {};
        $scope.new_banner.b_seq             = banner.b_seq;
        $scope.new_banner.subject           = banner.subject;
        $scope.new_banner.start_date        = banner.start_date;
        $scope.new_banner.end_date          = banner.end_date;
        $scope.new_banner.ink_target        = banner.ink_target;
        $scope.new_banner.ordering          = banner.ordering;
        $scope.new_banner.show_flag         = banner.show_flag;
        $scope.new_banner.text              = banner.text;
        $scope.new_banner.sort_of_banner    = banner.sort_of_banner;
        $scope.new_banner.site_id           = cur_site_id;
        
        $('#tab_banner_set').slideDown();
    }
    
    $scope.resetNewBanner = function(site) {
        var cur_sort_banner                 = $scope.new_banner.sort_of_banner;
        
        $scope.new_banner                   = {};
        $scope.new_banner.b_seq             = 0;
        $scope.new_banner.subject           = '';
        $scope.new_banner.start_date        = '';
        $scope.new_banner.end_date          = '';
        $scope.new_banner.ink_target        = '';
        $scope.new_banner.ordering          = '';
        $scope.new_banner.show_flag         = '';
        $scope.new_banner.text              = '';
        $scope.new_banner.sort_of_banner    = cur_sort_banner;
        $scope.new_banner.site_id           = site.site_id;
        
        $('#tab_banner_set').slideUp();
    }
    
    $scope.openNewBanner = function(site) {
        $scope.resetNewBanner(site);
        $('#tab_banner_set').slideDown();
    }
    
    $scope.tinymceOptions = {
        height: 255,
        menubar: false,
        plugins: 'image code',
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        automatic_uploads: true,
        file_picker_types: 'image',
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
        
            // Note: In modern browsers input[type="file"] is functional without 
            // even adding it to the DOM, but that might not be the case in some older
            // or quirky browsers like IE, so you might want to add it to the DOM
            // just in case, and visually hide it. And do not forget do remove it
            // once you do not need it anymore.

            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                // Note: Now we need to register the blob in TinyMCEs image blob
                // registry. In the next release this part hopefully won't be
                // necessary, as we are looking to handle it internally.
                var id = 'blobid' + (new Date()).getTime();
                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                // call the callback and populate the Title field with the file name
                cb(blobInfo.blobUri(), { title: file.name });
                };
            };
        
            input.click();
        },
        images_upload_handler: function (blobInfo, success, failure) {
            var xhr;
            var formData;
            
            xhr     = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', 'banner/api/upload-img');
            
            xhr.onload = function() {
                var json;

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                else {
                    $scope.new_banner.img_path  = json.filename;
                }
                
                success(json.location);
            };
            
            formData    = new FormData();
            formData.append('banner-file', blobInfo.blob());
            xhr.send(formData);
        }
    };
});