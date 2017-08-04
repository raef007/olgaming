angular.module("vavaGaming").controller('mngSiteCtrl', function($scope, $http) {
	
    $http.get("mng-sites/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.master	    = srv_resp.data;
            
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.new_site             = {};
    $scope.new_site.admin_id    = '';
    $scope.new_site.pwd         = '';
    $scope.new_site.nick_name   = '';
    $scope.new_site.use_flag    = '';
    $scope.new_site.name        = '';
    $scope.new_site.reg_sites   = [];
    
    $scope.addRemoveOption = function(site, idx) {
        if (1 == $scope.new_site.sel_sites[idx]) {
            $scope.new_site.reg_sites.push(site.site_id);
        }
        else {
            $scope.new_site.reg_sites.splice(idx, 1);
        }
    }
    
    $scope.saveNewSiteForm = function() {
		$http.post("mng-sites/api/post-save-site", $scope.new_site)
            .then(function success(srv_resp){
                $scope.master           = srv_resp.data;
                $scope.master.offset    = $scope.master.max_page;
                
                $scope.new_site             = {};
                $scope.new_site.admin_id    = '';
                $scope.new_site.pwd         = '';
                $scope.new_site.nick_name   = '';
                $scope.new_site.use_flag    = '';
                $scope.new_site.name        = '';
                $scope.new_site.reg_sites   = [];
                
                $('#adm-modal').modal('hide');
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.saveSitesForm = function() {
        $http.post("mng-sites/api/post-save-sites", $scope.master.sites)
            .then(function success(srv_resp){
                var cur_offset      = $scope.master.offset;
                $scope.master           = srv_resp.data;
                $scope.master.offset    = cur_offset;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteSitesForm = function() {
        $http.post("mng-sites/api/delete-sites", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;
                
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
        $scope.new_site.admin_id    = '';
        $scope.new_site.pwd         = '';
        $scope.new_site.nick_name   = '';
        $scope.new_site.use_flag    = '';
        $scope.new_site.name        = '';
        $scope.new_site.reg_sites   = [];
        $scope.new_site.reg_sites.push(site.site_id);
        
        console.log($scope.new_site);
    }
    
    $scope.allMngSiteTab = function() {
        $scope.form                 = {};
        $scope.form.site_id         = 0;
        
        $scope.new_site             = {};
        $scope.new_site.admin_id    = '';
        $scope.new_site.pwd         = '';
        $scope.new_site.nick_name   = '';
        $scope.new_site.use_flag    = '';
        $scope.new_site.name        = '';
        $scope.new_site.reg_sites   = [];
        console.log($scope.new_site);
    }
});