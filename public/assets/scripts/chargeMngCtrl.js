angular.module("vavaGaming").controller('chargeMngCtrl', function($scope, $http) {
	
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $scope.searchByQuery = function() {
        $http.post("charge-mng/api/search-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;
                
                $scope.wait_copy    = angular.copy($scope.master);
                $scope.done_copy    = angular.copy($scope.master);
                
            }, function failed(srv_resp) {
                $scope.master	= [{}];
            }
        );
    }
    
    $scope.searchByQuery();
    
    $scope.cancelDeposit = function(items, list) {
        $http.post("charge-mng/api/cancel/"+list, items)
            .then(function success(srv_resp){
                $scope.searchByQuery();
                
            }, function failed(srv_resp) {
                $scope.master	= [{}];
            }
        );
    }
    
    $scope.setChargeSts = function(items, list, sts) {
        $http.post("charge-mng/api/set-charge-sts/"+list+"/"+sts, items)
            .then(function success(srv_resp){
                $scope.searchByQuery();
                
            }, function failed(srv_resp) {
                $scope.master	= [{}];
            }
        );
    }
    
    $scope.setReqOffset = function(site, new_offset) {
        site.req_offset = new_offset;
    }
    
    $scope.setWaitOffset = function(site, new_offset) {
        site.wait_offset = new_offset;
    }
    
    $scope.setDoneOffset = function(site, new_offset) {
        site.done_offset = new_offset;
    }
    
});