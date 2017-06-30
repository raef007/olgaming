<div style="padding: 0px 10px 10px 10px;" class="body-wrap">

	<!-- <div class="location-info">
		<div class="location-info-content">
			사이트 관리 <span class="location-info-sp">></span> 사이트 설정
		</div>
	</div> -->

	<div class="h80"></div>

	<div id="tab_site_set" class="div-tab tabs swipe-tab tabs-color-top">
		<div class="w-tab bg-light">
			<ul class="nav nav-tabs" data-toggle="tab-hover">
				<li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				<li ng-repeat = "site in sites track by $index"><a href = "" data-target="#tab_{{ $index + 1 }}" data-toggle="tab">{{ site.site_name }}</a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="tab_0">
				<div id="tab_site_set0"
					class="div-tab tabs swipe-tab tabs-color-top">
					<div class="w-tab bg-light">
						<ul class="nav nav-tabs" data-toggle="tab-hover">
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_00">

							<div>
								<div class="pull-left">
									<h4>접속 설정</h4>
								</div>

								<div class="">
									<button class="btn btn-default" style="margin-left: 7%;" ng-click="addSitesForm()">추가하기</button>
									<button ng-click="deleteSitesForm()" class="btn btn-default">삭제하기</button>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="h10"></div>
							
							<form name = 'add-sites-form' ng-submit="saveSitesForm()">
								<div class="table-responsive">
										<table class="table table-bordered" style="width: 66%;">
											<thead>
												<tr>
													<th><input type="checkbox"></th>
													<th>No. <i class="fa fa-sort"></i></th>
													<th>사이트</th>
													<th>URL</th>
													<th>가입방식</th>
													<th>등록일 <i class="fa fa-sort"></i></th>
												</tr>
											</thead>
											
											<tbody ng-repeat = "site in sites track by $index">
												<tr ng-repeat = "url in site.site_urls track by $index">
													<td><input name = "site_check" ng-model = "sites[$parent.$index].site_urls[$index].del_check" ng-click = "changeActiveSite(sites[$parent.$index].site_urls[$index].del_check)" type="checkbox" value = "1"></td>
													<td>{{ url.su_seq }}</td>
													<td><input type="text" ng-model = "sites[$parent.$index].site_name" name = 'site_name' value=""></td>
													<td><input type="text" ng-model = "sites[$parent.$index].site_urls[$index].site_url" name = 'site_url' value=""></td>
													<input type = 'hidden' ng-model = "sites[$parent.$index].site_urls[$index].su_seq" name = 'su_seq' value=""></td>
													<input type = 'hidden' ng-model = "sites[$parent.$index].site_id" name = 'site_id' value=""></td>
													<td>
														<select ng-model = "sites[$parent.$index].reg_way" name = 'reg_way'>
															<option value = ''>추천코드가입</option>
															<option value = '0'>자유가입</option>
															<option value = '1'>비공개</option>
														</select>
													</td>
													<td>{{ site.reg_date }}</td>
												</tr>
											</tbody>
										</table>
								</div>
	
								<div class="text-center col-lg-12">
									<input type = "submit" class="btn btn-default btn2" value = "저장하기"/>
									<button class="btn btn-default btn2">취소하기</button>
									<div class="clearfix"></div>
								</div>
							</form>
							
							<div class="h20"></div>

							<h4>URL 관리</h4>
                            
                            <form name = 'add-url-form' ng-submit="saveUrlForm()">
                                <div class="row">
                                    <div class="col-md-6">
                                    
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>사이트</td>
                                                        <td>
                                                            <select class="col-lg-12"  ng-model = "sel_site" ng-change = "changeActiveSite()" ng-options="site as site.site_name for site in sites">
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>URL</td>
                                                        <td><input class="col-lg-12" type="text" value="" ng-model = 'new_url.site_url'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>관리페이지 링크</td>
                                                        <td><input class="col-lg-12" type="text" value="" ng-model = 'new_url.page_of_manage'></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-md-2">
                                        <div class="h80"></div>
                                        <input type = "submit" class="btn btn-default btn2" value = "등록"/>
                                    </div>
                                </div>
                            </form>

							<div class="row">
								<div class="col-md-8">
									<div class="table-responsive">
										<table class="table table-responsive table-bordered">
											<thead>
												<th>No. <i class="fa fa-sort"></i></th>
												<th>URL</th>
												<th>등록일시 <i class="fa fa-sort"></i></th>
												<th>삭제</th>
												<th>관리</th>
											</thead>
											<tbody>
												<tr ng-repeat = "url in sel_site.site_urls track by $index">
													<td>{{ url.su_seq }}</td>
													<td>{{ url.site_url }}</td>
													<td>{{ url.reg_date }}</td>
													<td><button class="btn btn-default" ng-click = "deleteUrlForm($index)" ng-model = "sel_site.site_urls[$index].su_seq">삭제</button></td>
													<td><button class="btn btn-default">관리</button></td>
												</tr>
											</tbody>
										</table>
									</div>
                                    <!--
									<div class="text-center relative" style="left:-15%;">
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

										<div class="page-select-opt1" style="right: 10%;">
											한 페이지에 <select name="selector1" id="selector1" class="">
												<option>전체</option>
												<option>10</option>
												<option>25</option>
												<option>50</option>
												<option>100</option>
											</select> 항목 보기
										</div>
									</div>
                                    -->
								</div>
                                
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="tab_{{ $index + 1}}" ng-repeat = "site in sites track by $index">
				<div id="tab_site_set0"
					class="div-tab tabs swipe-tab tabs-color-top">
					<div class="w-tab bg-light">
						<ul class="nav nav-tabs" data-toggle="tab-hover">
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_00_ace">

							<div>
								<div class="pull-left">
									<h4>접속 설정</h4>
								</div>

								<div class="">
									<!--<button class="btn btn-black btn-default" style="margin-left: 7%;">추가하기</button>-->
									<button class="btn btn-default">삭제하기</button>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="h10"></div>

							<div class="table-responsive">
								<table class="table table-bordered" style="width: 66%;">
									<thead>
										<tr>
											<th><input type="checkbox"></th>
											<th>No. <i class="fa fa-sort"></i></th>
											<th>사이트</th>
											<th>URL</th>
											<th>가입방식</th>
											<th>등록일 <i class="fa fa-sort"></i></th>
										</tr>
									</thead>
									<tbody>
										<tr ng-repeat = "url in sites[$index].site_urls track by $index">
											<td><input type="checkbox"></td>
											<td>{{ url.su_seq }}</td>
											<td><input type="text" ng-model="sites[$parent.$index].site_name" readonly></td>
											<td><input type="text" ng-model="sites[$parent.$index].site_urls[$index].site_url"></td>
											<td>
                                                <select ng-model = "sites[$parent.$index].reg_way">
                                                    <option value = ''>추천코드가입</option>
                                                    <option value = '0'>자유가입</option>
                                                    <option value = '1'>비공개</option>
                                                </select>

                                            </td>
											<td>{{ site.reg_date }}</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="text-center col-lg-12">
								<button class="btn btn-black btn-default btn2">저장하기</button>
								<button class="btn btn-default btn2">취소하기</button>
								<div class="clearfix"></div>
							</div>

							<div class="h20"></div>

							<h4>URL 관리</h4>

							<div class="row">
                                <form ng-submit = "saveUrlToSite($index)">
                                    <div class="col-md-6">

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>사이트</td>
                                                        <td>
                                                            <select class="col-lg-12" disabled>
                                                                <option value = "{{ site.site_id }}"> {{ site.site_name }}</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>URL</td>
                                                        <td><input class="col-lg-12" type="text" value="" ng-model = 'tab_url[$index].site_url'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>관리페이지 링크</td>
                                                        <td><input class="col-lg-12" type="text" value="" ng-model = 'tab_url[$index].page_of_manage'></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="col-md-2">
                                        <div class="h80"></div>
                                        <input type = "submit" class="btn btn-default btn2" value = "등록" />
                                    </div>
                                </form>
							</div>

							<div class="row">
								<div class="col-md-8">

									<div class="table-responsive">
										<table class="table table-responsive table-bordered">
											<thead>
												<th>No. <i class="fa fa-sort"></i></th>
												<th>URL</th>
												<th>등록일시 <i class="fa fa-sort"></i></th>
												<th>삭제</th>
												<th>관리</th>
											</thead>
											<tbody>
												<tr ng-repeat = "url in site.site_urls track by $index">
													<td>{{ url.su_seq }}</td>
													<td>{{ url.site_url }}</td>
													<td>{{ url.reg_date }}</td>
													<td><button class="btn btn-default" ng-click = "deleteUrlFromSite($parent.$index, $index)">삭제</button></td>
													<td><button class="btn btn-default">관리</button></td>
												</tr>
											</tbody>
										</table>
									</div>
                                    
                                    <!--
									<div class="text-center relative" style="left:-15%;">
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

										<div class="page-select-opt1" style="right: 10%;">
											한 페이지에 <select name="selector1" id="selector1" class="">
												<option>전체</option>
												<option>10</option>
												<option>25</option>
												<option>50</option>
												<option>100</option>
											</select> 항목 보기
										</div>
									</div>
                                    -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>