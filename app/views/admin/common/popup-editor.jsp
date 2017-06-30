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
											<div id="tab_site_set" class="div-tab tabs swipe-tab tabs-color-top">
						<div>
							제목<span style="color:#fff;">숨</span>
							<span class="sp"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<input type="text" name="" value="" id="" class="" size="20" maxlength="255">
						</div>
						
						<div class="h10"></div>
						
							팝업창 크기
							<span class="sp" style="margin-left:15px;"></span>
							가로
							<span class="sp"></span>
							<input type="text" size="6">
							px
							<span class="sp"></span>
							세로
							<span class="sp"></span>
							<input type="text" size="6">
							px
							&nbsp&nbsp&nbsp
							(등록하려는 이미지/동영상과 동일한 사이즈로 지정해주세요.)
						<div class="h10"></div>
						
							팝업위치
							<span class="sp" style="margin-left:13px;"></span>
							<span class="sp"></span>
							상단
							<span class="sp"></span>
							<input type="text" size="6">
							px
							<span class="sp"></span>
							좌측
							<span class="sp"></span>
							<input type="text" size="6">
							px
						
						<div class="h10"></div>
						
						<div>
							기간<span style="color:#fff;">숨</span>
							<span class="sp"></span>
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
							스크롤바<span style="margin:0 -16px 0 0;"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="scrollbar" checked></label> YES
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="scrollbar"></label> NO
						</div>
						
						<div class="h10"></div>
						
						<div>
							기기선택<span style="margin:0 -16px 0 0;"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="device" checked></label> 모바일+PC
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="device"></label> 모바일
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="device"></label> PC
						</div>
						
						<div class="h10"></div>
						
						<div>
							팝업종류<span style="margin:0 -16px 0 0;"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="kind" checked></label> 레이어
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="kind"></label> 모달
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="kind"></label> 팝업
						</div>
						
						<div class="h10"></div>
						
						<div>
							노출여부<span style="margin:0 -16px 0 0;"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="use" checked></label> YES
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="use"></label> NO
							<span class="sp"></span>
							<label class="radio-a"><input type="radio" name="use"></label> 로그인
							&nbsp&nbsp&nbsp(로그인 선택시 로그인 유저에게만 노출)
						
						</div>
						
						<div class="h10"></div>
						
						<div>
							순서<span style="color:#fff;">숨</span>
							<span class="sp"></span>
							<span class="sp"></span>
							<span class="sp"></span>
							<select name="" id="" class="">
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						
						<div class="h10"></div>
						
						<div>
							링크타겟<span style="margin:0 -16px 0 0;"></span>
							<span class="sp"></span>
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
							<span class="sp"></span>
							<input type="text" name="" value="" placeholder="" id="" class="" size="25" maxlength="255"> (http:// 또는 https:// 필수 입력)
						</div>
						
						<div class="h10"></div>
						
						팝업 등록
						
						<div class="h10"></div>
						
						<iframe src="editor.jsp" width="100%" frameborder="0" height="300px"></iframe>
						
						<div class="h20"></div>
						
							<div class="text-center">
								<button class="btn-default btn-black btn btn2">등록하기</button>
								<button onclick="window.location.reload();" class="btn-default btn btn2">취소하기</button>
							</div>
						
						</div>
						</div>
						</div>
						</div>
			        <script src="../js/jquery.nicescroll.js"></script>
					<script src="../js/scripts.js"></script>
					<script src="../js/bootstrap.min.js"></script>
	</body>
</html>