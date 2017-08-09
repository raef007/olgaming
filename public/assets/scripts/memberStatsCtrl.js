angular.module("vavaGaming").controller('memberStatsCtrl', function($scope, $http) {
	
    $scope.search       = {};
    $scope.search.from  = '20110101';
    $scope.search.to    = '20171231';
    
    $scope.searchByQuery = function() {
        $http.post("member-stats/api/get-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;

            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }
    
    $scope.setSearchDate = function(setting) {
        
        switch (setting) {
            case 1:
                $scope.search.from  = '20170101';
                $scope.search.to    = '20171231';
                break;
            
            case 0:
            default:
                $scope.search.from  = '20170801';
                $scope.search.to    = '20170831';
                break;
        }
        
        $scope.searchByQuery();
    }
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
    $scope.setDepositOffset = function(site, new_offset) {
        site.deposit_offset = new_offset;
    }
    
    $scope.setWithdrawOffset = function(site, new_offset) {
        site.withdraw_offset = new_offset;
    }
    
    $scope.searchByQuery();
    
});