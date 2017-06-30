<style>
.col-border, .row .col-md-6 {
	border: 1px solid #ccc;
}

table .collapse>.col-md-6 {
	/*margin-top: 5px;*/
	/*margin-bottom: 5px;*/
}

.panel-heading .accordion-toggle:after, .panel-heading .panel-title span.accordion-ico:after {
	/* symbol for "opening" panels */
	font-family: 'Glyphicons Halflings';
	/* essential for enabling glyphicon */
	content: "\e113"; /* adjust as needed, taken from bootstrap.css */
	/*float: right;  adjust as needed */
	color: black; /* adjust as needed */

}

.panel-heading .accordion-toggle.collapsed:after, .panel-heading .panel-title.collapsed span.accordion-ico:after {
	/* symbol for "collapsed" panels */
	/* adjust as needed, taken from bootstrap.css */
	content: "\e114";
}
.t-header{
	background-color: gray;
	text-align:left;
	padding-left: 0px;
	padding-right: 0px;
}
.accordion-ico{
	text-align: right;
}
.col-sm-8 label{
	font-size: 12px;
}
.collapsed span{
	left: 0!important;
}
</style>

	<div style="padding: 0px 10px 10px 10px;" class="body-wrap">
		<div class="h80"></div>
		<div id="tab_inlevel_s" class="div-tab tabs swipe-tab tabs-color-top">
			<div class="w-tab bg-light">
				<ul class="nav nav-tabs" data-toggle="tab-hover">
					<li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
					<li><a href = "" data-target="#tab_1" data-toggle="tab">ACE</a></li>
					<li><a href = "" data-target="#tab_2" data-toggle="tab">TOP</a></li>
				</ul>
			</div>
			<div class="tab-content">

				<div class="tab-pane active" id="tab_0">
					<div id="tab_inlevel_s0"
						class="div-tab tabs swipe-tab tabs-color-top">
						<div class="w-tab bg-light">
							<ul class="nav nav-tabs" data-toggle="tab-hover">
								<li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">전체</a></li>
								<li><a href = "" data-target="#tab_01" data-toggle="tab">스포츠</a></li>
							</ul>
						</div>
						<form name="" id="" class="" method="get">
							종목 <select name="" id="" class="">
								<option>종목</option>
								<option>스포츠</option>
								<option>카지노</option>
								<option>버추어</option>
								<option>경마</option>
							</select> <span class="sp"></span> 지역 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 리그 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 상태 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 검색 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <input type="text" placeholder="" size="10">
							<button type="submit"
								class="btn_submit btn-success btn-black btn">조회</button>
							<button type="submit"
								class="btn_submit btn-success btn-black btn">refresh</button>
						</form>
						<div class="h20"></div>
						<form>
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>No.</th>
											<th>사이트</th>
											<th>경기 일시</th>
											<th>종목</th>
											<th>지역</th>
											<th>리그</th>
											<th>경기</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>베팅 종류</th>
											<th>상태</th>
											<th>총 베팅액</th>
											<th>경기 결과</th>
											<th>중지</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr1_all_tab1" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="font-size: 12px; font-weight: 200;">
																	<!-- <a class="accordion-toggle" data-toggle="collapse"
																		data-parent="#accordion" href="#collapseTwo">승패</a> -->
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapseTwo" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse2" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="font-size: 12px; font-weight: 200;">
																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse3" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>35</td>
											<td>ACE</td>
											<td>Y-M-D H:M</td>
											<td>축구</td>
											<td>월드</td>
											<td>유로</td>
											<td>독일 - 체코</td>
											<td>2.5</td>
											<td>3.0</td>
											<td>2.8</td>
											<td>+28</td>
											<td>456,789,012 원</td>
											<td>베팅중</td>
											<td>1:3</td>
											<td><button type="submit" class="btn_submit btn-success btn-black btn" data-toggle="collapse" href="#tr1_all_tab1">중지</button></td>
										</tr>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr2_all_tab1" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr2_c1" style="font-size: 12px; font-weight: 200;">
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr2_c1" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr2_c2" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr2_c2" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr3_c3" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr3_c3" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>35</td>
											<td>TOP</td>
											<td>Y-M-D H:M</td>
											<td>농구</td>
											<td>미국</td>
											<td>NBA</td>
											<td>보스턴 - 뉴욕</td>
											<td>1.3</td>
											<td>-</td>
											<td>2.4</td>
											<td>+32</td>
											<td>789,789,012 원</td>
											<td>베팅중</td>
											<td>105:102</td>
											<td><button type="submit"
													class="btn_submit btn-success btn-black btn"
													data-toggle="collapse" href="#tr2_all_tab1">중지</button></td>
										</tr>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr3_all_tab1" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c1" style="font-size: 12px; font-weight: 200;">
																	<!-- <a class="accordion-toggle" data-toggle="collapse"
																		data-parent="#accordion" href="#collapse_tr4_c1">승패</a> -->
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c1" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c2" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c2" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c3" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c3" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																	<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>33</td>
											<td>TOP</td>
											<td>Y-M-D H:M</td>
											<td>야구</td>
											<td>일본</td>
											<td>NPB</td>
											<td>한신 - 라쿠텐</td>
											<td>1.23</td>
											<td>-</td>
											<td>1.97</td>
											<td>+32</td>
											<td>789,789,012 원</td>
											<td>베팅 중지 /td>
											<td>7:2</td>
											<td><button type="submit"
													class="btn_submit btn-success btn-black btn"
													data-toggle="collapse" href="#tr3_all_tab1">해제</button></td>
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
										<li class="active"><a href="#">1 <span
												class="sr-only">(current)</span></a></li>
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
						</form>
					</div>
				</div>

				<div class="tab-pane" id="tab_1">
					<div id="tab_inlevel_s0"
						class="div-tab tabs swipe-tab tabs-color-top">
						<div class="w-tab bg-light">
							<ul class="nav nav-tabs" data-toggle="tab-hover">
								<li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">전체</a></li>
								<li><a href = "" data-target="#tab_01" data-toggle="tab">스포츠</a></li>
							</ul>
						</div>
						<form name="" id="" class="" method="get">
							종목 <select name="" id="" class="">
								<option>종목</option>
								<option>스포츠</option>
								<option>카지노</option>
								<option>버추어</option>
								<option>경마</option>
							</select> <span class="sp"></span> 지역 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 리그 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 상태 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 검색 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <input type="text" placeholder="" size="10">
							<button type="submit"
								class="btn_submit btn-success btn-black btn">조회</button>
							<button type="submit"
								class="btn_submit btn-success btn-black btn">refresh</button>
						</form>
						<div class="h20"></div>
						<form>
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>No.</th>
											<th>사이트</th>
											<th>경기 일시</th>
											<th>종목</th>
											<th>지역</th>
											<th>리그</th>
											<th>경기</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>베팅 종류</th>
											<th>상태</th>
											<th>총 베팅액</th>
											<th>경기 결과</th>
											<th>중지</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr1_all_tab1_ace" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo_ace" style="font-size: 12px; font-weight: 200;">
																	<!-- <a class="accordion-toggle" data-toggle="collapse"
																		data-parent="#accordion" href="#collapseTwo_ace">승패</a> -->
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapseTwo_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse2_ace" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse2_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse3_ace" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse3_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
												<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>35</td>
											<td>ACE</td>
											<td>Y-M-D H:M</td>
											<td>축구</td>
											<td>월드</td>
											<td>유로</td>
											<td>독일 - 체코</td>
											<td>2.5</td>
											<td>3.0</td>
											<td>2.8</td>
											<td>+28</td>
											<td>456,789,012 원</td>
											<td>베팅중</td>
											<td>1:3</td>
											<td><button type="submit" class="btn_submit btn-success btn-black btn" data-toggle="collapse" href="#tr1_all_tab1_ace">중지</button></td>
										</tr>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr2_all_tab1_ace" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr2_c1_ace" style="font-size: 12px; font-weight: 200;">
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr2_c1_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr2_c2_ace" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr2_c2_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr3_c3_ace" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr3_c3_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>35</td>
											<td>TOP</td>
											<td>Y-M-D H:M</td>
											<td>농구</td>
											<td>미국</td>
											<td>NBA</td>
											<td>보스턴 - 뉴욕</td>
											<td>1.3</td>
											<td>-</td>
											<td>2.4</td>
											<td>+32</td>
											<td>789,789,012 원</td>
											<td>베팅중</td>
											<td>105:102</td>
											<td><button type="submit"
													class="btn_submit btn-success btn-black btn"
													data-toggle="collapse" href="#tr2_all_tab1_ace">중지</button></td>
										</tr>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr3_all_tab1_ace" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c1_ace" style="font-size: 12px; font-weight: 200;">
																	<!-- <a class="accordion-toggle" data-toggle="collapse"
																		data-parent="#accordion" href="#collapse_tr4_c1_ace">승패</a> -->
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c1_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c2_ace" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c2_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c3_ace" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c3_ace" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>33</td>
											<td>TOP</td>
											<td>Y-M-D H:M</td>
											<td>야구</td>
											<td>일본</td>
											<td>NPB</td>
											<td>한신 - 라쿠텐</td>
											<td>1.23</td>
											<td>-</td>
											<td>1.97</td>
											<td>+32</td>
											<td>789,789,012 원</td>
											<td>베팅 중지 /td>
											<td>7:2</td>
											<td><button type="submit"
													class="btn_submit btn-success btn-black btn"
													data-toggle="collapse" href="#tr3_all_tab1_ace">해제</button></td>
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
										<li class="active"><a href="#">1 <span
												class="sr-only">(current)</span></a></li>
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
						</form>
					</div>
				</div>

				<div class="tab-pane" id="tab_2">
					<div id="tab_inlevel_s0"
						class="div-tab tabs swipe-tab tabs-color-top">
						<div class="w-tab bg-light">
							<ul class="nav nav-tabs" data-toggle="tab-hover">
								<li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">전체</a></li>
								<li><a href = "" data-target="#tab_01" data-toggle="tab">스포츠</a></li>
							</ul>
						</div>
						<form name="" id="" class="" method="get">
							종목 <select name="" id="" class="">
								<option>종목</option>
								<option>스포츠</option>
								<option>카지노</option>
								<option>버추어</option>
								<option>경마</option>
							</select> <span class="sp"></span> 지역 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 리그 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 상태 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <span class="sp"></span> 검색 <select name="" id="" class="">
								<option>전체</option>
								<option>승패</option>
							</select> <input type="text" placeholder="" size="10">
							<button type="submit"
								class="btn_submit btn-success btn-black btn">조회</button>
							<button type="submit"
								class="btn_submit btn-success btn-black btn">refresh</button>
						</form>
						<div class="h20"></div>
						<form>
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>No.</th>
											<th>사이트</th>
											<th>경기 일시</th>
											<th>종목</th>
											<th>지역</th>
											<th>리그</th>
											<th>경기</th>
											<th>승</th>
											<th>무</th>
											<th>패</th>
											<th>베팅 종류</th>
											<th>상태</th>
											<th>총 베팅액</th>
											<th>경기 결과</th>
											<th>중지</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr1_all_tab1_top" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo_top" style="font-size: 12px; font-weight: 200;">
																	<!-- <a class="accordion-toggle" data-toggle="collapse"
																		data-parent="#accordion" href="#collapseTwo_top">승패</a> -->
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapseTwo_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse2_top" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse2_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse3_top" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse3_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>35</td>
											<td>ACE</td>
											<td>Y-M-D H:M</td>
											<td>축구</td>
											<td>월드</td>
											<td>유로</td>
											<td>독일 - 체코</td>
											<td>2.5</td>
											<td>3.0</td>
											<td>2.8</td>
											<td>+28</td>
											<td>456,789,012 원</td>
											<td>베팅중</td>
											<td>1:3</td>
											<td><button type="submit" class="btn_submit btn-success btn-black btn" data-toggle="collapse" href="#tr1_all_tab1_top">중지</button></td>
										</tr>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr2_all_tab1_top" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr2_c1_top" style="font-size: 12px; font-weight: 200;">
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr2_c1_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr2_c2_top" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr2_c2_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr3_c3_top" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr3_c3_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>35</td>
											<td>TOP</td>
											<td>Y-M-D H:M</td>
											<td>농구</td>
											<td>미국</td>
											<td>NBA</td>
											<td>보스턴 - 뉴욕</td>
											<td>1.3</td>
											<td>-</td>
											<td>2.4</td>
											<td>+32</td>
											<td>789,789,012 원</td>
											<td>베팅중</td>
											<td>105:102</td>
											<td><button type="submit"
													class="btn_submit btn-success btn-black btn"
													data-toggle="collapse" href="#tr2_all_tab1_top">중지</button></td>
										</tr>
										<tr>
											<td colspan="15" style="padding: 0px !important;height:auto!important;">
												<div class="collapse" id="tr3_all_tab1_top" style="padding: 0px;">
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c1_top" style="font-size: 12px; font-weight: 200;">
																	<!-- <a class="accordion-toggle" data-toggle="collapse"
																		data-parent="#accordion" href="#collapse_tr4_c1_top">승패</a> -->
																		<span class="col-md-10" style="text-align: left;">승패</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c1_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c2_top" style="font-size: 12px; font-weight: 200;">
	
																		<span class="col-md-10" style="text-align: left;">핸디캡</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c2_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-0.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border"  style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">보스턴 (+1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-1.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>보스턴 (+2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>뉴욕 (-2.0)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
			
													</div>
														
													<div class="col-md-6">
														<div class="h10"></div>
														<div class="panel panel-default">
															<div class="panel-heading" style="background-color: gray; padding:5px; font-size: 12px; height: auto;">
																<h4 class="panel-title col-md-12"  data-toggle="collapse" data-parent="#accordion" href="#collapse_tr4_c3_top" style="font-size: 12px; font-weight: 200;">

																		<span class="col-md-10" style="text-align: left;">토탈 오버/언더</span>
																		<span class="accordion-ico col-md-2"></span>
																</h4>
															</div>
															<div id="collapse_tr4_c3_top" class="panel-collapse collapse in">
																<div class="panel-body" style="padding:0px;">
																	<div class="col-md-6 col-border"  style="">
																		<a href = "./game/game-mng-item.jsp" target="_blank">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label">오버 (100.5)</label>
																		</div>
																		</a>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-desc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6 col-border" style="">
																		<div class="col-sm-8" style="padding-top: 15px;">
																			<label>언더 (100.5)</label>
																		</div>
																		<div class="col-sm-2">
																			<div>
																				<label><i class="fa fa-sort-asc"
																					aria-hidden="true"></i> 1.23</label>
																			</div>
																			<div>
																				<label> (12,123,456,789)</label>
																			</div>
																		</div>
																	</div>	
																</div>
															</div>
														</div>
													</div>
												</div>

											</td>
										</tr>
										<tr>
											<td>33</td>
											<td>TOP</td>
											<td>Y-M-D H:M</td>
											<td>야구</td>
											<td>일본</td>
											<td>NPB</td>
											<td>한신 - 라쿠텐</td>
											<td>1.23</td>
											<td>-</td>
											<td>1.97</td>
											<td>+32</td>
											<td>789,789,012 원</td>
											<td>베팅 중지 /td>
											<td>7:2</td>
											<td><button type="submit"
													class="btn_submit btn-success btn-black btn"
													data-toggle="collapse" href="#tr3_all_tab1_top">해제</button></td>
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
										<li class="active"><a href="#">1 <span
												class="sr-only">(current)</span></a></li>
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
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>