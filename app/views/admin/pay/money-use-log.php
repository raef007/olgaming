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

							<!--         <div class="location-info">
					            <div class="location-info-content">
					                충/환전 관리
					                <span class="location-info-sp">></span>
					                머니 사용 로그
					            </div>
					        </div> -->
					
					        <div class="h80"></div>
					
					        <div id="tab_money_log" class="div-tab tabs swipe-tab tabs-color-top">
					            <div class="w-tab bg-light">
					                <ul class="nav nav-tabs" data-toggle="tab-hover">
					                    <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
					                    <li><a href = "" data-target="#tab_1" data-toggle="tab">ACE</a></li>
					                    <li><a href = "" data-target="#tab_2" data-toggle="tab">TOP</a></li>
					                </ul>
					            </div>
					            <div class="tab-content">
					                <div class="tab-pane active" id="tab_0">
					                    
					                    <form name="" id="" class="" method="get">
					                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					                        
					                        <span class="sp"></span>
					
					                        <select name="selector1" id="selector1" class="">
					                            <option>닉네임</option>
					                            <option>아이디</option>
					                        </select>
					                        <input type="text" value="" size="6">
					                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					
					                        <button class="btn btn-default pull-right">엑셀 다운로드</button>
					                    </form>
					
					                    <div class="h10"></div>
					                    
					                    <div class="table-responsive">
					                        <table class="table table-bordered">
					                            <thead>
					                                <tr>
					                                    <th><input type="checkbox"></th>
					                                    <th>NO. <i class="fa fa-sort"></i></th>
					                                    <th>사이트</th>
					                                    <th>레벨 <i class="fa fa-sort"></i></th>
					                                    <th>아이디</th>
					                                    <th>닉네임</th>
					                                    <th>사용 머니 <i class="fa fa-sort"></i></th>
					                                    <th>최용 머니 <i class="fa fa-sort"></i></th>
					                                    <th>내역</th>
					                                    <th>비고</th>
					                                    <th>등록일시 <i class="fa fa-sort"></i></th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-red">-52,740 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-blue">+12,310 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-red">-52,740 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td colspan="6">합계</td>
					                                    <td colspan="1">+374,200 원</td>
					                                    <td colspan="4"></td>
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
					
					                <div class="tab-pane" id="tab_1">
					                    
					                    <form name="" id="" class="" method="get">
					                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					                        
					                        <span class="sp"></span>
					
					                        <select name="selector1" id="selector1" class="">
					                            <option>닉네임</option>
					                            <option>아이디</option>
					                        </select>
					                        <input type="text" value="" size="6">
					                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					
					                        <button class="btn btn-default pull-right">엑셀 다운로드</button>
					                    </form>
					
					                    <div class="h10"></div>
					                    
					                    <div class="table-responsive">
					                        <table class="table table-bordered">
					                            <thead>
					                                <tr>
					                                    <th><input type="checkbox"></th>
					                                    <th>NO. <i class="fa fa-sort"></i></th>
					                                    <th>사이트</th>
					                                    <th>레벨 <i class="fa fa-sort"></i></th>
					                                    <th>아이디</th>
					                                    <th>닉네임</th>
					                                    <th>사용 머니 <i class="fa fa-sort"></i></th>
					                                    <th>최용 머니 <i class="fa fa-sort"></i></th>
					                                    <th>내역</th>
					                                    <th>비고</th>
					                                    <th>등록일시 <i class="fa fa-sort"></i></th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-red">-52,740 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-blue">+12,310 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-red">-52,740 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td colspan="6">합계</td>
					                                    <td colspan="1">+374,200 원</td>
					                                    <td colspan="4"></td>
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
					
					                <div class="tab-pane" id="tab_2">
					                    
					                    <form name="" id="" class="" method="get">
					                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					                        
					                        <span class="sp"></span>
					
					                        <select name="selector1" id="selector1" class="">
					                            <option>닉네임</option>
					                            <option>아이디</option>
					                        </select>
					                        <input type="text" value="" size="6">
					                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					
					                        <button class="btn btn-default pull-right">엑셀 다운로드</button>
					                    </form>
					
					                    <div class="h10"></div>
					                    
					                    <div class="table-responsive">
					                        <table class="table table-bordered">
					                            <thead>
					                                <tr>
					                                    <th><input type="checkbox"></th>
					                                    <th>NO. <i class="fa fa-sort"></i></th>
					                                    <th>사이트</th>
					                                    <th>레벨 <i class="fa fa-sort"></i></th>
					                                    <th>아이디</th>
					                                    <th>닉네임</th>
					                                    <th>사용 머니 <i class="fa fa-sort"></i></th>
					                                    <th>최용 머니 <i class="fa fa-sort"></i></th>
					                                    <th>내역</th>
					                                    <th>비고</th>
					                                    <th>등록일시 <i class="fa fa-sort"></i></th>
					                                </tr>
					                            </thead>
					                            <tbody>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-red">-52,740 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-blue">+12,310 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td><input type="checkbox"></td>
					                                    <td>35</td>
					                                    <td>ACE</td>
					                                    <td>2</td>
					                                    <td>testid</td>
					                                    <td>닉네임</td>
					                                    <td class="font-red">-52,740 원</td>
					                                    <td class="font-green">420,000 원</td>
					                                    <td>베팅</td>
					                                    <td><a href="../member/frame/bet.html" target="_blank">베팅번호:000000 -- 게임번호:000000</a></td>
					                                    <td>YYYY-MM-DD HH:MM:SS</td>
					                                </tr>
					                                <tr>
					                                    <td colspan="6">합계</td>
					                                    <td colspan="1">+374,200 원</td>
					                                    <td colspan="4"></td>
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