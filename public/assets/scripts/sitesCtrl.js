angular.module("vavaGaming").controller('siteCtrl', function($scope, $http) {
	$http.get("api/get-all-sites")
		.then(function success(srv_resp){
			$scope.sites	= srv_resp.data;
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
	
	$scope.addSitesForm = function() {
		var sites = {};
		
		sites.site_id				= "0";
		sites.site_name 			= '';
		sites.reg_way				= "0";
		sites.site_urls             = [{}];
		sites.site_urls[0].site_url	= '';
		sites.site_urls[0].su_seq	= '0';
        
		$scope.sites.push(sites);
	}
    
    $scope.saveSitesForm = function() {
		$http.post("api/post-save-sites", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.changeActiveSite = function(site) {
        
    }
    
    $scope.deleteSitesForm = function() {
        $http.post("api/post-delete-urls", $scope.sites)
            .then(function success(srv_resp){
                console.log(srv_resp.data);
                $scope.sites	= srv_resp.data;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteUrlForm = function(url_idx) {
        console.log($scope.sel_site.site_urls[url_idx]);
        
        $http.get("api/delete-url/"+$scope.sel_site.site_urls[url_idx].su_seq)
            .then(function success(srv_resp) {
                $scope.sel_site.site_urls.splice(url_idx, 1);
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.new_url = {};
    
    $scope.saveUrlForm = function() {
        
        $scope.new_url.site_id  = $scope.sel_site.site_id;
        
        $http.post("api/post-save-urls", $scope.new_url)
            .then(function success(srv_resp){
                $scope.sel_site.site_urls.push(srv_resp.data);
                
                $scope.new_url.site_url         = '';
                $scope.new_url.page_of_manage   = '';
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.tab_url = {};
    
    $scope.saveUrlToSite = function(site_idx) {
        
        //$scope.tab_url[site_idx].site_id = $scope.sites[site_idx].site_id;
        $scope.tab_url[site_idx].site_id  = $scope.sites[site_idx].site_id;
        
        $http.post("api/post-save-urls", $scope.tab_url[site_idx])
            .then(function success(srv_resp){
                $scope.sites[site_idx].site_urls.push(srv_resp.data);
                
                $scope.tab_url[site_idx].site_url         = '';
                $scope.tab_url[site_idx].page_of_manage   = '';
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteUrlFromSite = function(parent_site, url_idx) {
        console.log($scope.sites[parent_site].site_urls[url_idx]);
        
        $http.get("api/delete-url/"+$scope.sites[parent_site].site_urls[url_idx].su_seq)
            .then(function success(srv_resp) {
                $scope.sites[parent_site].site_urls.splice(url_idx, 1);
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    
});