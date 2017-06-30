	<section style="width: 280px;">
		<div class="left-side sticky-left-side" style="">
			<div class="logo-icon text-center">
				<a href="#"><i class="lnr lnr-home"></i> </a>
			</div>

			<div class="logo left-stats">
				<div class="widget_middle_left">
					<div class="stats-info stats-info1" style="width: 196px;">
						<div class="panel-heading panel-heading1 left-panel">
							<h4 class="panel-title left-panel" style="font-size: 0.9em;">
								<i class="fa fa-bank"></i> 정산 [<span id="date1"></span>]
							</h4>
						</div>
						<div class="panel-body panel-body2 left-panel-body">
							<ul class="list-unstyled text-left widget_left_stats">
								<li>입금
									<div class="text-up pull-right">123,456,789,012 원</div>
								</li>
								<li>출금
									<div class="text-up pull-right">123,456,789,012 원</div>
								</li>
								<li>누적베팅
									<div class="text-down pull-right">123,456,789,012 원</div>
								</li>
								<li>누적배당
									<div class="text-down pull-right">123,456,789,012 원</div>
								</li>
								<li>남은베팅
									<div class="text-up pull-right">123,456,789,012 원</div>
								</li>
								<li>유저머니
									<div class="text-up pull-right">123,456,789,012 원</div>
								</li>
								<li>유저포인트
									<div class="text-up pull-right">123,456,789,012 P</div>
								</li>
								<li class="last">현재접속자
									<div class="pull-right">123456 명</div>
								</li>
							</ul>
						</div>
						<div class="panel-heading panel-heading1 left-panel">
							<h4 class="panel-title left-panel"
								style="font-size: 0.9em; letter-spacing: 3px;">
								<i class="fa fa-th"></i> OPTION
							</h4>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="left-side-inner" ng-controller = 'menuCtrl' style = 'height: 65%;'>
				<ul class="nav nav-pills nav-stacked custom-nav" left-nav-menu>
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-select"></i>
							<span>즐겨찾기</span></a>
							<ul ng-repeat = "x in favs" class="sub-menu-list">
								<li id = '{{ x.name }}_copy' fav-indicator><a href=""><i class="fa fa-star active-fav fav-itm"></i></a><a href="{{ x.link }}">{{ x.text }}</a></li>
							</ul>
					</li>
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-user"></i>
							<span>회원 관리</span></a>
							<ul class="sub-menu-list">
								<li id = 'mem-info-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!member-info">회원 정보</a></li>
								<li id = 'mem-struc-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!member-struct">추천 회원 구조</a></li>
								<li id = 'mem-subscrb-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!subscrb-code">가입 코드 관리</a></li>
							</ul>
					</li>
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-power-switch"></i>
							<span>로그인 관리</span></a>
							<ul class="sub-menu-list">
								<li id = 'log-inf-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!login-hist">로그인 정보</a></li>
								<li id = 'log-cur-user-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!curr-user">현재 접속자 & 쪽지</a></li>
								<li id = 'log-ipinf-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!ip-info">IP 블록 정보</a></li>
								<li id = 'log-smslog-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!sms-log">SMS 인증 로그</a></li>
								<li id = 'log-mng-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!subscribe">가입 쪽지 템플릿</a></li>
							</ul>
					</li>
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-magic-wand"></i>
							<span>게임 관리</span></a>
							<ul class="sub-menu-list">
								<li id = 'game-catmng-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!game-mng-cat">종목별 관리</a></li>
                                <li id = 'game-betlst-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!bet-list">베팅리스트</a></li>
							</ul>
					</li>
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-diamond"></i>
							<span>충/환전 관리</span></a>
							<ul class="sub-menu-list">
								<li id = 'pay-charge-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!charge-mng">충전 관리</a></li>
								<li id = 'pay-currency-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!exchange">환전관리</a></li>
								<li id = 'pay-uselog-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!money-use-log">머니 사용 로그</a></li>
								<li id = 'pay-pointlog-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!point-use-log">포인트 사용 로그</a></li>
								<li id = 'pay-betsts-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!betting-stat">타입별 베팅 현황</a></li>
							</ul>
					</li>       
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-menu"></i>
							<span>공지사항/고객센터</span></a>
							<ul class="sub-menu-list">
								<li id = 'service-cust-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!notice-center">공지사항/이벤트</a></li>
								<li id = 'service-center-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!cust-center">고객센터</a></li>
							</ul>
					</li>   
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-cog"></i>
							<span>사이트 설정</span></a>
							<ul class="sub-menu-list">
								<li id = 'site-conn-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!conn-setup">사이트 설정</a></li>
								<li id = 'acc-settings-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!acc-setting">계좌 설정</a></li>
								<li id = 'site-minmax-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!min-max-acc">최소/최대 금액 설정</a></li>
								<li id = 'site-radio-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!ratio-setting-event">종목별 비율 설정</a></li>
								<li id = 'site-admin-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!admin-setting">관리자 설정</a></li>
							</ul>
					</li>
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-indent-increase"></i>
							<span>콘텐츠 관리</span></a>
							<ul class="sub-menu-list">
								<li id ='content-banner-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!banner-mng">배너 관리</a></li>
								<li id ='content-popup-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!popup-mng">팝업 관리</a></li>
								<li id ='content-faq-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!faq-mng">FAQ 관리</a></li>
							</ul>
					</li>
					<li class="menu-list" style="background:#32434a !important;">
						<a href="#"><i class="lnr lnr-spell-check"></i>
							<span>통계/로그</span></a>
							<ul class="sub-menu-list">
								<li id = 'stats-date-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-by-date">날짜별 통계</a></li>
								<li id = 'stats-cat-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-by-cat">종목별 통계</a></li>
								<li id = 'stats-foreign-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-foreign-company">해외업체 통계</a></li>
								<li id = 'stats-memstats-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-member">회원 가입 통계</a></li>
								<li id = 'stats-hitrate-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-hit-rate">회원 적중률 통계</a></li>
								<li id = 'stats-dividend-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-dividend">최고 배당 통계</a></li>
								<li id = 'stats-payment-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-pay-settle">입출금 정산</a></li>
								<li id = 'stats-deposit-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-depo-settle">입금 레벨별 정산</a></li>
								<li id = 'stats-distrib-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-dir-dist">날짜별 폴더 분포</a></li>
								<li id = 'stats-odd-lnk' fav-indicator><a href=""><i class="fa fa-star"></i></a><a href="#!stats-odds">회원 지표(승률)</a></li>
							</ul>
					</li>
				</ul>
				<div class="h60"></div>
                <div class="h60"></div>
                <div class="h60"></div>
                <div class="h60"></div>
			</div>
		</div>
	</section>