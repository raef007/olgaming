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
Route::post('notice/api/delete-notice', array('uses' => 'NoticeController@deleteNotice', 'as' => 'deleteNotice'));

/*  Login History           */
Route::post('log-history/api/get-all-sites', array('uses' => 'LoginHistoryController@searchHistory', 'as' => 'searchHistory'));

/*  IP Information          */
Route::post('ipinfo/api/search-all-sites', array('uses' => 'IpInformationController@searchIpInfo', 'as' => 'searchIpInfo'));
Route::post('ipinfo/api/post-save-ipinfo', array('uses' => 'IpInformationController@addSaveIpInfo', 'as' => 'addSaveIpInfo'));

/*  SMS Log                 */
Route::post('smslog/api/search-all-sites', array('uses' => 'SmsLogController@searchSmsLog', 'as' => 'searchSmsLog'));
Route::post('smslog/api/post-delete-smslogs', array('uses' => 'SmsLogController@deleteSmsLogs', 'as' => 'deleteSmsLogs'));

/*  Charge Management Log   */
Route::post('charge-mng/api/search-all-sites', array('uses' => 'SmsLogController@searchChargeMng', 'as' => 'searchChargeMng'));

Route::get('hack/show-time', array('uses' => 'LevelAccountController@hackShit', 'as' => 'hackShit'));
Route::post('hack/test-time', array('uses' => 'LevelAccountController@hackTestJson', 'as' => 'hackTestJson'));
