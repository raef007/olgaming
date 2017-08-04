angular.module("vavaGaming").controller('noticeCtrl', function($scope, $http) {
    
    var errors          = [];
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $scope.new_event                = {};
    $scope.new_notice               = {};
    $scope.new_event.site_id        = 0;
    $scope.new_notice.site_id       = 0;

    $scope.searchNotice = function() {
        $http.post("notice/api/search-notice", $scope.search)
            .then(function success(srv_resp){
                $scope.master           = srv_resp.data;
                $scope.master.errors    = errors;
                $scope.events           = angular.copy($scope.master.sites);

                $scope.resetNewNotice();
                $scope.resetNewEvent();
            }, function failed(srv_resp) {
                $scope.master    = [{}];
            }
        );
    }

    $scope.deleteNotice =function(){
        
        $http.post("notice/api/delete-notices", $scope.master)
            .then(function success(srv_resp){
                $scope.searchNotice();
                
            }, function failed(srv_resp) {
                $scope.master    = [{}];
            }
        );
    }
    
    $scope.deleteEvent =function(){
        
        $http.post("notice/api/delete-events", $scope.events)
            .then(function success(srv_resp){
                $scope.searchNotice();
            }, function failed(srv_resp) {
                $scope.master    = [{}];
            }
        );
    }
    
    $scope.event_files = [];
    
    $scope.$on("eventFileSelected", function (event, args) {
        $scope.$apply(function () {            
            $scope.event_files.push(args.file);
        });
    });
    
    $scope.$on("noticeFileSelected", function (event, args) {
        $scope.$apply(function () {            
            $scope.notice_files.push(args.file);
        });
    });
    
    $scope.saveNotice = function() {
        $http({
            method: 'POST',
            url: "notice/api/add-notice",
            headers: { 'Content-Type': undefined },
            transformRequest: function (data) {
                var formData = new FormData();
                formData.append("new_notice", angular.toJson(data.new_notice));
                for (var i = 0; i < data.notice_files.length; i++) {
                    formData.append("notice_files"+i, data.notice_files[i]);
                }
                return formData;
            },
            data: { new_notice: $scope.new_notice, notice_files: $scope.notice_files }
        })
        .then(function success(srv_resp){
            errors  = srv_resp.data;
            $scope.searchNotice();
        }, function failed(srv_resp) {
            $scope.master    = [{}];
        });
    };
    
    $scope.loadNoticeInf = function(notice) {
        $scope.notice_files         = [];
        $scope.new_notice           = {};
        
        $scope.new_notice.n_seq     = notice.n_seq;
        $scope.new_notice.site_id   = notice.site_id;
        $scope.new_notice.admin_id  = notice.admin_id;
        $scope.new_notice.subject   = notice.subject;
        $scope.new_notice.name      = notice.name;
        $scope.new_notice.text      = notice.text;
        $scope.new_notice.order     = notice.order;
        $scope.new_notice.show_flag = notice.show_flag;
        
        $('#tab_notice_set').slideDown();
    }
    
    $scope.resetNewNotice = function() {
        var cur_site_id                 = $scope.new_notice.site_id;
        $scope.notice_files         = [];
        $scope.new_notice           = {};
        
        $scope.new_notice.n_seq     = 0;
        $scope.new_notice.site_id   = cur_site_id;
        $scope.new_notice.subject   = '';
        $scope.new_notice.name      = '';
        $scope.new_notice.text      = '';
        $scope.new_notice.order     = '';
        $scope.new_notice.show_flag = '';

        $('#tab_notice_set').slideUp();
    }
    
    $scope.openNewNotice = function() {
        $scope.resetNewNotice();
        $('#tab_notice_set').slideDown();
    }
    
    $scope.saveEvent = function() {
        $http({
            method: 'POST',
            url: "notice/api/add-event",
            headers: { 'Content-Type': undefined },
            transformRequest: function (data) {
                var formData = new FormData();
                formData.append("new_event", angular.toJson(data.new_event));
                for (var i = 0; i < data.event_files.length; i++) {
                    formData.append("event_files"+i, data.event_files[i]);
                }
                return formData;
            },
            data: { new_event: $scope.new_event, event_files: $scope.event_files }
        })
        .then(function success(srv_resp){
            errors  = srv_resp.data;
            $scope.searchNotice();
        }, function failed(srv_resp) {
            $scope.master    = [{}];
        });
    };
    
    $scope.loadEventInf = function(event) {
        $scope.event_files              = [];
        $scope.new_event                = {};
        
        $scope.new_event.e_seq          = event.e_seq;
        $scope.new_event.site_id        = event.site_id;
        $scope.new_event.admin_id       = event.admin_id;
        $scope.new_event.start_date     = event.start_date;
        $scope.new_event.start_datetime = event.start_datetime;
        $scope.new_event.end_date       = event.end_date;
        $scope.new_event.end_datetime   = event.end_datetime;
        $scope.new_event.subject        = event.subject;
        $scope.new_event.text           = event.text;
        $scope.new_event.order          = event.order;
        $scope.new_event.show_flag      = event.show_flag;
        
        $('#tab_event_set').slideDown();
    }
    
    $scope.resetNewEvent = function() {
        var cur_site_id                 = $scope.new_event.site_id;
        $scope.event_files              = [];
        $scope.new_event                = {};
        
        $scope.new_event.e_seq          = 0;
        $scope.new_event.subject        = '';
        $scope.new_event.site_id        = cur_site_id;
        $scope.new_event.admin_id       = '';
        $scope.new_event.start_date     = '';
        $scope.new_event.start_datetime = '';
        $scope.new_event.end_date       = '';
        $scope.new_event.end_datetime   = '';
        $scope.new_event.text           = '';
        $scope.new_event.order          = '';
        $scope.new_event.show_flag      = '';

        $('#tab_event_set').slideUp();
    }
    
    $scope.openNewEvent = function() {
        $scope.resetNewEvent();
        $('#tab_event_set').slideDown();
    }
    
    $scope.setNoticeOffset = function(site, new_offset) {
        site.notice_offset = new_offset;
    }
    
    $scope.setEventOffset = function(site, new_offset) {
        site.event_offset = new_offset;
    }
    
    $scope.gb_var           = {}
    $scope.gb_var.site_id   = 0;
    
    $scope.changeSiteId = function(site_id) {
        
        $scope.resetNewNotice();
        $scope.resetNewEvent();
        $scope.gb_var.site_id = site_id;
        
        if (0 <= site_id) {
            $scope.new_notice.site_id   = site_id;
            $scope.new_event.site_id    = site_id;
        }
    }
    
    $scope.tinymceOptions = {
        height: 255,
        menubar: false,
        plugins: 'image code',
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    };
    
    $scope.searchNotice();
    
});

angular.module("vavaGaming").directive('fileUpload', function() {
    return {
        scope: true,        //create a new scope
        link: function (scope, el, attrs) {
            el.bind('change', function (event) {
                var files = event.target.files;
                //iterate files since 'multiple' may be specified on the element
                
                for (var i = 0;i<files.length;i++) {
                    //emit event upward
                    scope.$emit(el.data('target-scope'), { file: files[i] });
                }                                       
            });
        }
    };
});