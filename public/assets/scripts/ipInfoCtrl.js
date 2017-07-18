angular.module("vavaGaming").controller('ipInfoCtrl', function($scope, $http) {
	
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $http.post("ipinfo/api/search-all-sites", $scope.search)
		.then(function success(srv_resp){
			$scope.sites	= srv_resp.data[0];
			$scope.pag_inf	= srv_resp.data[1];
            
            $scope.new_ipblock         = {};
            $scope.new_ipblock.site_id = $scope.sites[0].site_id;
            $scope.new_ipblock.cct_seq = 0;
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.searchByQuery = function() {
        $http.post("ipinfo/api/search-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }
    
    $scope.addSaveIp = function() {
		$http.post("ipinfo/api/post-save-ipinfo", $scope.new_ipblock)
            .then(function success(srv_resp){
                $scope.searchByQuery();
                
                $scope.new_ipblock         = {};
                $scope.new_ipblock.site_id = $scope.sites[0].site_id;
                $scope.new_ipblock.cct_seq = 0;
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.changeSiteId = function(site) {
		$scope.new_ipblock          = {};
        $scope.new_ipblock.site_id  = site.site_id;
        
        $scope.searchByQuery();
	}
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
});