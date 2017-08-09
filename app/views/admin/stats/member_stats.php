					<div style="padding:0px 10px 10px 10px;" class="body-wrap">
			
			            <div class="h80"></div>
			
			            <div id="tab_register_s" class="div-tab tabs swipe-tab tabs-color-top">
			                <div class="w-tab bg-light">
			                    <ul class="nav nav-tabs" data-toggle="tab-hover">
			                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
			                        <li ng-repeat = 'site in master.sites track by $index'><a class = 'close-template-form' href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab">{{ site.site_name }}</a></li>
			                    </ul>
			                </div>
			                
			                <div class="tab-content">
			                    <div class="tab-pane active" id="tab_0">
			                        
			                        <div id="tab_register_s0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <button class="black-btn-tab" ng-click = 'setSearchDate(0)'> 이번달</button>
                                                <button class="black-btn-tab" ng-click = 'setSearchDate(1)'> 올해</button>
			                                    
			                                    <span class="tab-opt">
                                                    <input type="text" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
                                                    <input type="text" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
                                                    <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
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
			                                                <tr ng-repeat = 'site in master.sites | startFrom:master.offset*master.limit | limitTo:master.limit track by $index'>
			                                                    <td>{{ site.reg_date }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td>{{ site.total_users }}</td>
			                                                    <td>{{ site.total_logins }}</td>
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

                                                            <li><a href="" ng-hide="master.offset >= master.max_page" ng-click="setOffset(master, master.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.offset >= master.max_page" ng-click="setOffset(master, master.max_page)" aria-label="Last">마지막</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
                                                
                                                <div ng-repeat = 'site in master.sites track by $index' ng-if = '0 < site.deposits.length'>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>날짜 <i class="fa fa-sort"></i></th>
                                                                    <th>레벨</th>
                                                                    <th>{{ site.site_name }} 입금액 <i class="fa fa-sort"></i></th>
                                                                    <th>{{ site.site_name }} 입금 수 <i class="fa fa-sort"></i></th>
                                                                    <th>합계 입금액 <i class="fa fa-sort"></i></th>
                                                                    <th>합계 입금 수 <i class="fa fa-sort"></i></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr ng-repeat = 'deposit in site.deposits | startFrom:site.deposit_offset*site.limit | limitTo:site.limit track by $index'>
                                                                    <td>{{ deposit.finish_date }}</td>
                                                                    <td>{{ deposit.member_level }}</td>
                                                                    <td>{{ deposit.total_deposit }} 원</td>
                                                                    <td>{{ deposit.total_count }}</td>
                                                                    <td>123,456,789 원</td>
                                                                    <td>5123</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                
                                                    <div class="text-center relative">
                                                        <nav>
                                                            <ul class="pagination pagination-sm">
                                                                <li><a href="" aria-label="First" ng-hide="site.deposit_offset == 0" ng-click="setDepositOffset(site, 0)">처음</a></li>
                                                                
                                                                <li><a href="" aria-label="Previous" ng-hide="site.deposit_offset == 0" ng-click="setDepositOffset(site, site.deposit_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                                
                                                                <li ng-repeat = 'page in site.deposit_pages' ng-class="(page === site.deposit_offset) ? 'active': ''"><a href="" ng-click="setDepositOffset(site, page)">{{ page + 1 }}</a></li>

                                                                <li><a href="" ng-hide="site.deposit_offset >= site.deposit_page" ng-click="setDepositOffset(site, site.deposit_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                <li><a href="" aria-label="Previous" ng-hide="site.deposit_offset >= site.deposit_page" ng-click="setDepositOffset(site, site.deposit_page)" aria-label="Last">마지막</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                    
                                                    <hr/>
                                                </div>
			                                </div>
			                            </div>
			                        </div>		
			                    </div>
			
			                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>
			                        
			                        <div id="tab_register_s0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <button class="black-btn-tab" ng-click = 'setSearchDate(0)'> 이번달</button>
                                                <button class="black-btn-tab" ng-click = 'setSearchDate(1)'> 올해</button>
			                                    
			                                    <span class="tab-opt">
                                                    <input type="text" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
                                                    <input type="text" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
                                                    <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                    </span>
			                                </ul>
			                            </div>
			                            
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_{{ $index + 1 }}0">
			                        
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
			                                                    <td>{{ site.reg_date }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td>{{ site.total_users }}</td>
			                                                    <td>{{ site.total_logins }}</td>
			                                                </tr>
			                                            </tbody>
			                                        </table>
			                                    </div>
			
			                                    <h4>회원 레벨별 일간 입금액 통계</h4>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th>날짜 <i class="fa fa-sort"></i></th>
			                                                    <th>레벨</th>
			                                                    <th>{{ site.site_name }} 입금액 <i class="fa fa-sort"></i></th>
			                                                    <th>{{ site.site_name }} 입금 수 <i class="fa fa-sort"></i></th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr ng-repeat = 'deposit in site.deposits | startFrom:site.deposit_offset*site.limit | limitTo:site.limit track by $index'>
			                                                    <td>{{ deposit.finish_date }}</td>
			                                                    <td>{{ deposit.member_level }}</td>
			                                                    <td>{{ deposit.total_deposit }} 원</td>
			                                                    <td>{{ deposit.total_count }}</td>
			                                                </tr>
			                                            </tbody>
			                                        </table>
			                                    </div>
			
			                                    <div class="text-center relative">
                                                    <nav>
                                                        <ul class="pagination pagination-sm">
                                                            <li><a href="" aria-label="First" ng-hide="site.deposit_offset == 0" ng-click="setDepositOffset(site, 0)">처음</a></li>
                                                            
                                                            <li><a href="" aria-label="Previous" ng-hide="site.deposit_offset == 0" ng-click="setDepositOffset(site, site.deposit_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in site.deposit_pages' ng-class="(page === site.deposit_offset) ? 'active': ''"><a href="" ng-click="setDepositOffset(site, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="site.deposit_offset >= site.deposit_page" ng-click="setDepositOffset(site, site.deposit_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a href="" aria-label="Previous" ng-hide="site.deposit_offset >= site.deposit_page" ng-click="setDepositOffset(site, site.deposit_page)" aria-label="Last">마지막</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
			                                </div>
			                            </div>
			                        </div>		
			                    </div>
			                </div>
			            </div>
			        </div>