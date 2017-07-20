angular.module("vavaGaming").controller('faqCtrl', function($scope, $http) {
	
    $http.get("faq/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.sites	        = srv_resp.data[0];
			$scope.pag_inf	        = srv_resp.data[1];
            
            $scope.new_faq          = {};
            $scope.new_faq.site_id  = $scope.sites[0].site_id;
            
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
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }

    $scope.saveFaqForm = function() {
		$http.post("faq/api/post-save-faq", $scope.new_faq)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.changeSiteId = function(site) {
		$scope.new_faq          = {};
        $scope.new_faq.site_id  = site.site_id;
	}
    
    $scope.saveFaqsForm = function() {
        $http.post("faq/api/post-save-faqs", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	    = srv_resp.data[0];
                $scope.pag_inf	    = srv_resp.data[1];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteSitesForm = function() {
        $http.post("faq/api/post-delete-faqs", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	    = srv_resp.data[0];
                $scope.pag_inf	    = srv_resp.data[1];
                
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
    
});