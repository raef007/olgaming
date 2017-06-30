						<div style="padding:0px 10px 10px 10px;" class="body-wrap">

				           <!--  <div class="location-info">
				                <div class="location-info-content">
				                    로그인 관리
				                    <span class="location-info-sp">></span>
				                    로그인 정보
				                </div>
				            </div> -->
				
				            <div class="h80"></div>
				
				            <div id="tab_login_info" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li><a href = "" data-target="#tab_1" data-toggle="tab">ACE</a></li>
				                        <li><a href = "" data-target="#tab_2" data-toggle="tab">TOP</a></li>
				                    </ul>
				                </div>
				                
				                <div class="tab-content">
				                    <div class="tab-pane active" id="tab_0">
				                        <div id="tab_login_info0" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">로그인 내역</a></li>
				                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">로그인 실패 내역</a></li>
				                                </ul>
				                            </div>
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_00">
				                                    <form name="" id="" class="" method="get">
				                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                    
				                                    <span class="sp"></span>
				                                    <select name="selector1" id="selector1" class="">
				                                        <option>아이디</option>
				                                        <option>닉네임</option>
				                                        <option>아이피</option>
				                                    </select>
				                                    <input type="text" value="" size="6">
				                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                </form>
				
				                                <div class="h10"></div>
				                                <div class="table-responsive">
				                                    <table class="table table-bordered">
				                                        <thead>
				                                            <tr>
				                                                <th>No.</th>
				                                                <th>사이트</th>
				                                                <th>아이디</th>
				                                                <th>닉네임</th>
				                                                <th>IP</th>
				                                                <th>로그인 시간</th>
				                                                <th>IP조회</th>
				                                                <th>구글IP조회</th>
				                                                <th>회원정보</th>
				                                            </tr>
				                                        </thead>
				                                        <tbody>
				                                            <tr>
				                                                <td>3</td>
				                                                <td>ACE</td>
				                                                <td>k123</td>
				                                                <td>사용자닉</td>
				                                                <!-- blcoked와 btn-blocked가 글씨색 결정 -->
				                                                <td class="blocked">
				                                                123.123.123.123
				                                                <button class="btn-default btn-blocked btn">IP허용</button>
				                                                </td>
				                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                <td><button class="btn-default btn">IP조회</button></td>
				                                                <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                <td><a href = "./member/membership_info_details.jsp" class="btn-default btn" target="_blank" >회원정보</a></td>
				                                            </tr>
				                                            <tr>
				                                                <td>3</td>
				                                                <td>ACE</td>
				                                                <td>k123</td>
				                                                <td>사용자닉</td>
				                                                <td>
				                                                123.123.123.123
				                                                <button class="btn-default btn">IP차단</button>
				                                                </td>
				                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                <td><button class="btn-default btn">IP조회</button></td>
				                                                <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                <td><a href = "./member/membership_info_details.jsp" class="btn-default btn" target="_blank" >회원정보</a></td>
				                                            </tr>
				                                            <tr>
				                                                <td>3</td>
				                                                <td>ACE</td>
				                                                <td>k123</td>
				                                                <td>사용자닉</td>
				                                                <td>
				                                                123.123.123.123
				                                                <button class="btn-default btn">IP차단</button>
				                                                </td>
				                                                <td>YYYY-MM-DD HH:MM:SS</td>
				                                                <td><button class="btn-default btn">IP조회</button></td>
				                                                <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                <td><a href = "./member/membership_info_details.jsp" class="btn-default btn" target="_blank" >회원정보</a></td>
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
				                                    <form name="" id="" class="" method="get">
				                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                        
				                                        <span class="sp"></span>
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>아이디</option>
				                                            <option>닉네임</option>
				                                            <option>아이피</option>
				                                        </select>
				                                        <input type="text" value="" size="6">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                    </form>
				
				                                    <div class="h10"></div>
				                                    
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th>No.</th>
				                                                    <th>사이트</th>
				                                                    <th>아이디</th>
				                                                    <th>비밀번호</th>
				                                                    <th>닉네임</th>
				                                                    <th>IP</th>
				                                                    <th>로그인 시간</th>
				                                                    <th>IP조회</th>
				                                                    <th>구글IP조회</th>
				                                                    <th>회원정보</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>1234asd</td>
				                                                    <td>사용자닉</td>
				                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
				                                                    <td class="blocked">
				                                                    123.123.123.123
				                                                    <button class="btn-default btn-blocked btn">IP허용</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>1234asd</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>1234asd</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
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
				                        <div id="tab_login_info1" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_10" data-toggle="tab">로그인 내역</a></li>
				                                    <li><a href = "" data-target="#tab_11" data-toggle="tab">로그인 실패 내역</a></li>
				                                </ul>
				                            </div>
				                            
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_10">
				                                    <form name="" id="" class="" method="get">
				                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                        
				                                        <span class="sp"></span>
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>아이디</option>
				                                            <option>닉네임</option>
				                                            <option>아이피</option>
				                                        </select>
				                                        <input type="text" value="" size="6">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                    </form>
				
				                                    <div class="h10"></div>
				                                    
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th>No.</th>
				                                                    <th>사이트</th>
				                                                    <th>아이디</th>
				                                                    <th>닉네임</th>
				                                                    <th>IP</th>
				                                                    <th>로그인 시간</th>
				                                                    <th>IP조회</th>
				                                                    <th>구글IP조회</th>
				                                                    <th>회원정보</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>사용자닉</td>
				                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
				                                                    <td class="blocked">
				                                                    123.123.123.123
				                                                    <button class="btn-default btn-blocked btn">IP허용</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><a href = "../member/member-mng.html" class="btn-default btn" target="_blank" ><button class="btn-default btn">회원정보</button></a></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><a href = "../member/member-mng.html" class="btn-default btn" target="_blank" >회원정보</a></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><a href = "../member/member-mng.html" class="btn-default btn" target="_blank" ><button class="btn-default btn">회원정보</button></a></td>
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
				
				                                <div class="tab-pane" id="tab_11">
				                                    <form name="" id="" class="" method="get">
				                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                        
				                                        <span class="sp"></span>
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>아이디</option>
				                                            <option>닉네임</option>
				                                            <option>아이피</option>
				                                        </select>
				                                        <input type="text" value="" size="6">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                    </form>
				
				                                    <div class="h10"></div>
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th>No.</th>
				                                                    <th>사이트</th>
				                                                    <th>아이디</th>
				                                                    <th>비밀번호</th>
				                                                    <th>닉네임</th>
				                                                    <th>IP</th>
				                                                    <th>로그인 시간</th>
				                                                    <th>IP조회</th>
				                                                    <th>구글IP조회</th>
				                                                    <th>회원정보</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>1234asd</td>
				                                                    <td>사용자닉</td>
				                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
				                                                    <td class="blocked">
				                                                    123.123.123.123
				                                                    <button class="btn-default btn-blocked btn">IP허용</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>1234asd</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>1234asd</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
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
				                        <div id="tab_login_info2" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_20" data-toggle="tab">로그인 내역</a></li>
				                                    <li><a href = "" data-target="#tab_21" data-toggle="tab">로그인 실패 내역</a></li>
				                                </ul>
				                            </div>
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_20">
				                                    <form name="" id="" class="" method="get">
				                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                        
				                                        <span class="sp"></span>
				                                        <select name="selector1" id="selector1" class="">
				                                            <option>아이디</option>
				                                            <option>닉네임</option>
				                                            <option>아이피</option>
				                                        </select>
				                                        <input type="text" value="" size="6">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                                    </form>
				
				                                    <div class="h10"></div>
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th>No.</th>
				                                                    <th>사이트</th>
				                                                    <th>아이디</th>
				                                                    <th>닉네임</th>
				                                                    <th>IP</th>
				                                                    <th>로그인 시간</th>
				                                                    <th>IP조회</th>
				                                                    <th>구글IP조회</th>
				                                                    <th>회원정보</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>사용자닉</td>
				                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
				                                                    <td class="blocked">
				                                                    123.123.123.123
				                                                    <button class="btn-default btn-blocked btn">IP허용</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
				                                                </tr>
				                                                <tr>
				                                                    <td>3</td>
				                                                    <td>ACE</td>
				                                                    <td>k123</td>
				                                                    <td>사용자닉</td>
				                                                    <td>
				                                                    123.123.123.123
				                                                    <button class="btn-default btn">IP차단</button>
				                                                    </td>
				                                                    <td>YYYY-MM-DD HH:MM:SS</td>
				                                                    <td><button class="btn-default btn">IP조회</button></td>
				                                                    <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
				                                                    <td><button class="btn-default btn">회원정보</button></td>
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
				
				                                <div class="tab-pane" id="tab_21">
				                                    <form name="" id="" class="" method="get">
					                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
					                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					                                    
					                                    <span class="sp"></span>
					                                    <select name="selector1" id="selector1" class="">
					                                        <option>아이디</option>
					                                        <option>닉네임</option>
					                                        <option>아이피</option>
					                                    </select>
					                                    <input type="text" value="" size="6">
					                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
					                                </form>
				
					                                <div class="h10"></div>
					                                <div class="table-responsive">
					                                    <table class="table table-bordered">
					                                        <thead>
					                                            <tr>
					                                                <th>No.</th>
					                                                <th>사이트</th>
					                                                <th>아이디</th>
					                                                <th>비밀번호</th>
					                                                <th>닉네임</th>
					                                                <th>IP</th>
					                                                <th>로그인 시간</th>
					                                                <th>IP조회</th>
					                                                <th>구글IP조회</th>
					                                                <th>회원정보</th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
					                                            <tr>
					                                                <td>3</td>
					                                                <td>ACE</td>
					                                                <td>k123</td>
					                                                <td>1234asd</td>
					                                                <td>사용자닉</td>
					                                                <!-- blcoked와 btn-blocked가 글씨색 결정 -->
					                                                <td class="blocked">
					                                                123.123.123.123
					                                                <button class="btn-default btn-blocked btn">IP허용</button>
					                                                </td>
					                                                <td>YYYY-MM-DD HH:MM:SS</td>
					                                                <td><button class="btn-default btn">IP조회</button></td>
					                                                <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
					                                                <td><button class="btn-default btn">회원정보</button></td>
					                                            </tr>
					                                            <tr>
					                                                <td>3</td>
					                                                <td>ACE</td>
					                                                <td>k123</td>
					                                                <td>1234asd</td>
					                                                <td>사용자닉</td>
					                                                <td>
					                                                123.123.123.123
					                                                <button class="btn-default btn">IP차단</button>
					                                                </td>
					                                                <td>YYYY-MM-DD HH:MM:SS</td>
					                                                <td><button class="btn-default btn">IP조회</button></td>
					                                                <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
					                                                <td><button class="btn-default btn">회원정보</button></td>
					                                            </tr>
					                                            <tr>
					                                                <td>3</td>
					                                                <td>ACE</td>
					                                                <td>k123</td>
					                                                <td>1234asd</td>
					                                                <td>사용자닉</td>
					                                                <td>
					                                                123.123.123.123
					                                                <button class="btn-default btn">IP차단</button>
					                                                </td>
					                                                <td>YYYY-MM-DD HH:MM:SS</td>
					                                                <td><button class="btn-default btn">IP조회</button></td>
					                                                <td><button class="btn-default btn google-search" data-value="123.123.123.123">조회</button></td>
					                                                <td><button class="btn-default btn">회원정보</button></td>
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
	
						<script>
					        $(function(){
					            $('.google-search').on("click",function(){
					                var value = $(this).attr("data-value");
					                window.open("https://www.google.com/search?q="+value);
					            });
					        });
					    </script>