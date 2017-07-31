						<div style="padding:0px 10px 10px 10px;" class="body-wrap">
				            <div class="h80"></div>
				
				            <div id="tab_help" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li ng-repeat = 'site in master.sites track by $index'><a class = 'close-template-form' href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab" ng-click = 'changeSiteId(site)'>{{ site.site_name }}</a></li>
				                    </ul>
				                </div>
				                
				                <div class="tab-content animate-show" ng-show = 'show_tab_body'>
				                    <div class="tab-pane active" id="tab_0">
				                        
				                        <div id="tab_help0" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a href = "" data-target="#tab_00" data-toggle="tab">고객센터</a></li>
				                                    <li><a href = "" data-target="#tab_01" data-toggle="tab">고객센터 템플릿</a></li>
				                                </ul>
				                            </div>
				                            
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_00">
				                        
				                                    <div class="collapse in" id="w_mode">
				
				                                        <input type="text" name="fr_date" ng-model = 'search.from' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" ng-model = 'search.to' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				
				                                        <span class="sp"></span>
				
				                                        <select ng-model = 'search.filter_by' class="">
				                                            <option value = 'admin_id'>아이디</option>
				                                            <option value = 'nick_name'>닉네임</option>
				                                            <option value = 'subject'>메시지</option>
				                                        </select>
				                                        <input type="text" ng-model = 'search.filter_val'>
				                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				
				                                        <div class="h10"></div>
				                                        
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th>NO. <i class="fa fa-sort"></i>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>메시지</th>
				                                                        <th>분류</th>
				                                                        <th>작성일시 <i class="fa fa-sort"></i>
				                                                        <th>답변일시 <i class="fa fa-sort"></i>
				                                                        <th>상태</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr ng-repeat = 'site in master.sites | combine:"questions" | startFrom:master.offset*master.limit | limitTo:master.limit track by $index'>
				                                                        <td>{{ site.cc_seq }}</td>
				                                                        <td>{{ site.site_name }}</td>
				                                                        <td>{{ site.admin_id }}</td>
				                                                        <td>{{ site.nick_name }}</td>
				                                                        <td><a class="cursor uline font-blue" ng-click = 'showUserConvo(site, site)'>{{ site.subject }}</a></td>
				                                                        <td ng-if = '0 == site.sort'>계좌 문의</td>
				                                                        <td>{{ site.reg_date }}</td>
				                                                        <td>{{ site.response_date }}</td>
				                                                        <td ng-if = 'NULL == site.response_date'>접수</td>
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
				                                    </div>
				                                </div>
				
				                                <div class="tab-pane" id="tab_01">
				                        
				                                    <div class="collapse in" id="w_mode1">
				
				                                        <div class="text-right">
				                                            <button class="btn btn-default">삭제하기</button>
				                                        </div>
				
				                                        <div class="h10"></div>
				
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>				                                                        
				                                                        <th>NO. <i class="fa fa-sort"></i>
				                                                        <th>사이트</th>
				                                                        <th>제목</th>
				                                                        <th>삭제</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody ng-repeat = 'site in master.sites track by $index'>
				                                                    <tr ng-repeat = 'template in site.templates track by $index'>
				                                                        
				                                                        <td>{{ template.cct_seq }}</td>
				                                                        <td>{{ site.site_name }}</td>
				                                                        <td>{{ template.subject }}</td>
				                                                        <td><a class = 'btn-default btn btn2' href="" ng-click = 'deleteTemplate(template)'>삭제</a></td>
				                                                    </tr>
				                                                </tbody>
				                                            </table>
				                                        </div>
				
				                                        <div class="up-10"></div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				
				                    <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>
				                        
				                        <div id="tab_help1" class="div-tab tabs swipe-tab tabs-color-top">
				                            <div class="w-tab bg-light">
				                                <ul class="nav nav-tabs" data-toggle="tab-hover">
				                                    <li class="active"><a class = 'close-template-form' href = "" data-target="#tab_{{ $index + 1 }}0" data-toggle="tab">고객센터</a></li>
				                                    <li><a class = 'close-template-form' href = "" data-target="#tab_{{ $index + 1 }}1" data-toggle="tab">고객센터 템플릿</a></li>
				                                </ul>
				                            </div>
				                            
				                            <div class="tab-content">
				                                <div class="tab-pane active" id="tab_{{ $index + 1 }}0">
				                        
				                                    <div class="collapse in" id="w_mode">
				
				                                        <input type="text" name="fr_date" ng-model = 'search.from' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <input type="text" name="to_date" ng-model = 'search.to' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				
				                                        <span class="sp"></span>
				
				                                        <select ng-model = 'search.filter_by' class="">
				                                            <option value = 'admin_id'>아이디</option>
				                                            <option value = 'nick_name'>닉네임</option>
				                                            <option value = 'subject'>메시지</option>
				                                        </select>
				                                        <input type="text" ng-model = 'search.filter_val'>
				                                        <button type="submit" class="btn_submit btn-success btn-black btn" ng-click = 'searchByQuery()'>조회</button>
				
				                                        <div class="h10"></div>
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th>NO. <i class="fa fa-sort"></i>
				                                                        <th>사이트</th>
				                                                        <th>아이디</th>
				                                                        <th>닉네임</th>
				                                                        <th>메시지</th>
				                                                        <th>분류</th>
				                                                        <th>작성일시 <i class="fa fa-sort"></i></th>
				                                                        <th>답변일시 <i class="fa fa-sort"></i></th>
				                                                        <th>상태</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr ng-repeat = 'question in site.questions | startFrom:site.offset*site.limit | limitTo:site.limit track by $index'>
				                                                        <td>{{ question.cc_seq }}</td>
				                                                        <td>{{ site.site_name }}</td>
				                                                        <td>{{ question.admin_id }}</td>
				                                                        <td>{{ question.nick_name }}</td>
				                                                        <td><a ng-click = 'showUserConvo(question, site)' class="cursor uline font-blue">{{ question.subject }}</a></td>
				                                                        <td ng-if = '0 == question.sort'>계좌 문의</td>
				                                                        <td>{{ question.reg_date }}</td>
				                                                        <td>{{ question.response_date }}</td>
				                                                        <td ng-if = 'NULL == question.response_date'>접수</td>
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
				
				                                <div class="tab-pane" id="tab_{{ $index + 1 }}1">
				                    
				                                    <div class="collapse in" id="w_mode1">
				
				                                        <div class="text-right">
				                                            <button class="btn btn-default show-template-form" ng-click = 'resetTemplateForm()'>작성하기</button>
				                                            <button class="btn btn-default">삭제하기</button>
				                                        </div>
				
				                                        <div class="h10"></div>
				
				                                        <div class="table-responsive">
				                                            <table class="table table-bordered">
				                                                <thead>
				                                                    <tr>
				                                                        <th>NO. <i class="fa fa-sort"></i>
				                                                        <th>사이트</th>
				                                                        <th>제목</th>
				                                                        <th>수정/삭제</th>
				                                                    </tr>
				                                                </thead>
				                                                <tbody>
				                                                    <tr ng-repeat = 'template in site.templates track by $index'>
				                                                        
				                                                        <td>{{ template.cct_seq }}</td>
				                                                        <td>{{ site.site_name }}</td>
				                                                        <td>{{ template.subject }}</td>
				                                                        <td>
                                                                            <a href="" class = 'btn-default btn btn2 show-template-form' ng-click = 'showTemplateInfo(template)'>수정</a>
                                                                            <a class = 'btn-default btn btn2' href="" ng-click = 'deleteTemplate(template)'>삭제</a>
                                                                        </td>
				                                                    </tr>
				                                                </tbody>
				                                            </table>
				                                        </div>
				
				                                        <div class="up-10"></div>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
                                
                                <div ng-show = 'show_msg_box' class = 'animate-show'>
                                    <div class="row">

                                        <div class="col-md-7">
                                            <h4>문의 상세 내용</h4>
                                                <a href="#">
                                                <div class="info-class">
                                                    아이디
                                                    <span class="sp"></span>{{ msgbox.name }}
                                                    <span class="sp"></span>
                                                    <span class="sp"></span>
                                                    닉네임<span class="sp"></span>{{ msgbox.nick_name }}
                                                </div>
                                            </a>

                                            <div class="h5"></div>
                                            
                                            <div>
                                                NO. {{ msgbox.cc_seq }}
                                                <span class="sp"></span>
                                                사이트 {{ msgbox.site_name }}
                                                <span class="sp"></span>
                                                최초 문의 일시 {{ msgbox.reg_date }}
                                                <span class="sp"></span>
                                                IP 123.123.123.123
                                                <span class="sp"></span>
                                                계좌문의
                                            </div>

                                            <div class="h10"></div>
                                            
                                            <div class="relative">
                                                <div class="activity_box activity_box1" style="min-height:370px;">
                                                    <!--div class="del-ask">
                                                        관리자에 의해 삭제 된 문의입니다.
                                                    </div-->
                                                    <div class="scrollbar" id="style-2">
                                                    
                                                        <div class="activity-row activity-row1" ng-repeat = 'msg in msgbox.messages track by $index'>
                                                            <div ng-if = '0 == msg.qa_flag'>
                                                                <div class="col-xs-1 activity-desc1"></div>
                                                                <div class="col-xs-5 activity-img2">
                                                                    <div class="activity-desc-sub" style="border-radius:5px;">
                                                                        <p>{{ msg.text }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-5 activity-img">
                                                                    <span style="text-align:left;">{{ msg.reg_date }}</span>
                                                                </div>
                                                                <div class="clearfix"> </div>
                                                            </div>
                                                            
                                                            <div ng-if = '1 == msg.qa_flag'>
                                                                <div class="col-xs-2 activity-img"></div>
                                                                <div class="col-xs-3 activity-img" style="top: 8px;">
                                                                    <span class = 'pull-right'>{{ msg.reg_date }}</span>
                                                                </div>
                                                                <!--
                                                                <div class="col-xs-2 activity-desc1" style="text-align:right;padding-right: 9px; ">
                                                                    <input type="checkbox" value="" class="" style="margin-top: 10px;">
                                                                </div>
                                                                -->
                                                                <div class="col-xs-6 activity-img2">
                                                                    <div class="activity-desc-sub1 bg-yellow" style="border-radius:5px; text-align: left;">
                                                                        <p>{{ msg.text }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-1 activity-img"></div>
                                                                <div class="clearfix"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="h10"></div>

                                                <form>
                                                    <textarea class="form-control1" style="height:140px;" ng-model = 'new_msg.text'>
                                                        감사합니다. 앞으로도 이용 중 궁금하신 사항이 있으시면 언제든 문의해주세요.
                                                    </textarea>
                                                </form>
                                            </div>

                                            <div class="h10"></div>

                                            <div class="text-center">
                                                <button class="btn-default btn btn2" ng-click = 'sendMsgToUser(msgbox)'>답변하기</button>
                                                <button class="btn-default btn btn2" ng-click = 'closeMsgBox()'>삭제하기</button>
                                            </div>
                                        </div>

                                        <div class="col-md-5">

                                            <h4>머니/포인트충환전</h4>

                                            <div class="big-box">
                                               <form class="form-horizontal">
                                                    <div class="h40"></div>
                                                    <div class="form-group">
                                                        <label for="input" class="col-sm-2 control-label">보유머니</label>
                                                        <div class="col-sm-8">
                                                            <div class="col-md-4">
                                                                <input disabled="" type="text" class="form-control1" id="input" placeholder="" value="123,456,789,012 P">    
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="col-sm-2">
                                                                    <div class="radio block"><label><input type="radio" checked="" style="top: 0px;"> +</label></div>
                                                                    <div class="radio block" style="top: -10px;"><label><input type="radio" style="top: 0px;"> -</label></div>
                                                                </div>
                                                                <div class="col-sm-8" style="padding-top:15px;">
                                                                    <input type="text" class="form-control1" id="input" placeholder="" style="top: 7px;">
                                                                </div>
                                                                <div class="col-sm-2" style="padding-top: 15px;padding-left: 15px;">
                                                                    원
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="h10"></div>
                                                        <div class="col-md-10">
                                                           <div class="pull-right">
                                                                비고(내역) <input type="text" value="" size="14" style="margin-right: 68px;margin-left:5px;">
                                                            </div>    
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="input" class="col-sm-2 control-label">보유포인트</label>
                                                        <div class="col-sm-8">
                                                            <div class="col-md-4">
                                                                <input disabled="" type="text" class="form-control1" id="input" placeholder="" value="123,456,789,012 P">    
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="col-sm-2">
                                                                    <div class="radio block"><label><input type="radio" checked="" style="top: 0px;"> +</label></div>
                                                                    <div class="radio block" style="top: -10px;"><label><input type="radio" style="top: 0px;"> -</label></div>
                                                                </div>
                                                                <div class="col-sm-8" style="padding-top:15px;">
                                                                    <input type="text" class="form-control1" id="input" placeholder="" style="top: 7px;">
                                                                </div>
                                                                <div class="col-sm-2" style="padding-top: 15px;padding-left: 15px;">
                                                                    원
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="h10"></div>
                                                        <div class="col-md-10">
                                                           <div class="pull-right">
                                                                비고(내역) <input type="text" value="" size="14" style="margin-right: 68px;margin-left:5px;">
                                                            </div>    
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="h20"></div>
                                                <div class="text-center">
                                                    <button class="btn btn-default btn2">적용하기</button>
                                                </div>
                                                 <div class="h20"></div>
                                            </div>

                                            <div class="h30" style="height:43px;"></div>

                                            <h4>고객센터 답변 템플릿</h4>
                                                    
                                            <div class="form-group">
                                                <select multiple="" class="form-control1" style="height:235px !important;">
                                                    <option ng-repeat = 'template in msgbox.templates' ng-click = 'setTemplate(template)'>{{ template.subject }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
				            </div>
				        </div>
                        
                        <div id = 'template-form' style="padding:10px 20px; display: none;">
                            <div class = 'row'>
                                <div class = 'col-md-12'>
                                    <form ng-submit = 'addSaveTemplate()'>
                                        제목
                                        <span class="sp"></span>
                                        <input type="text" size="80" ng-model = 'new_template.subject'>

                                        <div class="h10"></div>

                                        <textarea class="form-control1" style="height:255px;resize:none;" ng-model = 'new_template.text'></textarea>

                                        <div class="h20"></div>

                                        <div class="text-center">
                                            <button type = 'submit' class="btn-default btn-black btn btn2">등록하기</button>
                                            <button type = 'button' class="btn-default btn btn2 close-template-form">취소하기</button>
                                        </div>

                                        <div class="h10"></div>
                                    </form>
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