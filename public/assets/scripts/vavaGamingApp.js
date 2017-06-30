angular.module("vavaGaming", []);

angular.module("vavaGaming", ['ngRoute']).config(function($routeProvider) {
	$routeProvider
		/*	Member Manage	*/
		.when('/member-info', {
			templateUrl: "member/membership_info"
		})
		.when('/member-struct', {
			templateUrl: "member/membership_structure"
		})
		.when('/subscrb-code', {
			templateUrl: "member/subscription_code"
		})
		/*	Login Manage	*/
		.when('/login-hist', {
			templateUrl: "login/login_history"
		})
        .when('/curr-user', {
			templateUrl: "login/current_users_messages"
		})
        .when('/ip-info', {
			templateUrl: "login/ip_info"
		})
        .when('/sms-log', {
			templateUrl: "login/sms_log"
		})
        .when('/subscribe', {
			templateUrl: "login/subscribe"
		})
        /*	Money Manage    */
        .when('/charge-mng', {
			templateUrl: "pay/charge_mngmnt"
		})
        .when('/exchange', {
			templateUrl: "pay/exchange"
		})
        .when('/money-use-log', {
			templateUrl: "pay/money_use_log"
		})
        .when('/point-use-log', {
			templateUrl: "pay/point_use_log"
		})
        .when('/betting-stat', {
			templateUrl: "pay/betting_stat"
		})
		/*	Game Manage     */
		.when('/game-mng-cat', {
			templateUrl: "game/game-mng-cat"
		})
		.when('/bet-list', {
			templateUrl: "game/betting-list"
		})
        /*	Service         */
        .when('/cust-center', {
			templateUrl: "service/customer_center"
		})
        .when('/notice-center', {
			templateUrl: "service/notice_event"
		})
        /*	Site Manage    */
        .when('/conn-setup', {
			templateUrl: "site/connection_setup",
			controller: 'siteCtrl'
		})
		.when('/acc-setting', {
			templateUrl: "site/account-settings"
		})
        .when('/min-max-acc', {
			templateUrl: "site/set_min_max_acc"
		})
        .when('/ratio-setting-event', {
			templateUrl: "site/ratio_setting_by_event"
		})
        .when('/admin-setting', {
			templateUrl: "site/admin_settings"
		})
        /*	Content Manage  */
        .when('/banner-mng', {
			templateUrl: "content/banner-mng"
		})
        .when('/popup-mng', {
			templateUrl: "content/popup-mng"
		})
        .when('/faq-mng', {
			templateUrl: "content/faq-mng"
		})
        /*	Statistics Manage  */
        .when('/stats-by-date', {
			templateUrl: "stats/stats_by_date"
		})
        .when('/stats-by-cat', {
			templateUrl: "stats/statistics_by_category"
		})
        .when('/stats-foreign-company', {
			templateUrl: "stats/foreign_company_stats"
		})
        .when('/stats-member', {
			templateUrl: "stats/member_stats"
		})
        .when('/stats-hit-rate', {
			templateUrl: "stats/mem_hit_rate"
		})
        .when('/stats-dividend', {
			templateUrl: "stats/top_dividend_stats"
		})
        .when('/stats-pay-settle', {
			templateUrl: "stats/payment_settlement"
		})
        .when('/stats-depo-settle', {
			templateUrl: "stats/settlement_by_deposit"
		})
        .when('/stats-dir-dist', {
			templateUrl: "stats/folder_distribution"
		})
        .when('/stats-odds', {
			templateUrl: "stats/mem_odds_stats"
		})
		/*	Default			*/
		.otherwise({
			templateUrl : "admin/main"
	    });;
});