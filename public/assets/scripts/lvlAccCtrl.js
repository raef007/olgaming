angular.module("vavaGaming").controller('lvlAccCtrl', function($scope, $http) {
	
    $http.get("lvl-acc/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.sites	    = srv_resp.data[0];
			//$scope.pag_inf	    = srv_resp.data[1];
            
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.addAccountRow = function(idx, site) {
        var new_acc = {};
        
        new_acc.level           = '0';
        new_acc.bank_account    = '';
        new_acc.bank_name       = '';
        new_acc.bank_owner      = '';
        new_acc.reg_date        = '';
        new_acc.reg_datetime    = '';
        new_acc.site_id         = site.site_id;
        
        if (4 > site.level_accounts.length) {
            $scope.sites[idx].level_accounts.push(new_acc);
        }
    };
    
    $scope.saveAccountForm = function() {
        
		$http.post("lvl-acc/api/post-save-accounts", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                //$scope.pag_inf	= srv_resp.data[1];
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
});