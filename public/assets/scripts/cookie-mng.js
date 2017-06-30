//======================================================================
//  Script S17: cookie-mng.js
//      Cookie Management Scripts via Javascript
//======================================================================

var COOKIE_ARR_KEY  = 1;
var COOKIE_ARR_VAL  = 2;

/**------------------------------------------------------------------------
|	Sets a Cookie
|--------------------------------------------------------------------------
|	@param [in]		key     --- Name of Cookie
|                   value   --- Value of Cookie
|
|	@param [out] 	NONE
|	@return 		NONE
|------------------------------------------------------------------------*/
function setCookie(key, days, value)
{
    var date_obj    = new Date();
    var expire_date = '';
    
    /** Cookies set to expire in one day    */
    if (0 < days) {
        date_obj.setTime(date_obj.getTime()+(days*24*60*60*1000));
        expire_date = "; expires = "+ date_obj.toGMTString();
    }
    
    document.cookie = key + "=" + value + expire_date +"; path=/";
}
 
/**------------------------------------------------------------------------
|	Gets a Cookie
|--------------------------------------------------------------------------
|	@param [in]		key     --- Name of Cookie
|	@param [out] 	NONE
|	@return 		cookie_val  --- Value of specified cookie
|------------------------------------------------------------------------*/
function getCookie(key)
{
    /** Variable Definition */
    var cookie_val   = null;
    var cookie_arr   = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    
    /** Cookie exists       */
    if (cookie_arr) {
        cookie_val = cookie_arr[COOKIE_ARR_VAL];
    }

    return cookie_val;
}