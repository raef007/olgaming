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
						<div style="padding:0px 10px 10px 10px;" class="body-wrap">

				            <!-- <div class="location-info">
				                <div class="location-info-content">
				                    회원 관리
				                    <span class="location-info-sp">></span>
				                    회원 정보
				                    <span class="location-info-sp">></span>
				                    상세 정보
				                </div>
				            </div> -->
				
				            <div class="h80"></div>
				
				            <div class="row" style="padding:0 10px 0 10px;">
				                <div class="col-md-4">
				                    <h3 style="margin-left: 10px;">상세 정보</h3>
				                </div>
				
				                <div class="col-md-8 text-right">
				                    <select name="selector1" id="selector1" class="">
				                        <option>ALL</option>
				                        <option>ACE</option>
				                        <option>TOP</option>
				                    </select>
				                    <select name="selector1" id="selector1" class="">
				                        <option>아이디</option>
				                        <option>닉네임</option>
				                        <option>예금주</option>
				                        <option>휴대폰</option>
				                    </select>
				                    <input type="text"  class="" id="input" placeholder="" size="6">
				                    <button class="btn-success btn-black btn">조회</button>
				                </div>
				            </div>
				
				            <div class="h10"></div>
				
				            <div class="row" style="padding:0 10px 0 10px;">
				
				                <div class="col-md-3">
				                    <div class="big-box0">
				                        <h4>기본정보</h4>
				                        <form class="form-horizontal">
				                            <div class="form-group">
				                                <label for="nick" class="col-sm-3 control-label">아이디</label>
				                                <div class="col-sm-9">
				                                <input disabled="" type="text" class="form-control1" id="nick" placeholder="" value="admin">
				                                </div>
				                            </div>
				                            <div class="form-group">
				                                <label for="nick" class="col-sm-3 control-label">닉네임</label>
				                                <div class="col-sm-9">
				                                <input type="text" class="form-control1" id="nick" placeholder="">
				                                </div>
				                            </div>
				                            <div class="form-group">
				                                <label for="passwd" class="col-sm-3 control-label">비밀번호</label>
				                                <div class="col-sm-9">
				                                <input type="password" class="form-control1" id="passwd" placeholder="">
				                                </div>
				                            </div>
				                            <div class="form-group">
				                                <label for="tel" class="col-sm-3 control-label">휴대폰</label>
				                                <div class="col-sm-9">
				                                <input type="text" style="text-align:right"  class="form-control1" id="tel" placeholder="">
				                                </div>
				                            </div>
				                            <div class="form-group">
				                                <label for="nick" class="col-sm-3 control-label">가입일</label>
				                                <div class="col-sm-9">
				                                <input disabled="" type="text" class="form-control1" id="nick" placeholder="" value="YYYY-MM-DD HH:MM:SS">
				                                </div>
				                            </div>
				                        </form>
				                    </div>
									<br>
				                  <div class="big-box0" style = 'min-height: 213px;'>
				
				                        <h4>활동/레벨 정보</h4>
										<br>
				                        <form class="form-horizontal">
				                            <div class="form-group">
				                                <label for="selector1" class="col-sm-3 control-label">회원 레벨</label>
				                                <div class="col-sm-9"><select name="selector1" id="selector1" class="form-control1">
				                                    <option>1</option>
				                                    <option>2</option>
				                                    <option>3</option>
				                                    <option>4</option>
				                                    <option>5</option>
				                                </select></div>
				                            </div>
				                            <div class="form-group">
				                                <label for="selector1" class="col-sm-3 control-label">회원 상태</label>
				                                <div class="col-sm-9"><select name="selector1" id="selector1" class="form-control1">
				                                    <option>정상</option>
				                                    <option>정지</option>
				                                    <option>탈퇴</option>
				                                </select></div>
				                            </div>
				                            <div class="form-group">
				                                <label for="selector1" class="col-sm-3 control-label">주시</label>
				                                <div class="col-sm-9"><select name="selector1" id="selector1" class="form-control1">
				                                    <option>정상</option>
				                                    <option>베팅주시</option>
				                                    <option>보안주시</option>
				                                </select></div>
				                            </div>
				                            <div class="form-group">
				                                <label for="selector1" class="col-sm-3 control-label">추천</label>
				                                <div class="col-sm-9"><select name="selector1" id="selector1" class="form-control1">
				                                    <option>가능</option>
				                                    <option>불가</option>
				                                </select></div>
				                            </div>
				                        </form>
				                    </div>
				                </div>
				
				                <div class="col-md-3" style="padding:0px;">
				                
				                    <div class="big-box2">
				
				                        <h4>계좌 관련 정보</h4>
										<br>
				                        <form class="form-horizontal">
				                            <div class="form-group" style="margin-bottom: 15px;">
				                                <label for="selector1" class="col-sm-3 control-label">입금레벨</label>
				                                <div class="col-sm-9"><select name="selector1" id="selector1" class="form-control1">
				                                    <option>가입</option>
				                                    <option>소액</option>
				                                    <option>중액</option>
				                                    <option>고액</option>
				                                </select></div>
				                            </div>
				                            <div class="form-group" style="margin-bottom: 15px;">
				                                <label for="selector1" class="col-sm-3 control-label">은행명</label>
				                                <div class="col-sm-9"><select name="selector1" id="selector1" class="form-control1">
				                                    <option>국민은행</option>
				                                    <option>농협</option>
				                                </select></div>
				                            </div>
				                            <div class="form-group" style="margin-bottom: 15px;">
				                                <label for="input" class="col-sm-3 control-label">예금주</label>
				                                <div class="col-sm-9">
				                                <input type="text" class="form-control1" id="input" placeholder="" size = "10">
				                                </div>
				                            </div>
				                            <div class="form-group" style="margin-bottom: 15px;">
				                                <label for="input" class="col-sm-3 control-label">계좌번호</label>
				                                <div class="col-sm-9">
				                                <input type="text" style="text-align:right" class="form-control1" id="input" placeholder="">
				                                </div>
				                            </div>
				                            <div class="h10"></div>                            
				                            <div class="form-group" style="margin-bottom: 15px;">
				                                <label for="input" class="col-sm-3 control-label">보유머니</label>
				                                <div class="col-sm-9">
				                                <input disabled="" type="text" class="form-control1" id="input" placeholder="" value="123,456,789,012 원">
				
				                                <div class="row">
				                                <div class="col-sm-3" style="padding-right:0px; width: 18%;">
				                                    <div>
				                                    <label class="radio-s"><input type="radio" name="money" checked=""></label>
				                                    +
				                                    </div>
				                                    <div>
				                                    <label class="radio-s"><input type="radio" name="money"></label>
				                                    -
				                                    </div>
				                                </div>
				                                <div class="col-sm-7" style="padding-top:8px; padding-left:0px; padding-right: 4px;">
				                                    <input type="text" class="form-control1 text-right" id="input" placeholder="">
				                                </div>
				                                <div class="col-sm-2" style="padding-top:8px;padding-left: 0px;">
				                                    원
				                                </div>
				                                </div>
				                                </div>
				                            </div>
				                            <div class="h10"></div>
				                            <div class="form-group">
				                                <label for="input" class="col-sm-3 control-label">보유포인트</label>
				                                <div class="col-sm-9">
				                                <input disabled="" type="text" class="form-control1" id="input" placeholder="" value="123,456,789,012 P">
				
				                                <div class="row">
				                                <div class="col-sm-3" style="padding-right:0px; width: 18%;">
				                                    <div>
				                                    <label class="radio-s"><input type="radio" name="point" checked=""></label>
				                                    +
				                                    </div>
				                                    <div>
				                                    <label class="radio-s"><input type="radio" name="point"></label>
				                                    -
				                                    </div>
				                                </div>
				                                <div class="col-sm-7" style="padding-top:8px; padding-left:0px; padding-right: 4px;">
				                                    <input type="text" class="form-control1 text-right" id="input" placeholder="">
				                                </div>
				                                <div class="col-sm-2" style="padding-top:8px;padding-left: 0px;">
				                                    P
				                                </div>
				                                </div>
				                                </div>
				                            </div>
				                        </form>
				                    </div>
				                </div>
				
				                <div class="col-md-6">
				
				                    <div class="big-box">
				
				                        <h4>추천인 관계</h4>
				                        <div class="h10"></div>
				                        <span>
				                            상위 추천인 
				                        </span>
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <thead>
				                                    <tr>
				                                        <th>아이디(닉네임)</th>
				                                        <th>입금 레벨</th>
				                                        <th>회원 레벨 </th>
				                                        <th>가입일 </th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>abcnick(닉네임)</td>
				                                        <td>소액</td>
				                                        <td>2</td>
				                                        <td>YYYY/MM/DD HH:MM:SS</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				                        
				                        <span>
				                            하위 추천인 
				                        </span>
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <thead>
				                                    <tr>
				                                        <th>아이디(닉네임)</th>
				                                        <th>입금 레벨</th>
				                                        <th>회원 레벨 </th>
				                                        <th>가입일 </th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>abcnick(닉네임)</td>
				                                        <td>소액</td>
				                                        <td>2</td>
				                                        <td>YYYY/MM/DD HH:MM:SS</td>
				                                    </tr>
				                                    <tr>
				                                        <td>abcnick(닉네임)</td>
				                                        <td>소액</td>
				                                        <td>2</td>
				                                        <td>YYYY/MM/DD HH:MM:SS</td>
				                                    </tr>
				                                    <tr>
				                                        <td>abcnick(닉네임)</td>
				                                        <td>소액</td>
				                                        <td>2</td>
				                                        <td>YYYY/MM/DD HH:MM:SS</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				                    </div>
				
				                    <div class="h10"></div>
				                    <div class="h10"></div>
				
				                    <div class="big-box">
				                        <h4>메모</h4>
				                        <textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1" placeholder="쪽지 발송" style="height:70px;"></textarea>
				
				                    </div>
				                </div>
				            </div>
				
				            <div class="h20"></div>
				
				            <div class="text-center">
				                <button class="btn-default btn-black btn btn2">저장하기</button>
				                <button class="btn-default btn btn2">취소하기</button>
				            </div>
				
				            <div style="height:30px;"></div>
				
				            <div id="tab_member_details" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">충/환전 내역</a></li>
				                        <li><a href = "" data-target="#tab_1" data-toggle="tab">로그인 기록</a></li>
				                        <li><a href = "" data-target="#tab_2" data-toggle="tab">베팅&머니 내역</a></li>
				                        <li><a href = "" data-target="#tab_3" data-toggle="tab">카테고리별 베팅집계</a></li>
				                        <li><a href = "" data-target="#tab_4" data-toggle="tab">회원 정보 변경 로그</a></li>
				                    </ul>
				                </div>
				                
				                <div class="tab-content">
				                    <div class="tab-pane active" id="tab_0">
				                        <div class="row">
				                            <div class="col-md-6">
				                                <div class="col-md-12" style="border:1px solid #ccc;">
				                                    <div class="h10"></div>
				                                    <h3>충전 내역</h3>
				                                    <div id="tab_member_details0" class="div-tab tabs swipe-tab tabs-color-top">
				                                        <div class="w-tab bg-light">
				                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                                <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">전체</a></li>
				                                                <li><a href = "" data-target="#tab_01" data-toggle="tab">1개월</a></li>
				                                                <li><a href = "" data-target="#tab_02" data-toggle="tab">2개월</a></li>
				                                                <li><a href = "" data-target="#tab_03" data-toggle="tab">3개월</a></li>
				                                                <li><a href = "" data-target="#tab_04" data-toggle="tab">6개월</a></li>
				                                            </ul>
				                                        </div>
				                                        <div class="tab-content">
				                                            <div class="tab-pane active" id="tab_00">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>충전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_01">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>충전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_02">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>충전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_03">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>충전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_04">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>충전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                        </div>
				                                    </div>
				
				                                    <div align="center">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				                                    </div>
				                                </div>
				                               
				
				                            </div>
				
				                            <div class="col-md-6">
				                                <div class="col-md-12" style="border:1px solid #ccc;">
				                                    <div class="h10"></div>
				                                    <h3>환전 내역</h3>
				                                    <div id="tab_member_details1" class="div-tab tabs swipe-tab tabs-color-top">
				                                        <div class="w-tab bg-light">
				                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                                <li class="active"><a href = "" data-target="#tab_10" data-toggle="tab">전체</a></li>
				                                                <li><a href = "" data-target="#tab_11" data-toggle="tab">1개월</a></li>
				                                                <li><a href = "" data-target="#tab_12" data-toggle="tab">2개월</a></li>
				                                                <li><a href = "" data-target="#tab_13" data-toggle="tab">3개월</a></li>
				                                                <li><a href = "" data-target="#tab_14" data-toggle="tab">6개월</a></li>
				                                            </ul>
				                                        </div>
				                                        <div class="tab-content">
				                                            <div class="tab-pane active" id="tab_10">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>환전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_11">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>환전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_12">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>환전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_13">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>환전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_14">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. </th>
				                                                                <th>환전 금액</th>
				                                                                <th>신청 일자 
				                                                                <th>결과</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>1</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>2</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>123,456,789,012 원</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>완료</td>
				                                                            </tr>
				                                                        </tbody>
				                                                    </table>
				                                                </div>
				                                            </div>
				
				                                        </div>
				                                    </div>
				
				                                    <div align="center">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				                                    </div>
				                                </div>
				                                
				
				
				                        </div>
				                        </div>
				                    </div>
				                    
				                    <div class="tab-pane" id="tab_1">
				                        <div id="tab_member_details2" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_20" data-toggle="tab">전체</a></li>
				                                    <li><a href = "" data-target="#tab_21" data-toggle="tab">오늘</a></li>
				                                    <li><a href = "" data-target="#tab_22" data-toggle="tab">이번주</a></li>
				                                    <li><a href = "" data-target="#tab_23" data-toggle="tab">지난주</a></li>
				                                    <li><a href = "" data-target="#tab_24" data-toggle="tab">지난달</a></li>
				                                    
				                                    <span class="tab-opt" style = "margin-left: 10px; right: inherit;">
				                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                    </span>
				                                </ul>
				                            </div>
				                            <div class="tab-content">
				                                    <div class="col-md-6">
				                                        <h3>로그인 기록</h3>
				                                    </div>
				                                    <div class="col-md-6">
				                                        <h3>접속 IP 빈도 TOP 10</h3>
				                                    </div>
				                                <div class="tab-pane active" id="tab_20">
				                                    <div class="row">
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>접속 일자 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>12345678</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td>
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">후이즈</button>
				                                                &nbsp;
				                                                <button type="submit" class="btn_submit btn-default btn">구글</button>
				                                            </td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td>
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">후이즈</button>
				                                                &nbsp;
				                                                <button type="submit" class="btn_submit btn-default btn">구글</button>
				                                            </td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td>
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">후이즈</button>
				                                                &nbsp;
				                                                <button type="submit" class="btn_submit btn-default btn">구글</button>
				                                            </td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>횟수 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td>
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">후이즈</button>
				                                                &nbsp;
				                                                <button type="submit" class="btn_submit btn-default btn">구글</button>
				                                            </td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td>
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">후이즈</button>
				                                                &nbsp;
				                                                <button type="submit" class="btn_submit btn-default btn">구글</button>
				                                            </td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td>
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">후이즈</button>
				                                                &nbsp;
				                                                <button type="submit" class="btn_submit btn-default btn">구글</button>
				                                            </td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>	
				                                    </div>
				
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				
				                                <div class="tab-pane" id="tab_21">
				                                    <div class="row">
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>접속 일자 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>12345678</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>횟수 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				                                    </div>
				
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				
				                                <div class="tab-pane" id="tab_22">
				                                    <div class="row">
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>접속 일자 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>12345678</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>횟수 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				                                    </div>
				
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				
				                                <div class="tab-pane" id="tab_23">
				                                    <div class="row">
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>접속 일자 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>12345678</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>횟수 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				                                    </div>
				
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				
				                                <div class="tab-pane" id="tab_24">
				                                    <div class="row">
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>접속 일자 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>12345678</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>YYYY-MM-DD HH:MM:SS</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				
				                                    <div class="table-responsive col-md-6">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>No. </th>
				                                            <th>접속 IP</th>
				                                            <th>횟수 
				                                            <th>조회</th>
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                          <tr>
				                                            <td>1</td>
				                                            <td>255.255.255.255</td>
				                                            <td>123</td>
				                                            <td></td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				                                    </div>
				
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				
				                            </div>
				                        </div>			
				                    </div>
				
				                    <div class="tab-pane" id="tab_2">
				                        <div id="tab_code0" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href="#tab_33" data-toggle="tab">전체</a></li>
				                                    <li><a href="#tab_34" data-toggle="tab">오늘</a></li>
				                                    <li><a href="#tab_35" data-toggle="tab">이번주</a></li>
				                                    <li><a href="#tab_36" data-toggle="tab">지난주</a></li>
				                                    <li><a href="#tab_37" data-toggle="tab">지난달</a></li>
				                                    
				                                    <span class="tab-opt">
				                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                        
				                                        <span class="sp"></span>
				
				                                        <input type="checkbox">
				                                        전체
				                                        <span class="sp"></span>
				                                        <input type="checkbox">
				                                        베팅
				                                        <span class="sp"></span>
				                                        <input type="checkbox">
				                                        충전
				                                        <span class="sp"></span>
				                                        <input type="checkbox">
				                                        환전
				                                        <span class="sp"></span>
				                                        <input type="checkbox">
				                                        지급
				                                    </span>
				                                </ul>
				                            </div>
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_33">
				                                    <div class="relative">
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th></th>
				                                                        <th>No. </th>
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
				                                                        <th>일시</th> 
				                                                        <th>결과</th>
				                                                        <th>취소</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr>
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d1"></a></td>
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
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d2"></a></td>
				                                                        <td>24</td>
				                                                        <td>베팅</td>
				                                                        <td>20,000</td>
				                                                        <td>-20,000</td>
				                                                        <td>30,000</td>
				                                                        <td>카지노</td>
				                                                        <td>바카라</td>
				                                                        <td class = 'td-no-height td-no-pad'>
				                                                            <div class = 'col-md-4 cntr-yellow'>
				                                                                <span>2.0</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-red'>
				                                                                <span>1.33</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-nrm'>
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:63px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d1">
				                                                <table class="table table-bordered">
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:95px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d2">
				                                                <table class="table table-bordered">
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
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="tab-pane" id="tab_34">
				                                    <div class="relative">
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th></th>
				                                                        <th>No. </th>
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
				                                                        <th>일시</th> 
				                                                        <th>결과</th>
				                                                        <th>취소</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr>
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d1_34"></a></td>
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
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d2_34"></a></td>
				                                                        <td>24</td>
				                                                        <td>베팅</td>
				                                                        <td>20,000</td>
				                                                        <td>-20,000</td>
				                                                        <td>30,000</td>
				                                                        <td>카지노</td>
				                                                        <td>바카라</td>
				                                                        <td class = 'td-no-height td-no-pad'>
				                                                            <div class = 'col-md-4 cntr-yellow'>
				                                                                <span>2.0</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-red'>
				                                                                <span>1.33</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-nrm'>
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:63px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d1_34">
				                                                <table class="table table-bordered">
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:95px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d2_34">
				                                                <table class="table table-bordered">
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
				                                   
				
				                                    <div class="table-responsive collapse" id="d2">
				                                        <table class="table table-bordered">
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
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="tab-pane" id="tab_35">
				                                    <div class="relative">
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th></th>
				                                                        <th>No. </th>
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
				                                                        <th>일시</th> 
				                                                        <th>결과</th>
				                                                        <th>취소</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr>
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d1_35"></a></td>
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
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d2_35"></a></td>
				                                                        <td>24</td>
				                                                        <td>베팅</td>
				                                                        <td>20,000</td>
				                                                        <td>-20,000</td>
				                                                        <td>30,000</td>
				                                                        <td>카지노</td>
				                                                        <td>바카라</td>
				                                                        <td class = 'td-no-height td-no-pad'>
				                                                            <div class = 'col-md-4 cntr-yellow'>
				                                                                <span>2.0</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-red'>
				                                                                <span>1.33</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-nrm'>
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:63px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d1_35">
				                                                <table class="table table-bordered">
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:95px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d2_35">
				                                                <table class="table table-bordered">
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
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="tab-pane" id="tab_36">
				                                    <div class="relative">
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th></th>
				                                                        <th>No. </th>
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
				                                                        <th>일시</th> 
				                                                        <th>결과</th>
				                                                        <th>취소</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr>
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d1_36"></a></td>
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
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d2_36"></a></td>
				                                                        <td>24</td>
				                                                        <td>베팅</td>
				                                                        <td>20,000</td>
				                                                        <td>-20,000</td>
				                                                        <td>30,000</td>
				                                                        <td>카지노</td>
				                                                        <td>바카라</td>
				                                                        <td class = 'td-no-height td-no-pad'>
				                                                            <div class = 'col-md-4 cntr-yellow'>
				                                                                <span>2.0</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-red'>
				                                                                <span>1.33</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-nrm'>
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:63px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d1_36">
				                                                <table class="table table-bordered">
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:95px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d2_36">
				                                                <table class="table table-bordered">
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
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				                                <div class="tab-pane" id="tab_37">
				                                    <div class="relative">
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th></th>
				                                                        <th>No. </th>
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
				                                                        <th>일시</th> 
				                                                        <th>결과</th>
				                                                        <th>취소</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr>
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d1_37"></a></td>
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
				                                                        <td><a class="plus collapsed" data-toggle="collapse" href="#d2_37"></a></td>
				                                                        <td>24</td>
				                                                        <td>베팅</td>
				                                                        <td>20,000</td>
				                                                        <td>-20,000</td>
				                                                        <td>30,000</td>
				                                                        <td>카지노</td>
				                                                        <td>바카라</td>
				                                                        <td class = 'td-no-height td-no-pad'>
				                                                            <div class = 'col-md-4 cntr-yellow'>
				                                                                <span>2.0</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-red'>
				                                                                <span>1.33</span>
				                                                            </div>
				                                                            <div class = 'col-md-4 cntr-nrm'>
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:63px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d1_37">
				                                                <table class="table table-bordered">
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
				                                        <div style="position:absolute; background:#fff; z-index:100;top:95px;left:0;width:100%;">
				                                            <div class="table-responsive collapse" id="d2_37">
				                                                <table class="table table-bordered">
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
				                                    <div class="text-center relative">
				                                        <nav>
				                                            <ul class="pagination pagination-sm">
				                                                <li><a href="#" aria-label="First">처음</a></li>
				                                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                <li><a href="#">2</a></li>
				                                                <li><a href="#">3</a></li>
				                                                <li><a href="#">4</a></li>
				                                                <li><a href="#">5</a></li>
				                                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                <li><a href="#" aria-label="Last">마지막</a></li>
				                                            </ul>
				                                        </nav>
				
				                                        <div class="page-select-opt1">
				                                            한 페이지에
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>전체</option>
				                                                <option>10</option>
				                                                <option>25</option>
				                                                <option>50</option>
				                                                <option>100</option>
				                                            </select>
				                                            항목 보기
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				
				                    <div class="tab-pane" id="tab_3">
				                        <div class="row">
				                            <div class="col-md-6">
				                                <div class="col-md-12" style="border: 1px solid #ccc;">
				                                    <div class="h10"></div>
				                                    <h3>카테고리별 세부 베팅 집계</h3>
				                                    <hr style="margin-bottom:10px;">
				                                    <form name="" id="" class="" method="get">
				                                        카테고리
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>실시간</option>
				                                            <option>스포츠</option>
				                                            <option>카지노</option>
				                                            <option>버추어</option>
				                                            <option>경마</option>
				                                        </select>
				
				                                        <span class="sp"></span>
				                                        
				                                        종목
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>전체</option>
				                                            <option>승패</option>
				                                        </select>
				
				                                        <span class="sp"></span>
				
				                                        베팅 유형
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>전체</option>
				                                            <option>승패</option>
				                                        </select>
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                    </form>
				                                    <hr style="margin-bottom:10px;">
				                                    <div class="h10"></div>
				                                    <div id="tab_member_details3" class="div-tab tabs swipe-tab tabs-color-top">
				                                        <div class="w-tab bg-light">
				                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                                <li class="active"><a href="#tab_30" data-toggle="tab">전체</a></li>
				                                                <li><a href="#tab_31" data-toggle="tab">오늘</a></li>
				                                                <li><a href="#tab_32" data-toggle="tab">이번주</a></li>
				                                                <li><a href="#tab_43" data-toggle="tab">지난주</a></li>
				                                                <li><a href="#tab_44" data-toggle="tab">지난달</a></li>
				
				                                                <span class="tab-opt">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="4">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="4">
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                                </span>
				                                            </ul>
				                                        </div>
				                                        <div class="tab-content">
				                                            <div class="tab-pane active" id="tab_30">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>카테고리</th>
				                                                        <th>베팅</th>
				                                                        <th>배당률</th>
				                                                        <th>수익금</th>
				                                                        <th>수익률(%)</th>
				                                                        <th>베팅수 
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                    </tbody>
				                                                  </table>
				                                                </div>
				
				                                                <div align="center">
				                                                    <nav>
				                                                        <ul class="pagination pagination-sm">
				                                                            <li><a href="#" aria-label="First">처음</a></li>
				                                                            <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                            <li><a href="#">2</a></li>
				                                                            <li><a href="#">3</a></li>
				                                                            <li><a href="#">4</a></li>
				                                                            <li><a href="#">5</a></li>
				                                                            <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                            <li><a href="#" aria-label="Last">마지막</a></li>
				                                                        </ul>
				                                                    </nav>
				                                                </div>
				
				                                                <div align="center">
				                                                    한 페이지에 
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>10</option>
				                                                        <option>25</option>
				                                                        <option>50</option>
				                                                        <option>100</option>
				                                                    </select>
				                                                    항목 보기
				                                                </div>
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_31">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>카테고리</th>
				                                                        <th>베팅</th>
				                                                        <th>배당률</th>
				                                                        <th>수익금</th>
				                                                        <th>수익률(%)</th>
				                                                        <th>베팅수 
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                    </tbody>
				                                                  </table>
				                                                </div>
				
				                                                <div align="center">
				                                                    <nav>
				                                                        <ul class="pagination pagination-sm">
				                                                            <li><a href="#" aria-label="First">처음</a></li>
				                                                            <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                            <li><a href="#">2</a></li>
				                                                            <li><a href="#">3</a></li>
				                                                            <li><a href="#">4</a></li>
				                                                            <li><a href="#">5</a></li>
				                                                            <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                            <li><a href="#" aria-label="Last">마지막</a></li>
				                                                        </ul>
				                                                    </nav>
				                                                </div>
				
				                                                <div align="center">
				                                                    한 페이지에 
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>10</option>
				                                                        <option>25</option>
				                                                        <option>50</option>
				                                                        <option>100</option>
				                                                    </select>
				                                                    항목 보기
				                                                </div>
				
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_32">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>카테고리</th>
				                                                        <th>베팅</th>
				                                                        <th>배당률</th>
				                                                        <th>수익금</th>
				                                                        <th>수익률(%)</th>
				                                                        <th>베팅수 
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                    </tbody>
				                                                  </table>
				                                                </div>
				
				                                                <div align="center">
				                                                    <nav>
				                                                        <ul class="pagination pagination-sm">
				                                                            <li><a href="#" aria-label="First">처음</a></li>
				                                                            <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                            <li><a href="#">2</a></li>
				                                                            <li><a href="#">3</a></li>
				                                                            <li><a href="#">4</a></li>
				                                                            <li><a href="#">5</a></li>
				                                                            <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                            <li><a href="#" aria-label="Last">마지막</a></li>
				                                                        </ul>
				                                                    </nav>
				                                                </div>
				
				                                                <div align="center">
				                                                    한 페이지에 
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>10</option>
				                                                        <option>25</option>
				                                                        <option>50</option>
				                                                        <option>100</option>
				                                                    </select>
				                                                    항목 보기
				                                                </div>
				
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_43">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>카테고리</th>
				                                                        <th>베팅</th>
				                                                        <th>배당률</th>
				                                                        <th>수익금</th>
				                                                        <th>수익률(%)</th>
				                                                        <th>베팅수 
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                    </tbody>
				                                                  </table>
				                                                </div>
				
				                                                <div align="center">
				                                                    <nav>
				                                                        <ul class="pagination pagination-sm">
				                                                            <li><a href="#" aria-label="First">처음</a></li>
				                                                            <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                            <li><a href="#">2</a></li>
				                                                            <li><a href="#">3</a></li>
				                                                            <li><a href="#">4</a></li>
				                                                            <li><a href="#">5</a></li>
				                                                            <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                            <li><a href="#" aria-label="Last">마지막</a></li>
				                                                        </ul>
				                                                    </nav>
				                                                </div>
				
				                                                <div align="center">
				                                                    한 페이지에 
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>10</option>
				                                                        <option>25</option>
				                                                        <option>50</option>
				                                                        <option>100</option>
				                                                    </select>
				                                                    항목 보기
				                                                </div>
				
				                                            </div>
				
				                                            <div class="tab-pane" id="tab_44">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>카테고리</th>
				                                                        <th>베팅</th>
				                                                        <th>배당률</th>
				                                                        <th>수익금</th>
				                                                        <th>수익률(%)</th>
				                                                        <th>베팅수 
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>실시간</td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td></td>
				                                                        <td>2</td>
				                                                      </tr>
				                                                    </tbody>
				                                                  </table>
				                                                </div>
				
				                                                <div align="center">
				                                                    <nav>
				                                                        <ul class="pagination pagination-sm">
				                                                            <li><a href="#" aria-label="First">처음</a></li>
				                                                            <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                                            <li><a href="#">2</a></li>
				                                                            <li><a href="#">3</a></li>
				                                                            <li><a href="#">4</a></li>
				                                                            <li><a href="#">5</a></li>
				                                                            <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                                            <li><a href="#" aria-label="Last">마지막</a></li>
				                                                        </ul>
				                                                    </nav>
				                                                </div>
				
				                                                <div align="center">
				                                                    한 페이지에 
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>10</option>
				                                                        <option>25</option>
				                                                        <option>50</option>
				                                                        <option>100</option>
				                                                    </select>
				                                                    항목 보기
				                                                </div>
				
				                                            </div>
				                                        </div>
				                                    </div>
				                                    <div class="h20"></div>
				                                </div>
				                            </div>
				
				                            <div class="col-md-6">
				                                <div class="col-md-12" style="border: 1px solid #ccc;">
				                                    <div class="h10"></div>
				                                    <h3>카테고리별 종합 베팅 집계</h3>
				                                    <div class="h10"></div>
				                                    <div class="table-responsive">
				                                      <table class="table table-bordered">
				                                        <thead>
				                                          <tr>
				                                            <th>카테고리</th>
				                                            <th>베팅</th>
				                                            <th>배당률</th>
				                                            <th>수익금</th>
				                                            <th>수익률(%)</th>
				                                            <th>베팅수 
				                                          </tr>
				                                        </thead>
				                                        <tbody>
				                                          <tr>
				                                            <td>실시간</td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td>2</td>
				                                          </tr>
				                                          <tr>
				                                            <td>스포츠</td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td>2</td>
				                                          </tr>
				                                          <tr>
				                                            <td>버추어스포츠</td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td>2</td>
				                                          </tr>
				                                          <tr>
				                                            <td>라이브카지노</td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td>2</td>
				                                          </tr>
				                                          <tr>
				                                            <td>경마</td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td>2</td>
				                                          </tr>
				                                          <tr>
				                                            <td>합계</td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td></td>
				                                            <td>10</td>
				                                          </tr>
				                                        </tbody>
				                                      </table>
				                                    </div>
				                                    <div class="h80"></div>
				                                    <div class="h70" style='/*height: 47px !important;'></div>
				                                </div>
				                            </div>
				                        </div>				
				                    </div>
				
				                    <div class="tab-pane" id="tab_4">
				                        <h3>회원 정보 변경 로그 (총 3건)</h3>
				
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <thead>
				                                    <tr>
				                                        <th>번호</th>
				                                        <th>일시</th> 
				                                        <th>변경항목</th>
				                                        <th>변경 전 내욕</th>
				                                        <th>변경 후 내용</th>
				                                        <th>변경자</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td>비밀번호</td>
				                                        <td>1234</td>
				                                        <td>4321</td>
				                                        <td>사용자</td>
				                                    </tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td>비밀번호</td>
				                                        <td>1234</td>
				                                        <td>4321</td>
				                                        <td>사용자</td>
				                                    </tr>
				                                    <tr>
				                                        <td>1</td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td>비밀번호</td>
				                                        <td>1234</td>
				                                        <td>4321</td>
				                                        <td>사용자</td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				                                        
				
				                    <div class="text-center relative">
				                        <nav>
				                            <ul class="pagination pagination-sm">
				                                <li><a href="#" aria-label="First">처음</a></li>
				                                <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                <li><a href="#">2</a></li>
				                                <li><a href="#">3</a></li>
				                                <li><a href="#">4</a></li>
				                                <li><a href="#">5</a></li>
				                                <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                <li><a href="#" aria-label="Last">마지막</a></li>
				                            </ul>
				                        </nav>
				
				                        <div class="page-select-opt1">
				                            한 페이지에
				                            <select name="selector1" id="selector1" class="">
				                                <option>전체</option>
				                                <option>10</option>
				                                <option>25</option>
				                                <option>50</option>
				                                <option>100</option>
				                            </select>
				                            항목 보기
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