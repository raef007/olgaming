					<div style="padding:0px 10px 10px 10px;" class="body-wrap">
	
				           <!--  <div class="location-info">
				                <div class="location-info-content">
				                    회원 관리
				                    <span class="location-info-sp">></span>
				                    회원 정보
				                </div>
				            </div> -->
				
				            <div class="h80"></div>
				
				            <div id="tab_member_infos" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li><a href = "" data-target="#tab_1" data-toggle="tab">ACE</a></li>
				                        <li><a href = "" data-target="#tab_2" data-toggle="tab">TOP</a></li>
				                    </ul>
				                </div>
				                
				                <div class="tab-content">
				                    <div class="tab-pane active" id="tab_0">
				                        <div id="tab_member_infos0" class="div-tab tabs swipe-tab tabs-color-top">
				                        
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_3" data-toggle="tab">회원 정보</a></li>
				                                    <li><a href = "" data-target="#tab_4" data-toggle="tab">회원 정보 변경 로그</a></li>
				                                </ul>
				                            </div>
				                            
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_3">
				                                    <b>회원 정보(총 123,456 명)</b>
				                                    
				                                    <div class="h30"></div>
				                                    <div class="row">
				                                        <div class="col-md-6 text-left">
				                                            <button class="btn-default btn" data-toggle="collapse" data-target="#18-filter">필터</button></td>
				                                            <button class="btn-default btn">쪽지</button></td>
				                                        </div>
				                                        
				                                        <div class="col-md-6 text-right">
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>닉네임</option>
				                                                <option>아이디</option>
				                                                <option>연락처</option>
				                                                <option>이름</option>
				                                                <option>메모</option>
				                                                <option>추천인아이디</option>
				                                            </select>
				                                            <input type="text" value="" size="6">
				                                            <button type="submit" class="btn-success btn-black btn">조회</button>
				                                            
				                                            <span class="sp"></span>
				                                            <button type="submit" class="btn-default btn">삭제</button>
				                                        </div>
				                                    </div>
				                                    
				                                    <div class="h10"></div>
				
				                                    <div class="collapse" id="18-filter" style = 'border: solid 1px #ddd; padding: 10px;'>
				                                        <!-- <div class="row">
				                                            <div class="col-md-13">
				                                                필터
				                                            </div>
				                                            <div class="col-md-14">
				                                                <div>
				                                                    상태
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>정지</option>
				                                                        <option>탈퇴</option>
				                                                    </select>
				                                                    
				                                                    <span class="sp"></span>
																	<span class="sp"></span>
																	&nbsp
				                                                    
				                                                    추천
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>가능</option>
				                                                        <option>불가</option>
				                                                    </select>
				                                                    
				                                                    <span class="sp"></span>
																	<span class="sp"></span>
																	&nbsp&nbsp
				                                                    
				                                                    주시
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>보안주시</option>
				                                                        <option>베팅주시</option>
				                                                    </select>
				                                                    
				                                                    <span class="sp"></span>
																	<span class="sp"></span>												
																	&nbsp
				                                                    
				                                                    <input type="checkbox">
				                                                    충전금액
				                                                    <input type="text" name="" value="" size="6">
				                                                    원
				                                                </div>
															<br>
				                                                <div>
				                                                    입금레벨
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>가입</option>
				                                                        <option>소액</option>
				                                                        <option>중액</option>
				                                                        <option>고액</option>
				                                                    </select>
				                                                    
				                                                    <span class="sp"></span>
				                                                    
				                                                    회원레벨
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5</option>
				                                                    </select>
				                                                    
				                                                    <span class="sp"></span>
				                                                    
				                                                    입금횟수
				                                                    <select name="selector1" id="selector1" class="">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5회 이상</option>
				                                                    </select>
				                                                    
				                                                    <span class="sp"></span>
				
				                                                    <input type="checkbox">
				                                                    충전금액
				                                                    <input type="text" name="" value="" size="6">
				                                                    원 ~
				                                                    <input type="text" name="" value="" size="6">
				                                                    원
				                                                    
				                                                    <button type="submit" class="btn-success btn-black btn btn-1">조회</button>
				                                                </div>
				                                            </div>
				                                        </div>
				                                        <div class="h80"></div> -->
				                                        <div class="row" style="padding:0px; margin-bottom: 5px;">
				                                            <div class="col-md-1" style="width:4%;">
				                                                필터
				                                            </div>
				                                            <div class="col-md-11">
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">상태</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>정지</option>
				                                                        <option>탈퇴</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">추천</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>가능</option>
				                                                        <option>불가</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">주시</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>보안주시</option>
				                                                        <option>베팅주시</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-3">
				                                                    <input type="checkbox" class="" style="">
				                                                    <span class="" style="padding-left: 10px; padding-right: 10px;">충전금액</span>
				                                                    <input type="text" name="" value="" class="" size="6" style="padding-left: 10px; padding-right: 10px;">
				                                                    <span class="">원</span>
				                                                </div>
				                                            </div>
				                                        </div>
				                                        <div class="row" style="padding:0px;">
				                                            <div class="col-md-1" style="width:4%;">
				                                                
				                                            </div>
				                                            <div class="col-md-11">
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">입금레벨</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>가입</option>
				                                                        <option>소액</option>
				                                                        <option>중액</option>
				                                                        <option>고액</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">회원레벨</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">입금횟수</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5회 이상</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-6" >
				                                                    <input type="checkbox" class="" style="">
				                                                    <span class="" style="padding-left: 10px; padding-right: 10px;">충전금액</span>
				                                                    <input type="text" name="" value="" class="" size="6" style="padding-left: 10px; padding-right: 10px;">
				                                                    <span class="">원 ~</span>
				                                                
				                                                    <input type="text" name="" value="" size="6" class="">
				                                                    <span class="">원</span>
				                                                    <button type="submit" class="btn-success btn-black btn btn-1 ">조회</button>
				                                                </div>
				                                            </div>
				                                        </div>
				                                        <div class="h30"></div>
				                                        
				                                        <div class="row">
				                                            <div class="col-md-13">
				                                                등록일
				                                            </div>
				
				                                            <div class="col-md-14">
				                                                <button class="btn-default btn-1 btn">전체</button>
				                                                <button class="btn-default btn-1 btn">오늘</button>
				                                                <button class="btn-default btn-1 btn">이번주</button>
				                                                <button class="btn-default btn-1 btn">지난주</button>
				                                                <button class="btn-default btn-1 btn">지난달</button>
				
				                                                <span class="sp"></span>
				                                                <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <button type="submit" class="btn-success btn-black btn btn-1">조회</button>
				                                            </div>
				                                        </div>
				                                    </div>
				                                    
				                                    <div class="h10"></div>
				                                    
				                                    <!--회원 정보-->
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th><input type="checkbox" name="" value="" id=""></th>
				                                                    <th>사이트</th>
				                                                    <th>LV <i class="fa fa-sort"></i>
				                                                    <th>입금레벨</th>
				                                                    <th>아이디</th>
				                                                    <th>닉네임</th>
				                                                    <th>추천인ID</th>
				                                                    <th>연락처</th>
				                                                    <th>베팅머니</th>
				                                                    <th>포인트</th>
				                                                    <th>입금횟수</th>
				                                                    <th>입금</th>
				                                                    <th>평균입금엑</th>
				                                                    <th>출금</th>
				                                                    <th>총로그인 <i class="fa fa-sort"></i>
				                                                    <th>최근2주로그인 <i class="fa fa-sort"></i>
				                                                    <th>등록일최근로그인 <i class="fa fa-sort"></i>
				                                                    <th>상태</th>
				                                                    <th>추천</th>
				                                                    <th>주시</th>
				                                                    <th>로그</th>
				                                                    <th>쪽지</th>
				                                                    <th>메모</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td><a href = "./member/membership_info_details.jsp" class="btn-default btn" target="_blank" >로그</a></td>
				                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
				                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#record-modal">메모</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td><a href = "./member/membership_info_details.jsp" class="btn-default btn" target="_blank" >로그</a></td>
				                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
				                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#record-modal">메모</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td><a href = "./member/membership_info_details.jsp" class="btn-default btn" target="_blank" >로그</a></td>
				                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#memo-modal">쪽지</button></td>
				                                                    <td><button class="btn-default btn" data-toggle="modal" data-target="#record-modal">메모</button></td>
				                                                </tr>
				                                            </tbody>
				                                        </table>
				                                    </div>
				                                    <!--회원 정보-->	
				                                    
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
				                                
				                                <div class="tab-pane" id="tab_4">
				                                    <b>회원 정보 변경 로그(총 123 건)</b>
				
				                                    <div class="h30"></div>
				                                    <!--회원 정보 변경 로그-->
				                                    <div id="tab_member_infos3" class="div-tab tabs swipe-tab tabs-color-top">
				                                        <div class="w-tab bg-light">
				                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                                <li class="active"><a href = "" data-target="#tab_5" data-toggle="tab">전체</a></li>
				                                                <li><a href = "" data-target="#tab_6" data-toggle="tab">오늘</a></li>
				                                                <li><a href = "" data-target="#tab_7" data-toggle="tab">이번주</a></li>
				                                                <li><a href = "" data-target="#tab_8" data-toggle="tab">지난주</a></li>
				                                                <li><a href = "" data-target="#tab_9" data-toggle="tab">지난달</a></li>
				
				                                                <span class="tab-opt">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                                
				                                                <span class="sp"></span>
				
				                                                <select name="selector1" id="selector1" class="">
				                                                    <option>아이디</option>
				                                                    <option>추천인</option>
				                                                    <option>가입자</option>
				                                                </select>
				                                                <input type="text" value="" size="6">
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                                </span>
				                                            </ul>
				                                        </div>
				                                        
				                                        <div class="tab-content">
				                                            <div class="tab-pane active" id="tab_5">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. <i class="fa fa-sort"></i></th>
				                                                                <th>사이트</th>
				                                                                <th>아이디</th>
				                                                                <th>닉네임</th>
				                                                                <th>입금 레벨</th>
				                                                                <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                                <th>변경내용</th>
				                                                                <th>변경 전</th>
				                                                                <th>변경 후</th>
				                                                                <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                                <th>변경자</th>
				                                                            </tr>
				                                                        </thead>
				                                                        
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>사용자</td>
				                                                            </tr>
				                                                            
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>사용자</td>
				                                                            </tr>
				                                                            
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            
				                                            <div class="tab-pane" id="tab_6">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. <i class="fa fa-sort"></i></th>
				                                                                <th>사이트</th>
				                                                                <th>아이디</th>
				                                                                <th>닉네임</th>
				                                                                <th>입금 레벨</th>
				                                                                <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                                <th>변경내용</th>
				                                                                <th>변경 전</th>
				                                                                <th>변경 후</th>
				                                                                <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                                <th>변경자</th>
				                                                            </tr>
				                                                        </thead>
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>사용자</td>
				                                                            </tr>
				                                                            
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>사용자</td>
				                                                            </tr>
				                                                            
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            
				                                            <div class="tab-pane" id="tab_7">
				                                                <div class="table-responsive">
				                                                    <table class="table table-bordered">
				                                                        <thead>
				                                                            <tr>
				                                                                <th>No. <i class="fa fa-sort"></i></th>
				                                                                <th>사이트</th>
				                                                                <th>아이디</th>
				                                                                <th>닉네임</th>
				                                                                <th>입금 레벨</th>
				                                                                <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                                <th>변경내용</th>
				                                                                <th>변경 전</th>
				                                                                <th>변경 후</th>
				                                                                <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                                <th>변경자</th>
				                                                            </tr>
				                                                        </thead>
				                                                        
				                                                        <tbody>
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>사용자</td>
				                                                            </tr>
				                                                            
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                                <td>사용자</td>
				                                                            </tr>
				                                                            
				                                                            <tr>
				                                                                <td>3</td>
				                                                                <td>ACE</td>
				                                                                <td>test</td>
				                                                                <td>테스트</td>
				                                                                <td>소액</td>
				                                                                <td>0</td>
				                                                                <td>비밀번호</td>
				                                                                <td>1234</td>
				                                                                <td>4321</td>
				                                                                <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            
				                                            <div class="tab-pane" id="tab_8">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            
				                                            <div class="tab-pane" id="tab_9">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                    <!--회원 정보 변경 로그-->
				                                </div>
				                            </div>
				                        </div>					
				                    </div>
				
				                    <div class="tab-pane" id="tab_1">
				                        <div id="tab_member_infos1" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_13" data-toggle="tab">회원 정보</a></li>
				                                    <li><a href = "" data-target="#tab_14" data-toggle="tab">회원 정보 변경 로그</a></li>
				                                </ul>
				                            </div>
				                            
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_13">
				                                    <b>회원 정보(총 123,456 명)</b>
				                                    
				                                    <div class="h30"></div>
				                                    <div class="row">
				                                    <div class="col-md-6 text-left">
				                                        <button class="btn-default btn" data-toggle="collapse" data-target="#18-filter_ace">필터</button></td>
				                                        <button class="btn-default btn">쪽지</button></td>
				                                    </div>
				                                    <div class="col-md-6 text-right">
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>닉네임</option>
				                                            <option>아이디</option>
				                                            <option>연락처</option>
				                                            <option>이름</option>
				                                            <option>메모</option>
				                                            <option>추천인아이디</option>
				                                        </select>
				                                        <input type="text" value="" size="6">
				                                        <button type="submit" class="btn-success btn-black btn">조회</button>
				                                        
				                                        <span class="sp"></span>
				                                        <button type="submit" class="btn-default btn">삭제</button>
				                                    </div>
				                                    </div>
				                                    <div class="h10"></div>
				
				                                    <div class="collapse" id="18-filter_ace">
				
				                                        <div class="row" style="padding:0px; margin-bottom: 5px;">
				                                            <div class="col-md-1" style="width:4%;">
				                                                필터
				                                            </div>
				                                            <div class="col-md-11">
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">상태</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>정지</option>
				                                                        <option>탈퇴</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">추천</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>가능</option>
				                                                        <option>불가</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">주시</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>보안주시</option>
				                                                        <option>베팅주시</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-3">
				                                                    <input type="checkbox" class="" style="">
				                                                    <span class="" style="padding-left: 10px; padding-right: 10px;">충전금액</span>
				                                                    <input type="text" name="" value="" class="" size="6" style="padding-left: 10px; padding-right: 10px;">
				                                                    <span class="">원</span>
				                                                </div>
				                                            </div>
				                                        </div>
				                                        <div class="row" style="padding:0px;">
				                                            <div class="col-md-1" style="width:4%;">
				                                                
				                                            </div>
				                                            <div class="col-md-11">
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">입금레벨</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>가입</option>
				                                                        <option>소액</option>
				                                                        <option>중액</option>
				                                                        <option>고액</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">회원레벨</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">입금횟수</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5회 이상</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-3" style="width: 23%;">
				                                                    <input type="checkbox" class="" style="">
				                                                    <span class="" style="padding-left: 10px; padding-right: 10px;">충전금액</span>
				                                                    <input type="text" name="" value="" class="" size="6" style="padding-left: 10px; padding-right: 10px;">
				                                                    <span class="">원 ~</span>
				                                                </div>
				                                                <div class="col-md-3">
				                                                    <input type="text" name="" value="" size="6" class="">
				                                                    <span class="">원</span>
				                                                    <button type="submit" class="btn-success btn-black btn btn-1 ">조회</button>
				                                                </div>
				                                            </div>
				                                        </div>
				                                        <div class="h30"></div>
				                                        <div class="row">
				                                            <div class="col-md-13">
				                                                등록일
				                                            </div>
				
				                                            <div class="col-md-14">
				                                                <button class="btn-default btn-1 btn">전체</button>
				                                                <button class="btn-default btn-1 btn">오늘</button>
				                                                <button class="btn-default btn-1 btn">이번주</button>
				                                                <button class="btn-default btn-1 btn">지난주</button>
				                                                <button class="btn-default btn-1 btn">지난달</button>
				
				                                                <span class="sp"></span>
				                                                <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <button type="submit" class="btn-success btn-black btn btn-1">조회</button>
				                                            </div>
				                                        </div>
				
				                                    </div>
				                                        
				                                    <div class="h10"></div>
				                                    <!--회원 정보-->
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th><input type="checkbox" name="" value="" id=""></th>
				                                                    <th>사이트</th>
				                                                    <th>LV <i class="fa fa-sort"></i>
				                                                    <th>입금레벨</th>
				                                                    <th>아이디</th>
				                                                    <th>닉네임</th>
				                                                    <th>추천인ID</th>
				                                                    <th>연락처</th>
				                                                    <th>베팅머니</th>
				                                                    <th>포인트</th>
				                                                    <th>입금횟수</th>
				                                                    <th>입금</th>
				                                                    <th>평균입금엑</th>
				                                                    <th>출금</th>
				                                                    <th>정산</th>
				                                                    <th>총로그인 <i class="fa fa-sort"></i>
				                                                    <th>최근2주로그인 <i class="fa fa-sort"></i>
				                                                    <th>등록일최근로그인 <i class="fa fa-sort"></i>
				                                                    <th>상태</th>
				                                                    <th>추천</th>
				                                                    <th>주시</th>
				                                                    <th>로그</th>
				                                                    <th>쪽지</th>
				                                                    <th>메모</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td><a href = "member-mng-frm.html" class="btn-default btn">로그</a></td>
				                                                    <td><button class="btn-default btn">쪽지</button></td>
				                                                    <td><button class="btn-default btn">메모</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td></td>
				                                                    <td></td>
				                                                    <td></td>
				                                                </tr>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td></td>
				                                                    <td></td>
				                                                    <td></td>
				                                                </tr>
				                                            </tbody>
				                                        </table>
				                                    </div>
				                                    <!--회원 정보-->	
				                                    
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
				                                <div class="tab-pane" id="tab_14">
				                                <b>회원 정보 변경 로그(총 123 건)</b>
				
				                                <div class="h30"></div>
				                                    <!--회원 정보 변경 로그-->
				                                    <div id="tab_member_infos4" class="div-tab tabs swipe-tab tabs-color-top">
				                                        <div class="w-tab bg-light">
				                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                                <li class="active"><a href="#tab_45" data-toggle="tab">전체</a></li>
				                                                <li><a href="#tab_46" data-toggle="tab">오늘</a></li>
				                                                <li><a href="#tab_47" data-toggle="tab">이번주</a></li>
				                                                <li><a href="#tab_48" data-toggle="tab">지난주</a></li>
				                                                <li><a href="#tab_49" data-toggle="tab">지난달</a></li>
				
				                                                <span class="tab-opt">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                                
				                                                <span class="sp"></span>
				
				                                                <select name="selector1" id="selector1" class="">
				                                                    <option>아이디</option>
				                                                    <option>추천인</option>
				                                                    <option>가입자</option>
				                                                </select>
				                                                <input type="text" value="" size="6">
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                                </span>
				                                            </ul>
				                                        </div>
				                                        <div class="tab-content">
				                                            <div class="tab-pane active" id="tab_45">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_46">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_47">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_48">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_49">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                    <!--회원 정보 변경 로그-->
				                                </div>
				                            </div>
				                        </div>						
				                    </div>
				
				                    <div class="tab-pane" id="tab_2">
				                        <div id="tab_member_infos2" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_23" data-toggle="tab">회원 정보</a></li>
				                                    <li><a href = "" data-target="#tab_24" data-toggle="tab">회원 정보 변경 로그</a></li>
				                                </ul>
				                            </div>
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_23">
				                                    <b>회원 정보(총 123,456 명)</b>
				                                    
				                                    <div class="h30"></div>
				                                    <div class="row">
				                                    <div class="col-md-6 text-left">
				                                        <button class="btn-default btn" data-toggle="collapse" data-target="#18-filter_top">필터</button></td>
				                                        <button class="btn-default btn">쪽지</button></td>
				                                    </div>
				                                    <div class="col-md-6 text-right">
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>닉네임</option>
				                                            <option>아이디</option>
				                                            <option>연락처</option>
				                                            <option>이름</option>
				                                            <option>메모</option>
				                                            <option>추천인아이디</option>
				                                        </select>
				                                        <input type="text" value="" size="6">
				                                        <button type="submit" class="btn-success btn-black btn">조회</button>
				                                        
				                                        <span class="sp"></span>
				                                        <button type="submit" class="btn-default btn">삭제</button>
				                                    </div>
				                                    </div>
				                                    <div class="h10"></div>
				
				                                    <div class="collapse" id="18-filter_top">
				                                         <div class="row" style="padding:0px; margin-bottom: 5px;">
				                                            <div class="col-md-1" style="width:4%;">
				                                                필터
				                                            </div>
				                                            <div class="col-md-11">
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">상태</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>정지</option>
				                                                        <option>탈퇴</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">추천</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>가능</option>
				                                                        <option>불가</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">주시</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>정상</option>
				                                                        <option>보안주시</option>
				                                                        <option>베팅주시</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-3">
				                                                    <input type="checkbox" class="" style="">
				                                                    <span class="" style="padding-left: 10px; padding-right: 10px;">충전금액</span>
				                                                    <input type="text" name="" value="" class="" size="6" style="padding-left: 10px; padding-right: 10px;">
				                                                    <span class="">원</span>
				                                                </div>
				                                            </div>
				                                        </div>
				                                        <div class="row" style="padding:0px;">
				                                            <div class="col-md-1" style="width:4%;">
				                                                
				                                            </div>
				                                            <div class="col-md-11">
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">입금레벨</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>가입</option>
				                                                        <option>소액</option>
				                                                        <option>중액</option>
				                                                        <option>고액</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">회원레벨</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-2">
				                                                    <span class="col-md-6">입금횟수</span>
				                                                    <select name="selector1" id="selector1" class="col-md-6">
				                                                        <option>전체</option>
				                                                        <option>1</option>
				                                                        <option>2</option>
				                                                        <option>3</option>
				                                                        <option>4</option>
				                                                        <option>5회 이상</option>
				                                                    </select>
				                                                </div>
				                                                <div class="col-md-3" style="width: 23%;">
				                                                    <input type="checkbox" class="" style="">
				                                                    <span class="" style="padding-left: 10px; padding-right: 10px;">충전금액</span>
				                                                    <input type="text" name="" value="" class="" size="6" style="padding-left: 10px; padding-right: 10px;">
				                                                    <span class="">원 ~</span>
				                                                </div>
				                                                <div class="col-md-3">
				                                                    <input type="text" name="" value="" size="6" class="">
				                                                    <span class="">원</span>
				                                                    <button type="submit" class="btn-success btn-black btn btn-1 ">조회</button>
				                                                </div>
				                                            </div>
				                                        </div>
				                                        <div class="h30"></div>
				                                        <div class="row">
				                                            <div class="col-md-13">
				                                                등록일
				                                            </div>
				
				                                            <div class="col-md-14">
				                                                <button class="btn-default btn-1 btn">전체</button>
				                                                <button class="btn-default btn-1 btn">오늘</button>
				                                                <button class="btn-default btn-1 btn">이번주</button>
				                                                <button class="btn-default btn-1 btn">지난주</button>
				                                                <button class="btn-default btn-1 btn">지난달</button>
				
				                                                <span class="sp"></span>
				                                                <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <button type="submit" class="btn-success btn-black btn btn-1">조회</button>
				                                            </div>
				                                        </div>
				                                    </div>
				                                        
				                                    <div class="h10"></div>
				                                    <!--회원 정보-->
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th><input type="checkbox" name="" value="" id=""></th>
				                                                    <th>사이트</th>
				                                                    <th>LV <i class="fa fa-sort"></i>
				                                                    <th>입금레벨</th>
				                                                    <th>아이디</th>
				                                                    <th>닉네임</th>
				                                                    <th>추천인ID</th>
				                                                    <th>연락처</th>
				                                                    <th>베팅머니</th>
				                                                    <th>포인트</th>
				                                                    <th>입금횟수</th>
				                                                    <th>입금</th>
				                                                    <th>평균입금엑</th>
				                                                    <th>출금</th>
				                                                    <th>정산</th>
				                                                    <th>총로그인 <i class="fa fa-sort"></i>
				                                                    <th>최근2주로그인 <i class="fa fa-sort"></i>
				                                                    <th>등록일최근로그인 <i class="fa fa-sort"></i>
				                                                    <th>상태</th>
				                                                    <th>추천</th>
				                                                    <th>주시</th>
				                                                    <th>로그</th>
				                                                    <th>쪽지</th>
				                                                    <th>메모</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td><a href = "member-mng-frm.html" class="btn-default btn">로그</a></td>
				                                                    <td><button class="btn-default btn">쪽지</button></td>
				                                                    <td><button class="btn-default btn">메모</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td></td>
				                                                    <td></td>
				                                                    <td></td>
				                                                </tr>
				                                                <tr>
				                                                    <td><input type="checkbox" name="" value="" id=""></td>
				                                                    <td>ACE</td>
				                                                    <td>0</td>
				                                                    <td>가입</td>
				                                                    <td>asdf</td>
				                                                    <td>닉넴</td>
				                                                    <td>testyo</td>
				                                                    <td>
				                                                        010-0000-0000
				                                                        <button type="button" data-value="010-0000-0000" class="btn btn-default google-search">구글</button>
				                                                    </td>
				                                                    <td>0 원</td>
				                                                    <td>104 P</td>
				                                                    <td>0 회</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>0원</td>
				                                                    <td>1234</td>
				                                                    <td>123</td>
				                                                    <td>Y-M-D H:M:S</td>
				                                                    <td>정상</td>
				                                                    <td>불가</td>
				                                                    <td>주시</td>
				                                                    <td></td>
				                                                    <td></td>
				                                                    <td></td>
				                                                </tr>
				                                            </tbody>
				                                        </table>
				                                    </div>
				                                    <!--회원 정보-->	
				                                    
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
				                                <b>회원 정보 변경 로그(총 123 건)</b>
				
				                                <div class="h30"></div>
				                                    <!--회원 정보 변경 로그-->
				                                    <div id="tab_member_infos5" class="div-tab tabs swipe-tab tabs-color-top">
				                                        <div class="w-tab bg-light">
				                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                                <li class="active"><a href="#tab_55" data-toggle="tab">전체</a></li>
				                                                <li><a href="#tab_56" data-toggle="tab">오늘</a></li>
				                                                <li><a href="#tab_57" data-toggle="tab">이번주</a></li>
				                                                <li><a href="#tab_58" data-toggle="tab">지난주</a></li>
				                                                <li><a href="#tab_59" data-toggle="tab">지난달</a></li>
				
				                                                <span class="tab-opt">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <input type="text" name="date" value="" id="date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                                
				                                                <span class="sp"></span>
				
				                                                <select name="selector1" id="selector1" class="">
				                                                    <option>아이디</option>
				                                                    <option>추천인</option>
				                                                    <option>가입자</option>
				                                                </select>
				                                                <input type="text" value="" size="6">
				                                                <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                                </span>
				                                            </ul>
				                                        </div>
				                                        <div class="tab-content">
				                                            <div class="tab-pane active" id="tab_55">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_56">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_57">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_58">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                            <div class="tab-pane" id="tab_59">
				                                                <div class="table-responsive">
				                                                  <table class="table table-bordered">
				                                                    <thead>
				                                                      <tr>
				                                                        <th>No. <i class="fa fa-sort"></i></th>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>입금 레벨</th>
				                                                        <th>회원 레벨 <i class="fa fa-sort"></i></th>
				                                                        <th>변경내용</th>
				                                                        <th>변경 전</th>
				                                                        <th>변경 후</th>
				                                                        <th>변경일자 <i class="fa fa-sort"></i></th>
				                                                        <th>변경자</th>
				                                                      </tr>
				                                                    </thead>
				                                                    <tbody>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                                        <td>사용자</td>
				                                                      </tr>
				                                                      <tr>
				                                                        <td>3</td>
				                                                        <td>ACE</td>
				                                                        <td>test</td>
				                                                        <td>테스트</td>
				                                                        <td>소액</td>
				                                                        <td>0</td>
				                                                        <td>비밀번호</td>
				                                                        <td>1234</td>
				                                                        <td>4321</td>
				                                                        <td>YYYY-MM-DD HH:MM:SS</td>
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
				                                    <!--회원 정보 변경 로그-->
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
				        
				        <div id = "record-modal" class="modal fade" tabindex="-1" role="dialog">
				            <div class="modal-dialog modal-lg" role="document">
				                <div class="modal-content">
				                    <div class="modal-header">
				                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                            <span aria-hidden="true">&times;</span>
				                        </button>
				                        <h4 class="modal-title">메모</h4>
				                    </div>
				                    
				                    <div class="modal-body">
				                        <div style="padding:15px;">
				                            <textarea name="txtarea1" id="txtarea1" cols="50" style="resize:none; height:240px;" placeholder="★쪽지 발송 2017-04-27일까지 이용 없을 시 정지 처리. 정지 날짜 이전 이용 시 메모 삭제 요망★" class="form-control1"></textarea>
				                            
				                            <div class="h10"></div>
				
				                            <div class="text-center">
				                                <button class="btn-default btn-black btn">저장하기</button>
				                                <button onclick="window.location.reload();" class="btn-default btn">취소하기</button>
				                            </div>
				                        </div>
				                    </div>
				                    
				                    <div class="modal-footer">
				                        
				                    </div>
				                </div>
				            </div>
				        </div>
				        
				        <script>
				            $(function(){
				                $('.google-search').on("click",function(){
				                    var data = $(this).attr('data-value');
				                    // alert(data);
				                    window.open('http://google.com/search?q='+data);
				                });
				            })
				        </script>
