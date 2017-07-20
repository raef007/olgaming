angular.module("vavaGaming").controller('noticeCtrl', function($scope, $http) {
    
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $http.post("notice/api/get-all-sites", $scope.search)
        .then(function success(srv_resp){
            console.log('pukeeeee!');
            $scope.sites    = srv_resp.data[0];
            $scope.pag_inf  = srv_resp.data[1];
        }, function failed(srv_resp) {
            $scope.sites    = [{}];
        }
    );
    
    $scope.searchByQuery = function() {
        $http.post("notice/api/get-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.sites    = srv_resp.data[0];
                $scope.pag_inf  = srv_resp.data[1];
                
            }, function failed(srv_resp) {
                $scope.sites    = [{}];
            }
        );
    }
    
    $scope.setOkOffset = function(site, new_offset) {
        site.ok_offset = new_offset;
    }
    
    $scope.setNgOffset = function(site, new_offset) {
        site.ok_ng_offset = new_offset;
    }
    $scope.changeSiteId = function(site) {
        $scope.new_faq          = {};
        $scope.new_faq.site_id  = site.site_id;
    }
});