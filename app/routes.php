<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showIndex', 'as' => 'showIndex'));


/*  Angular Route Mapping   */
Route::get('/admin/main', array('uses' => 'AngularRouteController@showMain', 'as' => 'showMain'));

//member
Route::get('/member/membership_info', array('uses' => 'AngularRouteController@showMemberInfo', 'as' => 'showConnSetup'));
Route::get('/member/membership_structure', array('uses' => 'AngularRouteController@showMemberStructure', 'as' => 'showConnSetup'));
Route::get('/member/subscription_code', array('uses' => 'AngularRouteController@showSubscriptionCode', 'as' => 'showConnSetup'));

//login //
Route::get('/login/login_history', array('uses' => 'AngularRouteController@showLoginHistory', 'as' => 'showConnSetup'));
Route::get('/login/current_users_messages', array('uses' => 'AngularRouteController@showCurrentUsersMessages', 'as' => 'showConnSetup'));
Route::get('/login/sms_log', array('uses' => 'AngularRouteController@showSmsLog', 'as' => 'showConnSetup'));
Route::get('/login/ip_info', array('uses' => 'AngularRouteController@showIpInfo', 'as' => 'showConnSetup'));
Route::get('/login/subscribe', array('uses' => 'AngularRouteController@showSubscribe', 'as' => 'showConnSetup'));

//pay
Route::get('/pay/charge_mngmnt', array('uses' => 'AngularRouteController@showChargeManagement', 'as' => 'showConnSetup'));
Route::get('/pay/exchange', array('uses' => 'AngularRouteController@showExchange', 'as' => 'showConnSetup'));
Route::get('/pay/money_use_log', array('uses' => 'AngularRouteController@showMoneyUseLog', 'as' => 'showConnSetup'));
Route::get('/pay/point_use_log', array('uses' => 'AngularRouteController@showPointUseLog', 'as' => 'showConnSetup'));
Route::get('/pay/betting_stat', array('uses' => 'AngularRouteController@showBettingStat', 'as' => 'showConnSetup'));

//Game Management
Route::get('/game/game-mng-cat', array('uses' => 'AngularRouteController@showGameManageCategory', 'as' => 'showConnSetup'));
Route::get('/game/betting-list', array('uses' => 'AngularRouteController@showBettingList', 'as' => 'showConnSetup'));

// Service
Route::get('/service/customer_center', array('uses' => 'AngularRouteController@showCustomerCenter', 'as' => 'showConnSetup'));
Route::get('/service/notice_event', array('uses' => 'AngularRouteController@showNoticeEvent', 'as' => 'showConnSetup'));

//site
Route::get('/site/admin_settings', array('uses' => 'AngularRouteController@showSite', 'as' => 'showSite'));
Route::get('/site/connection_setup', array('uses' => 'AngularRouteController@showConnSetup', 'as' => 'showConnSetup'));
Route::get('/site/account-settings', array('uses' => 'AngularRouteController@showAccountSettings', 'as' => 'showConnSetup'));
Route::get('/site/account-settings', array('uses' => 'AngularRouteController@showAccountSettings', 'as' => 'showConnSetup'));
Route::get('/site/set_min_max_acc', array('uses' => 'AngularRouteController@showSetMinMaxAcc', 'as' => 'showConnSetup'));
Route::get('/site/ratio_setting_by_event', array('uses' => 'AngularRouteController@showRatioSettingByEvent', 'as' => 'showConnSetup'));

//Content
Route::get('/content/banner-mng', array('uses' => 'AngularRouteController@showBannerManage', 'as' => 'showConnSetup'));
Route::get('/content/popup-mng', array('uses' => 'AngularRouteController@showPopupManage', 'as' => 'showConnSetup'));
Route::get('/content/faq-mng', array('uses' => 'AngularRouteController@showFaqManage', 'as' => 'showConnSetup'));

