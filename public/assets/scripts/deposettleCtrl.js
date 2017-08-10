angular.module("vavaGaming").controller('deposettleCtrl', function($scope, $http) {
	$scope.sd       = {};
    $scope.sd.from  = '';
    $scope.sd.to    = ''; 
    
	$http.get("depo-settle/api/get-all-sites", $scope.master)
		.then(function success(srv_resp){
			$scope.master	= srv_resp.data;
		}, function failed(srv_resp) {
			$scope.master	= [{}];
		}
	);
	$scope.setDepositOffset = function(site, new_offset) {
    site.deposit_offset = new_offset;
	}
	$scope.searchDeposit = function(){
	$http.post("pay-settle/api/search-deposit", $scope.sd)
		.then(function success(srv_resp){
			$scope.master	= srv_resp.data;
			$scope.withdraws = angular.copy($scope.master.sites);
		}, function failed(srv_resp) {
			$scope.master	= [{}];
		}
	);
}
})
.filter('sumByColumn', function () {
      return function (collection, column) {
        var total = 0;
        collection.forEach(function (item) {
          total += parseInt(item[column]);
        });
        return total;
      };
    });
