angular.module("vavaGaming").controller('popupCtrl', function($scope, $http) {
	
    $http.get("popup/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.master   = srv_resp.data;
            
            $scope.resetNewPopup($scope.master.sites[0]);
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.savePopupForm = function() {
		$http.post("popup/api/post-save-popup", $scope.new_popup)
            .then(function success(srv_resp){
                var cur_site_id = $scope.new_popup.site_id;
                
                $scope.master	= srv_resp.data;
                
                $scope.resetNewPopup($scope.master.sites[0]);
                $scope.new_popup.site_id = cur_site_id;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.changeSiteId = function(site) {
		$scope.resetNewPopup(site);
	}
    
    $scope.savePopupsForm = function() {
        $http.post("popup/api/post-save-popups", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master	    = srv_resp.data;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deletePopupsForm = function() {
        $http.post("popup/api/post-delete-popups", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master	    = srv_resp.data;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.loadPopupInf = function(popup) {
        var cur_site_id                     = $scope.new_popup.site_id;
        $scope.new_popup                    = {};
        $scope.new_popup.p_seq              = popup.p_seq;
        $scope.new_popup.subject            = popup.subject;
        $scope.new_popup.text               = popup.text;
        $scope.new_popup.size_width         = popup.size_width;
        $scope.new_popup.size_height        = popup.size_height;
        $scope.new_popup.x_position         = popup.x_position;
        $scope.new_popup.y_position         = popup.y_position;
        $scope.new_popup.start_date         = popup.start_date;
        $scope.new_popup.start_datetime     = popup.start_datetime;
        $scope.new_popup.end_date           = popup.end_date;
        $scope.new_popup.end_datetime       = popup.end_datetime;
        $scope.new_popup.scrool_flag        = popup.scrool_flag;
        $scope.new_popup.sort_machine       = popup.sort_machine;
        $scope.new_popup.sort_popup         = popup.sort_popup;
        $scope.new_popup.show_flag          = popup.show_flag;
        $scope.new_popup.ordering           = popup.ordering;
        $scope.new_popup.link_target_code   = popup.link_target_code;
        $scope.new_popup.link_address       = popup.link_address;
        $scope.new_popup.site_id            = cur_site_id;
        
        $('#tab_site_set').slideDown();
    }
    
    $scope.resetNewPopup = function(site) {
        $scope.new_popup                    = {};
        $scope.new_popup.p_seq              = 0;
        $scope.new_popup.subject            = '';
        $scope.new_popup.text               = '';
        $scope.new_popup.size_width         = '';
        $scope.new_popup.size_height        = '';
        $scope.new_popup.x_position         = '';
        $scope.new_popup.y_position         = '';
        $scope.new_popup.start_date         = '';
        $scope.new_popup.start_datetime     = '';
        $scope.new_popup.end_date           = '';
        $scope.new_popup.end_datetime       = '';
        $scope.new_popup.scrool_flag        = '';
        $scope.new_popup.sort_machine       = '';
        $scope.new_popup.sort_popup         = '';
        $scope.new_popup.show_flag          = '';
        $scope.new_popup.ordering           = '';
        $scope.new_popup.link_target_code   = '';
        $scope.new_popup.link_address       = '';
        $scope.new_popup.site_id            = site.site_id;
        
        $('#tab_site_set').slideUp();
    }
    
    $scope.openNewPopup = function(site) {
        $scope.resetNewPopup(site);
        $('#tab_site_set').slideDown();
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
            xhr.open('POST', 'popup/api/upload-img');
            
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
                    $scope.new_popup.image  = json.filename;
                }
                
                success(json.location);
            };
            
            formData    = new FormData();
            formData.append('popup-file', blobInfo.blob());
            xhr.send(formData);
        }
    };
});