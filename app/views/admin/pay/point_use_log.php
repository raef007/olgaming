					<div style="padding:0px 10px 10px 10px;" class="body-wrap">

						<!--             <div class="location-info">
			                <div class="location-info-content">
			                    충/환전 관리
			                    <span class="location-info-sp">></span>
			                    포인트 사용 로그
			                </div>
			            </div>
		 				-->
			            <div class="h80"></div>
			
			            <div id="tab_point_log" class="div-tab tabs swipe-tab tabs-color-top">
			                <div class="w-tab bg-light">
			                    <ul class="nav nav-tabs" data-toggle="tab-hover">
			                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
			                        <li ng-repeat = 'site in master.sites track by $index' ><a class = 'close-template-form' href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" ng-click = 'changeSiteId(site.site_id)'>{{ site.site_name }}</a></li>
			                    </ul>
			                </div>
			                
			                <div class="tab-content">
			                    <div class="tab-pane active" id="tab_0">
			                        
			                        <form name="" id="" class="" method="get">
			                            <input type="text" ng-model="pul.from" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                            <input type="text" ng-model="pul.to"   name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click='searchPoints()'>조회</button>
			                            
			                            <span class="sp"></span>
			
			                            <select name="selector1" id="selector1" class="">
			                                <option>닉네임</option>
			                                <option>아이디</option>
			                            </select>
			                            <input type="text" value="" size="6">
			                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			
			                            <button class="btn btn-default pull-right" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
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
			                                        <th>사용 내역 <i class="fa fa-sort"></i></th>
			                                        <th>포인트 <i class="fa fa-sort"></i></th>
			                                        <th>내용</th>
			                                        <th>타입</th>
			                                        <th>비고</th>
			                                        <th>등록일시 <i class="fa fa-sort"></i></th>
			                                    </tr>
			                                </thead>
			                                <tbody>
			                                    <tr ng-repeat = 'site in master.sites | combine:"points" | startFrom:master.offset*master.limit | limitTo:master.limit track by $index'>
			                                        <td><input type="checkbox"></td>
			                                        <td>{{ ($index + (master.offset*master.limit)) + 1 }}</td>
			                                        <td>{{site.site_name}}</td>
			                                        <td>{{site.member_level}}</td>
			                                        <td>{{site.username}}</td>
			                                        <td>{{site.nickname}}</td>
			                                        <td class="font-red">usage history원??</td>
			                                        <td class="font-green">{{site.point}} 원</td>
			                                        <td>cache swithching??</td>
			                                        <td>type??</td>
			                                        <td class="view_point_remarks"><a href="#">point remarks</a></td>
			                                        <td>{{site.reg_datetime}}</td>
			                                    </tr>
			                                </tbody>
			                            </table>
			                        </div>
			
			                        <div class="text-center relative">
			                            <nav>
                                            <ul class="pagination pagination-sm">
                                                <li><a href="" aria-label="First" ng-hide="master.offset == 0" ng-click="setOffset(master, 0)">처음</a></li>
                                                
                                                <li><a href="" aria-label="Previous" ng-hide="master.offset == 0" ng-click="setOffset(master, master.offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                
                                                <li ng-repeat = 'page in master.pages' ng-class="(page === master.offset) ? 'active': ''"><a href="" ng-click="setOffset(master, page)">{{ page + 1 }}</a></li>

                                                <li><a href="" ng-hide="master.offset == master.max_page" ng-click="setOffset(master, master.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.offset == master.max_page" ng-click="setOffset(master, master.max_page)" aria-label="Last">마지막</a></li>
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
								<div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>									                            
			                        <form name="" id="" class="" method="get">
			                            <input type="text" ng-model="pul.from" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                            <input type="text" ng-model="pul.to" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
			                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click='searchPoints()'>조회</button>
			                            
			                            <span class="sp"></span>
			
			                            <select name="selector1" id="selector1" class="">
			                                <option>닉네임</option>
			                                <option>아이디</option>
			                            </select>
			                            <input type="text" value="" size="6">
			                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
			
			                            <button class="btn btn-default pull-right" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
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
			                                        <th>사용 내역 <i class="fa fa-sort"></i></th>
			                                        <th>포인트 <i class="fa fa-sort"></i></th>
			                                        <th>내용</th>
			                                        <th>타입</th>
			                                        <th>비고</th>
			                                        <th>등록일시 <i class="fa fa-sort"></i></th>
			                                    </tr>
			                                </thead>
			                                <tbody>
			                                    <tr ng-repeat = 'point in site.points  | startFrom:site.offset*site.limit | limitTo:site.limit track by $index'>
			                                        <td><input type="checkbox"></td>
			                                        <td>{{ ($index + (site.offset*site.limit)) + 1 }}</td>
			                                        <td>{{point.site_name}}</td>
			                                        <td>{{point.member_level}}</td>
			                                        <td>{{point.username}}</td>
			                                        <td>{{point.nickname}}</td>
			                                        <td class="font-red">usage history원??</td>
			                                        <td class="font-green">{{point.point}} 원</td>
			                                        <td>cache swithching??</td>
			                                        <td>type??</td>
			                                        <td class="view_point_remarks"><a href="#">point remarks</a></td>
			                                        <td>{{point.reg_datetime}}</td>
			                                    </tr>
			                                </tbody>
			                            </table>
			                        </div>
			
			                        <div class="text-center relative">
			                            <nav>
                                            <ul class="pagination pagination-sm">
                                                <li><a href="" aria-label="First" ng-hide="site.offset == 0" ng-click="setOffset(site, 0)">처음</a></li>
                                                
                                                <li><a href="" aria-label="Previous" ng-hide="site.offset == 0" ng-click="setOffset(site, site.offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                
                                                <li ng-repeat = 'page in site.pages' ng-class="(page === site.offset) ? 'active': ''"><a href="" ng-click="setOffset(site, page)">{{ page + 1 }}</a></li>

                                                <li><a href="" ng-hide="site.offset == site.max_page" ng-click="setOffset(site, site.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="site.offset == site.max_page" ng-click="setOffset(site, site.max_page)" aria-label="Last">마지막</a></li>
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
					
					<script>
				        $(function(){
				            $('.view_point_remarks').on("click",function(){
				                var url = './member/membership_info_details.jsp';
				                window.open(url,'_blank');
				            });
				        });
				    </script>