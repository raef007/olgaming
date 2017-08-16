                        <ng-include src="'../app/views/admin/common/modal/msg-prompt.php'"></ng-include>
                        
						<div style="padding:0px 10px 10px 10px;" class="body-wrap">
				
				            <div class="h80"></div>
				
				            <div id="tab_code" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li ng-repeat = 'site in master.sites track by $index'><a class = 'close-template-form' ng-click = 'changeSiteId(site)' href = "" data-target="#tab_{{ $index + 1 }}" data-toggle="tab">{{ site.site_name }}</a></li>
				                    </ul>
				                </div>
				                
				                <div class="tab-content">
				                    <div class="tab-pane active" id="tab_0">
				                        <h4>가입 코드 관리</h4>
				                        
				                        <strong>코드 생성</strong>
				                        <span class="sp"></span>
				                        사이트
				                        <select ng-model = 'new_rec.site_id'>
				                            <option value = ''>사이트 선택</option>
				                            <option ng-repeat = 'site in master.sites' value = '{{ site.site_id }}' ng-selected = 'new_rec.site_id == site.site_id'>{{ site.site_name }}</option>
				                        </select>
                                        
				                        <span class="sp"></span>
				                        <label class="radio-a"><input type="radio" ng-model = 'new_rec.code_type' value = '0'></label>
				                        가입자 아이디
				                        <input type="text" value="" size="6" ng-model = 'new_rec.user_id'>
				                        <!-- <button class="btn-default btn">중복확인</button> -->
				
				                        <span class="sp"></span>
				                        가입코드
				                        <input type="text" value="" size="6" ng-model = 'new_rec.sub_code_user'>
				                        <button class="btn-default btn" ng-click = 'saveCodeForm()'>생성</button>
				
				                        <span class="sp"></span>
				                        <label class="radio-a"><input type="radio" ng-model = 'new_rec.code_type' value = '1'></label>
				                        사이트 공통코드 생성
				                        <input type="text" value="" size="10" maxlength="8" ng-model = 'new_rec.sub_code_all'>
				                        <button class="btn-default btn" ng-click = 'saveCodeForm()'>생성</button>
				
				                        <div class="h10"></div>
				                        <div id="tab_code0" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
                                                    <button class="black-btn-tab" ng-click = 'setSearchDate(0)'> 오늘</button>
                                                    <button class="black-btn-tab" ng-click = 'setSearchDate(1)'> 이번주</button>
                                                    <button class="black-btn-tab" ng-click = 'setSearchDate(2)'> 지난주</button>
                                                    <button class="black-btn-tab" ng-click = 'setSearchDate(3)'> 지난달</button>
				                                    
				                                    <span class="tab-opt">
                                                        <input type="text" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
                                                        <input type="text" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
                                                        
                                                        <span class="sp"></span>
                    
                                                        <select id="selector1" ng-model = 'search.filter_by'>
                                                            <option value = 'unique_code'>아이디</option>
                                                            <option value = 'admin_id'>추천인</option>
                                                            <option value = 'user_id'>가입자</option>
                                                        </select>
                                                        <input type="text" value="" size="6" ng-model = 'search.filter_val'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				                                    </span>
				                                </ul>
				                            </div>
                                            
				                            <div class="tab-content">
				                                <div class="tab-pane active">
				                                    <!--가입 코드 관리-->
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th>No. <i class="fa fa-sort"></i></th>
				                                                    <th>사이트</th>
				                                                    <th>추천인 아이디</th>
				                                                    <th>가입 코드</th>
				                                                    <th>코드 발급일 <i class="fa fa-sort"></i></th>
				                                                    <th>가입자 아이디</th>
				                                                    <th>회원 가입일 <i class="fa fa-sort"></i></th>
				                                                    <th>삭제</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr ng-repeat = 'site in master.sites | combine:"recommends" | startFrom:master.offset*master.limit | limitTo:master.limit track by $index'>
				                                                    <td>{{ ($index + (master.offset*master.limit)) + 1 }}</td>
				                                                    <td>{{ site.site_name }}</td>
				                                                    <td>{{ site.admin_id }}</td>
				                                                    <td>{{ site.unique_code }}</td>
				                                                    <td>{{ site.reg_date }}</td>
				                                                    <td>{{ site.user_id }}</td>
				                                                    <td>{{ site.reg_date }}</td>
				                                                    <td><button class="btn-default btn" ng-click = 'deleteCode(site)'>삭제</button></td>
				                                                </tr>
				                                            </tbody>
				                                        </table>
				                                    </div>
				                                    <!--가입 코드 관리-->
				
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
				                                </div>
				                            </div>
				                        </div>					
				                    </div>
				
				                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>
				                        <h4>가입 코드 관리</h4>
				                        
				                        <strong>코드 생성</strong>
				                        <span class="sp"></span>
				                        사이트 &nbsp;{{ site.site_name }}

				                        <span class="sp"></span>
				                        <label class="radio-a"><input type="radio" ng-model = 'new_rec.code_type' value = '0'></label>
				                        가입자 아이디
				                        <input type="text" value="" size="6" ng-model = 'new_rec.user_id'>
				                        <!-- <button class="btn-default btn">중복확인</button> -->
				
				                        <span class="sp"></span>
				                        가입코드
				                        <input type="text" value="" size="6" ng-model = 'new_rec.sub_code_user'>
				                        <button class="btn-default btn" ng-click = 'saveCodeForm()'>생성</button>
				
				                        <span class="sp"></span>
				                        <label class="radio-a"><input type="radio" ng-model = 'new_rec.code_type' value = '1'></label>
				                        사이트 공통코드 생성
				                        <input type="text" value="" size="10" maxlength="8" ng-model = 'new_rec.sub_code_all'>
				                        <button class="btn-default btn" ng-click = 'saveCodeForm()'>생성</button>
				
				                        <div class="h10"></div>
				                        <div id="tab_code1" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <button class="black-btn-tab" ng-click = 'setSearchDate(0)'> 오늘</button>
                                                    <button class="black-btn-tab" ng-click = 'setSearchDate(1)'> 이번주</button>
                                                    <button class="black-btn-tab" ng-click = 'setSearchDate(2)'> 지난주</button>
                                                    <button class="black-btn-tab" ng-click = 'setSearchDate(3)'> 지난달</button>
				                                    
				                                    <span class="tab-opt">
                                                        <input type="text" class="datepicker1" ng-model = 'search.from' size="6" maxlength="10">
                                                        <input type="text" class="datepicker1" ng-model = 'search.to' size="6" maxlength="10">
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
                                                        
                                                        <span class="sp"></span>
                    
                                                        <select id="selector1" ng-model = 'search.filter_by'>
                                                            <option value = 'unique_code'>아이디</option>
                                                            <option value = 'admin_id'>추천인</option>
                                                            <option value = 'user_id'>가입자</option>
                                                        </select>
                                                        <input type="text" value="" size="6" ng-model = 'search.filter_val'>
                                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				                                    </span>
				                                </ul>
				                            </div>
                                            
				                            <div class="tab-content">
				                                <div class="tab-pane active">
				                                    <!--가입 코드 관리-->
				                                    <div class="table-responsive">
				                                        <table class="table table-bordered">
				                                            <thead>
				                                                <tr>
				                                                    <th>No. <i class="fa fa-sort"></i></th>
				                                                    <th>사이트</th>
				                                                    <th>추천인 아이디</th>
				                                                    <th>가입 코드</th>
				                                                    <th>코드 발급일 <i class="fa fa-sort"></i></th>
				                                                    <th>가입자 아이디</th>
				                                                    <th>회원 가입일 <i class="fa fa-sort"></i></th>
				                                                    <th>삭제</th>
				                                                </tr>
				                                            </thead>
				                                            <tbody>
				                                                <tr ng-repeat = 'recommend in site.recommends | startFrom:site.offset*site.limit | limitTo:site.limit track by $index'>
				                                                    <td>{{ ($index + (site.offset*site.limit)) + 1 }}</td>
				                                                    <td>{{ site.site_name }}</td>
				                                                    <td>{{ recommend.admin_id }}</td>
				                                                    <td>{{ recommend.unique_code }}</td>
				                                                    <td>{{ recommend.reg_date }}</td>
				                                                    <td>{{ recommend.user_id }}</td>
				                                                    <td>{{ recommend.reg_date }}</td>
				                                                    <td><button class="btn-default btn" ng-click = 'deleteCode(site)'>삭제</button></td>
				                                                </tr>
				                                            </tbody>
				                                        </table>
				                                    </div>
				                                    <!--가입 코드 관리-->
				
				                                    <div class="text-center relative">
                                                        <nav>
                                                            <ul class="pagination pagination-sm">
                                                                <li><a href="" aria-label="First" ng-hide="site.offset == 0" ng-click="setOffset(site, 0)">처음</a></li>
                                                                
                                                                <li><a href="" aria-label="Previous" ng-hide="site.offset == 0" ng-click="setOffset(site, site.offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                                
                                                                <li ng-repeat = 'page in site.pages' ng-class="(page === site.offset) ? 'active': ''"><a href="" ng-click="setOffset(site, page)">{{ page + 1 }}</a></li>

                                                                <li><a href="" ng-hide="site.offset >= site.max_page" ng-click="setOffset(site, site.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                <li><a href="" aria-label="Previous" ng-hide="site.offset >= site.max_page" ng-click="setOffset(site, site.max_page)" aria-label="Last">마지막</a></li>
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