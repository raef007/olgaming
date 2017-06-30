 (function() {
    "use strict";


    $("html").niceScroll({styler:"fb",cursorcolor:"#27cce4", cursorwidth: '5', cursorborderradius: '10px', background: '#424f63', spacebarenabled:false, cursorborder: '0',  zindex: '1000'});

    $(".left-side").niceScroll({styler:"fb",cursorcolor:"#27cce4", cursorwidth: '3', cursorborderradius: '10px', background: '#424f63', spacebarenabled:false, cursorborder: '0'});


    $(".left-side").getNiceScroll();
    if ($('body').hasClass('left-side-collapsed')) {
        $(".left-side").getNiceScroll().hide();
    }



   jQuery('.menu-list > a').click(function() {
      
      var parent = jQuery(this).parent();
      var sub = parent.find('> ul');
      
      if(!jQuery('body').hasClass('left-side-collapsed')) {
         if(sub.is(':visible')) {
            sub.slideUp(200, function(){
               parent.removeClass('nav-active');
               jQuery('.main-content').css({height: ''});
               mainContentHeightAdjust();
            });
         } else {
            visibleSubMenuClose();
            parent.addClass('nav-active');
            sub.slideDown(200, function(){
                mainContentHeightAdjust();
            });
         }
      }
      return false;
   });

   function visibleSubMenuClose() {
      jQuery('.menu-list').each(function() {
         var t = jQuery(this);
         if(t.hasClass('nav-active')) {
            t.find('> ul').slideUp(200, function(){
               t.removeClass('nav-active');
            });
         }
      });
   }

   function mainContentHeightAdjust() {
      var docHeight = jQuery(document).height();
      if(docHeight > jQuery('.main-content').height())
         jQuery('.main-content').height(docHeight);
   }

   jQuery('.custom-nav > li').hover(function(){
      jQuery(this).addClass('nav-hover');
   }, function(){
      jQuery(this).removeClass('nav-hover');
   });


   jQuery('.toggle-btn').click(function(){
       $(".left-side").getNiceScroll().hide();
       
       if ($('body').hasClass('left-side-collapsed')) {
           $(".left-side").getNiceScroll().hide();
       }
      var body = jQuery('body');
      var bodyposition = body.css('position');

      if(bodyposition != 'relative') {

         if(!body.hasClass('left-side-collapsed')) {
            body.addClass('left-side-collapsed');
            jQuery('.custom-nav ul').attr('style','');

            jQuery(this).addClass('menu-collapsed');

         } else {
            body.removeClass('left-side-collapsed chat-view');
            jQuery('.custom-nav li.active ul').css({display: 'block'});

            jQuery(this).removeClass('menu-collapsed');

         }
      } else {

         if(body.hasClass('left-side-show'))
            body.removeClass('left-side-show');
         else
            body.addClass('left-side-show');

         mainContentHeightAdjust();
      }

   });
   

   searchform_reposition();

   jQuery(window).resize(function(){

      if(jQuery('body').css('position') == 'relative') {

         jQuery('body').removeClass('left-side-collapsed');

      } else {

         jQuery('body').css({left: '', marginRight: ''});
      }

      searchform_reposition();

   });

   function searchform_reposition() {
      if(jQuery('.searchform').css('position') == 'relative') {
         jQuery('.searchform').insertBefore('.left-side-inner .logged-user');
      } else {
         jQuery('.searchform').insertBefore('.menu-right');
      }
   }
})(jQuery);

						$(document).ready(function() {
						  $(document).on('click', function(ev) {
						    ev.stopImmediatePropagation();
						    $(".dropdown-toggle").dropdown("active");
						  });
						});
						
	
     
		$(function() {
	    var button = $('#loginButton');
	    var box = $('#loginBox');
	    var form = $('#loginForm');
	    button.removeAttr('href');
	    button.mouseup(function(login) {
	        box.toggle();
	        button.toggleClass('active');
	    });
	    form.mouseup(function() { 
	        return false;
	    });
	    $(this).mouseup(function(login) {
	        if(!($(login.target).parent('#loginButton').length > 0)) {
	            button.removeClass('active');
	            box.hide();
	        }
	    });
	});

function leadingZeros(n, digits) {
  var zero = '';
  n = n.toString();

  if (n.length < digits) {
    for (i = 0; i < digits - n.length; i++)
      zero += '0';
  }
  return zero + n;
}
	
function locale () { 
	var d = new Date();

  var s =
    leadingZeros(d.getFullYear(), 4) + '-' +
    leadingZeros(d.getMonth() + 1, 2) + '-' +
    leadingZeros(d.getDate(), 2)

	return s.toLocaleString(); 	
} 

document.getElementById( 'date1' ).innerHTML = locale (); 


// 추가로, 실시간 타이머 표시 방법 ㅡ 1000 밀리초(=1초)에 한번씩 함수 실행하기 
setInterval ( function() { document.getElementById("date1").innerHTML = locale (); } , 1000 );

/*
function leadingZeros(n, digits) {
  var zero = '';
  n = n.toString();

  if (n.length < digits) {
    for (i = 0; i < digits - n.length; i++)
      zero += '0';
  }
  return zero + n;
}

function locale1 () { 
	var d = new Date();

  var s =
    leadingZeros(d.getFullYear(), 4) + '/' +
    leadingZeros(d.getMonth() + 1, 2) + '/' +
    leadingZeros(d.getDate(), 2) + ' ' +

    leadingZeros(d.getHours(), 2) + ':' +
    leadingZeros(d.getMinutes(), 2) + ':' +
    leadingZeros(d.getSeconds(), 2);

	return s.toLocaleString(); 	
} 

document.getElementById( 'date2' ).innerHTML = locale1 (); 


// 추가로, 실시간 타이머 표시 방법 ㅡ 1000 밀리초(=1초)에 한번씩 함수 실행하기 
setInterval ( function() { document.getElementById("date2").innerHTML = locale1 (); } , 1000 );
*/

$(function() {
    $(".datepicker1").datepicker({
    });
});

var win_memo = function(href) {
    var new_win = window.open(href, 'win_memo', 'left=100,top=100,width=720,height=460,scrollbars=1');
    new_win.focus();
}

var win_record = function(href) {
    var new_win = window.open(href, 'win_memo', 'left=100,top=100,width=720,height=320,scrollbars=1');
    new_win.focus();
}

var win_register = function(href) {
    var new_win = window.open(href, 'win_memo', 'left=100,top=100,width=880,height=500,scrollbars=1');
    new_win.focus();
}

var win_register1 = function(href) {
    var new_win = window.open(href, 'win_memo', 'left=100,top=100,width=970,height=440,scrollbars=1');
    new_win.focus();
}

var win_adm = function(href) {
    var new_win = window.open(href, 'win_memo', 'left=100,top=100,width=420,height=540,scrollbars=1');
    new_win.focus();
}

$(document).ready(function(){ var fileTarget = $('.filebox .upload-hidden'); fileTarget.on('change', function(){ 
	// 값이 변경되면 
	if(window.FileReader){ // modern browser 
	var filename = $(this)[0].files[0].name; } else { // old IE 
	var filename = $(this).val().split('/').pop().split('\\').pop(); // 파일명만 추출 
	} // 추출한 파일명 삽입 
	$(this).siblings('.upload-name').val(filename); }); });