//Statistics
Route::get('/stats/stats_by_date', array('uses' => 'AngularRouteController@showStatisticsByDate', 'as' => 'showConnSetup'));
Route::get('/stats/statistics_by_category', array('uses' => 'AngularRouteController@showStatisticsByCategory', 'as' => 'showConnSetup'));
Route::get('/stats/foreign_company_stats', array('uses' => 'AngularRouteController@showForeignCompanyStatistics', 'as' => 'showConnSetup'));
Route::get('/stats/member_stats', array('uses' => 'AngularRouteController@showMemberStatistics', 'as' => 'showConnSetup'));
Route::get('/stats/mem_hit_rate', array('uses' => 'AngularRouteController@showMemberHitRate', 'as' => 'showConnSetup'));
Route::get('/stats/top_dividend_stats', array('uses' => 'AngularRouteController@showTopDividendStats', 'as' => 'showConnSetup'));
Route::get('/stats/payment_settlement', array('uses' => 'AngularRouteController@showPaymentSettlement', 'as' => 'showConnSetup'));
Route::get('/stats/settlement_by_deposit', array('uses' => 'AngularRouteController@showSettlementByDeposit', 'as' => 'showConnSetup'));
Route::get('/stats/folder_distribution', array('uses' => 'AngularRouteController@showFolderDistribution', 'as' => 'showConnSetup'));
Route::get('/stats/mem_odds_stats', array('uses' => 'AngularRouteController@showMemberOddsStatistics', 'as' => 'showConnSetup'));

/*  Sites API               */
Route::get('sites/api/get-all-sites', array('uses' => 'SiteController@showGetSites', 'as' => 'showGetSites'));
Route::post('sites/api/post-save-sites', array('uses' => 'SiteController@addSaveSites', 'as' => 'addSaveSites'));
Route::post('sites/api/post-save-urls', array('uses' => 'SiteController@addSaveUrl', 'as' => 'addSaveUrl'));
Route::post('sites/api/post-delete-urls', array('uses' => 'SiteController@deleteUrlSites', 'as' => 'deleteUrlSites'));
Route::get('sites/api/delete-url/{su_seq}', array('uses' => 'SiteController@deleteUrl', 'as' => 'deleteUrl'));

/*  Manage Sites API        */
Route::get('mng-sites/api/get-all-sites', array('uses' => 'ManageSiteController@showGetManageSites', 'as' => 'showGetManageSites'));
Route::post('mng-sites/api/post-save-site', array('uses' => 'ManageSiteController@addSaveManageSite', 'as' => 'addSaveManageSite'));
Route::post('mng-sites/api/post-save-sites', array('uses' => 'ManageSiteController@addSaveManageSites', 'as' => 'addSaveManageSites'));
Route::post('mng-sites/api/post-delete-sites', array('uses' => 'ManageSiteController@deleteMngSites', 'as' => 'deleteMngSites'));

/*  Bet Limit Configuration     */
Route::get('bet-limit/api/get-all-sites', array('uses' => 'BetLimitConfigController@showGetBetLimit', 'as' => 'showGetBetLimit'));
Route::post('bet-limit/api/post-save-configs', array('uses' => 'BetLimitConfigController@addSaveBetConfig', 'as' => 'addSaveBetConfig'));
Route::post('bet-limit/api/post-delete-configs', array('uses' => 'BetLimitConfigController@deleteConfigs', 'as' => 'deleteConfigs'));

/*  Level Account API        */
Route::get('lvl-acc/api/get-all-sites', array('uses' => 'LevelAccountController@showGetLevelAccounts', 'as' => 'showGetLevelAccounts'));
Route::post('lvl-acc/api/post-save-accounts', array('uses' => 'LevelAccountController@addSaveLevelAccounts', 'as' => 'addSaveLevelAccounts'));

/*  FAQ                     */
Route::get('faq/api/get-all-sites', array('uses' => 'FaqController@showGetFaqs', 'as' => 'showGetFaqs'));
Route::post('faq/api/post-save-faq', array('uses' => 'FaqController@addSaveFaq', 'as' => 'addSaveFaq'));
Route::post('faq/api/post-save-faqs', array('uses' => 'FaqController@addSaveFaqs', 'as' => 'addSaveFaqs'));
Route::post('faq/api/post-delete-faqs', array('uses' => 'FaqController@deleteFaqs', 'as' => 'deleteFaqs'));
Route::post('faq/api/search-all-sites', array('uses' => 'FaqController@searchFaqs', 'as' => 'searchFaqs'));

/*  Pop-up                  */
Route::get('popup/api/get-all-sites', array('uses' => 'PopupController@showGetPopup', 'as' => 'showGetPopup'));
Route::post('popup/api/upload-img', array('uses' => 'PopupController@uploadImage', 'as' => 'uploadImage'));
Route::post('popup/api/post-save-popup', array('uses' => 'PopupController@addSavePopup', 'as' => 'addSavePopup'));
Route::post('popup/api/post-save-popups', array('uses' => 'PopupController@addSavePopups', 'as' => 'addSavePopups'));
Route::post('popup/api/post-delete-popups', array('uses' => 'PopupController@deletePopups', 'as' => 'deletePopups'));

