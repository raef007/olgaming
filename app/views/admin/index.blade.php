<html>
	<head>
		<title>BACKOFFICE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Jouvian" />
		
		<link href="{{ URL::asset('assets/styles/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
		<link href="{{ URL::asset('assets/styles/style.css') }}" rel='stylesheet' type='text/css' />
		<link href="{{ URL::asset('assets/styles/common.css') }}" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ URL::asset('assets/styles/icon-font.min.css') }}" type='text/css' />
		<link href="{{ URL::asset('assets/styles/animate.css') }}" rel="stylesheet" type="text/css" media="all">
		<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" />
        <link rel="stylesheet" href="http://textangular.com/dist/textAngular.css" type="text/css">
        
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="{{ URL::asset('assets/scripts/Chart.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/wow.min.js') }}"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
		<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/tinymce.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-tinymce/0.0.18/tinymce.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.6.4/plugins/media/plugin.min.js"></script>
		
        
		<script src="{{ URL::asset('assets/scripts/cookie-mng.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/vavaGamingApp.js') }}"></script>

	</head>
	
	<body class="sticky-header" ng-app = 'vavaGaming'>
		<div class = "container" style = "width: 100%; padding: 0;">
			<div class = "main_container">
				<div class = 'col-md-4'>
					@include('admin.menu')
				</div>
				<div style = "padding-left:197px;">
					<div class = 'col-md-12'>
                        @include('admin.header')
					</div>
					
					<div id = "main-cntr" role = "main" ng-view>
					</div>
					
				</div>
			</div>
		</div>
		<script src="{{ URL::asset('assets/scripts/jquery.nicescroll.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/bootstrap.min.js') }}"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.0/textAngular-rangy.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.0/textAngular-sanitize.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/textAngular/1.5.0/textAngular.min.js'></script>
		<script src="{{ URL::asset('assets/scripts/scripts.js') }}"></script>
        <script src="{{ URL::asset('assets/scripts/cookie-mng.js') }}"></script>
		
		<script>
			angular.module("vavaGaming").controller('menuCtrl', function($scope) {
				
				$scope.favs 	= [];
				$scope.fav_list = [];
				
				var cookie_pair = document.cookie.split(';');
				
				for (var idx = 0; idx < cookie_pair.length; idx++) {
				    var name 	= cookie_pair[idx].substring(0, cookie_pair[idx].indexOf('='));
				    var value 	= cookie_pair[idx].substring(cookie_pair[idx].indexOf('=')+1);
				    var favs 	= [];
				    
				    if ('#!' == value.substr(0, 2)) {
				    	favs.name = name.replace(/\s+/g, '');
				    	favs.link = value.replace(/\s+/g, '');
				    	favs.text = $('#'+favs.name).find('a:eq(1)').text(); 
				    		
				    	$scope.favs.push(favs);
				    	$scope.fav_list.push(favs.name);
				    }
				}
			});
			
			angular.module("vavaGaming").directive("leftNavMenu", ['$location', function(location) {
				return {
					restrict: "A",
					link: function(scope, element, attrs) {
						
						var hashbang = location.path().replace('/', '#!');
						if ('' != hashbang) {
							var lnk_eq	= element.find("[href='"+hashbang+"']");
							var lnk_main	= lnk_eq.parent().parent().parent();
							
							lnk_main.find('a[href="#"]').click();
							lnk_eq.parent().addClass('active-nav');	
						}
					}
				}
			}]);
			
			angular.module("vavaGaming").directive("favIndicator", function() {
			    return {
			        restrict: "A",
			        link: function (scope, element, attrs) {
						var link_id = element.attr('id');
						var star_el	= element.find('.fa-star');
						
						if (-1 != scope.fav_list.indexOf(link_id)) {
							element.find('.fa-star').addClass('active-fav');
						}
						
						element.find('a:eq(1)').click(function() {
							$('.sub-menu-list li').removeClass('active-nav');
							element.addClass('active-nav');
						});
						
						element.find('.fa-star').click(function(){
							var max = scope.favs.length;
							
							if (star_el.hasClass('fav-itm')) {
								var lnk_orig	= element.attr('id').replace('_copy', '');
								//element.remove();
								$('#'+lnk_orig).find('.fa-star').removeClass('active-fav');
								setCookie(lnk_orig, '', '');
								
								for (var idx = 0; i <= max; idx++) {
								    
									if (scope.favs[idx].name == lnk_orig) {
								        scope.favs.splice(idx, 1);
								        break;
								    }
								}
							}
							else if (star_el.hasClass('active-fav')) {
								star_el.removeClass('active-fav');
								setCookie(element.attr('id').replace('_copy', ''), '', '');
								
								for (var idx = 0; i <= max; idx++) {
								    
									if (scope.favs[idx].name == element.attr('id')) {
								        scope.favs.splice(idx, 1);
								        break;
								    }
								}
							}
							else {
								var favs 	= [];
								
								star_el.addClass('active-fav');
								
								favs.name = element.attr('id');
								favs.link = element.find('a:eq(1)').attr('href');
								favs.text = element.find('a:eq(1)').text();
								
								scope.favs.push(favs);
								setCookie(element.attr('id'), 0, element.find('a:eq(1)').attr('href'));
							}
							
							scope.$apply();
							
							return false;
						});
			        }
			    };
			});

		</script>
		<script src="{{ URL::asset('assets/scripts/sitesCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/mngSiteCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/lvlAccCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/faqCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/popupCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/bannerCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/custCenterCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/noticeCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/logHistoryCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/ipInfoCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/smsLogCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/chargeMngCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/ExchangeCtrl.js') }}"></script>
		<script src="{{ URL::asset('assets/scripts/PointUseLogCtrl.js') }}"></script>
	</body>
</html>