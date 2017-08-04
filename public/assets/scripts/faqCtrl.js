angular.module("vavaGaming").controller('faqCtrl', function($scope, $http) {
	
    $http.get("faq/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.master	        = srv_resp.data;            
            $scope.resetNewFaq($scope.master.sites[0]);
            
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.search   = {};
    $scope.search.filter_by = 'text';
    $scope.search.val       = '';
    
    $scope.searchByQuery = function() {
        $http.post("faq/api/search-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;
                
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }

    $scope.saveFaqForm = function() {
		$http.post("faq/api/post-save-faq", $scope.new_faq)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.changeSiteId = function(site) {
        $scope.resetNewFaq(site);
	}
    
    $scope.saveFaqsForm = function() {
        $http.post("faq/api/post-save-faqs", $scope.master.sites)
            .then(function success(srv_resp){
                var cur_site_id             = $scope.new_faq.site_id;
                
                $scope.master	    = srv_resp.data;
                
                $scope.resetNewFaq($scope.master.sites[0]);
                $scope.new_faq.site_id      = cur_site_id;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteSitesForm = function() {
        $http.post("faq/api/post-delete-faqs", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master	    = srv_resp.data;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.tinymceOptions = {
        height: 255,
        menubar: false,
        plugins: 'image code',
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    };
    
    $scope.loadFaqInf = function(faq) {
        var cur_site_id             = $scope.new_faq.site_id;
        
        $scope.new_faq              = {};
        $scope.new_faq.f_seq        = faq.f_seq;
        $scope.new_faq.title        = faq.title;
        $scope.new_faq.text         = faq.text;
        $scope.new_faq.sort         = faq.sort;
        $scope.new_faq.show_flag    = faq.show_flag;
        $scope.new_faq.site_id      = cur_site_id;
        
        $('#wys-editor').slideDown();
    }
    
    $scope.resetNewFaq = function(site) {
        $scope.new_faq              = {};
        $scope.new_faq.f_seq        = 0;
        $scope.new_faq.title        = '';
        $scope.new_faq.text         = '';
        $scope.new_faq.sort         = '';
        $scope.new_faq.show_flag    = '';
        $scope.new_faq.site_id      = site.site_id;
        
        $('#wys-editor').slideUp();
    }
    
    $scope.openNewFaq = function(site) {
        $scope.resetNewFaq(site);
        
        $('#wys-editor').slideDown();
    }
});