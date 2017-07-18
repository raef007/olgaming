angular.module("vavaGaming").controller('smsLogCtrl', function($scope, $http) {
	
    $scope.search       = {};
    $scope.search.from  = '20170101';
    $scope.search.to    = '20171231';
    
    $scope.searchByQuery = function() {
        $http.post("smslog/api/search-all-sites", $scope.search)
            .then(function success(srv_resp){
                $scope.sites	= srv_resp.data[0];
                $scope.pag_inf	= srv_resp.data[1];
                
            }, function failed(srv_resp) {
                $scope.sites	= [{}];
            }
        );
    }
    
    $scope.deleteSmsLogs = function() {
        var conf_delete = $("<div> Are you sure you want to delete? </div>").dialog({
            closeOnEscape: false,
            draggable: false,
            resizable: false,
            modal: true,
            open: function(event, ui) { 
                /** Remove the close button */
                $(".ui-dialog-titlebar-close").hide();
                $(".ui-dialog-title").append('<span id = "delete_hdr"> <i class = "glyphicon glyphicon-exclamation-sign"> </i> Delete </span>');
            },
            buttons: [
				{
					text: 'Cancel',
					click: function() {
						//$('#delete_hdr').remove();
						$(this).dialog('destroy');
					}
				},
                {
					text: 'Yes',
					click: function() {
                        $http.post("smslog/api/post-delete-smslogs", $scope.sites)
                            .then(function success(srv_resp){
                                $scope.searchByQuery();
                                conf_delete.dialog('close');
                            }, function failed(srv_resp) {
                                //$scope.sites	= [];
                            }
                        );
					}
				}
			]
        });
    }
    
    $scope.searchIpGoogle = function(ip_num) {
        window.open("https://www.google.com/search?q="+ip_num);
    }
    
    $scope.setOffset = function(site, new_offset) {
        site.offset = new_offset;
    }
    
    $scope.searchByQuery();
});