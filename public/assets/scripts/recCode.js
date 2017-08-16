angular.module("vavaGaming").controller('recCode', function($scope, $http, error) {
	var errors          = [];
    $scope.search       = {};
    $scope.search.from  = '20110101';
    $scope.search.to    = '20171231';
    
    $scope.searchByQuery = function() {
        $http.post("recommend/api/get-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.master	        = srv_resp.data;
                $scope.master.errors    = errors;
                
                $scope.resetCodeForm();
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }
    
    $scope.setSearchDate = function(setting) {
        
        switch (setting) {
            case 1:
                $scope.search.from  = '20170814';
                $scope.search.to    = '20170821';
                break;
                
            case 2:
                $scope.search.from  = '20170807';
                $scope.search.to    = '20170814';
                break;
                
            case 2:
                $scope.search.from  = '20170701';
                $scope.search.to    = '20170731';
                break;
            
            case 0:
            default:
                $scope.search.from  = '20170801';
                $scope.search.to    = '20170801';
                break;
        }
        
        $scope.searchByQuery();
    }
    
    $scope.saveCodeForm = function() {
		$http.post("recommend/api/post-save-code", $scope.new_rec)
            .then(function success(srv_resp){
                errors = srv_resp.data
                $scope.searchByQuery();
                
                error.launchModal();
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
    $scope.changeSiteId = function(site) {
		$scope.resetCodeForm();
        $scope.new_rec.site_id          = site.site_id;
	}
    
    $scope.resetCodeForm = function() {
        $scope.new_rec                  = {};
        $scope.new_rec.r_seq            = 0;
        $scope.new_rec.code_type        = '0';
        $scope.new_rec.site_id          = '';
        $scope.new_rec.user_id          = '';
        $scope.new_rec.sub_code_user    = '';
        $scope.new_rec.sub_code_all     = '';
    }
    
    $scope.deleteCode = function(code) {
        $http.post("recommend/api/post-delete-code", code)
            .then(function success(srv_resp){
                $scope.searchByQuery();
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.searchByQuery();
});