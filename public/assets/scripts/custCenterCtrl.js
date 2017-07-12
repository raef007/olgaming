angular.module("vavaGaming").controller('custCenterCtrl', function($scope, $http) {
	
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $http.get("cust-center/api/get-all-sites")
		.then(function success(srv_resp){
			$scope.sites	= srv_resp.data[0];
			$scope.pag_inf	= srv_resp.data[1];
            
            $scope.new_template         = {};
            $scope.new_template.site_id = $scope.sites[0].site_id;
            $scope.new_template.cct_seq = 0;
		}, function failed(srv_resp) {
			$scope.sites	= [{}];
		}
	);
    
    $scope.changeSiteId = function(site) {
		$scope.search       = {};
        $scope.search.from  = '20170101';
        $scope.search.to    = '20171231';
        
        $scope.new_template         = {};
        $scope.new_template.site_id = site.site_id;
        $scope.new_template.cct_seq = 0;
        
        $http.get("cust-center/api/get-all-sites")
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
	}
    
    $scope.addSaveTemplate = function() {
		$http.post("cust-center/api/post-save-template", $scope.new_template)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                
                $scope.new_template.cct_seq = 0;
                $scope.new_template.subject = '';
                $scope.new_template.text    = '';
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
	}
    
    $scope.deleteTemplate = function(template) {
        $http.post("cust-center/api/post-delete-template", template)
            .then(function success(srv_resp){
                $scope.sites	    = srv_resp.data[0];
                $scope.pag_inf	    = srv_resp.data[1];
                
            }, function failed(srv_resp) {
                //$scope.sites	= [];
            }
        );
    }
    
    $scope.showTemplateInfo = function(template) {
        $scope.new_template.cct_seq = template.cct_seq;
        $scope.new_template.subject = template.subject;
        $scope.new_template.text    = template.text;
    }
    
    $scope.resetTemplateForm = function() {
        $scope.new_template.cct_seq = 0;
        $scope.new_template.subject = '';
        $scope.new_template.text    = '';
    }
    
    $scope.searchQuestions = function() {
        var strt_date   = $scope.search.from;
        var end_date    = $scope.search.to;
        var strt_obj    = new Date(strt_date.substr(0, 4)+'-'+strt_date.substr(4, 2)+'-'+strt_date.substr(6, 2));
        var end_obj     = new Date(end_date.substr(0, 4)+'-'+end_date.substr(4, 2)+'-'+end_date.substr(6, 2));

        var result      = [{}];
        var questions   = [];
        
        for (var pidx = 0; pidx < $scope.sites.length; pidx++) {
            
            result[pidx] = $scope.sites[pidx];
            questions   = [];
            
            for (var idx = 0; idx < $scope.sites[pidx].questions.length; idx++) {
            
                var item_date   = $scope.sites[pidx].questions[idx].reg_date;
                var item_obj    = new Date(item_date.substr(0, 4)+'-'+item_date.substr(4, 2)+'-'+item_date.substr(6, 2));
                
                if ((item_obj >= strt_obj)
                && (item_obj <= end_obj)) {
                    questions.push($scope.sites[pidx].questions[idx]);
                }
            }
            
            result[pidx].questions = questions;
        }
        
        $scope.sites = result;
    }
    
    $scope.searchByQuery = function() {
        $http.post("cust-center/api/search-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
});