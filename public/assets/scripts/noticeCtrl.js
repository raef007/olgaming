angular.module("vavaGaming").controller('noticeCtrl', function($scope, $http) {
    
    $http.get("notice/api/get-all-sites")
        .then(function success(srv_resp){
            $scope.sites    = srv_resp.data[0];
            $scope.events   = angular.copy($scope.sites);
            $scope.pag_inf  = srv_resp.data[1];
        }, function failed(srv_resp) {
            $scope.sites    = [{}];
        }
    );
    
    $scope.searchNotice = function() {
        $http.post("notice/api/search-notice", $scope.noticesearch)
            .then(function success(srv_resp){
                $scope.sites    = srv_resp.data[0];
                $scope.events   = angular.copy($scope.sites);
                $scope.pag_inf  = srv_resp.data[1];
            }, function failed(srv_resp) {
                $scope.sites    = [{}];
            }
        );
    }
    $scope.searchEvent = function() {
        $http.post("notice/api/search-event", $scope.eventsearch)
            .then(function success(srv_resp){
                $scope.sites    = srv_resp.data[0];
                $scope.events   = angular.copy($scope.sites);
                $scope.pag_inf  = srv_resp.data[1];
            }, function failed(srv_resp) {
                $scope.sites    = [{}];
            }
        );
    }

    $scope.deleteNotice =function(){
        
        $http.post("notice/api/delete-notices", $scope.sites)
            .then(function success(srv_resp){
                $scope.sites    = srv_resp.data[0];
                $scope.events   = angular.copy($scope.sites);
                $scope.pag_inf  = srv_resp.data[1];
            }, function failed(srv_resp) {
                $scope.sites    = [{}];
            }
        );
    }
    
    $scope.deleteEvent =function(){
        
        $http.post("notice/api/delete-events", $scope.events)
            .then(function success(srv_resp){
                $scope.sites    = srv_resp.data[0];
                $scope.events   = angular.copy($scope.sites);
                $scope.pag_inf  = srv_resp.data[1];
            }, function failed(srv_resp) {
                $scope.sites    = [{}];
            }
        );
    }
    
    $scope.setNoticeOffset = function(site, new_offset) {
        site.notice_offset = new_offset;
    }
    
    $scope.setEventOffset = function(site, new_offset) {
        site.event_offset = new_offset;
    }
    
    $scope.changeSiteId = function(site) {
        $scope.new_faq          = {};
        $scope.new_faq.site_id  = site.site_id;
    }
});