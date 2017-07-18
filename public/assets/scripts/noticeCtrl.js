angular.module("vavaGaming").controller('noticeCtrl', function($scope, $http) {
    $http.get("notices/api/get-all-notices")
            .then(function success(srv_resp){
                $scope.notices = srv_resp.data[0]; 
                $scope.sites = srv_resp.data[0];
                $scope.events = srv_resp.data[0]; 
                $scope.pag_inf          = srv_resp.data[1];

                $scope.new_notice          = {};
                $scope.new_notice.site_id  = $scope.sites[0].site_id;
                console.log('puke')
        }, function failed(srv_resp) {
            $scope.sites    = [{}];
        }
    );
    $scope.changeSiteId = function(site) {
        $scope.new_faq          = {};
        $scope.new_faq.site_id  = site.site_id; 
    }
    $scope.searchNotice = function() {
        $http.post("notices/api/search-notices", $scope.noticesearch)
            .then(function success(srv_resp){
                $scope.notices = srv_resp.data[0]; 
                $scope.sites = srv_resp.data[0];
                console.log('pepenmg basa');
                $scope.events = srv_resp.data[0]; 
                $scope.pag_inf= srv_resp.data[1];
                console.log('pepenmg basa');
            }, function failed(srv_resp) {
                $scope.notices  = [{}];
                console.log('failshit');
            }
        );
    }

    $scope.showGetEvent = function(){
        $http.get("events/api/get-all-events")
            .then(function success(srv_resp){
                $scope.events = srv_resp.data[1];   
                console.log('puke') 
            }, function failed(srv_resp) {
                $scope.events  = [{}];  
            }
        );
    }
    $scope.deleteNoticeForm = function() {
     $http.post("notices/api/post-delete-notice", $scope.subject)
             .then(function success(srv_resp){
                $scope.sites        = srv_resp.data[0];
                $scope.pag_inf      = srv_resp.data[1];
                
            }, function failed(srv_resp) {
                //$scope.sites  = [];
            }
        );
    }
    $scope.deleteEvent = function() {
         $http.post("notices/api/post-delete-notice", $scope.notice)
            .then(function success(srv_resp){
                $scope.notices        = srv_resp.data[0];
                $scope.pag_inf      = srv_resp.data[1];
                
            }, function failed(srv_resp) {
                //$scope.sites  = [];
            }
        );
    }
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    $scope.changeSiteId = function(site) {
        $scope.new_faq          = {};
        $scope.new_faq.site_id  = site.site_id;
    }
});