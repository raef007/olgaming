						<div style="padding:0px 10px 10px 10px;" class="body-wrap">
				
				            <div class="h80"></div>
				
				            <div id="tab_login_info" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li ng-repeat = 'site in sites track by $index'><a href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" >{{ site.site_name }}</a></li>
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
                                                        <input type="text" class="datepicker1" ng-model = 'search.from'>
                                                        <input type="text" class="datepicker1" ng-model = 'search.to'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
                                                        
                                                        <span class="sp"></span>
                                                        <select name="selector1" ng-model = 'search.filter_by'>
                                                            <option value = 'username'>아이디</option>
                                                            <option value = 'nickname'>닉네임</option>
                                                            <option value = 'IP'>아이피</option>
                                                        </select>
                                                        <input type="text" ng-model = 'search.filter_val'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
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
                                                            <tbody ng-repeat = 'site in sites track by $index'>
                                                                <tr ng-repeat = 'log in site.ok_logs track by $index'>
                                                                    <td>{{ log.sl_seq }}</td>
                                                                    <td>{{ site.site_name }}</td>
                                                                    <td>{{ log.username }}</td>
                                                                    <td>{{ log.nickname }}</td>
                                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
                                                                    <td class="blocked">
                                                                        {{ log.IP }}
                                                                        <button class="btn-default btn-blocked btn">IP허용</button>
                                                                    </td>
                                                                    <td>{{ log.reg_date }}</td>
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
                                                                <li><a href="" aria-label="First" ng-hide="pag_inf.ok_offset == 0" ng-click="setOkOffset(pag_inf, 0)">처음</a></li>
                                                                
                                                                <li><a href="" aria-label="Previous" ng-hide="pag_inf.ok_offset == 0" ng-click="setOkOffset(pag_inf, pag_inf.ok_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                                
                                                                <li ng-repeat = 'page in pag_inf.ok_pages' ng-class="(page === pag_inf.ok_offset) ? 'active': ''"><a href="" ng-click="setOkOffset(pag_inf, page)">{{ page + 1 }}</a></li>

                                                                <li><a href="" ng-hide="pag_inf.ok_offset >= pag_inf.ok_max" ng-click="setOkOffset(pag_inf, pag_inf.ok_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="pag_inf.ok_offset >= pag_inf.ok_max" ng-click="setOkOffset(pag_inf, pag_inf.ok_max)" aria-label="Last">마지막</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
				                                </div>
				
				                                <div class="tab-pane" id="tab_01">
				                                    <form name="" id="" class="" method="get">
				                                        <input type="text" class="datepicker1" ng-model = 'search.from'>
                                                        <input type="text" class="datepicker1" ng-model = 'search.to'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
                                                        
                                                        <span class="sp"></span>
                                                        <select name="selector1" ng-model = 'search.filter_by'>
                                                            <option value = 'username'>아이디</option>
                                                            <option value = 'nickname'>닉네임</option>
                                                            <option value = 'IP'>아이피</option>
                                                        </select>
                                                        <input type="text" ng-model = 'search.filter_val'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
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
				                                            <tbody ng-repeat = 'site in sites track by $index'>
                                                                <tr ng-repeat = 'log in site.ng_logs track by $index'>
                                                                    <td>{{ log.sl_seq }}</td>
                                                                    <td>{{ site.site_name }}</td>
                                                                    <td>{{ log.username }}</td>
                                                                    <td>{{ log.fail_pasword }}</td>
                                                                    <td>{{ log.nickname }}</td>
                                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
                                                                    <td class="blocked">
                                                                        {{ log.IP }}
                                                                        <button class="btn-default btn-blocked btn">IP허용</button>
                                                                    </td>
                                                                    <td>{{ log.reg_date }}</td>
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
                                                                <li><a href="" aria-label="First" ng-hide="pag_inf.ng_offset == 0" ng-click="setNgOffset(pag_inf, 0)">처음</a></li>
                                                                
                                                                <li><a href="" aria-label="Previous" ng-hide="pag_inf.ng_offset == 0" ng-click="setNgOffset(pag_inf, pag_inf.ng_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                                
                                                                <li ng-repeat = 'page in pag_inf.ng_pages' ng-class="(page === pag_inf.ng_offset) ? 'active': ''"><a href="" ng-click="setNgOffset(pag_inf, page)">{{ page + 1 }}</a></li>

                                                                <li><a href="" ng-hide="pag_inf.ng_offset >= pag_inf.ng_max" ng-click="setNgOffset(pag_inf, pag_inf.ng_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="pag_inf.ng_offset >= pag_inf.ng_max" ng-click="setNgOffset(pag_inf, pag_inf.ng_max)" aria-label="Last">마지막</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				
				                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in sites track by $index'>
				                        <div id="tab_login_info1" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_{{ $index + 1 }}0" data-toggle="tab">로그인 내역</a></li>
				                                    <li><a href = "" data-target="#tab_{{ $index + 1 }}1" data-toggle="tab">로그인 실패 내역</a></li>
				                                </ul>
				                            </div>
				                            
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_10">
				                                    <form name="" id="" class="" method="get">
				                                        <input type="text" class="datepicker1" ng-model = 'search.from'>
                                                        <input type="text" class="datepicker1" ng-model = 'search.to'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
                                                        
                                                        <span class="sp"></span>
                                                        <select name="selector1" ng-model = 'search.filter_by'>
                                                            <option value = 'username'>아이디</option>
                                                            <option value = 'nickname'>닉네임</option>
                                                            <option value = 'IP'>아이피</option>
                                                        </select>
                                                        <input type="text" ng-model = 'search.filter_val'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
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
				                                                <tr ng-repeat = 'log in site.ok_logs track by $index'>
                                                                    <td>{{ log.sl_seq }}</td>
                                                                    <td>{{ site.site_name }}</td>
                                                                    <td>{{ log.username }}</td>
                                                                    <td>{{ log.nickname }}</td>
                                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
                                                                    <td class="blocked">
                                                                        {{ log.IP }}
                                                                        <button class="btn-default btn-blocked btn">IP허용</button>
                                                                    </td>
                                                                    <td>{{ log.reg_date }}</td>
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
                                                                <li><a href="" aria-label="First" ng-hide="site.ok_offset == 0" ng-click="setOkOffset(site, 0)">처음</a></li>
                                                                
                                                                <li><a href="" aria-label="Previous" ng-hide="site.ok_offset == 0" ng-click="setOkOffset(site, site.ok_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                                
                                                                <li ng-repeat = 'page in site.ok_pages' ng-class="(page === site.ok_offset) ? 'active': ''"><a href="" ng-click="setOkOffset(site, page)">{{ page + 1 }}</a></li>

                                                                <li><a href="" ng-hide="site.ok_offset >= site.ok_max" ng-click="setOkOffset(site, site.ok_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                <li><a href="" aria-label="Previous" ng-hide="site.ok_offset >= site.ok_max" ng-click="setOkOffset(site, site.ok_max)" aria-label="Last">마지막</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
				                                </div>
				
				                                <div class="tab-pane" id="tab_11">
				                                    <form name="" id="" class="" method="get">
				                                        <input type="text" class="datepicker1" ng-model = 'search.from'>
                                                        <input type="text" class="datepicker1" ng-model = 'search.to'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
                                                        
                                                        <span class="sp"></span>
                                                        <select name="selector1" ng-model = 'search.filter_by'>
                                                            <option value = 'username'>아이디</option>
                                                            <option value = 'nickname'>닉네임</option>
                                                            <option value = 'IP'>아이피</option>
                                                        </select>
                                                        <input type="text" ng-model = 'search.filter_val'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
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
				                                                <tr ng-repeat = 'log in site.ng_logs track by $index'>
                                                                    <td>{{ log.sl_seq }}</td>
                                                                    <td>{{ site.site_name }}</td>
                                                                    <td>{{ log.username }}</td>
                                                                    <td>{{ log.fail_pasword }}</td>
                                                                    <td>{{ log.nickname }}</td>
                                                                    <!-- blcoked와 btn-blocked가 글씨색 결정 -->
                                                                    <td class="blocked">
                                                                        {{ log.IP }}
                                                                        <button class="btn-default btn-blocked btn">IP허용</button>
                                                                    </td>
                                                                    <td>{{ log.reg_date }}</td>
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
                                                                <li><a href="" aria-label="First" ng-hide="site.ng_offset == 0" ng-click="setNgOffset(site, 0)">처음</a></li>
                                                                
                                                                <li><a href="" aria-label="Previous" ng-hide="site.ng_offset == 0" ng-click="setNgOffset(site, site.ng_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                                
                                                                <li ng-repeat = 'page in site.ok_pages' ng-class="(page === site.ng_offset) ? 'active': ''"><a href="" ng-click="setNgOffset(site, page)">{{ page + 1 }}</a></li>

                                                                <li><a href="" ng-hide="site.ng_offset >= site.ng_max" ng-click="setNgOffset(site, site.ng_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                <li><a href="" aria-label="Previous" ng-hide="site.ng_offset >= site.ng_max" ng-click="setNgOffset(site, site.ng_max)" aria-label="Last">마지막</a></li>
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
					            $('.google-search').on("click",function(){
					                var value = $(this).attr("data-value");
					                window.open("https://www.google.com/search?q="+value);
					            });
					        });
					    </script>