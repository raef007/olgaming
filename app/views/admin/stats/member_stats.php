					<div style="padding:0px 10px 10px 10px;" class="body-wrap">

			            <!-- <div class="location-info">
			                <div class="location-info-content">
			                    통계/로그
			                    <span class="location-info-sp">></span>
			                    회원 가입 통계
			                </div>
			            </div> -->
			
			            <div class="h80"></div>
			
			            <div id="tab_register_s" class="div-tab tabs swipe-tab tabs-color-top">
			                <div class="w-tab bg-light">
			                    <ul class="nav nav-tabs" data-toggle="tab-hover">
			                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
			                        <li><a href = "" data-target="#tab_1" data-toggle="tab">ACE</a></li>
			                        <li><a href = "" data-target="#tab_2" data-toggle="tab">TOP</a></li>
			                    </ul>
			                </div>
			                
			                <div class="tab-content">
			                    <div class="tab-pane active" id="tab_0">
			                        
			                        <div id="tab_register_s0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">이번달</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">올해</a></li>
			                                    
			                                    <span class="tab-opt">
			                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    </span>
			                                </ul>
			                            </div>
			                            
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_00">
			                            
			                                    <h4>일차별 회원 가입자 수</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>가입일자 <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>가입자 수 <i class="fa fa-sort"></i></th>
			                                                    <th>로그인 횟수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
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
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>날짜 <i class="fa fa-sort"></i></th>
			                                                    <th>레벨</th>
			                                                    <th>ACE 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>ACE 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금 수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
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
			                            
			                                    <h4>일차별 회원 가입자 수</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>가입일자 <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>가입자 수 <i class="fa fa-sort"></i></th>
			                                                    <th>로그인 횟수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
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
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>날짜 <i class="fa fa-sort"></i></th>
			                                                    <th>레벨</th>
			                                                    <th>ACE 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>ACE 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금 수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
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
			                        
			                        <div id="tab_register_s0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">이번달</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">올해</a></li>
			                                    
			                                    <span class="tab-opt">
				                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    </span>
			                                </ul>
			                            </div>
			                            
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_00">
			                        
			                                    <h4>일차별 회원 가입자 수</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>가입일자 <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>가입자 수 <i class="fa fa-sort"></i></th>
			                                                    <th>로그인 횟수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
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
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>날짜 <i class="fa fa-sort"></i></th>
			                                                    <th>레벨</th>
			                                                    <th>ACE 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>ACE 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금 수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
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
			                            
			                                    <h4>일차별 회원 가입자 수</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>가입일자 <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>가입자 수 <i class="fa fa-sort"></i></th>
			                                                    <th>로그인 횟수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
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
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>날짜 <i class="fa fa-sort"></i></th>
			                                                    <th>레벨</th>
			                                                    <th>ACE 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>ACE 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금 수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
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
			                        
			                        <div id="tab_register_s0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">이번달</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">올해</a></li>
			                                    
			                                    <span class="tab-opt">
			                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			                                    </span>
			                                </ul>
			                            </div>
			                            
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_00">
			                        
			                                    <h4>일차별 회원 가입자 수</h4>
			
			                                    <div class="table-responsive">
			                                            <table class="table table-bordered">
			                                                <thead>
			                                                    <tr>
			                                                    <th>가입일자 <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>가입자 수 <i class="fa fa-sort"></i></th>
			                                                    <th>로그인 횟수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
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
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>날짜 <i class="fa fa-sort"></i></th>
			                                                    <th>레벨</th>
			                                                    <th>ACE 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>ACE 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금 수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
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
			                        
			                                    <h4>일차별 회원 가입자 수</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>가입일자 <i class="fa fa-sort"></i></th>
			                                                    <th>사이트</th>
			                                                    <th>가입자 수 <i class="fa fa-sort"></i></th>
			                                                    <th>로그인 횟수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>ACE</td>
			                                                    <td>123</td>
			                                                    <td>5123</td>
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
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>날짜 <i class="fa fa-sort"></i></th>
			                                                    <th>레벨</th>
			                                                    <th>ACE 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>ACE 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>TOP 입금 수 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>합계 입금 수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                </tr>
			                                                <tr>
			                                                    <td>YYYY-MM-DD</td>
			                                                    <td>1</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
			                                                    <td>123,456,789 원</td>
			                                                    <td>5123</td>
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