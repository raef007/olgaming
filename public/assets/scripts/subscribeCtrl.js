angular.module("vavaGaming").controller('subscribeCtrl', function($scope, $http) {

   $http.get("subscribe/api/get-all-sites")
        .then(function success(srv_resp){
            $scope.master   = srv_resp.data;
        }, function failed(srv_resp){
            $scope.master    = [{}];
        }
    );
    $scope.saveSubscribeForm = function (memo) {
        $http.post("subscribe/api/post-save-subscribe", memo)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data
            }, function failed(srv_resp) {
                //$scope.sites  = [];
            }
        );
    }}); 