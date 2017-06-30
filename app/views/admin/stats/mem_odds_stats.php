					<div style="padding:0px 10px 10px 10px;" class="body-wrap">

			            <!-- <div class="location-info">
			                <div class="location-info-content">
			                    통계/로그
			                    <span class="location-info-sp">></span>
			                    회원 지표(승률)
			                </div>
			            </div> -->
			
			            <div class="h80"></div>
			
			            <div id="tab_member_ind" class="div-tab tabs swipe-tab tabs-color-top">
			                <div class="w-tab bg-light">
			                    <ul class="nav nav-tabs" data-toggle="tab-hover">
			                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
			                        <li><a href = "" data-target="#tab_1" data-toggle="tab">ACE</a></li>
			                        <li><a href = "" data-target="#tab_2" data-toggle="tab">TOP</a></li>
			                    </ul>
			                </div>
			                
			                <div class="tab-content">
			                    <div class="tab-pane active" id="tab_0">
			                        <div id="tab_member_ind0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">전체</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">오늘</a></li>
			                                    <li><a href = "" data-target="#tab_02" data-toggle="tab">이번주</a></li>
			                                    <li><a href = "" data-target="#tab_03" data-toggle="tab">지난주</a></li>
			                                    <li><a href = "" data-target="#tab_04" data-toggle="tab">지난달</a></li>
			                                    
			                                    <span class="tab-opt">
			                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    
			                                    <span class="sp"></span>
			
			                                    <select name="" id="" class="">
			                                        <option>아이디</option>
			                                        <option>닉네임</option>
			                                    </select>
			                                    <input type="text" value="" size="6">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    </span>
			                                </ul>
			                            </div>
			                            
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_00">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			
			                                <div class="tab-pane" id="tab_01">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_02">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_03">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_04">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                    
			                    <div class="tab-pane" id="tab_1">
			                        <div id="tab_member_ind0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">전체</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">오늘</a></li>
			                                    <li><a href = "" data-target="#tab_02" data-toggle="tab">이번주</a></li>
			                                    <li><a href = "" data-target="#tab_03" data-toggle="tab">지난주</a></li>
			                                    <li><a href = "" data-target="#tab_04" data-toggle="tab">지난달</a></li>
			                                    
			                                    <span class="tab-opt">
			                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    
			                                    <span class="sp"></span>
			
			                                    <select name="" id="" class="">
			                                        <option>아이디</option>
			                                        <option>닉네임</option>
			                                    </select>
			                                    <input type="text" value="" size="6">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    </span>
			                                </ul>
			                            </div>
			                            
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_00">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_01">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_02">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                    
			                                <div class="tab-pane" id="tab_03">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                    
			                                <div class="tab-pane" id="tab_04">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                    
			                    <div class="tab-pane" id="tab_2">
			                        <div id="tab_member_ind0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">전체</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">오늘</a></li>
			                                    <li><a href = "" data-target="#tab_02" data-toggle="tab">이번주</a></li>
			                                    <li><a href = "" data-target="#tab_03" data-toggle="tab">지난주</a></li>
			                                    <li><a href = "" data-target="#tab_04" data-toggle="tab">지난달</a></li>
			                                    
			                                    <span class="tab-opt">
			                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    
			                                    <span class="sp"></span>
			
			                                    <select name="" id="" class="">
			                                        <option>아이디</option>
			                                        <option>닉네임</option>
			                                    </select>
			                                    <input type="text" value="" size="6">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    </span>
			                                </ul>
			                            </div>
			                            
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_00">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_01">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_02">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_03">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                                
			                                <div class="tab-pane" id="tab_04">
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>LV <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>평균입금액</th>
			                                                    <th>구간입금액</th>
			                                                    <th>구간출금액</th>
			                                                    <th>총입금액</th>
			                                                    <th>총출금액</th>
			                                                    <th>일반베팅</th>
			                                                    <th>일반베팅(2폴더이하)</th>
			                                                    <th>일반승률</th>
			                                                    <th>평균 베팅액</th>
			                                                    <th>정보</th>
			                                                    <th>베팅 <i class="fa fa-sort"></i></th>
			                                                    <th>로그</th>
			                                                    <th>쪽지</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
			                                                </tr>
			                                                <tr>
			                                                    <td>1</td>
			                                                    <td>ACE</td>
			                                                    <td>k123</td>
			                                                    <td>테스트</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>12,345 원</td>
			                                                    <td>100% (12)</td>
			                                                    <td>100% (12)</td>
			                                                    <td>67%</td>
			                                                    <td>12,345 원</td>
			                                                    <td><a href  = './member/membership_info_details.jsp' target = '_blank' class="btn-default btn">정보</a></td>
			                                                    <td><a href = './member/bet-money-hist.jsp' target = '_blank' class="btn-default btn">베팅</a></td>
			                                                    <td><a href = './pay/money-use-log.jsp' target = '_blank' class="btn-default btn">로그</a></td>
			                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
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
			                </div>
			            </div>
			        </div>
			        
			        <div id = "memo-modal" class="modal fade" tabindex="-1" role="dialog">
			            <div class="modal-dialog modal-lg" role="document">
			                <div class="modal-content">
			                    <div class="modal-header">
			                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                            <span aria-hidden="true">&times;</span>
			                        </button>
			                        <h4 class="modal-title">쪽지 보내기</h4>
			                    </div>
			                    
			                    <div class="modal-body">
			                        <div class="row" style="padding:15px;">
			                        
			                            <div class="col-xs-6">
			                                <b>쪽지 수신 대상</b>
			                                <div class="h30"></div>
			                                <input type="text" class="form-control1" id="input" placeholder="제목">
			                                <div class="h10"></div>
			                                <textarea name="txtarea1" id="txtarea1" cols="50" style="resize:none; height:265px;" placeholder="내용" class="form-control1"></textarea>
			                            </div>
			
			                            <div class="col-xs-6">
			                                <b>고객센터 답변 템플릿</b>
			                                
			                                <div class="h30"></div>
			                                <div class="form-group">
			                                <select multiple="" class="form-control1">
			                                    <option>기본 답변</option>
			                                    <option>환전, 정산 요청</option>
			                                    <option>추천 코드 발급 미대상</option>
			                                    <option>계좌번호 문의시</option>
			                                </select>
			                                </div>
			                            </div>
			                        </div>
			
			                        <div class="h10"></div>
			
			                        <div class="text-center">
			                            <button class="btn-default btn-black btn">전송</button>
			                            <button onclick="window.location.reload();" class="btn-default btn">취소</button>
			                        </div>
			                    </div>
			                    
			                    <div class="modal-footer">
			                        
			                    </div>
			                </div>
			            </div>
			        </div>