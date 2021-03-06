						<ng-include src="'../app/views/admin/common/modal/msg-prompt.php'"></ng-include>
                        
                        <div style="padding:0px 10px 10px 10px;" class="body-wrap">
                        
				            <div class="h80"></div>
				            <div  class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab" ng-click = 'changeSiteId(0)'>전체</a></li>
				                        <li ng-repeat = 'site in master.sites track by $index' ><a class = 'close-template-form' href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" ng-click = 'changeSiteId(site.site_id)'>{{ site.site_name }}</a></li>
				                    </ul>
				                </div>
                                
				                <div class="tab-content">
				                        <div class="tab-pane active" id="tab_0">
				                            <div id="tab_notice_event0" class="div-tab tabs swipe-tab tabs-color-top">
				                                <div class="w-tab bg-light">
				                                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                        <li class="active"><a data-target="#tab_00" data-toggle="tab" ng-click = 'resetNewEvent()'>공지사항</a></li>
				                                        <li><a data-target="#tab_01" data-toggle="tab" ng-click = 'resetNewNotice()'>이벤트</a></li>
				                                    </ul>
				                                </div>
				                                <div class="tab-content" id="tab_notice_event">
				                                    <div class="tab-pane active" id="tab_00">
				                                        <div>
				                                            <input type="text" ng-model="search.from">
				                                            <input type="text" ng-model="search.to">
				                                            <button type="submit" ng-click="searchNotice()">조회</button>
				
				                                            <span class="sp"></span>
				
				                                            <select ng-model = 'search.filter_by'>
				                                                <option value = 'title'>제목</option>
				                                                <option value = 'text'>본문</option>
				                                                <option value = 'manager.name'>작성자</option>
				                                            </select>
				                                            
				                                            <input type="text" size="6" ng-model = 'search.filter_val'>
				                                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click='searchNotice()'>조회</button>
				
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
				                                                    <tbody>
				                                                        <tr ng-repeat = 'site in master.sites | combine:"subjects" | startFrom:master.notice_offset*master.notice_limit | limitTo:master.notice_limit track by $index'>
				                                                            <td><input type="checkbox" ng-model = 'site.notice_check' value = '1'></td>
				                                                            <td>{{ ($index + (master.notice_offset*master.notice_limit)) + 1 }}</td>
				                                                            <td>{{site.site_name}}</td>
				                                                            <td>{{site.order}}</td>
				                                                            <td><a href = '' ng-click = 'loadNoticeInf(site)'> <i class = 'fa fa-edit'>&nbsp;</i>{{site.subject}}</a></td>
				                                                            <td><img src="<?php echo URL::To('assets/images/notices') ?>/{{ site.img_path }}" style = 'height: 25px; width: 45px;'></td>
				                                                            <td>{{site.name}}</td>
				                                                            <td>1</td>
				                                                            <td>
                                            								    <select style="float:none;" ng-model = 'site.show_flag'>
                                            								        <option value = '0'>NO</option>
                                            								        <option value = '1'>YES</option>
                                            								    </select>
                                            								</td>
				                                                            <td>{{site.reg_date}}</td>
				                                                            <td>{{site.update_date}}</td>
				                                                        </tr>
				                                                    </tbody>
				                                                </table>
				                                            </div>
				                                            <div class="up-10"></div>
				                                            
				                                            <div class="text-right">
				                                                <button class="btn btn-default" ng-click = "openNewNotice()">작성하기</button>
				                                                <button class="btn btn-default" ng-click="deleteNotice()">삭제하기</button>
				                                                <div class="clearfix"></div>
				                                            </div>
				
				                                            <div class="text-center relative">
				                                            	<nav>
																    <ul class="pagination pagination-sm">
																        <li><a href="" aria-label="First" ng-hide="master.notice_offset == 0" ng-click="setNoticeOffset(master, 0)">처음</a></li>

																        <li><a href="" aria-label="Previous" ng-hide="master.notice_offset == 0" ng-click="setNoticeOffset(master, master.notice_offset-1)"><i class="fa fa-angle-left"></i></a></li>

																        <li ng-repeat = 'page in master.notice_pages' ng-class="(page === master.notice_offset) ? 'active': ''"><a href="" ng-click="setNoticeOffset(master, page)">{{ page + 1 }}</a></li>

																        <li><a href="" ng-hide="master.notice_offset >= master.notice_max_page" ng-click="setNoticeOffset(master, master.notice_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
																        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.notice_offset >= master.notice_max_page" ng-click="setNoticeOffset(master, master.notice_max_page)" aria-label="Last">마지막</a></li>
																    </ul>
																</nav>
				                                        	</div>
				                                        </div>
				                                    </div>
				
				                                    <div class="tab-pane" id="tab_01">
				                                        <div>
				                                            <input type="text" ng-model="search.from">
				                                            <input type="text" ng-model="search.to">
				                                            <button type="submit" ng-click="searchNotice()">조회</button>
				
				                                            <span class="sp"></span>
				
				                                            <select ng-model = 'search.filter_by'>
				                                                <option value = 'title'>제목</option>
				                                                <option value = 'text'>본문</option>
				                                                <option value = 'manager.name'>작성자</option>
				                                            </select>
				                                            
				                                            <input type="text" size="6" ng-model = 'search.filter_val'>
				                                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click='searchNotice()'>조회</button>
				
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
				                                                    <tbody>
				                                                        <tr ng-repeat = 'site in events | combine:"titles" | startFrom:master.event_offset*master.event_limit | limitTo:master.event_limit track by $index'>
				                                                            <td><input type="checkbox" ng-model = 'site.event_check' value = '1'></td>
				                                                            <td>{{ ($index + (master.event_offset*master.event_limit)) + 1 }}</td>
				                                                            <td>{{site.site_name}}</td>
				                                                            <td>{{site.order}}</td>
				                                                            <td><a href = '' ng-click = 'loadEventInf(site)'> <i class = 'fa fa-edit'>&nbsp;</i>{{site.subject}}</a></td>
				                                                            <td><img src="<?php echo URL::To('assets/images/events') ?>/{{ site.img_path }}" style = 'height: 25px; width: 45px;'></td>
				                                                            <td>{{site.name}}</td>
				                                                            <td>{{site.start_date}}</td>
				                                                            <td>{{site.end_date}}</td>
				                                                            <td>1</td>
				                                                            <td>
                                            								    <select style="float:none;" ng-model = 'site.show_flag'>
                                            								        <option value = '0'>NO</option>
                                            								        <option value = '1'>YES</option>
                                            								    </select>
                                            								</td>
				                                                            <td>{{site.reg_date}}</td>
				                                                            <td>{{site.reg_datetime}}</td>
				                                                        </tr>
				                                                        
				                                                    </tbody>
				                                                </table>
				                                            </div>
				
				                                            <div class="up-10"></div>
				                                            <div class="text-right">
				                                                <button class="btn btn-default show-editor-btn-event">작성하기</button>
				                                                <button class="btn btn-default" ng-click = 'deleteEvent()'>삭제하기</button>
				                                                <div class="clearfix"></div>
				                                            </div>
				
				                                            <div class="text-center relative">
				                                                <nav>
																    <ul class="pagination pagination-sm">
																        <li><a href="" aria-label="First" ng-hide="master.event_offset == 0" ng-click="setEventOffset(master, 0)">처음</a></li>

																        <li><a href="" aria-label="Previous" ng-hide="master.event_offset == 0" ng-click="setEventOffset(master, master.event_offset-1)"><i class="fa fa-angle-left"></i></a></li>

																        <li ng-repeat = 'page in master.event_pages' ng-class="(page === master.event_offset) ? 'active': ''"><a href="" ng-click="setEventOffset(master, page)">{{ page + 1 }}</a></li>

																        <li><a href="" ng-hide="master.event_offset >= master.event_max_page" ng-click="setEventOffset(master, master.event_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
																        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="master.event_offset >= master.event_max_page" ng-click="setEventOffset(master, master.event_max_page)" aria-label="Last">마지막</a></li>
																    </ul>
																</nav>
				                                            </div>
				                                        </div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
                                        
				                        <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>
				                        	<div id="notice_event" class="div-tab tabs swipe-tab tabs-color-top">
				                            	<div class="w-tab bg-light">
				                            	    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                            	        <li class="active"><a href = "" data-target="#tab_{{ $index + 1 }}0" data-toggle="tab" ng-click = "resetNewEvent()">공지사항</a></li>
				                            	        <li><a href = "" data-target="#tab_{{ $index + 1 }}1" data-toggle="tab" ng-click = "resetNewNotice()">이벤트</a></li>
				                            	    </ul>
				                            	</div>
				                            	<div class="tab-content" id="tab_notice_event">
				                                    <div class="tab-pane active" id="tab_{{ $index + 1 }}0">
                                                        <div>
				                                            <input type="text" ng-model="search.from">
				                                            <input type="text" ng-model="search.to">
				                                            <button type="submit" ng-click="searchNotice()">조회</button>
				
				                                            <span class="sp"></span>
				
				                                            <select ng-model = 'search.filter_by'>
				                                                <option value = 'title'>제목</option>
				                                                <option value = 'text'>본문</option>
				                                                <option value = 'manager.name'>작성자</option>
				                                            </select>
				                                            
				                                            <input type="text" size="6" ng-model = 'search.filter_val'>
				                                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click='searchNotice()'>조회</button>
				
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
				                                                    <tbody>
				                                                        <tr ng-repeat = 'subject in site.subjects | startFrom:site.notice_offset*site.notice_limit | limitTo:site.notice_limit track by $index'>
				                                                            <td><input type="checkbox" ng-model = 'subject.notice_check' value = '1'></td>
				                                                            <td>{{ ($index + (site.notice_offset*site.notice_limit)) + 1 }}</td>
				                                                            <td>{{subject.site_name}}</td>
				                                                            <td>{{subject.order}}</td>
				                                                            <td><a href = '' ng-click = 'loadNoticeInf(subject)'> <i class = 'fa fa-edit'>&nbsp;</i>{{subject.subject}}</a></td>
				                                                            <td><img src="<?php echo URL::To('assets/images/notices') ?>/{{ subject.img_path }}" style = 'height: 25px; width: 45px;'></td>
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
				                                                <button class="btn btn-default" ng-click = 'openNewNotice()'>작성하기</button>
				                                                <button class="btn btn-default" ng-click="deleteNotice()">삭제하기</button>
				                                            </div>
				
				                                            <div class="text-center relative">
                                                                <nav>
                                                                    <ul class="pagination pagination-sm">
                                                                        <li><a href="" aria-label="First" ng-hide="site.notice_offset == 0" ng-click="setNoticeOffset(site, 0)">처음</a></li>

                                                                        <li><a href="" aria-label="Previous" ng-hide="site.notice_offset == 0" ng-click="setNoticeOffset(site, site.notice_offset-1)"><i class="fa fa-angle-left"></i></a></li>

                                                                        <li ng-repeat = 'page in site.notice_pages' ng-class="(page === site.notice_offset) ? 'active': ''"><a href="" ng-click="setNoticeOffset(site, page)">{{ page + 1 }}</a></li>

                                                                        <li><a href="" ng-hide="site.notice_offset >= site.notice_max_page" ng-click="setNoticeOffset(site, site.notice_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="site.notice_offset >= site.notice_max_page" ng-click="setNoticeOffset(site, site.notice_max_page)" aria-label="Last">마지막</a></li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
				                                        </div>
				                                    </div>
				
				                                    <div class="tab-pane" id="tab_{{ $index + 1 }}1">
				                                        <div>
				                                            <input type="text" ng-model="search.from">
				                                            <input type="text" ng-model="search.to">
				                                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click='searchNotice()'>조회</button>
				
				                                            <span class="sp"></span>
				
				                                            <select ng-model = 'search.filter_by'>
				                                                <option value = 'title'>제목</option>
				                                                <option value = 'text'>본문</option>
				                                                <option value = 'manager.name'>작성자</option>
				                                            </select>
				                                            
				                                            <input type="text" size="6" ng-model = 'search.filter_val'>
				                                            <button type="submit" class="btn_submit btn-success btn-black btn" ng-click='searchNotice()'>조회</button>
				
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
				                                                    <tbody>
				                                                        <tr ng-repeat = 'title in site.titles | startFrom:site.event_offset*site.event_limit | limitTo:site.event_limit track by $index'>
				                                                            <td><input type="checkbox"></td>
				                                                            <td>{{ ($index + (site.event_offset*site.event_limit)) + 1 }}</td>
				                                                            <td>{{title.site_name}}</td>
				                                                            <td>{{title.order}}</td>
				                                                            <td><a href = '' ng-click = 'loadEventInf(title)'> <i class = 'fa fa-edit'>&nbsp;</i>{{title.subject}}</a></td>
				                                                            <td><img src="<?php echo URL::To('assets/images/events') ?>/{{ title.img_path }}" style = 'height: 25px; width: 45px;'></td>
				                                                            <td>{{title.name}}</td>
				                                                            <td>{{title.start_date}}</td>
				                                                            <td>{{title.end_date}}</td>
				                                                            <td>1</td>
				                                                            <td>
                                            								    <select style="float:none;" ng-model = 'title.show_flag'>
                                            								        <option value = '0'>NO</option>
                                            								        <option value = '1'>YES</option>
                                            								    </select>
                                            								</td>
				                                                            <td>{{title.reg_date}}</td>
				                                                            <td>{{title.reg_datetime}}</td>
				                                                        </tr>
				                                                        
				                                                    </tbody>
				                                                </table>
				                                            </div>
				
				                                            <div class="up-10"></div>
				                                            <div class="text-right">
				                                                <button class="btn btn-default show-editor-btn-event">작성하기</button>
				                                                <button class="btn btn-default" ng-click = 'deleteEvent()'>삭제하기</button>
				                                                <div class="clearfix"></div>
				                                            </div>
				
				                                            <div class="text-center relative">
				                                                <nav>
                                                                    <ul class="pagination pagination-sm">
                                                                        <li><a href="" aria-label="First" ng-hide="site.event_offset == 0" ng-click="setEventOffset(site, 0)">처음</a></li>
                                                                
                                                                        <li><a href="" aria-label="Previous" ng-hide="site.event_offset == 0" ng-click="setEventOffset(site, site.event_offset-1)"><i class="fa fa-angle-left"></i></a></li>
                                                                
                                                                        <li ng-repeat = 'page in site.event_pages' ng-class="(page === site.event_offset) ? 'active': ''"><a href="" ng-click="setEventOffset(site, page)">{{ page + 1 }}</a></li>

                                                                        <li><a href="" ng-hide="site.event_offset >= site.event_max_page" ng-click="setEventOffset(site, site.event_offset+1)" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
                                                                        <li><a id = 'site-lastpage-btn' href="" aria-label="Last" ng-hide="site.event_offset >= site.event_max_page" ng-click="setEventOffset(site, site.event_max_page)" aria-label="Last">마지막</a></li>
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
                        
                        <div id="tab_notice_set" class="div-tab tabs swipe-tab tabs-color-top" style = 'display: none;'>
                            <form ng-submit = 'saveNoticeForm()'>
                                <div class="w-tab bg-light"> 
                                    <div class="row">
                                        <div style="padding-left: 1%" ng-if = "0 >= gb_var.site_id">
                                            사이트
                                            <span class="sp"></span>
                                            <select ng-model = 'new_notice.site_id' >
                                                <option ng-repeat='site in master.sites track by $index' value="{{site.site_id}}">{{site.site_name}}</option>
                                            </select>
                                            
                                        </div>
                                        
                                        <input type = "hidden" ng-model = 'new_notice.site_id' value = "{{ gb_var.site_id }}" ng-if = "0 < gb_var.site_id"/>
                                        <div class="h10"></div>    
                                        <div style="padding-left: 1%">
                                            제목<span style="color:#fff;">숨</span>
                                            <span class="sp"></span>
                                            <input type="text" ng-model = 'new_notice.subject' size="20" maxlength="255">
                                        </div>    
                                        <div class="h10"></div>    
                                        <div style="padding-left: 1%">
                                            작성자
                                            <span class="sp"></span>
                                            <input type="text" ng-model = 'new_notice.name' size="20" maxlength="255">
                                        </div>    
                                        <div class="h05"></div>    
                                        <div style="padding-left: 1%">
                                            썸네일
                                            <span class="sp"></span>
                                            <span> 
                                                <input type="file" style = 'display:inline;' data-target-scope = 'noticeFileSelected' file-upload multiple>
                                            </span>
                                        </div>    
                                        <div class="h10"></div>    
                                        <textarea ui-tinymce = 'tinymceOptions' ng-model="new_notice.text"></textarea>    
                                        <div class="up-10"></div>    
                                        <div style="padding-top: 1%; padding-left: 1% ">
                                            순서
                                            <span class="sp"></span>
                                            <select ng-model = 'new_notice.order'>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                            </select>    
                                            <span class="sp"></span>
                                            <span class="sp"></span>    
                                            노출여부
                                            <span class="sp"></span>
                                            <select ng-model = 'new_notice.show_flag'>
                                                <option value='0'>노출</option>
                                                <option value='1'>숨김</option>
                                            </select>
                                        </div>    
                                        <div class="h20"></div>    
                                            <div class="text-center">
                                                <button class="btn-default btn-black btn btn2" ng-click="saveNotice()">등록하기</button>
                                                <button class="btn-default btn btn2 cancel-editor-btn">취소하기</button>
                                            </div>    
                                        <div class="h10"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div id="tab_event_set" class="div-tab tabs swipe-tab tabs-color-top" style = 'display: none;'>
                            <form ng-submit = 'saveEventForm()'>
                                <div class="w-tab bg-light"> 
                                    <div class="row">
                                        <div style="padding-left: 1%" ng-if = "0 >= gb_var.site_id">
                                            사이트
                                            <span class="sp"></span>
                                            <select ng-model="new_event.site_id">
                                                <option ng-repeat='site in master.sites track by $index' value="{{site.site_id}}">{{site.site_name}}</option>
                                            </select>
                                            
                                        </div>
                                        
                                        <input type = "hidden" ng-model = 'new_event.site_id' value = "{{ gb_var.site_id }}" ng-if = "0 < gb_var.site_id"/>
                                        
                                        <div class="h10"></div>    
                                        <div style="padding-left: 1%">
                                            제목<span style="color:#fff;">숨</span>
                                            <span class="sp"></span>
                                            <input type="text" ng-model="new_event.subject" size="20" maxlength="255">
                                        </div>    
                                        <div class="h10"></div>    
                                        <div style="padding-left: 1%">
                                            작성자
                                            <span class="sp"></span>
                                            <input type="text" ng-model="new_event.admin_id" size="20" maxlength="255">
                                        </div>    
                                        <div class="h05"></div>    
                                        <div style="padding-left: 1%">
                                            썸네일
                                            <span class="sp"></span>
                                            <span class=""> 
                                                <input type="file" style = 'display:inline;' data-target-scope = 'eventFileSelected' file-upload multiple> 
                                            </span>
                                        </div>    
                                        <div class="h10"></div>
                                        <div style="padding-left: 1%">
                                            기간<span style="color:#fff;">숨</span>
                                            <span class="sp"></span>
                                            <input type="text" name="fr_date" value="" id="fr_date" ng-model="new_event.start_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                            <select ng-model="new_event.start_datetime">
                                                <option>오전 00:00</option>
                                                <option>오전 01:00</option>
                                            </select>
                                            부터    
                                            <span class="sp"></span>
                                            <input type="text" name="to_date" value="" id="to_date" ng-model="new_event.end_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                            <select ng-model="new_event.end_datetime">
                                                <option>오전 00:00</option>
                                                <option>오전 01:00</option>
                                            </select>    
                                            <span class="sp"></span>
                                            <input type="checkbox">
                                            무기한 진행
                                        </div>    
                                        <div class="h10"></div>   
                                        <textarea ui-tinymce = 'tinymceOptions' ng-model="new_event.text"></textarea>    
                                        <div class="up-10"></div>    
                                        <div style="padding-top: 1%; padding-left: 1% ">
                                            순서
                                            <span class="sp"></span>
                                            <select ng-model="new_event.order">
                                                <option>1</option>
                                                <option>2</option>
                                            </select>    
                                            <span class="sp"></span>
                                            <span class="sp"></span>    
                                            노출여부
                                            <span class="sp"></span>
                                            <select ng-model="new_event.show_flag">
                                                <option value="0">노출</option>
                                                <option value="1">숨김</option>
                                            </select>
                                        </div>
                                        <div class="h20"></div>    
                                            <div class="text-center">
                                                <button class="btn-default btn-black btn btn2" ng-click="saveEvent()">등록하기</button>
                                                <button class="btn-default btn btn2" ng-click = 'resetNewNotice()'>취소하기</button>
                                            </div>    
                                        <div class="h10"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
<script>
    $(document).ready(function() { 

        $('#main-cntr').on('click', '.show-editor-btn-event', function() {
            $('#tab_event_set').slideDown();
            return false;
        });
        $('#main-cntr').on('click', '.show-editor-btn-btm', function() {
            $('#tab_notice_set').slideDown();
            return false;
        });
        
        $('#main-cntr').on('click', '.cancel-editor-btn', function() {
            $('#tab_notice_set').slideUp();
            return false;
        });
        $('#main-cntr').on('click', '.cancel-editor-btn-event', function() {
            $('#tab_event_set').slideUp();
            return false;
        });
        
        $('#main-cntr').delegate(".datepicker1", "focusin", function(){
            $(this).datepicker(({ dateFormat: 'yymmdd' }));
        });
    });
</script>