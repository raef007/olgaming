					<div style="padding:0px 10px 10px 10px;" class="body-wrap">
                    
			            <div class="h80"></div>
			
			            <div id="tab_charge" class="div-tab tabs swipe-tab tabs-color-top">
			                <div class="w-tab bg-light">
			                    <ul class="nav nav-tabs" data-toggle="tab-hover">
			                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
			                        <li ng-repeat = 'site in master.sites track by $index'><a href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" >{{ site.site_name }}</a></li>
			                    </ul>
			                </div>
			                
			                <div class="tab-content">
			                    <div class="tab-pane active" id="tab_0">
			                        
			                        <div id="tab_charge0" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">충전요청(STEP.1)</a></li>
			                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">충전대기(STEP.2)</a></li>
			                                    <li><a href = "" data-target="#tab_02" data-toggle="tab">충전완료(STEP.3)</a></li>
			                                </ul>
			                            </div>
			                            <div class="tab-content">
			                            
			                                <div class="tab-pane active" id="tab_00">
			                        
			                                    <h4>충전요청 (STEP.1)</h4>
			
			                                    <form name="" id="" class="" method="get">
			                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
			                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                        
			                                        <span class="sp"></span>
			                                        입금레벨
			                                        <select ng-model = 'search.deposit_level'>
			                                            <option value = '0'>가입</option>
			                                            <option value = '1'>소액</option>
			                                            <option value = '2'>중액</option>
			                                            <option value = '3'>고액</option>
			                                        </select>
			                                        <!--<input type="text" value="" size="6">-->
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			
			                                        <span class="sp"></span>
			                                        조건검색
			                                        <select ng-model = 'search.filter_by'>
			                                            <option value = 'member.username'>아이디</option>
			                                            <option value = 'member.nickname'>닉네임</option>
			                                            <option value = 'member.bank_owner'>입금자</option>
			                                            <option value = 'member.bank_name'>입금계좌</option>
			                                        </select>
			                                        <input type="text" size="6" ng-model = 'search.filter_val'>
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                    </form>
			
			                                    <div class="h10"></div>
			
			                                    <div class="text-left">
			                                        <button class="btn btn-default" ng-click = 'setChargeSts(master.sites, "requests", 2)'>충전대기 처리 (STEP.2)</button>
			                                        <button class="btn btn-default pull-right" ng-click = 'cancelDeposit(master.sites, "requests")'>충전취소</button>
			                                    </div>
			
			                                    <div class="h10"></div>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th><input type="checkbox"></th>
			                                                    <th>No. <i class="fa fa-sort"></i>
			                                                    <th>사이트</th>
			                                                    <th>금액대</th>
			                                                    <th>입금계좌</th>
			                                                    <th>입금자</th>
			                                                    <th>입금금액</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>회원레벨</th>
			                                                    <th>중복</th>
			                                                    <th>등록일시 <i class="fa fa-sort"></i>
			                                                    <th>상태</th>
			                                                    <th>회원</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr ng-repeat = 'site in master.sites | combine:"requests" | startFrom:master.req_offset*master.limit | limitTo:master.limit track by $index'>
			                                                    <td><input type="checkbox" ng-model = 'site.deposit_check' value = '1'></td>
			                                                    <td>{{ ($index + (master.req_offset*master.limit)) + 1 }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td ng-if = '0 == site.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == site.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == site.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == site.deposit_level'>고액</td>
			                                                    <td>{{ site.bank_name }}</td>
			                                                    <td class="open_tables banker_name"><a href="#">{{ site.bank_owner }}</a></td>
			                                                    <td> <input type="text" class="text-right" ng-model = 'site.money'> </td>
			                                                    <td class="open_tables depositor_id"><a href="#">{{ site.username }}</a></td>
			                                                    <td class="open_tables depositor_nickname"><a href="#">{{ site.nickname }}</a></td>
			                                                    <td>{{ site.member_level }}</td>
			                                                    <td>0</td>
			                                                    <td>{{ site.reg_date }}</td>
			                                                    <td ng-if = '1 == site.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == site.cancel_flag'>Request</td>
			                                                    <td><button class="btn-default btn mem_info">정보</button></td>
			                                                </tr>
			                                            </tbody>
			                                        </table>
			                                    </div>
			
			                                    <div class="up-10"></div>
			                                    <div class="text-right">
			                                        <button class="btn btn-default" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
			                                    </div>
			
			                                    <div class="text-center relative" style="left:-15%;">
                                                    <nav>
                                                        <ul class="pagination pagination-sm">
                                                            <li><a href="" ng-hide="master.req_offset == 0" aria-label="First" ng-hide="master.req_offset == 0" ng-click="setReqOffset(master, 0)">처음</a></li>
                                                            
                                                            <li><a href="" ng-hide="master.req_offset == 0" aria-label="Previous" ng-hide="master.req_offset == 0" ng-click="setReqOffset(master, master.req_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in master.req_pages' ng-class="(page === master.req_offset) ? 'active': ''"><a href="" ng-click="setReqOffset(master, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="master.req_offset >= master.req_max" ng-click="setReqOffset(master, master.req_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.req_offset >= master.req_max" ng-click="setReqOffset(master, master.req_max)" aria-label="Last">마지막</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
			                                </div>
			                    
			                                <div class="tab-pane" id="tab_01">
			                        
			                                    <h4>충전대기 (STEP.2)</h4>
			
			                                    <form name="" id="" class="" method="get">
			                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
			                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                        
			                                        <span class="sp"></span>
			                                        입금레벨
			                                        <select ng-model = 'search.deposit_level'>
			                                            <option value = '0'>가입</option>
			                                            <option value = '1'>소액</option>
			                                            <option value = '2'>중액</option>
			                                            <option value = '3'>고액</option>
			                                        </select>
			                                        <!--<input type="text" value="" size="6">-->
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			
			                                        <span class="sp"></span>
			                                        조건검색
			                                        <select ng-model = 'search.filter_by'>
			                                            <option value = 'member.username'>아이디</option>
			                                            <option value = 'member.nickname'>닉네임</option>
			                                            <option value = 'member.bank_owner'>입금자</option>
			                                            <option value = 'member.bank_name'>입금계좌</option>
			                                        </select>
			                                        <input type="text" size="6" ng-model = 'search.filter_val'>
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                    </form>
			
			                                    <div class="h10"></div>
			
			                                    <div class="text-left">
			                                        <button class="btn btn-default" ng-click = 'setChargeSts(wait_copy.sites, "standbys", 3)'>충전완료 처리 (STEP.3)</button>
			                                        <button class="btn btn-default pull-right" ng-click = 'cancelDeposit(wait_copy.sites, "standbys")'>충전취소</button>
			                                    </div>
			
			                                    <div class="h10"></div>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th><input type="checkbox"></th>
			                                                    <th>No. <i class="fa fa-sort"></i>
			                                                    <th>사이트</th>
			                                                    <th>금액대</th>
			                                                    <th>입금계좌</th>
			                                                    <th>입금자</th>
			                                                    <th>입금금액</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>회원레벨</th>
			                                                    <th>중복</th>
			                                                    <th>등록일시 <i class="fa fa-sort"></i>
			                                                    <th>처리일시 <i class="fa fa-sort"></i>
			                                                    <th>상태</th>
			                                                    <th>회원</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr ng-repeat = 'site in wait_copy.sites | combine:"standbys" | startFrom:master.wait_offset*master.limit | limitTo:master.limit track by $index'>
                                                                <td><input type="checkbox" ng-model = 'site.deposit_check' value = '1'></td>
			                                                    <td>{{ ($index + (master.wait_offset*master.limit)) + 1 }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td ng-if = '0 == site.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == site.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == site.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == site.deposit_level'>고액</td>
			                                                    <td>{{ site.bank_name }}</td>
			                                                    <td class="open_tables banker_name"><a href="#">{{ site.bank_owner }}</a></td>
			                                                    <td> <input type="text" class="text-right" ng-model = 'site.money'> </td>
			                                                    <td class="open_tables depositor_id"><a href="#">{{ site.username }}</a></td>
			                                                    <td class="open_tables depositor_nickname"><a href="#">{{ site.nickname }}</a></td>
			                                                    <td>{{ site.member_level }}</td>
			                                                    <td>0</td>
			                                                    <td>{{ site.reg_date }}</td>
			                                                    <td>{{ site.wait_date }}</td>
			                                                    <td ng-if = '1 == site.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == site.cancel_flag'>Standby</td>
			                                                    <td><button class="btn-default btn mem_info">정보</button></td>
			                                                </tr>
			                                            </tbody>
			                                        </table>
			                                    </div>
			
			                                    <div class="up-10"></div>
			                                    <div class="text-right">
			                                        <button class="btn btn-default" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
			                                    </div>
			
			                                    <div class="text-center relative" style="left:-15%;">
                                                    <nav>
                                                        <ul class="pagination pagination-sm">
                                                            <li><a href="" ng-hide="master.wait_offset == 0" aria-label="First" ng-hide="master.wait_offset == 0" ng-click="setWaitOffset(master, 0)">처음</a></li>
                                                            
                                                            <li><a href="" ng-hide="master.wait_offset == 0" aria-label="Previous" ng-hide="master.wait_offset == 0" ng-click="setWaitOffset(master, master.wait_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in master.wait_pages' ng-class="(page === master.wait_offset) ? 'active': ''"><a href="" ng-click="setWaitOffset(master, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="master.wait_offset >= master.wait_max" ng-click="setWaitOffset(master, master.wait_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.wait_offset >= master.wait_max" ng-click="setWaitOffset(master, master.wait_max)" aria-label="Last">마지막</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
			                                </div>
			
			                                <div class="tab-pane" id="tab_02">
			                        
			                                    <h4>충전완료 (STEP.3)</h4>
			
			                                    <form name="" id="" class="" method="get">
			                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
			                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                        
			                                        <span class="sp"></span>
			                                        입금레벨
			                                        <select ng-model = 'search.deposit_level'>
			                                            <option value = '0'>가입</option>
			                                            <option value = '1'>소액</option>
			                                            <option value = '2'>중액</option>
			                                            <option value = '3'>고액</option>
			                                        </select>
			                                        <!--<input type="text" value="" size="6">-->
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			
			                                        <span class="sp"></span>
			                                        조건검색
			                                        <select ng-model = 'search.filter_by'>
			                                            <option value = 'member.username'>아이디</option>
			                                            <option value = 'member.nickname'>닉네임</option>
			                                            <option value = 'member.bank_owner'>입금자</option>
			                                            <option value = 'member.bank_name'>입금계좌</option>
			                                        </select>
			                                        <input type="text" size="6" ng-model = 'search.filter_val'>
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                    </form>
			
			                                    <div class="h10"></div>
			
			                                    <div class="text-left">
			                                        <button class="btn btn-default pull-right" ng-click = 'cancelDeposit(done_copy.sites, "completeds")'>충전취소</button>
                                                    <div class="clearFix"></div>
			                                    </div>
			
			                                    <div class="h10"></div>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th><input type="checkbox"></th>
			                                                    <th>No. <i class="fa fa-sort"></i>
			                                                    <th>사이트</th>
			                                                    <th>금액대</th>
			                                                    <th>입금계좌</th>
			                                                    <th>입금자</th>
			                                                    <th>입금금액</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>회원레벨</th>
			                                                    <th>중복</th>
			                                                    <th>등록일시 <i class="fa fa-sort"></i>
			                                                    <th>상태</th>
			                                                    <th>회원</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr ng-repeat = 'site in done_copy.sites | combine:"completeds" | startFrom:master.done_offset*master.limit | limitTo:master.limit track by $index'>
                                                                <td><input type="checkbox" ng-model = 'site.deposit_check' value = '1'></td>
			                                                    <td>{{ ($index + (master.done_offset*master.limit)) + 1 }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td ng-if = '0 == site.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == site.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == site.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == site.deposit_level'>고액</td>
			                                                    <td>{{ site.bank_name }}</td>
			                                                    <td class="open_tables banker_name"><a href="#">{{ site.bank_owner }}</a></td>
			                                                    <td> <input type="text" class="text-right" ng-model = 'site.money'> </td>
			                                                    <td class="open_tables depositor_id"><a href="#">{{ site.username }}</a></td>
			                                                    <td class="open_tables depositor_nickname"><a href="#">{{ site.nickname }}</a></td>
			                                                    <td>{{ site.member_level }}</td>
			                                                    <td>0</td>
			                                                    <td>{{ site.finish_date }}</td>
			                                                    <td ng-if = '1 == site.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == site.cancel_flag'>Complete</td>
			                                                    <td><button class="btn-default btn mem_info">정보</button></td>
                                                            </tr>
			                                            </tbody>
			                                        </table>
			                                    </div>
			
			                                    <div class="up-10"></div>
			                                    <div class="text-right">
			                                        <button class="btn btn-default" ng-click = 'downloadExcelFile()'>엑셀 다운로드</button>
			                                    </div>
			
			                                    <div class="text-center relative" style="left:-15%;">
                                                    <nav>
                                                        <ul class="pagination pagination-sm">
                                                            <li><a href="" ng-hide="master.done_offset == 0" aria-label="First" ng-hide="master.done_offset == 0" ng-click="setDoneOffset(master, 0)">처음</a></li>
                                                            
                                                            <li><a href="" ng-hide="master.done_offset == 0" aria-label="Previous" ng-hide="master.done_offset == 0" ng-click="setDoneOffset(master, master.done_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in master.done_pages' ng-class="(page === master.done_offset) ? 'active': ''"><a href="" ng-click="setDoneOffset(master, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="master.done_offset >= master.done_max" ng-click="setDoneOffset(master, master.done_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.done_offset >= master.done_max" ng-click="setDoneOffset(master, master.done_max)" aria-label="Last">마지막</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			
			                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>
			                        
			                        <div id="tab_charge1" class="div-tab tabs swipe-tab tabs-color-top">
			                            <div class="w-tab bg-light">
			                                <ul class="nav nav-tabs" data-toggle="tab-hover">
			                                    <li class="active"><a href = "" data-target="#tab_{{ $index + 1 }}0" data-toggle="tab">충전요청(STEP.1)</a></li>
			                                    <li><a href = "" data-target="#tab_{{ $index + 1 }}1" data-toggle="tab">충전대기(STEP.2)</a></li>
			                                    <li><a href = "" data-target="#tab_{{ $index + 1 }}2" data-toggle="tab">충전완료(STEP.3)</a></li>
			                                </ul>
			                            </div>
			                            <div class="tab-content">
			                                <div class="tab-pane active" id="tab_10">
			                                    
			                                    <h4>충전요청 (STEP.1)</h4>
			
			                                    <form name="" id="" class="" method="get">
			                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
			                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                        
			                                        <span class="sp"></span>
			                                        입금레벨
			                                        <select ng-model = 'search.deposit_level'>
			                                            <option value = '0'>가입</option>
			                                            <option value = '1'>소액</option>
			                                            <option value = '2'>중액</option>
			                                            <option value = '3'>고액</option>
			                                        </select>
			                                        <!--<input type="text" value="" size="6">-->
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			
			                                        <span class="sp"></span>
			                                        조건검색
			                                        <select ng-model = 'search.filter_by'>
			                                            <option value = 'member.username'>아이디</option>
			                                            <option value = 'member.nickname'>닉네임</option>
			                                            <option value = 'member.bank_owner'>입금자</option>
			                                            <option value = 'member.bank_name'>입금계좌</option>
			                                        </select>
			                                        <input type="text" size="6" ng-model = 'search.filter_val'>
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                    </form>
			
			                                    <div class="h10"></div>
			
			                                    <div class="text-left">
			                                        <button class="btn btn-default" ng-click = 'setChargeSts(master.sites, "requests", 2)'>충전대기 처리 (STEP.2)</button>
			                                        <button class="btn btn-default pull-right" ng-click = 'cancelDeposit(master.sites, "requests")'>충전취소</button>
			                                    </div>
			
			                                    <div class="h10"></div>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th><input type="checkbox"></th>
			                                                    <th>No. <i class="fa fa-sort"></i>
			                                                    <th>사이트</th>
			                                                    <th>금액대</th>
			                                                    <th>입금계좌</th>
			                                                    <th>입금자</th>
			                                                    <th>입금금액</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>회원레벨</th>
			                                                    <th>중복</th>
			                                                    <th>등록일시 <i class="fa fa-sort"></i>
			                                                    <th>상태</th>
			                                                    <th>회원</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr ng-repeat = 'request in site.requests | startFrom:site.req_offset*master.limit | limitTo:site.limit track by $index'>
			                                                    <td><input type="checkbox" ng-model = 'request.deposit_check' value = '1'></td>
			                                                    <td>{{ ($index + (site.req_offset*site.limit)) + 1 }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td ng-if = '0 == request.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == request.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == request.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == request.deposit_level'>고액</td>
			                                                    <td>{{ request.bank_name }}</td>
			                                                    <td class="open_tables banker_name"><a href="#">{{ request.bank_owner }}</a></td>
			                                                    <td> <input type="text" class="text-right" ng-model = 'request.money'> </td>
			                                                    <td class="open_tables depositor_id"><a href="#">{{ request.username }}</a></td>
			                                                    <td class="open_tables depositor_nickname"><a href="#">{{ request.nickname }}</a></td>
			                                                    <td>{{ request.member_level }}</td>
			                                                    <td>0</td>
			                                                    <td>{{ request.reg_date }}</td>
			                                                    <td ng-if = '1 == request.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == request.cancel_flag'>Request</td>
			                                                    <td><button class="btn-default btn mem_info">정보</button></td>
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
                                                            <li><a href="" aria-label="First" ng-hide="site.req_offset == 0" ng-click="setReqOffset(site, 0)">처음</a></li>
                                                            
                                                            <li><a href="" aria-label="Previous" ng-hide="site.req_offset == 0" ng-click="setReqOffset(site, site.req_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in site.req_pages' ng-class="(page === site.req_offset) ? 'active': ''"><a href="" ng-click="setReqOffset(site, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="site.req_offset >= site.req_max" ng-click="setReqOffset(site, site.req_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a href="" aria-label="Previous" ng-hide="site.req_offset >= site.req_max" ng-click="setReqOffset(site, site.req_max)" aria-label="Last">마지막</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
			                                </div>
			                    
			                                <div class="tab-pane" id="tab_11">
			                        
			                                    <h4>충전대기 (STEP.2)</h4>
			
			                                    <form name="" id="" class="" method="get">
			                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
			                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                        
			                                        <span class="sp"></span>
			                                        입금레벨
			                                        <select ng-model = 'search.deposit_level'>
			                                            <option value = '0'>가입</option>
			                                            <option value = '1'>소액</option>
			                                            <option value = '2'>중액</option>
			                                            <option value = '3'>고액</option>
			                                        </select>
			                                        <!--<input type="text" value="" size="6">-->
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			
			                                        <span class="sp"></span>
			                                        조건검색
			                                        <select ng-model = 'search.filter_by'>
			                                            <option value = 'member.username'>아이디</option>
			                                            <option value = 'member.nickname'>닉네임</option>
			                                            <option value = 'member.bank_owner'>입금자</option>
			                                            <option value = 'member.bank_name'>입금계좌</option>
			                                        </select>
			                                        <input type="text" size="6" ng-model = 'search.filter_val'>
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                    </form>
			
			                                    <div class="h10"></div>
			
			                                    <div class="text-left">
			                                        <button class="btn btn-default" ng-click = 'setChargeSts(master.sites, "standbys", 3)'>충전완료 처리 (STEP.3)</button>
			                                        <button class="btn btn-default pull-right" ng-click = 'cancelDeposit(master.sites, "standbys")'>충전취소</button>
			                                    </div>
			
			                                    <div class="h10"></div>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th><input type="checkbox"></th>
			                                                    <th>No. <i class="fa fa-sort"></i>
			                                                    <th>사이트</th>
			                                                    <th>금액대</th>
			                                                    <th>입금계좌</th>
			                                                    <th>입금자</th>
			                                                    <th>입금금액</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>회원레벨</th>
			                                                    <th>중복</th>
			                                                    <th>등록일시 <i class="fa fa-sort"></i>
			                                                    <th>처리일시 <i class="fa fa-sort"></i>
			                                                    <th>상태</th>
			                                                    <th>회원</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr ng-repeat = 'request in site.standbys | startFrom:site.wait_offset*master.limit | limitTo:site.limit track by $index'>
			                                                    <td><input type="checkbox" ng-model = 'request.deposit_check' value = '1'></td>
			                                                    <td>{{ ($index + (site.wait_offset*site.limit)) + 1 }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td ng-if = '0 == request.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == request.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == request.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == request.deposit_level'>고액</td>
			                                                    <td>{{ request.bank_name }}</td>
			                                                    <td class="open_tables banker_name"><a href="#">{{ request.bank_owner }}</a></td>
			                                                    <td> <input type="text" class="text-right" ng-model = 'request.money'> </td>
			                                                    <td class="open_tables depositor_id"><a href="#">{{ request.username }}</a></td>
			                                                    <td class="open_tables depositor_nickname"><a href="#">{{ request.nickname }}</a></td>
			                                                    <td>{{ request.member_level }}</td>
			                                                    <td>0</td>
			                                                    <td>{{ request.reg_date }}</td>
			                                                    <td>{{ request.wait_date }}</td>
			                                                    <td ng-if = '1 == request.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == request.cancel_flag'>Standby</td>
			                                                    <td><button class="btn-default btn mem_info">정보</button></td>
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
                                                            <li><a href="" aria-label="First" ng-hide="site.wait_offset == 0" ng-click="setWaitOffset(site, 0)">처음</a></li>
                                                            
                                                            <li><a href="" aria-label="Previous" ng-hide="site.wait_offset == 0" ng-click="setWaitOffset(site, site.wait_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in site.wait_pages' ng-class="(page === site.wait_offset) ? 'active': ''"><a href="" ng-click="setWaitOffset(site, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="site.wait_offset >= site.wait_max" ng-click="setWaitOffset(site, site.wait_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a href="" aria-label="Previous" ng-hide="site.wait_offset >= site.wait_max" ng-click="setWaitOffset(site, site.wait_max)" aria-label="Last">마지막</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
			                                </div>
			
			                                <div class="tab-pane" id="tab_12">
			                        
			                                    <h4>충전완료 (STEP.3)</h4>
			
			                                    <form name="" id="" class="" method="get">
			                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
			                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                        
			                                        <span class="sp"></span>
			                                        입금레벨
			                                        <select ng-model = 'search.deposit_level'>
			                                            <option value = '0'>가입</option>
			                                            <option value = '1'>소액</option>
			                                            <option value = '2'>중액</option>
			                                            <option value = '3'>고액</option>
			                                        </select>
			                                        <!--<input type="text" value="" size="6">-->
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			
			                                        <span class="sp"></span>
			                                        조건검색
			                                        <select ng-model = 'search.filter_by'>
			                                            <option value = 'member.username'>아이디</option>
			                                            <option value = 'member.nickname'>닉네임</option>
			                                            <option value = 'member.bank_owner'>입금자</option>
			                                            <option value = 'member.bank_name'>입금계좌</option>
			                                        </select>
			                                        <input type="text" size="6" ng-model = 'search.filter_val'>
			                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
			                                    </form>
			
			                                    <div class="h10"></div>
			
			                                    <div class="text-left">
			                                        <button class="btn btn-default pull-right" ng-click = 'cancelDeposit(master.sites, "completeds")'>충전취소</button>
                                                    <div class="clearFix"></div>
			                                    </div>
			
			                                    <div class="h10"></div>
			
			                                    <div class="table-responsive">
			                                        <table class="table table-bordered">
			                                            <thead>
			                                                <tr>
			                                                    <th><input type="checkbox"></th>
			                                                    <th>No. <i class="fa fa-sort"></i>
			                                                    <th>사이트</th>
			                                                    <th>금액대</th>
			                                                    <th>입금계좌</th>
			                                                    <th>입금자</th>
			                                                    <th>입금금액</th>
			                                                    <th>아이디</th>
			                                                    <th>닉네임</th>
			                                                    <th>회원레벨</th>
			                                                    <th>중복</th>
			                                                    <th>등록일시 <i class="fa fa-sort"></i>
			                                                    <th>상태</th>
			                                                    <th>회원</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                                <tr ng-repeat = 'request in site.completeds | startFrom:site.done_offset*master.limit | limitTo:site.limit track by $index'>
			                                                    <td><input type="checkbox" ng-model = 'request.deposit_check' value = '1'></td>
			                                                    <td>{{ ($index + (site.done_offset*site.limit)) + 1 }}</td>
			                                                    <td>{{ site.site_name }}</td>
			                                                    <td ng-if = '0 == request.deposit_level'>가입</td>
			                                                    <td ng-if = '1 == request.deposit_level'>소액</td>
			                                                    <td ng-if = '2 == request.deposit_level'>중액</td>
			                                                    <td ng-if = '3 == request.deposit_level'>고액</td>
			                                                    <td>{{ request.bank_name }}</td>
			                                                    <td class="open_tables banker_name"><a href="#">{{ request.bank_owner }}</a></td>
			                                                    <td> <input type="text" class="text-right" ng-model = 'request.money'> </td>
			                                                    <td class="open_tables depositor_id"><a href="#">{{ request.username }}</a></td>
			                                                    <td class="open_tables depositor_nickname"><a href="#">{{ request.nickname }}</a></td>
			                                                    <td>{{ request.member_level }}</td>
			                                                    <td>0</td>
			                                                    <td>{{ request.reg_date }}</td>
			                                                    <td ng-if = '1 == request.cancel_flag'>Cancelled</td>
			                                                    <td ng-if = '0 == request.cancel_flag'>Completed</td>
			                                                    <td><button class="btn-default btn mem_info">정보</button></td>
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
                                                            <li><a href="" aria-label="First" ng-hide="site.done_offset == 0" ng-click="setDoneOffset(site, 0)">처음</a></li>
                                                            
                                                            <li><a href="" aria-label="Previous" ng-hide="site.done_offset == 0" ng-click="setDoneOffset(site, site.done_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                            
                                                            <li ng-repeat = 'page in site.done_pages' ng-class="(page === site.done_offset) ? 'active': ''"><a href="" ng-click="setDoneOffset(site, page)">{{ page + 1 }}</a></li>

                                                            <li><a href="" ng-hide="site.done_offset >= site.done_max" ng-click="setDoneOffset(site, site.done_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                            <li><a href="" aria-label="Previous" ng-hide="site.done_offset >= site.done_max" ng-click="setDoneOffset(site, site.done_max)" aria-label="Last">마지막</a></li>
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
	
	
					<script>
				         $(function(){
				             $('.mem_info').on("click",function(){
				                 var url = './member/membership_info_details.jsp';
				                 window.open(url, '_blank');
				             });
				
				             // $('.banker_name').on("click",function(){
				             //     openTables();
				             // });
				             // $('.depositor_nickname').on("click",function(){
				             //     openTables();
				             // });
				             // $('.depositor_id').on("click",function(){
				             //     openTables();
				             // });
				
				             $('.open_tables').on("click",function(){
				                 openTables();
				             });
				
				         });
				
				         function openTables(){
				             var url = '../../pay/forms/charge_management_table.html';
				             window.open(url,'_blank');
				         }
				     </script>