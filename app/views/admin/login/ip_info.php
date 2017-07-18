						<div style="padding:0px 10px 10px 10px;" class="body-wrap">
				
				            <div class="h80"></div>
				
				            <div id="tab_ip_block_info" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li ng-repeat = 'site in sites track by $index'><a href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" ng-click = 'changeSiteId(site)'>{{ site.site_name }}</a></li>
				                    </ul>
				                </div>
				                
				                <div class="tab-content">
				                    <div class="tab-pane active" id="tab_0">
				                        
                                        <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from'>
                                        <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to'>
                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
                                        
                                        <span class="sp"></span>
            
                                        <select name="selector1" id="selector1" ng-model = 'search.filter_by'>
                                            <option value = 'ip_num'>IP</option>
                                            <option value = 'reason'>사유</option>
                                        </select>
                                        
                                        <input type="text" ng-model = 'search.filter_val' size="6">
                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>                                    
				                        
				                        <div class="h10"></div>
				                        
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <thead>
				                                    <tr>
				                                        <th>No.</th>
				                                        <th>사이트</th>
				                                        <th>IP</th>
				                                        <th>사유</th>
				                                        <th>등록일시</th>
				                                        <th>해제</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr ng-repeat = 'site in sites | combine:"ip_infos" | startFrom:pag_inf.offset*pag_inf.limit | limitTo:pag_inf.limit track by $index'>
				                                        <td>{{ site.ipb_seq }}</td>
				                                        <td>{{ site.site_name }}</td>
				                                        <td>{{ site.ip_num }}</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>{{ site.reason }}</td>
				                                        <td>{{ site.reg_date }}</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                </tbody>
				                            </table>
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
				                    </div>
				
				                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in sites track by $index'>
				                        <div class="table-responsive">
                                            <form ng-submit = 'addSaveIp(site)'>
                                                <table class="table table-bordered">
                                                    <tbody class = 'ip-input'>
                                                        <tr>
                                                            <td class="bg">IP</td>
                                                            <td style="text-align:left !important;">
                                                            <input type="text" style="text-align:right" ng-model = 'new_ipblock.ipadd1' size="6" maxlength="3">.
                                                            <input type="text" style="text-align:right" ng-model = 'new_ipblock.ipadd2' size="6" maxlength="3">.
                                                            <input type="text" style="text-align:right" ng-model = 'new_ipblock.ipadd3' size="6" maxlength="3">.
                                                            <input type="text" style="text-align:right" ng-model = 'new_ipblock.ipadd4' size="6" maxlength="3">~
                                                            <input type="text" style="text-align:right" ng-model = 'new_ipblock.ipadd5' size="6" maxlength="3">
                                                                마지막 칸은 PC 등 연결 된 IP 입력시에만 사용하세요
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg">사유</td>
                                                            <td style="text-align:left !important;"><input type="text" ng-model = 'new_ipblock.reason' size="50%" placeholder="사유를 입력하세요">
                                                            <button class="btn-success btn-black btn">등록</button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
				                        </div>
				
				                        <form name="" id="" class="" method="get">
				                            <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" ng-model = 'search.from'>
				                            <input type="text" name="to_date" value="" id="to_date" class="datepicker1" ng-model = 'search.to'>
				                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				                            
				                            <span class="sp"></span>
				
				                            <select name="selector1" id="selector1" ng-model = 'search.filter_by'>
				                                <option value = 'ip_num'>IP</option>
				                                <option value = 'reason'>사유</option>
				                            </select>
                                            
				                            <input type="text" ng-model = 'search.filter_val' size="6">
				                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				                        </form>
				                        
				                        <div class="h10"></div>
				                        
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <thead>
				                                    <tr>
				                                        <th>No.</th>
				                                        <th>사이트</th>
				                                        <th>IP</th>
				                                        <th>사유</th>
				                                        <th>등록일시</th>
				                                        <th>해제</th>
				                                    </tr>
				                                </thead>
				                                <tbody>
				                                    <tr ng-repeat = 'ip_info in site.ip_infos | startFrom:site.offset*site.limit | limitTo:site.limit track by $index'>
				                                        <td>{{ ip_info.ipb_seq }}</td>
				                                        <td>{{ site.site_name }}</td>
				                                        <td>{{ ip_info.ip_num }}</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>{{ ip_info.reason }}</td>
				                                        <td>{{ ip_info.reg_date }}</td>
				                                        <td><button class="btn-default btn">해제</button></td>
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

                                                    <li><a href="" ng-hide="site.offset >= site.max_page" ng-click="setOffset(site, site.offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                    <li><a href="" aria-label="Previous" ng-hide="site.offset >= site.max_page" ng-click="setOffset(site, site.max_page)" aria-label="Last">마지막</a></li>
                                                </ul>
                                            </nav>
                                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
                        
                        <script>
				            $(document).ready(function() {
                                
                                $('#main-cntr').delegate(".datepicker1", "focusin", function(){
                                    $(this).datepicker();
                                });
                                
                            });
				        </script>