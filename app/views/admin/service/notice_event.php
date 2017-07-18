						<div style="padding:0px 10px 10px 10px;" class="body-wrap">
							<!-- 
				            <div class="location-info">
				                <div class="location-info-content">
				                    공지사항/고객센터
				                    <span class="location-info-sp">></span>
				                    공지사항/이벤트
				                </div>
				            </div> --> 				
				            <div class="h80"></div>
				            <div id="tab_notice_event" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li ng-repeat = 'site in sites track by $index'><a class = 'close-template-form' href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" ng-click = 'changeSiteId(site)'>{{ site.site_name }}</a></li>
				                    </ul>
				                </div>
				                <div class="tab-content">
				                        <div class="tab-pane active" id="tab_0">
				                            <div id="tab_notice_event0" class="div-tab tabs swipe-tab tabs-color-top">
				                                <div class="w-tab bg-light">
				                                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                        <li class="active"><a data-target="#tab_00" data-toggle="tab">공지사항</a></li>
				                                        <li><a data-target="#tab_01" data-toggle="tab">이벤트</a></li>
				                                    </ul>
				                                </div>
				                                <div class="tab-content">
				                                    <div class="tab-pane active" id="tab_00">
				                                        <div class="collapse in" id="w_mode">
														<form>
				                                            <input type="text" ng-model="noticesearch.from">
				                                            <input type="text" ng-model="noticesearch.to">
				                                            <button type="submit" ng-click="searchNotice()">조회</button>
				
				                                            <span class="sp"></span>
				
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>제목</option>
				                                                <option>본문</option>
				                                                <option>작성자</option>
				                                            </select>
				                                            
				                                            <input type="text" value="" size="6">
				                                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				
				                                            <span class="pull-right">
				                                                <button class="btn btn-default" data-toggle="collapse" data-target="#w_mode,#w">작성하기</button>
				                                                <button class="btn btn-default" ng-click = 'deleteNoticeForm()'>삭제하기</button>
				                                            </span>
				
				                                            <div class="h10"></div>
				                                            
				                                            <div class="table-responsive">
				                                                <table class="table table-bordered">
				                                                    <thead>
				                                                        <tr>
				                                                            <th><input type="checkbox"></th>
				                                                            <th>NO. <i class="fa fa-sort"></i></th>
				                                                            <th>사이트</th>
				                                                            <th>순서 <i class="fa fa-sort"></i></th>
				                                                            <th>제목</th>
				                                                             <th>썸네일</th>
				                                                            <th>작성자</th>
				                                                            <th>조회수 <i class="fa fa-sort"></i></th>
				                                                            <th>노출여부</th>
				                                                            <th>등록일시 <i class="fa fa-sort"></i></th>
				                                                            <th>수정일시 <i class="fa fa-sort"></i></th>
				                                                        </tr>
				                                                    </thead>
				                                                    <tbody ng-repeat = "site in sites | startFrom:pag_inf.offset*pag_inf.limit | limitTo:pag_inf.limit track by $index">
				                                                        <tr ng-repeat = "subject in site.subjects track by $index">
				                                                            <td><input type="checkbox" ng-model = 'subject.notice_check' value = '1'></td>
				                                                            <td>35</td>
				                                                            <td>{{site.site_name}}</td>
				                                                            <td>{{subject.order}}</td>
				                                                            <td>{{subject.subject}}</td>
				                                                            <td><img src="./images/2.jpg" style = 'height: 25px; width: 45px;'></td>
				                                                            <td>{{subject.name}}</td>
				                                                            <td>1</td>
				                                                            <td>
                                            								    <select style="float:none;" ng-model = 'subject.show_flag'>
                                            								        <option value = '0'>NO</option>
                                            								        <option value = '1'>YES</option>
                                            								    </select>
                                            								</td>
				                                                            <td>{{subject.reg_date}}</td>
				                                                            <td>{{subject.update_date}}</td>
				                                                        </tr>
				                                                    </tbody>
				                                                </table>
				                                            </div>
				                                            <div class="up-10"></div>
				                                            
				                                            <div class="text-right">
				                                                <button class="btn btn-default" data-toggle="collapse" data-target="#w">작성하기</button>
				                                                <button class="btn btn-default" ng-click = 'deleteNoticeForm()'>삭제하기</button>
				                                                <div class="clearfix"></div>
				                                            </div>
				
				                                            <div class="text-center relative">
				                                            	<nav>
                                    							    <ul class="pagination pagination-sm">
                                    							        <li><a href="" aria-label="First" ng-hide="pag_inf.offset == 0" ng-click="setOffset(pag_inf, 0)">처음</a></li>
                                    							        <li><a href="" aria-label="Previous" ng-hide="pag_inf.offset == 0" ng-click="setOffset(pag_inf, pag_inf.offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                    							        <li ng-repeat = 'page in pag_inf.pages' ng-class="(page === pag_inf.offset) ? 'active': ''"><a href="" ng-click="setOffset(pag_inf, page)">{{ page + 1 }}</a></li>
                                    							        <li><a href="" ng-hide="pag_inf.offset >= pag_inf.max_page" ng-click="setOffset(pag_inf, pag_inf.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                    							        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="pag_inf.offset >= pag_inf.max_page" ng-click="setOffset(pag_inf, pag_inf.max_page)" aria-label="Last">마지막</a></li>
                                    							    </ul>
                                    							</nav>
				                                        	</div>
				
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
				                                        <div class="collapse in" id="w_mode1">
				                                            <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                            <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				
				                                            <span class="sp"></span>
				
				                                            <select name="selector1" id="selector1" class="">
				                                                <option>제목</option>
				                                                <option>본문</option>
				                                                <option>작성자</option>
				                                            </select>
				                                            
				                                            <input type="text" value="" size="6">
				                                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				
				                                            <span class="pull-right">
				                                                <button class="btn btn-default" data-toggle="collapse" data-target="#w_mode1,#w1">작성하기</button>
				                                                <button class="btn btn-default" ng-click = 'deleteEvent()'>삭제하기</button>
				                                            </span>
				
				                                            <div class="h10"></div>
				                                            
				                                            <div class="table-responsive">
				                                                <table class="table table-bordered">
				                                                    <thead>
				                                                        <tr>
				                                                            <th><input type="checkbox"></th>
				                                                            <th>NO. <i class="fa fa-sort"></i>
				                                                            <th>사이트</th>
				                                                            <th>순서 <i class="fa fa-sort"></i>
				                                                            <th>제목</th>
				                                                            <th>썸네일</th>
				                                                            <th>작성자</th>
				                                                            <th>시작일</th>
				                                                            <th>종료일</th>
				                                                            <th>조회수 <i class="fa fa-sort"></i>
				                                                            <th>노출여부</th>
				                                                            <th>등록일시 <i class="fa fa-sort"></i>
				                                                            <th>수정일시 <i class="fa fa-sort"></i>
				                                                        </tr>
				                                                    </thead>
				                                                    <tbody <tbody ng-repeat = "site in sites | startFrom:pag_inf.offset*pag_inf.limit | limitTo:pag_inf.limit track by $index">
				                                                        <tr ng-repeat = "event in site.events | limitTo:1 track by $index">
				                                                            <td><input type="checkbox"></td>
				                                                            <td>35</td>
				                                                            <td>{{site.site_name}}</td>
				                                                            <td>{{event.order}}</td>
				                                                            <td>{{event.subject}}</td>
				                                                            <td><img src="./images/2.jpg" style = 'height: 25px; width: 45px;'></td>
				                                                            <td>{{event.admin_id}}</td>
				                                                            <td>{{event.start_date}}</td>
				                                                            <td>{{event.end_date}}</td>
				                                                            <td>1</td>
				                                                            <td>
                                            								    <select style="float:none;" ng-model = 'event.show_flag'>
                                            								        <option value = '0'>NO</option>
                                            								        <option value = '1'>YES</option>
                                            								    </select>
                                            								</td>
				                                                            <td>{{event.reg_date}}</td>
				                                                            <td>{{event.reg_datetime}}</td>
				                                                        </tr>
				                                                        
				                                                    </tbody>
				                                                </table>
				                                            </div>
				
				                                            <div class="up-10"></div>
				                                            <div class="text-right">
				                                                <button class="btn btn-default" data-toggle="collapse" data-target="#w_mode1,#w1">작성하기</button>
				                                                <button class="btn btn-default" ng-click = 'deleteEvent()'>삭제하기</button>
				                                                <div class="clearfix"></div>
				                                            </div>
				
				                                            <div class="text-center relative">
				                                                <nav>
                                    							    <ul class="pagination pagination-sm">
                                    							        <li><a href="" aria-label="First" ng-hide="pag_inf.offset == 0" ng-click="setOffset(pag_inf, 0)">처음</a></li>
                                    							        <li><a href="" aria-label="Previous" ng-hide="pag_inf.offset == 0" ng-click="setOffset(pag_inf, pag_inf.offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                    							        <li ng-repeat = 'page in pag_inf.pages' ng-class="(page === pag_inf.offset) ? 'active': ''"><a href="" ng-click="setOffset(pag_inf, page)">{{ page + 1 }}</a></li>
                                    							        <li><a href="" ng-hide="pag_inf.offset >= pag_inf.max_page" ng-click="setOffset(pag_inf, pag_inf.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                    							        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="pag_inf.offset >= pag_inf.max_page" ng-click="setOffset(pag_inf, pag_inf.max_page)" aria-label="Last">마지막</a></li>
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
                   			</div> 