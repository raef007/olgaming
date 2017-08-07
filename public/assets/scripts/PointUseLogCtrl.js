angular.module("vavaGaming").controller('PointUseLogCtrl', function($scope, $http) {
   
    $scope.pul       = {};
    $scope.pul.from  = '20170101';
    $scope.pul.to    = '20171231';

    $http.get("pul/api/get-all-sites")
        .then(function success(srv_resp){
            $scope.master   = srv_resp.data;
        }, function failed(srv_resp){
            $scope.master    = [{}];
        }
    );
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    $scope.searchPoints = function() {
        $http.post("pul/api/search-pul", $scope.pul)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;
                
            }, function failed(srv_resp) {
                //$scope.sites  = [];
            }
        );
    }
    $scope.downloadExcelFile = function() {
        $http.post("pul/api/download-excel", $scope.master.sites)
            .then(function success(srv_resp){
                $("body").append("<iframe src='http://localhost/olgaming/public/pul/api/download-file/pul/" + srv_resp.data.filename +"' style='display: none;' ></iframe>");
            }, function failed(srv_resp) {
                //$scope.master = [{}];
            }
        );
    }
});