<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%
	request.setCharacterEncoding("UTF-8");
%>
<html>
	<head>
		<title>BACKOFFICE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Jouvian" />
		
		<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="../css/style.css" rel='stylesheet' type='text/css' />
		<link href="../css/common.css" rel='stylesheet' type='text/css' />
		<link href="../css/font-awesome.css" rel="stylesheet"> 
		<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
		<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
		<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.18/themes/base/jquery-ui.css" type="text/css" /> 
		
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="../js/jquery-1.10.2.min.js"></script> 
		<script src="../js/Chart.js"></script>
		<script src="../js/wow.min.js"></script>
		<!-- <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
	</head>
	<body>
						<style>
						html, body { background:#fff !important; }
						.nicescroll-rails { display:none !important; }
						#ascrail2000 { display:block !important; }
						</style>
							<div id="tab_site_set" class="div-tab tabs swipe-tab tabs-color-top">
								<div class="w-tab bg-light">
									<ul class="nav nav-tabs" data-toggle="tab-hover">
										<li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">ACE</a></li>
										<li><a href = "" data-target="#tab_01" data-toggle="tab">TOP</a></li>
									</ul>
										<div class="h10"></div>
							<div id="tab_site_set" class="div-tab tabs swipe-tab tabs-color-top">
								<div class="w-tab bg-light">
									<ul class="nav nav-tabs" data-toggle="tab-hover">
										<li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">메인배너</a></li>
										<li><a href = "" data-target="#tab_01" data-toggle="tab">메인서브배너</a></li>
										<li><a href = "" data-target="#tab_02" data-toggle="tab">라이브카지노배너</a></li>
										<li><a href = "" data-target="#tab_03" data-toggle="tab">베팅슬립배너</a></li>
										<li><a href = "" data-target="#tab_04" data-toggle="tab">포인트전환배너</a></li>
										<li><a href = "" data-target="#tab_05" data-toggle="tab">모바일웹</a></li>
									</ul>
						    <div>
						        제목<span style="color:#fff;">숨</span>
						        <span class="sp"></span>
						        <span class="sp"></span>
						        <input type="text" name="" value="" id="" class="" size="20" maxlength="255">
						    </div>
						
						    <div class="h10"></div>
						
						    <div>
						        기간<span style="color:#fff;">숨</span>
						        <span class="sp"></span>
						        <span class="sp"></span>
						        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
						        <select name="" id="" class="">
						            <option>오전 00:00</option>
						            <option>오전 01:00</option>
						        </select>
						        부터
						
						        <span class="sp"></span>
						        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
						        <select name="" id="" class="">
						            <option>오전 00:00</option>
						            <option>오전 01:00</option>
						        </select>
						
						        <span class="sp"></span>
						        <input type="checkbox">
						        무기한 진행
						    </div>
						
						    <div class="h10"></div>
						
						    <div>
						        링크타겟<span style="margin:0 -16px 0 0;"></span>
						        <span class="sp"></span>
						        <span class="sp"></span>
						        <label class="radio-a"><input type="radio" name="target" checked></label> 현재 창
						        <span class="sp"></span>
						        <label class="radio-a"><input type="radio" name="target"></label> 새 창
						        <span class="sp"></span>
						        <label class="radio-a"><input type="radio" name="target"></label> 새 탭
						    </div>
						
						    <div class="h10"></div>
						
						    <div>
						        링크주소<span style="margin:0 -16px 0 0;"></span>
						        <span class="sp"></span>
						        <span class="sp"></span>
						        <input type="text" name="" value="" placeholder="" id="" class="" size="25" maxlength="255"> (http:// 또는 https:// 필수 입력)
						    </div>
						
						    <div class="h10"></div>
						
						    <div>
						        순서<span style="color:#fff;">숨</span>
						        <span class="sp"></span>
						        <span class="sp"></span>
						        <select name="" id="" class="">
						            <option>1</option>
						            <option>2</option>
						        </select>
						    </div>
						
						    <div class="h10"></div>
						
						    <div>
						        노출여부<span style="margin:0 -7px;"></span>
						        <span class="sp"></span>
						        <span class="sp"></span>
						        <label class="radio-a"><input type="radio" name="use" checked></label> YES
						        <span class="sp"></span>
						        <label class="radio-a"><input type="radio" name="use"></label> NO
						    </div>
						
						    <div class="h10"></div>
						
						    배너 등록
						
						    <div class="h10"></div>
						
						    <iframe src="editor.jsp" width="100%" frameborder="0" height="300px"></iframe>
						    <div class="text-center">
						        <button class="btn-default btn btn2">등록하기</button>
						        <button onclick="window.location.reload();" class="btn-default btn btn2">취소하기</button>
						    </div>
						
							</div>
						</div>
			        <script src="../js/jquery.nicescroll.js"></script>
					<script src="../js/scripts.js"></script>
					<script src="../js/bootstrap.min.js"></script>
	</body>
</html>