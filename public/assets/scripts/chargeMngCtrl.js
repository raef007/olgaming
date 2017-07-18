angular.module("vavaGaming").controller('chargeMngCtrl', function($scope, $http) {
	
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $scope.searchByQuery = function() {
        $http.post("charge-mng/api/search-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }
    
    $scope.searchByQuery();
    
});