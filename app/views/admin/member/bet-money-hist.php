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
		<div style="padding: 0px 10px 10px 10px;" class="body-wrap">
	
			<!--
	            <div class="location-info">
	                <div class="location-info-content">
	                    
	                    <span class="location-info-sp">></span>
	                    
	                </div>
	            </div>
	            -->
			<div class="h30"></div>
	
			<div id="tab_code0" class="div-tab tabs swipe-tab tabs-color-top">
				<div class="w-tab bg-light">
					<ul class="nav nav-tabs" data-toggle="tab-hover">
						<li class="active"><a href="#tab_33" data-toggle="tab">전체</a></li>
						<li><a href="#tab_34" data-toggle="tab">오늘</a></li>
						<li><a href="#tab_35" data-toggle="tab">이번주</a></li>
						<li><a href="#tab_36" data-toggle="tab">지난주</a></li>
						<li><a href="#tab_37" data-toggle="tab">지난달</a></li>
	
						<span class="tab-opt"> <input type="text" name="fr_date"
							value="" id="fr_date" class="datepicker1" placeholder="8/12/2018"
							size="6" maxlength="10"> <input type="text" name="to_date"
							value="" id="to_date" class="datepicker1" placeholder="8/12/2018"
							size="6" maxlength="10">
							<button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
	
							<span class="sp"></span> <input type="checkbox"> 전체 <span
							class="sp"></span> <input type="checkbox"> 베팅 <span
							class="sp"></span> <input type="checkbox"> 충전 <span
							class="sp"></span> <input type="checkbox"> 환전 <span
							class="sp"></span> <input type="checkbox"> 지급
						</span>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="tab_33">
						<div class="">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th>No. <i class="fa fa-sort"></i></th>
											<th>구분</th>
											<th>사용 전 머니</th>
											<th>사용 머니</th>
											<th>사용 후 머니</th>
											<th>게임종류</th>
											<th>종목</th>
											<th>베팅 내역</th>
											<th>배당률</th>
											<th>베팅액</th>
											<th>예상적중금</th>
											<th>일시 <i class="fa fa-sort"></i>
											<th>결과</th>
											<th>취소</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d1_all"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class="bg-green">플레이어</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d2_all"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class='td-no-height'>
												<div class='col-md-4 cntr-yellow'>
													<span>2.0</span>
												</div>
												<div class='col-md-4 cntr-red'>
													<span>1.33</span>
												</div>
												<div class='col-md-4 cntr-nrm'>
													<span>11.4</span>
												</div>
											</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="text-center relative">
								<nav>
									<ul class="pagination pagination-sm">
										<li><a href="#" aria-label="First">처음</a></li>
										<li class="disabled"><a href="#" aria-label="Previous"><i
												class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#" aria-label="Next"><i
												class="fa fa-angle-right"></i></a></li>
										<li><a href="#" aria-label="Last">마지막</a></li>
									</ul>
								</nav>
								<div class="page-select-opt1">
									한 페이지에 <select name="selector1" id="selector1" class="">
										<option>전체</option>
										<option>10</option>
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select> 항목 보기
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 136px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d1_all"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 170px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d2_all"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_34">
						<div class="">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th>No. <i class="fa fa-sort"></i></th>
											<th>구분</th>
											<th>사용 전 머니</th>
											<th>사용 머니</th>
											<th>사용 후 머니</th>
											<th>게임종류</th>
											<th>종목</th>
											<th>베팅 내역</th>
											<th>배당률</th>
											<th>베팅액</th>
											<th>예상적중금</th>
											<th>일시 <i class="fa fa-sort"></i>
											<th>결과</th>
											<th>취소</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d1_today"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class="bg-green">플레이어</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d2_today"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class='td-no-height'>
												<div class='col-md-4 cntr-yellow'>
													<span>2.0</span>
												</div>
												<div class='col-md-4 cntr-red'>
													<span>1.33</span>
												</div>
												<div class='col-md-4 cntr-nrm'>
													<span>11.4</span>
												</div>
											</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="text-center relative">
								<nav>
									<ul class="pagination pagination-sm">
										<li><a href="#" aria-label="First">처음</a></li>
										<li class="disabled"><a href="#" aria-label="Previous"><i
												class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#" aria-label="Next"><i
												class="fa fa-angle-right"></i></a></li>
										<li><a href="#" aria-label="Last">마지막</a></li>
									</ul>
								</nav>
								<div class="page-select-opt1">
									한 페이지에 <select name="selector1" id="selector1" class="">
										<option>전체</option>
										<option>10</option>
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select> 항목 보기
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 136px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d1_today"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 170px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d2_today"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_35">
						<div class="">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th>No. <i class="fa fa-sort"></i></th>
											<th>구분</th>
											<th>사용 전 머니</th>
											<th>사용 머니</th>
											<th>사용 후 머니</th>
											<th>게임종류</th>
											<th>종목</th>
											<th>베팅 내역</th>
											<th>배당률</th>
											<th>베팅액</th>
											<th>예상적중금</th>
											<th>일시 <i class="fa fa-sort"></i>
											<th>결과</th>
											<th>취소</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d1_thisweek"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class="bg-green">플레이어</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d2_thisweek"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class='td-no-height'>
												<div class='col-md-4 cntr-yellow'>
													<span>2.0</span>
												</div>
												<div class='col-md-4 cntr-red'>
													<span>1.33</span>
												</div>
												<div class='col-md-4 cntr-nrm'>
													<span>11.4</span>
												</div>
											</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="text-center relative">
								<nav>
									<ul class="pagination pagination-sm">
										<li><a href="#" aria-label="First">처음</a></li>
										<li class="disabled"><a href="#" aria-label="Previous"><i
												class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#" aria-label="Next"><i
												class="fa fa-angle-right"></i></a></li>
										<li><a href="#" aria-label="Last">마지막</a></li>
									</ul>
								</nav>
								<div class="page-select-opt1">
									한 페이지에 <select name="selector1" id="selector1" class="">
										<option>전체</option>
										<option>10</option>
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select> 항목 보기
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 136px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d1_thisweek"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 170px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d2_thisweek"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_36">
						<div class="">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th>No. <i class="fa fa-sort"></i></th>
											<th>구분</th>
											<th>사용 전 머니</th>
											<th>사용 머니</th>
											<th>사용 후 머니</th>
											<th>게임종류</th>
											<th>종목</th>
											<th>베팅 내역</th>
											<th>배당률</th>
											<th>베팅액</th>
											<th>예상적중금</th>
											<th>일시 <i class="fa fa-sort"></i>
											<th>결과</th>
											<th>취소</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d1_lastweek"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class="bg-green">플레이어</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d2_lastweek"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class='td-no-height'>
												<div class='col-md-4 cntr-yellow'>
													<span>2.0</span>
												</div>
												<div class='col-md-4 cntr-red'>
													<span>1.33</span>
												</div>
												<div class='col-md-4 cntr-nrm'>
													<span>11.4</span>
												</div>
											</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="text-center relative">
								<nav>
									<ul class="pagination pagination-sm">
										<li><a href="#" aria-label="First">처음</a></li>
										<li class="disabled"><a href="#" aria-label="Previous"><i
												class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#" aria-label="Next"><i
												class="fa fa-angle-right"></i></a></li>
										<li><a href="#" aria-label="Last">마지막</a></li>
									</ul>
								</nav>
								<div class="page-select-opt1">
									한 페이지에 <select name="selector1" id="selector1" class="">
										<option>전체</option>
										<option>10</option>
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select> 항목 보기
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 136px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d1_lastweek"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 170px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d2_lastweek"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_37">
						<div class="">
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th></th>
											<th>No. <i class="fa fa-sort"></i></th>
											<th>구분</th>
											<th>사용 전 머니</th>
											<th>사용 머니</th>
											<th>사용 후 머니</th>
											<th>게임종류</th>
											<th>종목</th>
											<th>베팅 내역</th>
											<th>배당률</th>
											<th>베팅액</th>
											<th>예상적중금</th>
											<th>일시 <i class="fa fa-sort"></i>
											<th>결과</th>
											<th>취소</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d1_lastmonth"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class="bg-green">플레이어</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
										<tr>
											<td><a class="plus collapsed" data-toggle="collapse" href="#d2_lastmonth"></a></td>
											<td>24</td>
											<td>베팅</td>
											<td>20,000</td>
											<td>-20,000</td>
											<td>30,000</td>
											<td>카지노</td>
											<td>바카라</td>
											<td class='td-no-height'>
												<div class='col-md-4 cntr-yellow'>
													<span>2.0</span>
												</div>
												<div class='col-md-4 cntr-red'>
													<span>1.33</span>
												</div>
												<div class='col-md-4 cntr-nrm'>
													<span>11.4</span>
												</div>
											</td>
											<td>1.2배</td>
											<td>12,312 원</td>
											<td>12,312 원</td>
											<td></td>
											<td class="bg-green">적중</td>
											<td><button class="btn-default btn">취소</button></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="text-center relative">
								<nav>
									<ul class="pagination pagination-sm">
										<li><a href="#" aria-label="First">처음</a></li>
										<li class="disabled"><a href="#" aria-label="Previous"><i
												class="fa fa-angle-left"></i></a></li>
										<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#" aria-label="Next"><i
												class="fa fa-angle-right"></i></a></li>
										<li><a href="#" aria-label="Last">마지막</a></li>
									</ul>
								</nav>
								<div class="page-select-opt1">
									한 페이지에 <select name="selector1" id="selector1" class="">
										<option>전체</option>
										<option>10</option>
										<option>25</option>
										<option>50</option>
										<option>100</option>
									</select> 항목 보기
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 136px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d1_lastmonth"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div style="position: absolute; padding: 10px; z-index: 100; top: 170px; left: 0; width: 100%;">
								<div class="table-responsive collapse" id="d2_lastmonth"
									style="background: #fff;">
									<table class="table table-bordered" style="margin-bottom: 0px;">
										<thead>
											<tr>
												<th>경기 일시</th>
												<th>게임 종류</th>
												<th>종목</th>
												<th>리그</th>
												<th>경기</th>
												<th>베팅 종류</th>
												<th>배당률</th>
												<th>회원결과</th>
												<th>경기결과</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="bg-yellow">적중특례</td>
												<td>적중특례</td>
											</tr>
											<tr>
												<td>YYYY-MM-DD HH:MM:SS</td>
												<td>실시간</td>
												<td>야구</td>
												<td>MLB</td>
												<td>시애틀-보스턴</td>
												<td>핸디캡:-1.5 시애틀</td>
												<td>2.0</td>
												<td class="">진행중</td>
												<td><button class="btn-default btn">취소</button></td>
											</tr>
										</tbody>
									</table>
								</div>
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