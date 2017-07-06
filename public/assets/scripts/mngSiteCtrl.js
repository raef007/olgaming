angular.module("vavaGaming").controller('mngSiteCtrl', function($scope, $http) {
	
    $http.get("mng-sites/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.sites	    = srv_resp.data[0];
			$scope.pag_inf	    = srv_resp.data[1];
			$scope.site_list    = srv_resp.data[2];
            
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.new_site             = {};
    $scope.new_site.reg_sites   = [];
    
    $scope.addRemoveOption = function(site, idx) {
        if (true == $scope.new_site.sel_sites[idx]) {
            $scope.new_site.reg_sites.push(site[idx].site_id);
        }
        else {
            $scope.new_site.reg_sites.splice(idx, 1);
        }
    }
    
    $scope.saveNewSiteForm = function() {
		$http.post("mng-sites/api/post-save-site", $scope.new_site)
            .then(function success(srv_resp){
                $scope.sites	    = srv_resp.data[0];
                $scope.pag_inf	    = srv_resp.data[1];
                
                $scope.new_site     = {};
                $scope.new_site.reg_sites   = [];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.saveSitesForm = function() {
        $http.post("mng-sites/api/post-save-sites", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	    = srv_resp.data[0];
                $scope.pag_inf	    = srv_resp.data[1];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteSitesForm = function() {
        $http.post("mng-sites/api/delete-sites", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	    = srv_resp.data[0];
                $scope.pag_inf	    = srv_resp.data[1];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
    $scope.form         = {};
    $scope.form.site_id = 0;
    
    $scope.initTabData = function(site) {        
        $scope.form   = site;
        
        $scope.new_site             = {};
        $scope.new_site.reg_sites   = [];
        $scope.new_site.reg_sites.push(site.site_id);
    }
    
    $scope.allMngSiteTab = function() {
        $scope.form         = {};
        $scope.form.site_id = 0;
        
        $scope.new_site             = {};
        $scope.new_site.reg_sites   = [];
    }
});