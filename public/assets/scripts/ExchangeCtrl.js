angular.module("vavaGaming").controller('ExchangeCtrl', function($scope, $http, $window) {

	$http.get("exchange/api/get-all-sites")
        .then(function success(srv_resp){
            $scope.master	= srv_resp.data;                
            $scope.wait_copy    = angular.copy($scope.master);
            $scope.done_copy    = angular.copy($scope.master);
        }, function failed(srv_resp){
            $scope.master    = [{}];
        }
    );

    $scope.setReqOffset = function(site, new_offset) {
        site.req_offset = new_offset;
    }
    
    $scope.setWaitOffset = function(site, new_offset) {
        site.wait_offset = new_offset;
    }
    
    $scope.setDoneOffset = function(site, new_offset) {
        site.done_offset = new_offset;
    }

    $scope.changeSiteId = function(site) {
        $scope.new_faq          = {};
        $scope.new_faq.site_id  = site.site_id;
    }
    
    $scope.cancelWithdraw = function(items, list) {
        $http.post("exchange/api/cancel-exchange", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;                
                $scope.wait_copy    = angular.copy($scope.master);
                $scope.done_copy    = angular.copy($scope.master);                
            }, function failed(srv_resp) {
                $scope.master   = [{}];
            }
        );
    }
    $scope.downloadExcelFile = function() {
        $http.post("exchange-mng/api/download-excel", $scope.master.sites)
            .then(function success(srv_resp){
                $("body").append("<iframe src='http://localhost/olgaming/public/charge-mng/api/download-file/charge-mng/" + srv_resp.data.filename +"' style='display: none;' ></iframe>");
                
            }, function failed(srv_resp) {
                //$scope.master = [{}];
            }
        );
    }
});
