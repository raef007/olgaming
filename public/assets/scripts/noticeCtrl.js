angular.module("vavaGaming").controller('noticeCtrl', function($scope, $http) {
    
    $http.get("notice/api/get-all-sites")
        .then(function success(srv_resp){
            $scope.master   = srv_resp.data;
            $scope.events   = angular.copy($scope.master.sites);
        }, function failed(srv_resp) {
            $scope.master    = [{}];
        }
    );
    
    $scope.searchNotice = function() {
        $http.post("notice/api/search-notice", $scope.noticesearch)
            .then(function success(srv_resp){
            $scope.master   = srv_resp.data;
        }, function failed(srv_resp) {
            $scope.master    = [{}];
        }
        );
    }
    $scope.searchEvent = function() {
        $http.post("notice/api/search-event", $scope.eventsearch)
            .then(function success(srv_resp){
            $scope.master   = srv_resp.data;
        }, function failed(srv_resp) {
            $scope.master    = [{}];
        }
        );
    }

    $scope.deleteNotice =function(){
        
        $http.post("notice/api/delete-notices", $scope.master.sites)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;
                $scope.events   = angular.copy($scope.master);
            }, function failed(srv_resp) {
                $scope.master    = [{}];
            }
        );
    }
    
    $scope.deleteEvent =function(){
        
        $http.post("notice/api/delete-events", $scope.events)
            .then(function success(srv_resp){
                $scope.master   = srv_resp.data;
                $scope.events   = angular.copy($scope.master.sites);
            }, function failed(srv_resp) {
                $scope.master    = [{}];
            }
        );
    }
    $scope.saveNotice =function(){
    $http.post("notice/api/add-notice", $scope.new_notice)
    .then(function success(srv_resp){
            $scope.master    = srv_resp.data;
            console.log($scope.master);
            $scope.events   = angular.copy($scope.master);
        }, function failed(srv_resp) {
            $scope.master    = [{}];
        }
        );
    }
    $scope.saveEvent =function(){
    $http.post("notice/api/add-event", $scope.new_event)
    .then(function success(srv_resp){
            $scope.master    = srv_resp.data;
            $scope.events   = angular.copy($scope.master.sites);
        }, function failed(srv_resp) {
            $scope.master    = [{}];
            
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