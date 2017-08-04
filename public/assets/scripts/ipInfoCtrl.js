angular.module("vavaGaming").controller('ipInfoCtrl', function($scope, $http) {
	var errors          = [];
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $scope.searchByQuery = function() {
            $http.post("ipinfo/api/search-all-sites", $scope.search)
                .then(function success(srv_resp){
                $scope.master           = srv_resp.data;
                $scope.master.errors    = errors;
                
            }, function failed(srv_resp) {
                $scope.master    = [{}];
            }
        );
    }
    
    $scope.addSaveIp = function() {
		$http.post("ipinfo/api/post-save-ipinfo", $scope.new_ipblock)
            .then(function success(srv_resp){
                errors  = srv_resp.data;
                $scope.searchByQuery();

                $scope.new_ipblock         = {};
                $scope.new_ipblock.site_id = $scope.master.sites[0].site_id;
                $scope.new_ipblock.cct_seq = 0;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.changeSiteId = function(site) {
		$scope.new_ipblock          = {};
        $scope.new_ipblock.site_id  = site.site_id;
        $errors = [];
        $scope.searchByQuery();
	}
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
    $scope.searchByQuery();
});