/*  Banner                  */
Route::get('banner/api/get-all-sites', array('uses' => 'BannerController@showGetBanner', 'as' => 'showGetBanner'));
Route::post('banner/api/upload-img', array('uses' => 'BannerController@uploadBanner', 'as' => 'uploadBanner'));
Route::post('banner/api/post-save-banner', array('uses' => 'BannerController@addSaveBanner', 'as' => 'addSaveBanner'));
Route::post('banner/api/post-save-banners', array('uses' => 'BannerController@addSaveBanners', 'as' => 'addSaveBanners'));
Route::post('banner/api/post-delete-banners', array('uses' => 'BannerController@deleteBanners', 'as' => 'deleteBanners'));

/*  Customer Center         */
Route::get('cust-center/api/get-all-sites', array('uses' => 'CustomerCenterController@showGetCustCenter', 'as' => 'showGetCustCenter'));
Route::post('cust-center/api/search-all-sites', array('uses' => 'CustomerCenterController@searchAllCustCenter', 'as' => 'searchAllCustCenter'));

Route::post('cust-center/api/post-save-template', array('uses' => 'CustomerCenterController@addSaveTemplate', 'as' => 'addSaveTemplate'));
Route::post('cust-center/api/post-delete-template', array('uses' => 'CustomerCenterController@deleteTemplate', 'as' => 'deleteTemplate'));
Route::post('cust-center/api/post-send-msg', array('uses' => 'CustomerCenterController@sendMessage', 'as' => 'sendMessage'));

/* notice center */
Route::get('notice/api/get-all-sites', array('uses' => 'NoticeController@showGetNotice', 'as' => 'showGetNotice'));
Route::post('notice/api/search-notice', array('uses' => 'NoticeController@searchNotice', 'as' => 'searchNotice'));
Route::post('notice/api/search-event', array('uses' => 'NoticeController@searchEvent', 'as' => 'searchEvent'));
Route::post('notice/api/delete-notices', array('uses' => 'NoticeController@deleteNotice', 'as' => 'deleteNotices'));
Route::post('notice/api/delete-events', array('uses' => 'NoticeController@deleteEvents', 'as' => 'deleteEvents'));
Route::post('notice/api/add-notice', array('uses' => 'NoticeController@addNotice', 'as' => 'addNotice'));
Route::post('notice/api/add-event', array('uses' => 'NoticeController@addEvent', 'as' => 'addEvent'));

/*  Login History           */
Route::post('log-history/api/get-all-sites', array('uses' => 'LoginHistoryController@searchHistory', 'as' => 'searchHistory'));

/*  IP Information          */	
Route::post('ipinfo/api/search-all-sites', array('uses' => 'IpInformationController@searchIpInfo', 'as' => 'searchIpInfo'));
Route::post('ipinfo/api/post-save-ipinfo', array('uses' => 'IpInformationController@addSaveIpInfo', 'as' => 'addSaveIpInfo'));

/*  SMS Log                 */
Route::post('smslog/api/search-all-sites', array('uses' => 'SmsLogController@searchSmsLog', 'as' => 'searchSmsLog'));
Route::post('smslog/api/post-delete-smslogs', array('uses' => 'SmsLogController@deleteSmsLogs', 'as' => 'deleteSmsLogs'));

/*  Charge Management Log   */
Route::post('charge-mng/api/search-all-sites', array('uses' => 'ChangeManageController@searchChargeMng', 'as' => 'searchChargeMng'));
Route::post('charge-mng/api/download-excel', array('uses' => 'ChangeManageController@downloadExcel', 'as' => 'downloadExcel'));
Route::get('charge-mng/api/download-file/{path}/{filename}', array('uses' => 'ChangeManageController@downloadFile', 'as' => 'downloadFile'));
Route::post('charge-mng/api/cancel/{list}', array('uses' => 'ChangeManageController@cancelDeposit', 'as' => 'cancelDeposit'));
Route::post('charge-mng/api/set-charge-sts/{list}/{sts}', array('uses' => 'ChangeManageController@setStatus', 'as' => 'setStatus'));
 
