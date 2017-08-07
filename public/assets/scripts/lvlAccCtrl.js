angular.module("vavaGaming").controller('lvlAccCtrl', function($scope, $http, error) {
	
    $http.get("lvl-acc/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.master   = srv_resp.data;
			//$scope.pag_inf	    = srv_resp.data[1];
            
		}, function failed(srv_resp) {
			$scope.master	= [{}];
		}
	);
    
    $scope.addAccountRow = function(idx, site) {
        var new_acc = {};
        
        new_acc.la_seq          = '0';
        new_acc.level           = '0';
        new_acc.bank_account    = '';
        new_acc.bank_name       = '';
        new_acc.bank_owner      = '';
        new_acc.reg_date        = '';
        new_acc.reg_datetime    = '';
        new_acc.site_id         = site.site_id;
        
        $scope.master.sites[idx].level_accounts.push(new_acc);
    };
    
    $scope.saveAccountForm = function() {
        
		$http.post("lvl-acc/api/post-save-accounts", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;
                error.launchModal();
            }, function failed(srv_resp) {
                $scope.master	= [{}];
            }
        );
	}
});
