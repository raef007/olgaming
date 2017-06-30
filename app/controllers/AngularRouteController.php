<?php

class AngularRouteController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function showMain()
	{
        return View::make('admin.main');
	}

	//member   
    public function showMemberInfo()
	{
        return View::make('admin.member.membership_info');
	}
	public function showMemberStructure()
	{
        return View::make('admin.member.membership_structure');
	}
	public function showSubscriptionCode()
	{
        return View::make('admin.member.subscription_code');
	}
	
	//login
	public function showLoginHistory()
	{
        return View::make('admin.login.login_history');
	}
   public function showCurrentUsersMessages()
	{
        return View::make('admin.login.current_users_messages');
	}
	 public function showIpInfo()
	{
        return View::make('admin.login.ip_info');
	}
 	public function showSmsLog()
	{
        return View::make('admin.login.sms_log');
	}
	public function showSubscribe()
	{
        return View::make('admin.login.subscribe');
	}

		//pay
	public function showChargeManagement()
	{
        return View::make('admin.pay.charge_mngmnt');
	}
		public function showExchange()
	{
        return View::make('admin.pay.exchange');
	}
		public function showMoneyUseLog()
	{
        return View::make('admin.pay.money_use_log');
	}	
		public function showPointUseLog()
	{
        return View::make('admin.pay.point_use_log');
	}	
		public function showBettingStat()
	{
        return View::make('admin.pay.betting_stat');
	}

	//game management
		public function showGameManageCategory()
	{
        return View::make('admin.game.game-mng-cat');
	}
			public function showBettingList()
	{
        return View::make('admin.game.betting-list');
	}

	//Service
		public function showCustomerCenter()
	{
        return View::make('admin.service.customer_center');
	}
		public function showNoticeEvent()
	{
        return View::make('admin.service.notice_event');
	}


		//site
   public function showSite()
	{
        return View::make('admin.site.admin_settings');
	}
    
    public function showConnSetup()
	{
        return View::make('admin.site.connection_setup');
	}
	 public function showAccountSettings()
	{
        return View::make('admin.site.account-settings');
	}
	 public function showSetMinMaxAcc()
	{
        return View::make('admin.site.set_min_max_acc');
	}
		 public function showRatioSettingByEvent()
	{
        return View::make('admin.site.ratio_setting_by_event');
	}

	//Content
	 	public function showBannerManage()
	{
        return View::make('admin.content.banner-mng');
	}
		public function showPopupManage()
	{
        return View::make('admin.content.popup-mng');
	}
		public function showFaqManage()
	{
        return View::make('admin.content.faq-mng');
	}

    //Statistics
    	public function showStatisticsByDate()
	{
        return View::make('admin.stats.stats_by_date');
	}
	    	public function showStatisticsByCategory()
	{
        return View::make('admin.stats.statistics_by_category');
	}
		public function showForeignCompanyStatistics()
	{
        return View::make('admin.stats.foreign_company_stats');
	}
		public function showMemberStatistics()
	{
        return View::make('admin.stats.member_stats');
	}
		public function showMemberHitRate()
	{
        return View::make('admin.stats.mem_hit_rate');
	}
		public function showTopDividendStats()
	{
        return View::make('admin.stats.top_dividend_stats');
	}
			public function showPaymentSettlement()
	{
        return View::make('admin.stats.payment_settlement');
	}
		public function showSettlementByDeposit()
	{
        return View::make('admin.stats.settlement_by_deposit');
	}
		public function showFolderDistribution()
	{
        return View::make('admin.stats.folder_distribution');
	}
		public function showMemberOddsStatistics()
	{
        return View::make('admin.stats.mem_odds_stats');
	}



}
