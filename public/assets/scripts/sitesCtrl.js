angular.module("vavaGaming").controller('siteCtrl', function($scope, $http) {
	
    $scope.button           = {};
    $scope.button.savebtn   = false;
    $scope.button.delbtn    = false;
    
    $http.get("sites/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.master	= srv_resp.data;
            $scope.sel_site = $scope.master.sites[0];
            
		}, function failed(srv_resp) {
			$scope.master	= [{}];
		}
	);
	
    $scope.saveFaqForm = function() {
		$http.post("faq/api/post-save-faq", $scope.new_faq)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data;
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
        
		$scope.master.sites.push(sites);
        
        $scope.master.url_count    = $scope.master.url_count + 1;
        $scope.master.max_page     = Math.floor($scope.master.url_count / $scope.master.limit);
        
        if (0 == ($scope.master.url_count % $scope.master.limit)) {
            $scope.master.max_page    = $scope.master.max_page - 1;
        }
        
        for (count = 0; count <= $scope.master.max_page; count++) {
            $scope.master.pages[count]  = count;
        }
        
        $scope.setOffset($scope.master, $scope.master.max_page)
	}
    
    $scope.saveSitesForm = function() {
        
        $scope.button.savebtn = true;
        
		$http.post("sites/api/post-save-sites", $scope.master.sites)
            .then(function success(srv_resp){
                var cur_offset      = $scope.master.offset;

                $scope.master	= srv_resp.data;
                $scope.sel_site = $scope.master.sites[0];
                
                $scope.master.offset   = cur_offset;
                
                $scope.button.savebtn = false;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
                $scope.button.savebtn = false;
            }
        );
	}
    
    $scope.deleteSitesForm = function() {
        
        $scope.button.delbtn    = true;
        
        $http.post("sites/api/post-delete-urls", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;
                $scope.sel_site = $scope.master.sites[0];
                
                $scope.button.delbtn    = false;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
                $scope.button.delbtn    = false;
            }
        );
    }
    
    $scope.deleteUrlForm = function(url) {
        
        $http.get("sites/api/delete-url/"+url.su_seq)
            .then(function success(srv_resp) {
                $scope.master	= srv_resp.data;
                $scope.sel_site = $scope.master.sites[0];
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.new_url = {};
    
    $scope.saveUrlForm = function() {
        
        $scope.new_url.site_id  = $scope.sel_site.site_id;
        
        if (typeof $scope.new_url.page_of_manage === 'undefined') {
            $scope.new_url.page_of_manage = '';
        }
        
        if (typeof $scope.new_url.site_url === 'undefined') {
            $scope.new_url.site_url = '';
        }
        
        $http.post("sites/api/post-save-urls", $scope.new_url)
            .then(function success(srv_resp){
                
                $scope.master	= srv_resp.data;
                $scope.sel_site = $scope.master.sites[0];
                
                $scope.new_url          = {};
                $scope.new_url.site_id  = $scope.sel_site.site_id;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.tab_url = {};
    
    $scope.saveUrlToSite = function(site_idx) {
        
        $scope.tab_url[site_idx].site_id  = $scope.master.sites[site_idx].site_id;
        
        if (typeof $scope.tab_url[site_idx].page_of_manage === 'undefined') {
            $scope.tab_url[site_idx].page_of_manage = '';
        }
        
        if (typeof $scope.tab_url[site_idx].site_url === 'undefined') {
            $scope.tab_url[site_idx].site_url = '';
        }
        
        $http.post("sites/api/post-save-urls", $scope.tab_url[site_idx])
            .then(function success(srv_resp){
                
                $scope.master	= srv_resp.data;
                $scope.sel_site = $scope.master.sites[0];
                
                $scope.tab_url[site_idx]            = {};
                $scope.tab_url[site_idx].site_id    = $scope.master.sites[site_idx].site_id;
                
                $scope.master.sites[site_idx].offset  = $scope.master.sites[site_idx].max_page;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.deleteUrlFromSite = function(site_url) {
        
        $http.get("sites/api/delete-url/"+site_url.su_seq)
            .then(function success(srv_resp) {
                $scope.master	= srv_resp.data;
                $scope.sel_site = $scope.master.sites[0];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
});