/* Exchange */
Route::get('exchange/api/get-all-sites', array('uses' => 'ExchangeController@showGetExchange', 'as' => 'showGetExchange'));
Route::post('exchange/api/search-all-sites', array('uses' => 'ExchangeController@searchWithdraw', 'as' => 'searchWithdraw'));
Route::post('exchange/api/cancel-exchange/{step_list}', array('uses' => 'ExchangeController@cancelWithdraw', 'as' => 'cancelWithdraw'));
Route::post('exchange/api/set-charge-sts/{step_list}/{sts}', array('uses' => 'ExchangeController@setStatus', 'as' => 'setStatus'));
Route::post('exchange-mng/api/download-excel', array('uses' => 'ExchangeController@downloadExcel', 'as' => 'downloadExcel'));
Route::get('exchange-mng/api/download-file/{path}/{filename}', array('uses' => 'ExchangeController@downloadFile', 'as' => 'downloadFile'));

/* Point Use Log*/
Route::get('pul/api/get-all-sites', array('uses' => 'PointUseLogController@showGetPUL', 'as' => 'showGetPUL'));
Route::post('pul/api/search-pul', array('uses' => 'PointUseLogController@searchPUL', 'as' => 'searchPUL'));
Route::post('pul/api/download-excel', array('uses' => 'PointUseLogController@downloadExcel', 'as' => 'downloadExcel'));
Route::get('pul/api/download-file/{path}/{filename}', array('uses' => 'PointUseLogController@downloadFile', 'as' => 'downloadFile'));

/*  Member Statistics           */
Route::post('member-stats/api/get-all-sites', array('uses' => 'MemberStatsController@searchMemberStats', 'as' => 'searchMemberStats'));

/* Payment Settlement */
Route::get('pay-settle/api/get-all-sites', array('uses' => 'PaymentSettleController@showGetPaymentSettle', 'as' => 'showGetPaymentSettle'));
Route::post('pay-settle/api/search-deposit', array('uses' => 'PaymentSettleController@searchDeposit', 'as' => 'searchDeposit'));

/*Settlement by Deposit */
Route::get('depo-settle/api/get-all-sites', array('uses' => 'DepoSettleController@showGetDepoSettle', 'as' => 'showGetDepoSettle'));
Route::post('depo-settle/api/search-deposit', array('uses' => 'DepoSettleController@searchDeposit', 'as' => 'searchDeposit'));

/* Subscribe */
Route::get('subscribe/api/get-all-sites', array('uses' => 'SubscribeController@showGetSubscribe', 'as' => 'showGetSubscribe'));
Route::post('subscribe/api/post-save-subscribe', array('uses' => 'SubscribeController@addSaveSubscribe', 'as' => 'addSaveSubscribe'));

/*  Recommend API               */
Route::post('recommend/api/get-all-sites', array('uses' => 'RecommendController@searchRecommends', 'as' => 'searchRecommends'));
Route::post('recommend/api/post-save-code', array('uses' => 'RecommendController@addSaveCode', 'as' => 'addSaveCode'));
Route::post('recommend/api/post-delete-code', array('uses' => 'RecommendController@deleteCode', 'as' => 'deleteCode'));

/*  Training Grounds Controller */
Route::get('hack/show-time', array('uses' => 'TrainingGroundsController@hackShit', 'as' => 'hackShit'));
Route::post('hack/test-time', array('uses' => 'TrainingGroundsController@hackTestJson', 'as' => 'hackTestJson'));
Route::get('scube/connect/token', array('uses' => 'TrainingGroundsController@spinCubeGetToken', 'as' => 'spinCubeGetToken'));
Route::post('scube/connect/token', array('uses' => 'TrainingGroundsController@spinCubePostToken', 'as' => 'spinCubePostToken'));
Route::get('wheel/play', array('uses' => 'TrainingGroundsController@getWheelGame', 'as' => 'getWheelGame'));
Route::post('front-api/register', array('uses' => 'TrainingGroundsController@registerMember', 'as' => 'registerMember'));
Route::post('front-api/get-member', array('uses' => 'TrainingGroundsController@getMemberDetails', 'as' => 'getMemberDetails'));
Route::post('front-api/get-member-inf', array('uses' => 'TrainingGroundsController@getMemberInformation', 'as' => 'getMemberInformation'));
Route::post('front-api/empty-wallet', array('uses' => 'TrainingGroundsController@emptyWallet', 'as' => 'emptyWallet'));

Route::get('front-api/calculate-spin-rng/{ticket_num}/{win_amount}', array('uses' => 'TrainingGroundsController@calculateTicketRng', 'as' => 'calculateTicketRng'));
Route::get('front-api/get-wheel-details/{user_id}', array('uses' => 'TrainingGroundsController@getUserWheelDetails', 'as' => 'getUserWheelDetails'));



