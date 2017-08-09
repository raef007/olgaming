					<div style="padding:0px 10px 10px 10px;" class="body-wrap">

			            <!-- <div class="location-info">
			                <div class="location-info-content">
			                    통계/로그
			                    <span class="location-info-sp">></span>
			                    입출금 정산
			                </div>
			            </div> -->
			
			            <div class="h80"></div>
			
			            <div id="tab_inout_s" class="div-tab tabs swipe-tab tabs-color-top">
			                <div class="w-tab bg-light">
			                    <ul class="nav nav-tabs" data-toggle="tab-hover">
			                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
			                        <li ng-repeat = 'site in master.sites track by $index'><a href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" >{{ site.site_name }}</a></li>
			                    </ul>
			                </div>
			                <div class="tab-content">
			                    <div class="tab-pane active" id="tab_0">
			                        <div id="tab_inout_s0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">입금 정산</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">출금 정산</a></li>
			                                </ul>
			                            </div>
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_00">
			                                    <div id="tab_best_s1" class="div-tab tabs swipe-tab tabs-color-top">
			                                        <div class="w-tab bg-light">
			                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                                <li class="active"><a href = "" data-target="#tab_10" data-toggle="tab">전체</a></li>
			                                                <li><a href = "" data-toggle="tab">오늘</a></li>
			                                                <li><a href = "" data-toggle="tab">이번주</a></li>
			                                                <li><a href = "" data-toggle="tab">지난주</a></li>
			                                                <li><a href = "" data-toggle="tab">지난달</a></li>
			                                                
			                                                <span class="tab-opt">
			                                                	<input type="text" ng-model="sd.from" name="fr_date" value=""	 id="fr_date" class="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<input type="text" ng-model="sd.to" name="to_date" value="" id="to_date" class="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<button type="submit" class="btn_submit btn-success btn-black btn" ng-click="searchDeposit()">조회</button>
				                                                	
				                                                	<span class="sp"></span>
				
			                                                	<select ng-model = 'sd.filter_by'>
			                                                	    <option value = 'member.username'>아이디</option>
			                                                	    <option value = 'member.nickname'>닉네임</option>
			                                                	</select>
			                                                	<input type="text" ng-model = 'sd.filter_val' value="" size="6">
			                                                	<button type="submit" ng-click="searchDeposit()" class="btn_submit btn-success btn-black btn">조회</button>
			                                                </span>
			                                            </ul>
			                                        </div>
			                                        <div class="tab-content">
			                                            <div class="tab-pane active" id="tab_10">
			                                                <div class="table-responsive">
			                                                    <table class="table table-bordered">
			                                                        <thead>
			                                                            <tr>
			                                                                <th>No. <i class="fa fa-sort"></i></th>
			                                                                <th>사이트</th>
			                                                                <th>아이디</th>
			                                                                <th>닉네임</th>
			                                                                <th>입금자명</th>
			                                                                <th>입금액 <i class="fa fa-sort"></i></th>
			                                                                <th>신청일시 <i class="fa fa-sort"></i></th>
			                                                                <th>확인일시 <i class="fa fa-sort"></i></th>
			                                                            </tr>
			                                                        </thead>
			                                                        <tbody>
			                                                            <tr ng-repeat = 'site in master.sites | combine:"deposits" | startFrom:master.deposit_offset*master.deposit_limit | limitTo:master.deposit_limit track by $index'>
			                                                                <td>{{ ($index + (master.deposit_offset*master.deposit_limit)) + 1 }}</td>
			                                                                <td>{{site.site_name}}</td>
			                                                                <td>{{site.username}}</td>
			                                                                <td>{{site.nickname}}</td>
			                                                                <td>{{site.bank_name}}</td>
			                                                                <td>{{site.money}}원</td>
			                                                                <td>{{site.wait_date}}</td>
			                                                                <td>{{site.finish_date}}</td>
			                                                            </tr>
			                                                            <tr>
			                                                                <td>합계</td>
			                                                                <td colspan="4"></td>
			                                                                <td>{{ master.sites | combine:"deposits"| sumByColumn: 'money'}} 원</td>
			                                                                <td colspan="2"></td>
			                                                            </tr>
			                                                        </tbody>
			                                                    </table>
			                                                </div>
			
			                                                <div class="text-center relative">
			                                            		<nav>		
			                                            		    <nav>
																    <ul class="pagination pagination-sm">
																        <li><a href="" aria-label="First" ng-hide="master.deposit_offset == 0" ng-click="setDepositOffset(master, 0)">처음</a></li>

																        <li><a href="" aria-label="Previous" ng-hide="master.deposit_offset == 0" ng-click="setDepositOffset(master, master.deposit_offset-1)"><i class="fa fa-angle-left"></i></a></li>

																        <li ng-repeat = 'page in master.deposit_pages' ng-class="(page === master.deposit_offset) ? 'active': ''"><a href="" ng-click="setDepositOffset(master, page)">{{ page + 1 }}</a></li>

																        <li><a href="" ng-hide="master.deposit_offset >= master.deposit_max_page" ng-click="setDepositOffset(master, master.deposit_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
																        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.deposit_offset >= master.deposit_max_page" ng-click="setDepositOffset(master, master.deposit_max_page)" aria-label="Last">마지막</a></li>
																    </ul>
																</nav>
			                                            		</nav>
			                                        		</div>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			
			                                <div class="tab-pane" id="tab_01">
			                                    <div id="tab_best_s2" class="div-tab tabs swipe-tab tabs-color-top">
			                                        <div class="w-tab bg-light">
			                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                                <li class="active"><a href = "" data-target="#tab_20" data-toggle="tab">전체</a></li>
			                                                <li><a href = "" data-target="#tab_21" data-toggle="tab">오늘</a></li>
			                                                <li><a href = "" data-target="#tab_22" data-toggle="tab">이번주</a></li>
			                                                <li><a href = "" data-target="#tab_23" data-toggle="tab">지난주</a></li>
			                                                <li><a href = "" data-target="#tab_24" data-toggle="tab">지난달</a></li>
			                                                
			                                                <span class="tab-opt">
			                                                	<input type="text" ng-model="sd.from" name="fr_date" value=""	 id="fr_date" class="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<input type="text" ng-model="sd.to" name="to_date" value="" i	d="to_date" clas	s="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<button type="submit" class="btn_submit btn-success btn-black btn" ng-click="	searchDeposit()">조회</button>
				                                                	
				                                                	<span class="sp"></span>
				
			                                                	<select ng-model = 'sd.filter_by'>
			                                                	    <option value = 'member.username'>아이디</option>
			                                                	    <option value = 'member.nickname'>닉네임</option>
			                                                	</select>
			                                                	<input type="text" ng-model = 'sd.filter_val' value="" size="6">
			                                                	<button type="submit" ng-click="searchDeposit()" class="btn_submit btn-success btn-black btn">조회</button>
			                                                </span>
			                                            </ul>
			                                        </div>
			                                        <div class="tab-content">
			                                            <div class="tab-pane active" id="tab_10">
			                                                <div class="table-responsive">
			                                                    <table class="table table-bordered">
			                                                        <thead>
			                                                            <tr>
			                                                                <th>No. <i class="fa fa-sort"></i></th>
			                                                                <th>사이트</th>
			                                                                <th>아이디</th>
			                                                                <th>닉네임</th>
			                                                                <th>출금액 <i class="fa fa-sort"></i></th>
			                                                                <th>은행</th>
			                                                                <th>예금주</th>
			                                                                <th>계좌번호</th>
			                                                                <th>신청일시 <i class="fa fa-sort"></i></th>
			                                                                <th>확인일시 <i class="fa fa-sort"></i></th>
			                                                            </tr>
			                                                        </thead>
			                                                        <tbody>
			                                                            <tr ng-repeat = 'site in withdraws | combine:"withdraws" | startFrom:master.withdraw_offset*master.withdraw_limit | limitTo:master.withdraw_limit track by $index'>
			                                                                <td>{{ ($index + (master.withdraw_offset*master.withdraw_limit)) + 1 }}</td>
			                                                                <td>{{site.site_name}}</td>
			                                                                <td>{{site.username}}</td>
			                                                                <td>{{site.nickname}}</td>
			                                                                <td>{{site.money}} 원</td>
			                                                                <td>{{site.bank_name}}</td>
			                                                                <td>{{site.bank_owner}}</td>
			                                                                <td>
			                                                                {{site.bank_account}}
			                                                                </td>
			                                                                <td>{{site.wait_date}}</td>
			                                                                <td>{{site.finish_date}}</td>
			                                                            </tr>
			                                                            <tr>
			                                                                <td>합계</td>
			                                                                <td colspan="3"></td>
			                                                                <td>{{ master.sites | combine:"withdraws"| sumByColumn: 'money'}} 원</td>
			                                                                <td colspan="5"></td>
			                                                            </tr>
			                                                        </tbody>
			                                                    </table>
			                                                </div>
			                                            	<div class="text-center relative">
				                                                <nav>
																    <ul class="pagination pagination-sm">
																        <li><a href="" aria-label="First" ng-hide="master.withdraw_offset == 0" ng-click="setWithdrawOffset(master, 0)">처음</a></li>

																        <li><a href="" aria-label="Previous" ng-hide="master.withdraw_offset == 0" ng-click="setWithdrawOffset(master, master.withdraw_offset-1)"><i class="fa fa-angle-left"></i></a></li>

																        <li ng-repeat = 'page in master.withdraw_pages' ng-class="(page === master.withdraw_offset) ? 'active': ''"><a href="" ng-click="setWithdrawOffset(master, page)">{{ page + 1 }}</a></li>

																        <li><a href="" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setWithdrawOffset(master, master.withdraw_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
																        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.withdraw_offset >= master.withdraw_max_page" ng-click="setWithdrawOffset(master, master.withdraw_max_page)" aria-label="Last">마지막</a></li>
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
			                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>
			                    <div id="tab_inout_s0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_{{ $index + 1 }}0" data-toggle="tab">입금 정산</a></li>
			                                    <li><a href = "" data-target="#tab_{{ $index + 1 }}1" data-toggle="tab">출금 정산</a></li>
			                                </ul>
			                            </div>
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_{{ $index + 1 }}0">
			                                    <div id="tab_best_s1" class="div-tab tabs swipe-tab tabs-color-top">
			                                        <div class="w-tab bg-light">
			                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                                <li class="active"><a href = "" data-target="#tab_10" data-toggle="tab">전체</a></li>
			                                                <li><a href = "" data-toggle="tab">오늘</a></li>
			                                                <li><a href = "" data-toggle="tab">이번주</a></li>
			                                                <li><a href = "" data-toggle="tab">지난주</a></li>
			                                                <li><a href = "" data-toggle="tab">지난달</a></li>
			                                                
			                                                <span class="tab-opt">
			                                                	<input type="text" ng-model="sd.from" name="fr_date" value=""	 id="fr_date" class="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<input type="text" ng-model="sd.to" name="to_date" value="" i	d="to_date" clas	s="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<button type="submit" class="btn_submit btn-success btn-black btn" ng-click="	searchDeposit()">조회</button>
				                                                	
				                                                	<span class="sp"></span>
				
			                                                	<select ng-model = 'sd.filter_by'>
			                                                	    <option value = 'member.username'>아이디</option>
			                                                	    <option value = 'member.nickname'>닉네임</option>
			                                                	</select>
			                                                	<input type="text" ng-model = 'sd.filter_val' value="" size="6">
			                                                	<button type="submit" ng-click="searchDeposit()" class="btn_submit btn-success btn-black btn">조회</button>
			                                                </span>
			                                            </ul>
			                                        </div>
			                                        <div class="tab-content">
			                                            <div class="tab-pane active" id="tab_10">
			                                                <div class="table-responsive">
			                                                    <table class="table table-bordered">
			                                                        <thead>
			                                                            <tr>
			                                                                <th>No. <i class="fa fa-sort"></i></th>
			                                                                <th>사이트</th>
			                                                                <th>아이디</th>
			                                                                <th>닉네임</th>
			                                                                <th>입금자명</th>
			                                                                <th>입금액 <i class="fa fa-sort"></i></th>
			                                                                <th>신청일시 <i class="fa fa-sort"></i></th>
			                                                                <th>확인일시 <i class="fa fa-sort"></i></th>
			                                                            </tr>
			                                                        </thead>
			                                                        <tbody>
			                                                            <tr ng-repeat = 'deposit in site.deposits | startFrom:site.deposit_offset*site.deposit_limit | limitTo:site.deposit_limit track by $index'>
			                                                                <td>{{ ($index + (site.deposit_offset*site.deposit_limit)) + 1 }}</td>
			                                                                <td>{{deposit.site_name}}</td>
			                                                                <td>{{deposit.username}}</td>
			                                                                <td>{{deposit.nickname}}</td>
			                                                                <td>{{deposit.bank_name}}</td>
			                                                                <td>{{deposit.money}}원</td>
			                                                                <td>{{deposit.wait_date}}</td>
			                                                                <td>{{deposit.finish_date}}</td>
			                                                            </tr>
			                                                            <tr>
			                                                                <td>합계</td>
			                                                                <td colspan="4"></td>
			                                                                <td>{{ site.total_deposit }} 원</td>
			                                                                <td colspan="2"></td>
			                                                            </tr>
			                                                        </tbody>
			                                                    </table>
			                                                </div>
			
			                                                <div class="text-center relative">
			                                            		<nav>		
			                                            		    <nav>
																    <ul class="pagination pagination-sm">
																        <li><a href="" aria-label="First" ng-hide="site.deposit_offset == 0" ng-click="setDepositOffset(site, 0)">처음</a></li>

																        <li><a href="" aria-label="Previous" ng-hide="site.deposit_offset == 0" ng-click="setDepositOffset(site, site.deposit_offset-1)"><i class="fa fa-angle-left"></i></a></li>

																        <li ng-repeat = 'page in site.deposit_pages' ng-class="(page === site.deposit_offset) ? 'active': ''"><a href="" ng-click="setDepositOffset(site, page)">{{ page + 1 }}</a></li>

																        <li><a href="" ng-hide="site.deposit_offset >= site.deposit_max_page" ng-click="setDepositOffset(site, site.deposit_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
																        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="site.deposit_offset >= site.deposit_max_page" ng-click="setDepositOffset(site, site.deposit_max_page)" aria-label="Last">마지막</a></li>
																    </ul>
																</nav>
			                                            		</nav>
			                                        		</div>
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			
			                                <div class="tab-pane" id="tab_{{ $index + 1 }}1">
			                                    <div id="tab_best_s2" class="div-tab tabs swipe-tab tabs-color-top">
			                                        <div class="w-tab bg-light">
			                                            <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                                <li class="active"><a href = "" data-target="#tab_20" data-toggle="tab">전체</a></li>
			                                                <li><a href = "" data-target="#tab_21" data-toggle="tab">오늘</a></li>
			                                                <li><a href = "" data-target="#tab_22" data-toggle="tab">이번주</a></li>
			                                                <li><a href = "" data-target="#tab_23" data-toggle="tab">지난주</a></li>
			                                                <li><a href = "" data-target="#tab_24" data-toggle="tab">지난달</a></li>
			                                                
			                                               <span class="tab-opt">
			                                                	<input type="text" ng-model="sd.from" name="fr_date" value=""	 id="fr_date" class="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<input type="text" ng-model="sd.to" name="to_date" value="" i	d="to_date" clas	s="	datepicker1" placeholder="8/12/2018" size="6" maxlength="10">	
			                                                	<button type="submit" class="btn_submit btn-success btn-black btn" ng-click="	searchDeposit()">조회</button>
				                                                	
				                                                	<span class="sp"></span>
				
			                                                	<select ng-model = 'sd.filter_by'>
			                                                	    <option value = 'member.username'>아이디</option>
			                                                	    <option value = 'member.nickname'>닉네임</option>
			                                                	</select>
			                                                	<input type="text" ng-model = 'sd.filter_val' value="" size="6">
			                                                	<button type="submit" ng-click="searchDeposit()" class="btn_submit btn-success btn-black btn">조회</button>
			                                                </span>
			                                            </ul>
			                                        </div>
			                                        <div class="tab-content">
			                                            <div class="tab-pane active" id="tab_10">
			                                                <div class="table-responsive">
			                                                    <table class="table table-bordered">
			                                                        <thead>
			                                                            <tr>
			                                                                <th>No. <i class="fa fa-sort"></i></th>
			                                                                <th>사이트</th>
			                                                                <th>아이디</th>
			                                                                <th>닉네임</th>
			                                                                <th>출금액 <i class="fa fa-sort"></i></th>
			                                                                <th>은행</th>
			                                                                <th>예금주</th>
			                                                                <th>계좌번호</th>
			                                                                <th>신청일시 <i class="fa fa-sort"></i></th>
			                                                                <th>확인일시 <i class="fa fa-sort"></i></th>
			                                                            </tr>
			                                                        </thead>
			                                                        <tbody>
			                                                            <tr ng-repeat = 'withdraw in site.withdraws |startFrom:site.withdraw_offset*site.withdraw_limit | limitTo:site.withdraw_limit track by $index'>
			                                                                <td>{{ ($index + (site.withdraw_offset*site.withdraw_limit)) + 1 }}</td>
			                                                                <td>{{withdraw.site_name}}</td>
			                                                                <td>{{withdraw.username}}</td>
			                                                                <td>{{withdraw.nickname}}</td>
			                                                                <td>{{withdraw.money}} 원</td>
			                                                                <td>{{withdraw.bank_name}}</td>
			                                                                <td>{{withdraw.bank_owner}}</td>
			                                                                <td>
			                                                                {{withdraw.bank_account}}
			                                                                </td>
			                                                                <td>{{withdraw.wait_date}}</td>
			                                                                <td>{{withdraw.finish_date}}</td>
			                                                            </tr>
			                                                            <tr>
			                                                                <td>합계</td>
			                                                                <td colspan="3"></td>
			                                                                <td>{{ site.total_withdraw }} 원</td>
			                                                                <td colspan="5"></td>
			                                                            </tr>
			                                                        </tbody>
			                                                    </table>
			                                                </div>
			                                            	<div class="text-center relative">
				                                                <nav>
																    <ul class="pagination pagination-sm">
																        <li><a href="" aria-label="First" ng-hide="site.withdraw_offset == 0" ng-click="setWithdrawOffset(site, 0)">처음</a></li>

																        <li><a href="" aria-label="Previous" ng-hide="site.withdraw_offset == 0" ng-click="setWithdrawOffset(site, site.withdraw_offset-1)"><i class="fa fa-angle-left"></i></a></li>

																        <li ng-repeat = 'page in site.withdraw_pages' ng-class="(page === site.withdraw_offset) ? 'active': ''"><a href="" ng-click="setWithdrawOffset(site, page)">{{ page + 1 }}</a></li>

																        <li><a href="" ng-hide="site.withdraw_offset >= site.withdraw_max_page" ng-click="setWithdrawOffset(site, site.withdraw_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
																        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="site.withdraw_offset >= site.withdraw_max_page" ng-click="setWithdrawOffset(site, site.withdraw_max_page)" aria-label="Last">마지막</a></li>
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
			                </div>
			            </div>
			        </div>
			        <script>
			            $(document).ready(function() {
                            $('#main-cntr').on('click', '.show-template-form', function() {
                                $('#template-form').slideDown();
                            });
                            
                            $('#main-cntr').on('click', '.close-template-form', function() {
                                $('#template-form').slideUp();
                            });
                            
                            $('#main-cntr').delegate(".datepicker1", "focusin", function(){
                                $(this).datepicker(({ dateFormat: 'yymmdd' }));
                            });
                            
                        });
				    </script>