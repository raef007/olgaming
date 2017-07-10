angular.module("vavaGaming").controller('siteCtrl', function($scope, $http) {
	
    $http.get("sites/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.sites	= srv_resp.data[0];
			$scope.pag_inf	= srv_resp.data[1];
            $scope.sel_site = $scope.sites[0];
            
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
	
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
    
	$scope.addSitesForm = function() {
		var sites = {};
		
		sites.site_id				= "0";
		sites.site_name 			= '';
		sites.reg_way				= "0";
		sites.site_urls             = [{}];
		sites.site_urls[0].site_url	= '';
		sites.site_urls[0].su_seq	= '0';
        
		$scope.sites.push(sites);
        
        $scope.pag_inf.url_count    = $scope.pag_inf.url_count + 1;
        $scope.pag_inf.max_page     = Math.floor($scope.pag_inf.url_count / $scope.pag_inf.limit);
        
        if (0 == ($scope.pag_inf.url_count % $scope.pag_inf.limit)) {
            $scope.pag_inf.max_page    = $scope.pag_inf.max_page - 1;
        }
        
        for (count = 0; count <= $scope.pag_inf.max_page; count++) {
            $scope.pag_inf.pages[count]  = count;
        }
        
        $scope.setOffset($scope.pag_inf, $scope.pag_inf.max_page)
	}
    
    $scope.saveSitesForm = function() {
		$http.post("sites/api/post-save-sites", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                $scope.sel_site = $scope.sites[0];
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.deleteSitesForm = function() {
        $http.post("sites/api/post-delete-urls", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                $scope.sel_site = $scope.sites[0];
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteUrlForm = function(url) {
        
        $http.get("sites/api/delete-url/"+url.su_seq)
            .then(function success(srv_resp) {
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                $scope.sel_site = $scope.sites[0];
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.new_url = {};
    
    $scope.saveUrlForm = function() {
        
        $scope.new_url.site_id  = $scope.sel_site.site_id;
        
        $http.post("sites/api/post-save-urls", $scope.new_url)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                $scope.sel_site = $scope.sites[0];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.tab_url = {};
    
    $scope.saveUrlToSite = function(site_idx) {
        
        $scope.tab_url[site_idx].site_id  = $scope.sites[site_idx].site_id;
        
        $http.post("sites/api/post-save-urls", $scope.tab_url[site_idx])
            .then(function success(srv_resp){

                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                $scope.sel_site = $scope.sites[0];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteUrlFromSite = function(site_url) {
        
        $http.get("sites/api/delete-url/"+site_url.su_seq)
            .then(function success(srv_resp) {
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                $scope.sel_site = $scope.sites[0];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
});