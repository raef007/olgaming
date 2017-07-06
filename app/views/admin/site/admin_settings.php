		<div style="padding:0px 10px 10px 10px;" class="body-wrap">

			<!--   <div class="location-info">
                <div class="location-info-content">
                    사이트 관리
                    <span class="location-info-sp">></span>
                    관리자 설정
                </div>
            </div> -->

            <div class="h80"></div>

            <div id="tab_adm_set" class="div-tab tabs swipe-tab tabs-color-top">
                <div class="w-tab bg-light">
                    <ul class="nav nav-tabs" data-toggle="tab-hover">
                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab" ng-click = 'allMngSiteTab()'>전체</a></li>
                        <li ng-repeat = 'tab_site in site_list track by $index'>
                            <a href = "" data-target="#tab_{{ $index + 1 }}" data-toggle="tab" ng-click = 'initTabData(tab_site)'>{{ tab_site.site_name }}</a>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_0">
                        
                        <div id="tab_adm_set0" class="div-tab tabs swipe-tab tabs-color-top">
                            <div class="w-tab bg-light">
                                <ul class="nav nav-tabs" data-toggle="tab-hover">
                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">관리자 목록</a></li>
                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">관리자 IP 설정</a></li>
                                </ul>
                            </div>
                            
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_00">
                                    <h4>관리자 목록</h4>
                                    <div class="h20"></div>
                                    
                                    <form name = 'save-sites-form' ng-submit = 'saveSitesForm()'>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox"></th>
                                                        <th>No. <i class="fa fa-sort"></i></th>
                                                        <th>사이트</th>
                                                        <th>ID</th>
                                                        <th>닉네임</th>
                                                        <th>사용여부</th>
                                                        <th>이름</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr ng-repeat = 'site in sites | startFrom:pag_inf.offset*pag_inf.limit| limitTo:pag_inf.limit track by $index'>
                                                        <td><input name = "site_check" ng-model = "site.site_check" type="checkbox" value = "1"></td>
                                                        <td>{{ site.ms_seq }}</td>
                                                        <td>{{ site.site_name }}</td>
                                                        <td>{{ site.admin_id }}</td>
                                                        <td>{{ site.nick_name }}</td>
                                                        <td>
                                                            <select ng-hide = "sites[((pag_inf.limit*(pag_inf.offset+1)) - pag_inf.limit) + $index].admin_id == sites[(((pag_inf.limit*(pag_inf.offset+1)) - pag_inf.limit) + $index) - 1].admin_id" ng-model = 'site.use_flag' name = 'use_flag'>
                                                                <option value = '0'>NO </option>
                                                                <option value = '1'>YES </option>
                                                            </select>
                                                        </td>
                                                        <td>{{ site.name }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="up-10"></div>
                                        
                                        <div class="text-right">
                                            <button type = 'submit' class="btn btn-default">저장하기</button>
                                            <button class="btn btn-default" data-toggle="modal" data-target="#adm-modal">신규등록</button>
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                    </form>
                                    
                                    <div class="text-center relative" style="left:-15%;">
                                        <nav>
                                            <ul class="pagination pagination-sm">
                                                <li><a href="" aria-label="First" ng-hide="pag_inf.offset == 0" ng-click="setOffset(pag_inf, 0)">처음</a></li>
                                                
                                                <li><a href="" aria-label="Previous" ng-hide="pag_inf.offset == 0" ng-click="setOffset(pag_inf, pag_inf.offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                
                                                <li ng-repeat = 'page in pag_inf.pages' ng-class="(page === pag_inf.offset) ? 'active': ''"><a href="" ng-click="setOffset(pag_inf, page)">{{ page + 1 }}</a></li>

                                                <li><a href="" ng-hide="pag_inf.offset == pag_inf.max_page" ng-click="setOffset(pag_inf, pag_inf.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="pag_inf.offset == pag_inf.max_page" ng-click="setOffset(pag_inf, pag_inf.max_page)" aria-label="Last">마지막</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="tab_01">
                                    본 메뉴는 별도의 메뉴를 백오피스에 두지 않고 개발시에 특정 IP들<br>을 바로 적용할 수 있도록 함.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'tab_site in site_list track by $index'>
                            
                        <div id="tab_adm_set0" class="div-tab tabs swipe-tab tabs-color-top">
                            <div class="w-tab bg-light">
                                <ul class="nav nav-tabs" data-toggle="tab-hover">
                                    <li class="active"><a href = "" data-target="#tab_{{ $index + 1 }}0" data-toggle="tab">관리자 목록</a></li>
                                    <li><a href = "" data-target="#tab_{{ $index + 1 }}1" data-toggle="tab">관리자 IP 설정</a></li>
                                </ul>
                            </div>
                            
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_{{ $index + 1 }}0">
                                    <h4>관리자 목록</h4>
                                    
                                    <div class="h20"></div>
                                    
                                    <form name = 'save-sites-form-{{ $index + 1}}' ng-submit = 'saveSitesForm()'>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox"></th>
                                                        <th>No. <i class="fa fa-sort"></i></th>
                                                        <th>사이트</th>
                                                        <th>ID</th>
                                                        <th>닉네임</th>
                                                        <th>사용여부</th>
                                                        <th>이름</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr ng-repeat = 'site in sites track by $index' ng-if = 'site.site_id == tab_site.site_id'>
                                                        <td><input type="checkbox" name = 'site_check' ng-model = 'site.site_check' value = '1'></td>
                                                        <td>{{ site.ms_seq }}</td>
                                                        <td>{{ site.site_name }}</td>
                                                        <td>{{ site.admin_id }}</td>
                                                        <td>{{ site.nick_name }}</td>
                                                        <td>
                                                            <select ng-model = 'site.use_flag' name = 'use_flag'>
                                                                <option value = '0'>NO </option>
                                                                <option value = '1'>YES </option>
                                                            </select>
                                                        </td>
                                                        <td>{{ site.name }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="up-10"></div>
                                        <div class="text-right">
                                            <button class="btn btn-default">저장하기</button>
                                            <button class="btn btn-default" data-toggle="modal" data-target="#adm-modal">신규등록</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                    
                                </div>

                                <div class="tab-pane" id="tab_{{ $index + 1 }}1">
                                    본 메뉴는 별도의 메뉴를 백오피스에 두지 않고 개발시에 특정 IP들<br>을 바로 적용할 수 있도록 함.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <div id = "adm-modal" class="modal fade " tabindex="-1" role="dialog" >
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" style="padding-left:10px">관리자 정보</h4>
                    
                    <div class="modal-body">                
                        <form class="form-horizontal" ng-submit = 'saveNewSiteForm()'>
                            <div class="form-group">
                                <label for="" style="text-align: left" class="col-xs-4 control-label">ID</label>
                                <div class="col-xs-7">
                                <input type="text" class="form-control1" name = 'admin_id' ng-model = "new_site.admin_id" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" style="text-align: left" class="col-xs-4 control-label">비밀번호</label>
                                <div class="col-xs-7">
                                <input type="password" class="form-control1" name = 'pwd' ng-model = "new_site.pwd" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" style="text-align: left" class="col-xs-4 control-label">닉네임</label>
                                <div class="col-xs-7">
                                <input type="text" class="form-control1" ng-model = "new_site.nick_name" name = 'nick_name' placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" style="text-align: left" class="col-xs-4 control-label">사용여부</label>
                                <div class="col-xs-7">
                                    <select name="" ng-model = "new_site.use_flag" name = 'use_flag' class="form-control1">
                                        <option value = '0'>NO</option>
                                        <option value = '1'>YES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" style="text-align: left" class="col-xs-4 control-label">이름</label>
                                <div class="col-xs-7">
                                    <input type="text" class="form-control1" name = 'name' ng-model = "new_site.name" placeholder="" value="">
                                </div>
                            </div>
                            <div class="form-group" ng-if = '0 == form.site_id'>
                                <label for="" style="text-align: left" class="col-xs-4 control-label">사이트</label>
                                <div class="col-xs-4" ng-repeat = 'opt_site in site_list track by $index'>
                                    <input type="checkbox" ng-model = 'new_site.sel_sites[$index]' ng-click = 'addRemoveOption(site_list, $index)' value = '1'> {{ opt_site.site_name }}
                                </div>
                            </div>
                            
                            <div class="form-group" ng-if = '0 != form.site_id'>
                                <label for="" style="text-align: left" class="col-xs-4 control-label">사이트</label>
                                <div class="col-xs-4">
                                    <input type="checkbox" value = '1' disabled checked> {{ form.site_name }}
                                </div>
                            </div>
                        
                            <div class="h20"></div>

                            <div class="text-center">
                                <button type = 'submit' class="btn-default btn-black btn btn2">저장하기</button>
                                <button onclick="window.location.reload();" class="btn-default btn btn2">취소하기</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>