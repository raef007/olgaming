				<div style="padding: 0px 10px 10px 10px;" class="body-wrap">
						<!-- <div class="location-info">
							<div class="location-info-content">
								충/환전 관리 <span class="location-info-sp">></span> 환전 관리
							</div>
						</div> -->
						<div class="h80"></div>
					
						<div id="tab_exc" class="div-tab tabs swipe-tab tabs-color-top">
							<div class="w-tab bg-light">
								<ul class="nav nav-tabs" data-toggle="tab-hover">
									<li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
			                        <li ng-repeat = 'site in master.sites track by $index'><a href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" >{{ site.site_name }}</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_0">
									<div id="tab_exc0" class="div-tab tabs swipe-tab tabs-color-top">
										<div class="w-tab bg-light">
											<ul class="nav nav-tabs" data-toggle="tab-hover">
												<li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">환전요청(STEP.1)</a></li>
												<li><a href = "" data-target="#tab_01" data-toggle="tab">환전대기(STEP.2)</a></li>
												<li><a href = "" data-target="#tab_02" data-toggle="tab">환전완료(STEP.3)</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_00">
					
												<h4>환전요청 (STEP.1)</h4>
					
												<form name="" id="" class="" method="get">
													<input type="text" name="fr_date" value="" id="fr_date"
														class="datepicker1" placeholder="8/12/2018" size="6"
														maxlength="10"> <input type="text" name="to_date"
														value="" id="to_date" class="datepicker1"
														placeholder="8/12/2018" size="6" maxlength="10">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 입금레벨 <select name="selector1"
														id="selector1" class="">
														<option>가입</option>
														<option>소액</option>
														<option>중액</option>
														<option>고액</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 조건검색 <select name="selector1"
														id="selector1" class="">
														<option>아이디</option>
														<option>닉네임</option>
														<option>입금자</option>
														<option>입금계좌</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
												</form>
					
												<div class="h10"></div>
					
												<div class="text-left">
													<button class="btn btn-default">환전대기 처리 (STEP.2)</button>
													<button class="btn btn-default pull-right" ng-click='cancelWithdraw()'>환전 취소</button>
												</div>
					
												<div class="h10"></div>
					
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th><input type="checkbox"></th>
																<th>NO. <i class="fa fa-sort"></i>
																<th>사이트</th>
																<th>금액대</th>
																<th>아이디</th>
																<th>닉네임</th>
																<th>환전신청금액</th>
																<th>예금주</th>
																<th>은행</th>
																<th>계좌번호</th>
																<th>회원정보</th>
																<th>등록일시 <i class="fa fa-sort"></i>
																<th>상태</th>
															</tr>
														</thead>
														<tbody>
															<tr ng-repeat = 'site in master.sites | combine:"requests" | startFrom:master.req_offset*master.limit | limitTo:master.limit track by $index'>
																<td><input type="checkbox" ng-model = 'site.withdraw_check' value = '1'></td>
																<td>{{ ($index + (master.req_offset*master.limit)) + 1 }}</td>
																<td>{{site.site_name}}</td>
																<td ng-if = '0 == site.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == site.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == site.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == site.deposit_level'>고액</td>
																<td class="open_exchange_tbl ex_id"><a href="#">{{site.username}}</a></td>
																<td class="open_exchange_tbl ex_nickname"><a href="#">{{site.nickname}}</a></td>
																<td class="font-red">원</td>
																<td class="open_exchange_tbl ex_accountname"><a href="#">{{site.bank_name}}</a></td>
																<td>국민은행</td>
																<td><span class="font-blue">{{site.bank_account}}</span>
																</td>
																<td>
																	<button class="btn-default btn">정보</button>
																	<button class="btn-default btn">베팅&머니</button>
																</td>
																<td>{{site.reg_date}}</td>
																<td ng-if = '1 == site.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == site.cancel_flag'>Request</td>
															</tr>														
														</tbody>
													</table>
												</div>
					
												<div class="up-10"></div>
												<div class="text-right">
													<button class="btn btn-default" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
												</div>
					
												<div class="text-center relative">
													<nav>
                                                        <ul class="pagination pagination-sm">
                                                            <li><a href="" ng-hide="master.req_offset == 0" aria-label="First" ng-hide="master.req_offset == 0" ng-click="setReqOffset(master, 0)">처음</a></li>
                                                            
                                                            <li><a href="" ng-hide="master.req_offset == 0" aria-label="Previous" ng-hide="master.req_offset == 0" ng-click="setReqOffset(master, master.req_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in master.req_pages' ng-class="(page === master.req_offset) ? 'active': ''"><a href="" ng-click="setReqOffset(master, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="master.req_offset >= master.req_max" ng-click="setReqOffset(master, master.req_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.req_offset >= master.req_max" ng-click="setReqOffset(master, master.req_max)" aria-label="Last">마지막</a></li>
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
											</div>
					
											<div class="tab-pane" id="tab_01">
					
												<h4>환전대기 (STEP.2)</h4>
					
												<form name="" id="" class="" method="get">
													<input type="text" name="fr_date" value="" id="fr_date"
														class="datepicker1" placeholder="8/12/2018" size="6"
														maxlength="10"> <input type="text" name="to_date"
														value="" id="to_date" class="datepicker1"
														placeholder="8/12/2018" size="6" maxlength="10">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 입금레벨 <select name="selector1"
														id="selector1" class="">
														<option>가입</option>
														<option>소액</option>
														<option>중액</option>
														<option>고액</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 조건검색 <select name="selector1"
														id="selector1" class="">
														<option>아이디</option>
														<option>닉네임</option>
														<option>입금자</option>
														<option>입금계좌</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
												</form>
					
												<div class="h10"></div>
					
												<div class="text-left">
													합계 금액 <input type="text" style="text-align:right" size="20" value="123,456 원"> <span
														class="sp"></span> 합계 건수 <input type="text" size="20" style="text-align:right" value="2 건"> <span class="sp"></span>
					
													<button class="btn btn-default">환전완료 처리 (STEP.3)</button>
													<button class="btn btn-default pull-right" ng-click='cancelWithdraw()'>충전취소</button>
												</div>
					
												<div class="h10"></div>
					
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th><input type="checkbox"></th>
																<th>NO. <i class="fa fa-sort"></i>
																<th>사이트</th>
																<th>금액대</th>
																<th>아이디</th>
																<th>닉네임</th>
																<th>환전신청금액</th>
																<th>예금주</th>
																<th>은행</th>
																<th>계좌번호</th>
																<th>등록일시 <i class="fa fa-sort"></i>
																<th>처리일시 <i class="fa fa-sort"></i>
																<th>상태</th>
															</tr>
														</thead>
														<tbody>
															<tr ng-repeat = 'site in wait_copy.sites | combine:"standbys" | startFrom:master.wait_offset*master.limit | limitTo:master.limit track by $index'>
																<td><input type="checkbox" ng-model = 'site.withdraw_check' value = '1'></td>
																<td>{{ ($index + (master.req_offset*master.limit)) + 1 }}</td>
																<td>{{site.site_name}}</td>
																<td ng-if = '0 == site.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == site.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == site.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == site.deposit_level'>고액</td>

																<td class="open_exchange_tbl ex_id"><a href="#">{{site.username}}</a></td>
																<td class="open_exchange_tbl ex_nickname"><a href="#">{{site.nickname}}</a></td>
																<td class="font-red"> 원</td>
																<td class="open_exchange_tbl ex_accountname"><a href="#"></a></td>
																<td>{{site.bank_name}}</td>
																<td><span class="font-blue">{{site.bank_account}}
																</td>
																<td>{{site.reg_date}}</td>
																<td></td>
																<td ng-if = '1 == site.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == site.cancel_flag'>Standby</td>
															</tr>															
														</tbody>
													</table>
												</div>
					
												<div class="up-10"></div>
												<div class="text-right">
													<button class="btn btn-default" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
												</div>
					
												<div class="text-center relative">
													<nav>
                                                        <ul class="pagination pagination-sm">
                                                            <li><a href="" ng-hide="master.wait_offset == 0" aria-label="First" ng-hide="master.wait_offset == 0" ng-click="setWaitOffset(master, 0)">처음</a></li>
                                                            
                                                            <li><a href="" ng-hide="master.wait_offset == 0" aria-label="Previous" ng-hide="master.wait_offset == 0" ng-click="setWaitOffset(master, master.wait_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in master.wait_pages' ng-class="(page === master.wait_offset) ? 'active': ''"><a href="" ng-click="setWaitOffset(master, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="master.wait_offset >= master.wait_max" ng-click="setWaitOffset(master, master.wait_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.wait_offset >= master.wait_max" ng-click="setWaitOffset(master, master.wait_max)" aria-label="Last">마지막</a></li>
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
											</div>
					
											<div class="tab-pane" id="tab_02">
					
												<h4>환전완료 (STEP.3)</h4>
					
												<form name="" id="" class="" method="get">
													<input type="text" name="fr_date" value="" id="fr_date"
														class="datepicker1" placeholder="8/12/2018" size="6"
														maxlength="10"> <input type="text" name="to_date"
														value="" id="to_date" class="datepicker1"
														placeholder="8/12/2018" size="6" maxlength="10">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 입금레벨 <select name="selector1"
														id="selector1" class="">
														<option>가입</option>
														<option>소액</option>
														<option>중액</option>
														<option>고액</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 조건검색 <select name="selector1"
														id="selector1" class="">
														<option>아이디</option>
														<option>닉네임</option>
														<option>입금자</option>
														<option>입금계좌</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
												</form>
					
												<div class="h10"></div>
					
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th>NO. <i class="fa fa-sort"></i>
																<th>사이트</th>
																<th>금액대</th>
																<th>아이디</th>
																<th>닉네임</th>
																<th>환전신청금액</th>
																<th>예금주</th>
																<th>은행</th>
																<th>계좌번호</th>
																<th>등록일시 <i class="fa fa-sort"></i>
																<th>처리일시 <i class="fa fa-sort"></i>
																<th>상태</th>
															</tr>
														</thead>
														<tbody>
															<tr ng-repeat = 'site in done_copy.sites | combine:"completeds" | startFrom:master.done_offset*master.limit | limitTo:master.limit track by $index'>
																<td>{{ ($index + (master.req_offset*master.limit)) + 1 }}</td>
																<td>{{site.site_name}}</td>
																<td ng-if = '0 == site.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == site.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == site.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == site.deposit_level'>고액</td>
																<td class="open_exchange_tbl ex_id"><a href="#">{{site.username}}</a></td>

																<td class="open_exchange_tbl ex_nickname"><a href="#">{{site.nickname}}</a></td>
																<td class="font-red">원</td>
																<td class="open_exchange_tbl ex_accountname"><a href="#"></a></td>
																<td>{{site.bank_name}}</td>
																<td><span class="font-blue">{{site.bank_account}}
																</td>
																<td>{{site.reg_date}}</td>
																<td></td>
																<td ng-if = '1 == site.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == site.cancel_flag'>Complete</td>
															</tr>															
														</tbody>
													</table>
												</div>
					
												<div class="up-10"></div>
												<div class="text-right">
													<button class="btn btn-default" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
												</div>
					
												<div class="text-center relative">
													<nav>
                                                        <ul class="pagination pagination-sm">
                                                            <li><a href="" ng-hide="master.done_offset == 0" aria-label="First" ng-hide="master.done_offset == 0" ng-click="setDoneOffset(master, 0)">처음</a></li>
                                                            
                                                            <li><a href="" ng-hide="master.done_offset == 0" aria-label="Previous" ng-hide="master.done_offset == 0" ng-click="setDoneOffset(master, master.done_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in master.done_pages' ng-class="(page === master.done_offset) ? 'active': ''"><a href="" ng-click="setDoneOffset(master, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="master.done_offset >= master.done_max" ng-click="setDoneOffset(master, master.done_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.done_offset >= master.done_max" ng-click="setDoneOffset(master, master.done_max)" aria-label="Last">마지막</a></li>
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
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>						                      
			                	<div class="tab-pane active" id="tab_0">
									<div id="tab_exc0" class="div-tab tabs swipe-tab tabs-color-top">
										<div class="w-tab bg-light">
											<ul class="nav nav-tabs" data-toggle="tab-hover">
												<li class="active"><a href = "" data-target="#tab_{{ $index + 1 }}0" data-toggle="tab">환전요청(STEP.1)</a></li>
												<li><a href = "" data-target="#tab_{{ $index + 1 }}1" data-toggle="tab">환전대기(STEP.2)</a></li>
												<li><a href = "" data-target="#tab_{{ $index + 1 }}3" data-toggle="tab">환전완료(STEP.3)</a></li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane active" id="tab_{{ $index + 1 }}0">
					
												<h4>환전요청 (STEP.1)</h4>
					
												<form name="" id="" class="" method="get">
													<input type="text" name="fr_date" value="" id="fr_date"
														class="datepicker1" placeholder="8/12/2018" size="6"
														maxlength="10"> <input type="text" name="to_date"
														value="" id="to_date" class="datepicker1"
														placeholder="8/12/2018" size="6" maxlength="10">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 입금레벨 <select name="selector1"
														id="selector1" class="">
														<option>가입</option>
														<option>소액</option>
														<option>중액</option>
														<option>고액</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 조건검색 <select name="selector1"
														id="selector1" class="">
														<option>아이디</option>
														<option>닉네임</option>
														<option>입금자</option>
														<option>입금계좌</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
												</form>
					
												<div class="h10"></div>
					
												<div class="text-left">
													<button class="btn btn-default">환전대기 처리 (STEP.2)</button>
													<button class="btn btn-default pull-right" ng-click='cancelWithdraw()'>환전 취소</button>
												</div>
					
												<div class="h10"></div>
					
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th><input type="checkbox"></th>
																<th>NO. <i class="fa fa-sort"></i>
																<th>사이트</th>
																<th>금액대</th>
																<th>아이디</th>
																<th>닉네임</th>
																<th>환전신청금액</th>
																<th>예금주</th>
																<th>은행</th>
																<th>계좌번호</th>
																<th>회원정보</th>
																<th>등록일시 <i class="fa fa-sort"></i>
																<th>상태</th>
															</tr>
														</thead>
														<tbody>
															<tr ng-repeat = 'request in site.requests | startFrom:site.req_offset*master.limit | limitTo:site.limit track by $index'>
																<td><input type="checkbox"></td>
																<td>{{ ($index + (master.req_offset*master.limit)) + 1 }}</td>
																<td>{{site.site_name}}</td>
																<td ng-if = '0 == request.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == request.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == request.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == request.deposit_level'>고액</td>

																<td class="open_exchange_tbl ex_id"><a href="#">{{request.username}}</a></td>
																<td class="open_exchange_tbl ex_nickname"><a href="#">{{request.nickname}}</a></td>
																<td class="font-red">원</td>
																<td class="open_exchange_tbl ex_accountname"><a href="#">{{request.bank_name}}</a></td>
																<td>국민은행</td>
																<td><span class="font-blue">{{request.bank_account}}</span>
																</td>
																<td>
																	<button class="btn-default btn">정보</button>
																	<button class="btn-default btn">베팅&머니</button>
																</td>
																<td>{{request.reg_date}}</td>
																<td ng-if = '1 == request.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == request.cancel_flag'>Complete</td>
															</tr>														
														</tbody>
													</table>
												</div>
					
												<div class="up-10"></div>
												<div class="text-right">
													<button class="btn btn-default">엑셀 다운로드</button>
												</div>
					
												<div class="text-center relative">
													<nav>
													    <ul class="pagination pagination-sm">
													        <li><a href="" aria-label="First" ng-hide="master.withdraw_offset == 0" ng-click="setwithdrawOffset(master, 0)">처음</a></li>
													        <li><a href="" aria-label="Previous" ng-hide="master.withdraw_offset == 0" ng-click="setwithdrawOffset(master, master.withdraw_offset-1)"><i class="fa fa-angle-left"></i></a></li>
													        <li ng-repeat = 'page in master.withdraw_pages' ng-class="(page === master.withdraw_offset) ? 'active': ''"><a href="" ng-click="setwithdrawOffset(master, page)">{{ page + 1 }}</a></li>
													        <li><a href="" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setwithdrawOffset(master, master.withdraw_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
													        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setwithdrawOffset(master, master.withdraw_max_page)" aria-label="Last">마지막</a></li>
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
											</div>
					
											<div class="tab-pane" id="tab_{{ $index + 1 }}1">
					
												<h4>환전대기 (STEP.2)</h4>
					
												<form name="" id="" class="" method="get">
													<input type="text" name="fr_date" value="" id="fr_date"
														class="datepicker1" placeholder="8/12/2018" size="6"
														maxlength="10"> <input type="text" name="to_date"
														value="" id="to_date" class="datepicker1"
														placeholder="8/12/2018" size="6" maxlength="10">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 입금레벨 <select name="selector1"
														id="selector1" class="">
														<option>가입</option>
														<option>소액</option>
														<option>중액</option>
														<option>고액</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 조건검색 <select name="selector1"
														id="selector1" class="">
														<option>아이디</option>
														<option>닉네임</option>
														<option>입금자</option>
														<option>입금계좌</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
												</form>
					
												<div class="h10"></div>
					
												<div class="text-left">
													합계 금액 <input type="text" style="text-align:right" size="20" value="123,456 원"> <span
														class="sp"></span> 합계 건수 <input type="text" size="20" style="text-align:right" value="2 건"> <span class="sp"></span>
					
													<button class="btn btn-default">환전완료 처리 (STEP.3)</button>
													<button class="btn btn-default pull-right" ng-click='cancelWithdraw()'>충전취소</button>
												</div>
					
												<div class="h10"></div>
					
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th><input type="checkbox"></th>
																<th>NO. <i class="fa fa-sort"></i>
																<th>사이트</th>
																<th>금액대</th>
																<th>아이디</th>
																<th>닉네임</th>
																<th>환전신청금액</th>
																<th>예금주</th>
																<th>은행</th>
																<th>계좌번호</th>
																<th>등록일시 <i class="fa fa-sort"></i>
																<th>처리일시 <i class="fa fa-sort"></i>
																<th>상태</th>
															</tr>
														</thead>
														<tbody>
															<tr ng-repeat = 'standbys in site.standbys | startFrom:site.wait_offset*master.limit | limitTo:site.limit track by $index'>
																<td><input type="checkbox"></td>
																<td>{{ ($index + (master.req_offset*master.limit)) + 1 }}</td>
																<td>{{site.site_name}}</td>
																<td ng-if = '0 == standbys.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == standbys.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == standbys.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == standbys.deposit_level'>고액</td>

																<td class="open_exchange_tbl ex_id"><a href="#">{{standbys.username}}</a></td>
																<td class="open_exchange_tbl ex_nickname"><a href="#">{{standbys.nickname}}</a></td>
																<td class="font-red"> 원</td>
																<td class="open_exchange_tbl ex_accountname"><a href="#"></a></td>
																<td>{{standbys.bank_name}}</td>
																<td><span class="font-blue">{{standbys.bank_account}}
																</td>standbys
																<td>{{standbys.reg_date}}</td>
																<td></td>
																<td ng-if = '1 == standbys.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == standbys.cancel_flag'>Complete</td>
															</tr>															
														</tbody>
													</table>
												</div>
					
												<div class="up-10"></div>
												<div class="text-right">
													<button class="btn btn-default">엑셀 다운로드</button>
												</div>
					
												<div class="text-center relative">
													<nav>
													    <ul class="pagination pagination-sm">
													        <li><a href="" aria-label="First" ng-hide="master.withdraw_offset == 0" ng-click="setwithdrawOffset(master, 0)">처음</a></li>
													        <li><a href="" aria-label="Previous" ng-hide="master.withdraw_offset == 0" ng-click="setwithdrawOffset(master, master.withdraw_offset-1)"><i class="fa fa-angle-left"></i></a></li>
													        <li ng-repeat = 'page in master.withdraw_pages' ng-class="(page === master.withdraw_offset) ? 'active': ''"><a href="" ng-click="setwithdrawOffset(master, page)">{{ page + 1 }}</a></li>
													        <li><a href="" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setwithdrawOffset(master, master.withdraw_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
													        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setwithdrawOffset(master, master.withdraw_max_page)" aria-label="Last">마지막</a></li>
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
											</div>
					
											<div class="tab-pane" id="tab_{{ $index + 1 }}3">
					
												<h4>환전완료 (STEP.3)</h4>
					
												<form name="" id="" class="" method="get">
													<input type="text" name="fr_date" value="" id="fr_date"
														class="datepicker1" placeholder="8/12/2018" size="6"
														maxlength="10"> <input type="text" name="to_date"
														value="" id="to_date" class="datepicker1"
														placeholder="8/12/2018" size="6" maxlength="10">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 입금레벨 <select name="selector1"
														id="selector1" class="">
														<option>가입</option>
														<option>소액</option>
														<option>중액</option>
														<option>고액</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
					
													<span class="sp"></span> 조건검색 <select name="selector1"
														id="selector1" class="">
														<option>아이디</option>
														<option>닉네임</option>
														<option>입금자</option>
														<option>입금계좌</option>
													</select> <input type="text" value="" size="6">
													<button type="submit"
														class="btn_submit btn-success btn-black btn">조회</button>
												</form>
					
												<div class="h10"></div>
					
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th>NO. <i class="fa fa-sort"></i>
																<th>사이트</th>
																<th>금액대</th>
																<th>아이디</th>
																<th>닉네임</th>
																<th>환전신청금액</th>
																<th>예금주</th>
																<th>은행</th>
																<th>계좌번호</th>
																<th>등록일시 <i class="fa fa-sort"></i>
																<th>처리일시 <i class="fa fa-sort"></i>
																<th>상태</th>
															</tr>
														</thead>
														<tbody>
															<tr ng-repeat = 'completeds in site.completeds | startFrom:site.done_offset*master.limit | limitTo:site.limit track by $index'>
																<td>{{ ($index + (master.req_offset*master.limit)) + 1 }}</td>
																<td>{{site.site_name}}</td>
																<td ng-if = '0 == completeds.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == completeds.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == completeds.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == completeds.deposit_level'>고액</td>
																<td class="open_exchange_tbl ex_id"><a href="#">testid</a></td>

																<td class="open_exchange_tbl ex_nickname"><a href="#">{{completeds.username}}</a></td>
																<td class="font-red">원</td>
																<td class="open_exchange_tbl ex_accountname"><a href="#"></a></td>
																<td>{{completeds.bank_name}}</td>
																<td><span class="font-blue">{{completeds.bank_account}}
																</td>
																<td>{{completeds.reg_date}}</td>
																<td></td>
																<td ng-if = '1 == completeds.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == completeds.cancel_flag'>Complete</td>
															</tr>															
														</tbody>
													</table>
												</div>
					
												<div class="up-10"></div>
												<div class="text-right">
													<button class="btn btn-default">엑셀 다운로드</button>
												</div>
					
												<div class="text-center relative">
													<nav>
													    <ul class="pagination pagination-sm">
													        <li><a href="" aria-label="First" ng-hide="master.withdraw_offset == 0" ng-click="setwithdrawOffset(master, 0)">처음</a></li>
													        <li><a href="" aria-label="Previous" ng-hide="master.withdraw_offset == 0" ng-click="setwithdrawOffset(master, master.withdraw_offset-1)"><i class="fa fa-angle-left"></i></a></li>
													        <li ng-repeat = 'page in master.withdraw_pages' ng-class="(page === master.withdraw_offset) ? 'active': ''"><a href="" ng-click="setwithdrawOffset(master, page)">{{ page + 1 }}</a></li>
													        <li><a href="" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setwithdrawOffset(master, master.withdraw_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
													        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setwithdrawOffset(master, master.withdraw_max_page)" aria-label="Last">마지막</a></li>
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
							$('.open_exchange_tbl').on("click",function(){
								// alert("Test");
								var url = '../../pay/forms/currency_exchange_management_table.html';
								window.open(url,'_blank');
							});
						})
					</script>