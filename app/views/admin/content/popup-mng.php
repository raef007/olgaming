		<div style="padding:0px 10px 10px 10px;" class="body-wrap">

            <div class="h80"></div>

            <div id="tab_pop_adm" class="div-tab tabs swipe-tab tabs-color-top">
                <div class="w-tab bg-light">
                    <ul class="nav nav-tabs" data-toggle="tab-hover">
                        <li ng-click = 'changeSiteId(site)' ng-class = "0 == $index ? 'active' : ''" ng-repeat = 'site in sites track by $index'><a href = "" data-target="#tab_{{ $index }}" data-toggle="tab">{{ site.site_name }}</a></li>
                    </ul>
                </div>
                
                <div class="tab-content">
                    <div class="tab-pane" ng-class = "0 == $index ? 'active' : ''" id="tab_{{ $index }}" ng-repeat = 'site in sites track by $index'>
                        
                        <div id="tab_pop_adm0" class="div-tab tabs swipe-tab tabs-color-top">
                            <div class="w-tab bg-light">
                                <ul class="nav nav-tabs" data-toggle="tab-hover">
                                    <li class="active"><a href = "" data-target="#tab_{{ $index }}0" data-toggle="tab">매인팝업</a></li>
                                    <li><a href = "" data-target="#tab_{{ $index }}1" data-toggle="tab">서브메뉴팝업</a></li>
                                    <li><a href = "" data-target="#tab_{{ $index }}2" data-toggle="tab">모바일웹</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_{{ $index }}0">
                                    메인

                                    <div class="h20"></div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox"></th>
                                                    <th>사이트</th>
                                                    <th>ID</th>
                                                    <th>썸네일</th>
                                                    <th>제목</th>
                                                    <th>시작일시</th>
                                                    <th>종료일시</th>
                                                    <th>타겟</th>
                                                    <th>노출</th>
                                                    <th>등록일시 <i class="fa fa-sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat = 'popup in site.popups track by $index'>
                                                    <td><input type="checkbox" ng-model = 'popup.pop_check' value = '1'></td>
                                                    <td>{{ site.site_name }}</td>
                                                    <td></td>
                                                    <td><img src="{{ popup.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                    <td>오픈이벤트</td>
                                                    <td>
                                                    
                                                        <div class='col-md-6'>
                                                            <input type="text" ng-model = 'popup.start_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                        </div>
                                                        <div class= 'col-md-6'>
                                                            <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class='col-md-6'>
                                                            <input type="text" ng-model = 'popup.end_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                        </div>
                                                        <div class= 'col-md-6'>
                                                            <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <select class="col-md-8" style="float:none;" ng-model = 'popup.link_target_code'>
                                                            <option value = '0'>현재 창</option>
                                                            <option value = '1'>새 창</option>
                                                            <option value = '2'>새 탭</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                    <select class="col-md-8" style='float:none;' ng-model = 'popup.show_flag'>
                                                        <option value = '0'>Y</option>
                                                        <option value = '1'>N</option>
                                                    </select>
                                                    </td>
                                                    <td>{{ popup.reg_date }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="up-10"></div>
                                </div>
                                
                                

                                <div class="tab-pane" id="tab_{{ $index }}1">
                                    메인
                                    <div class="h20"></div>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox"></th>
                                                    <th>사이트</th>
                                                    <th>ID</th>
                                                    <th>썸네일</th>
                                                    <th>제목</th>
                                                    <th>시작일시</th>
                                                    <th>종료일시</th>
                                                    <th>타겟</th>
                                                    <th>노출</th>
                                                    <th>등록일시 <i class="fa fa-sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat = 'popup in site.submenus track by $index'>
                                                    <td><input type="checkbox" ng-model = 'popup.pop_check' value = '1'></td>
                                                    <td>{{ site.site_name }}</td>
                                                    <td></td>
                                                    <td><img src="{{ popup.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                    <td>오픈이벤트</td>
                                                    <td>
                                                    
                                                        <div class='col-md-6'>
                                                            <input type="text" name="fr_date" ng-model = 'popup.start_date' id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                        </div>
                                                        <div class= 'col-md-6'>
                                                            <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class='col-md-6'>
                                                            <input type="text" name="to_date" ng-model = 'popup.end_date' id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                        </div>
                                                        <div class= 'col-md-6'>
                                                            <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <select class="col-md-8" style="float:none;" ng-model = 'popup.link_target_code'>
                                                            <option value = '0'>현재 창</option>
                                                            <option value = '1'>새 창</option>
                                                            <option value = '2'>새 탭</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                    <select class="col-md-8" style='float:none;' ng-model = 'popup.show_flag'>
                                                        <option value = '0'>Y</option>
                                                        <option value = '1'>N</option>
                                                    </select>
                                                    </td>
                                                    <td>{{ popup.reg_date }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="up-10"></div>

                                </div>

                                <div class="tab-pane" id="tab_{{ $index }}2">
                                    메인

                                    <div class="h20"></div>
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox"></th>
                                                    <th>사이트</th>
                                                    <th>ID</th>
                                                    <th>썸네일</th>
                                                    <th>제목</th>
                                                    <th>시작일시</th>
                                                    <th>종료일시</th>
                                                    <th>타겟</th>
                                                    <th>노출</th>
                                                    <th>등록일시 <i class="fa fa-sort"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat = 'popup in site.mbwebs track by $index'>
                                                    <td><input type="checkbox" ng-model = 'popup.pop_check' value = '1'></td>
                                                    <td>{{ site.site_name }}</td>
                                                    <td></td>
                                                    <td><img src="{{ popup.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                    <td>오픈이벤트</td>
                                                    <td>
                                                    
                                                        <div class='col-md-6'>
                                                            <input type="text" name="fr_date" ng-model = 'popup.start_date' id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                        </div>
                                                        <div class= 'col-md-6'>
                                                            <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <div class='col-md-6'>
                                                            <input type="text" name="to_date" ng-model = 'popup.end_date' id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                        </div>
                                                        <div class= 'col-md-6'>
                                                            <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                        <select class="col-md-8" style="float:none;" ng-model = 'popup.link_target_code'>
                                                            <option value = '0'>현재 창</option>
                                                            <option value = '1'>새 창</option>
                                                            <option value = '2'>새 탭</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                    <select class="col-md-8" style='float:none;' ng-model = 'popup.show_flag'>
                                                        <option value = '0'>Y</option>
                                                        <option value = '1'>N</option>
                                                    </select>
                                                    </td>
                                                    <td>{{ popup.reg_date }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="up-10"></div>

                                </div>
                                
                                <div class="text-right">
                                    <button class="btn btn-default" ng-click = 'savePopupsForm()'>저장하기</button>
                                    <button class="btn btn-default" ng-click = 'deletePopupsForm()'>삭제하기</button>
                                    <a class="btn btn-default show-editor-btn" href = "">신규등록</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="tab_site_set" class="div-tab tabs swipe-tab tabs-color-top" style = 'display: none;'>
            <form ng-submit = 'savePopupForm()'>
                <div class="w-tab bg-light">
                
                    <div>
                        제목
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <input type="text" size="20" maxlength="30" ng-model = 'new_popup.subject'>
                    </div>
                    
                    <div class="h10"></div>
                    
                    팝업창 크기
                    <span class="sp" style="margin-left:15px;"></span>
                    가로
                    <span class="sp"></span>
                    <input type="text" size="6" ng-model = 'new_popup.size_width'>
                    px
                    <span class="sp"></span>
                    세로
                    <span class="sp"></span>
                    <input type="text" size="6" ng-model = 'new_popup.size_height'>
                    px
                    &nbsp&nbsp&nbsp
                    (등록하려는 이미지/동영상과 동일한 사이즈로 지정해주세요.)
                    
                    <div class="h10"></div>
                    
                    팝업위치
                    <span class="sp" style="margin-left:13px;"></span>
                    <span class="sp"></span>
                    상단
                    <span class="sp"></span>
                    <input type="text" size="6" ng-model = 'new_popup.x_position'>
                    px
                    <span class="sp"></span>
                    좌측
                    <span class="sp"></span>
                    <input type="text" size="6" ng-model = 'new_popup.y_position'>
                    px
                    
                    <div class="h10"></div>
                    
                    <div>
                        기간
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <input type="text" class="datepicker1" placeholder="8/12/2018" ng-model = 'new_popup.start_date'>
                        <select name="" id="" class="" ng-model = 'new_popup.start_datetime'>
                            <option value = '00:00:00'>오전 00:00</option>
                            <option value = '01:00:00'>오전 01:00</option>
                        </select>
                        부터
                    
                        <span class="sp"></span>
                        <input type="text" class="datepicker1" placeholder="8/12/2018" ng-model = 'new_popup.end_date'>
                        <select name="" id="" class="" ng-model = 'new_popup.end_datetime'>
                            <option value = '00:00:00'>오전 00:00</option>
                            <option value = '01:00:00'>오전 01:00</option>
                        </select>
                    
                        <span class="sp"></span>
                        <input type="checkbox">
                        무기한 진행
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        스크롤바<span style="margin:0 -16px 0 0;"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <label class="radio-a">
                            <input type="radio" value = '0' name="scrollbar" ng-model = 'new_popup.scrool_flag'>
                        </label> YES
                        <span class="sp"></span>
                        <label class="radio-a">
                            <input type="radio" value = '1' name="scrollbar" ng-model = 'new_popup.scrool_flag'>
                        </label> NO
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        기기선택<span style="margin:0 -16px 0 0;"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" name="device" value = '0' checked ng-model = 'new_popup.sort_machine'></label> 모바일+PC
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" name="device" value = '1' ng-model = 'new_popup.sort_machine'></label> 모바일
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" name="device" value = '2' ng-model = 'new_popup.sort_machine'></label> PC
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        팝업종류<span style="margin:0 -16px 0 0;"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '0' name="kind" checked ng-model = 'new_popup.sort_popup'></label> 레이어
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '1' name="kind" ng-model = 'new_popup.sort_popup'></label> 모달
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '2' name="kind" ng-model = 'new_popup.sort_popup'></label> 팝업
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        노출여부<span style="margin:0 -16px 0 0;"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '0' name="use" checked ng-model = 'new_popup.show_flag'></label> YES
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '1' name="use" ng-model = 'new_popup.show_flag'></label> NO
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '2' name="use" ng-model = 'new_popup.show_flag'></label> 로그인
                        &nbsp&nbsp&nbsp(로그인 선택시 로그인 유저에게만 노출)
                    
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        순서
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <select name="" id="" class="" ng-model = 'new_popup.ordering'>
                            <option value = '1'>1</option>
                            <option value = '2'>2</option>
                        </select>
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        링크타겟<span style="margin:0 -16px 0 0;"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '0' name="target" checked ng-model = 'new_popup.link_target_code'></label> 현재 창
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '1' name="target" ng-model = 'new_popup.link_target_code'></label> 새 창
                        <span class="sp"></span>
                        <label class="radio-a"><input type="radio" value = '2' name="target" ng-model = 'new_popup.link_target_code'></label> 새 탭
                    </div>
                    
                    <div class="h10"></div>
                    
                    <div>
                        링크주소<span style="margin:0 -16px 0 0;"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <span class="sp"></span>
                        <input type="text" size="25" maxlength="255" ng-model = 'new_popup.link_address'> (http:// 또는 https:// 필수 입력)
                    </div>
                    
                    <div class="h10"></div>
                    
                    팝업 등록
                    
                    <div class="h10"></div>
                    
                    <textarea ui-tinymce = 'tinymceOptions' ng-model="new_popup.text"></textarea>
                    
                    <div class="h20"></div>
                    
                    <div class="text-center">
                        <button type = 'submit' class="btn-default btn-black btn btn2">등록하기</button>
                        <button type = 'button' class="btn-default btn btn2 cancel-editor-btn">취소하기</button>
                    </div>
                    
                </div>
            </form>
        </div>
        
        <script>
            $(document).ready(function() {
                $('#main-cntr').on('click', '.show-editor-btn', function() {
                    $('#tab_site_set').slideDown();
                    return false;
                });
                
                $('#main-cntr').on('click', '.cancel-editor-btn', function() {
                    $('#tab_site_set').slideUp();
                    return false;
                });
                
                $('#main-cntr').delegate(".datepicker1", "focusin", function(){
                    $(this).datepicker(({ dateFormat: 'yymmdd' }));
                });
                
            });
        </script>