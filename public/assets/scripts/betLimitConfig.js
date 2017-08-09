angular.module("vavaGaming").controller('betLimitConfig', function($scope, $http, error) {
    
    $http.get("bet-limit/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.master = srv_resp.data;
		}, function failed(srv_resp) {
			//$scope.sites	= [{}];
		}
	);
    
    $scope.addConfigRow = function(site, sort) {
        var new_cnfg            = {};
        
        new_cnfg.config_check                   = '1';
        new_cnfg.lvm_seq                        = '0';
        new_cnfg.site_id                        = site.site_id;
        new_cnfg.level                          = '0';
        new_cnfg.sort                           = sort;
        new_cnfg.realtime_min_bet_money         = '';
        new_cnfg.realtime_max_bet_money         = '';
        new_cnfg.sport_min_bet_money            = '';
        new_cnfg.sport_max_bet_money            = '';
        new_cnfg.member_ppochi_percent          = '';
        new_cnfg.recommand_mem_ppochi_percent   = '';
        new_cnfg.daily_first_deposit_percent    = '';
        new_cnfg.reg_date                       = '';
        
        
        switch (sort) {
            case 0:
                site.sportsbook.push(new_cnfg);
                break;
            
            case 1:
                site.live_casino.push(new_cnfg);
                break;
            
            case 2:
                site.virtua_sports.push(new_cnfg);
                break;
                
            case 3:
                site.racing.push(new_cnfg);
                break;
        }
    };
    
    $scope.saveBetConfig = function() {
        
		$http.post("bet-limit/api/post-save-configs", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master	= srv_resp.data;
                error.launchModal();
            }, function failed(srv_resp) {
                $scope.master	= [{}];
            }
        );
	}
    
    $scope.deleteBetConfig = function() {
        $http.post("bet-limit/api/post-delete-configs", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
});