
		<div style="padding:0px 10px 10px 10px;" class="body-wrap">

            <!-- <div class="location-info">
                <div class="location-info-content">
                    콘텐츠 관리
                    <span class="location-info-sp">></span>
                    FAQ 관리
                </div>
            </div> -->

            <div class="h80"></div>

            <div id="tab_pop_adm" class="div-tab tabs swipe-tab tabs-color-top">
                <div class="w-tab bg-light">
                    <ul class="nav nav-tabs" data-toggle="tab-hover">
                        <li ng-click = 'changeSiteId(site)' ng-class = "0 == $index ? 'active' : ''" ng-repeat = 'site in sites track by $index'><a href = "" data-target="#tab_0{{ $index }}" data-toggle="tab">{{ site.site_name }}</a></li>
                    </ul>
                </div>
                
                <div class="tab-content">
                    <div class="tab-pane" id="tab_0{{ $index }}" ng-class = "0 == $index ? 'active' : ''" ng-repeat = 'site in sites track by $index'>
                        
                        <form name="" id="" class="" method="get">
                            <select name="" id="" class="">
                                <option>제목+내용</option>
                                <option>제목</option>
                            </select>
                            <input type="text" value="" size="6">
                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
                        </form>

                        <div class="h10"></div>
                        <form ng-submit = 'saveFaqsForm()'>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>No. <i class="fa fa-sort"></i></th>
                                            <th>구분</th>
                                            <th>제목</th>
                                            <th>조회</th>
                                            <th>노출</th>
                                            <th>등록일시 <i class="fa fa-sort"></i></th>
                                            <th>수정일시 <i class="fa fa-sort"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat = 'faq in site.faqs'>
                                            <td><input type="checkbox" ng-model = 'faq.faq_check' value = '1'></td>
                                            <td>{{ faq.f_seq }}</td>
                                            <td></td>
                                            <td>{{ faq.title }}</td>
                                            <td ng-if = '0 == faq.sort'>계정관련</td>
                                            <td ng-if = '1 == faq.sort'>게임실행</td>
                                            <td ng-if = '2 == faq.sort'>기타</td>
                                            <td>
                                                <select class="col-md-8" style="float:none;" ng-model = 'faq.show_flag'>
                                                    <option value = '0'>NO</option>
                                                    <option value = '1'>YES</option>
                                                </select>
                                            </td>
                                            <td>{{ faq.reg_date }}</td>
                                            <td>{{ faq.update_date }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="up-10"></div>
                            <div class="text-right">
                                <button type = 'submit' class="btn btn-default">저장하기</button>
                                <button type = 'button' ng-click = 'deleteSitesForm()' class="btn btn-default">삭제하기</button>
                                <button type = 'button' class="btn btn-default wys-slide-btn">신규등록</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            
            <div id = 'wys-editor' class = 'div-tab tabs swipe-tab tabs-color-top' style = 'display: none;'>
                <form id = 'add-faq-form' ng-submit = 'saveFaqForm()'>
                    <input type = 'hidden' ng-model = 'new_faq.site_id' />
                    <div style="padding:15px;">

                        <div>
                            제목<span style="color:#fff;">숨</span>
                            <span class="sp"></span>
                            <input type="text" name="" ng-model = 'new_faq.title' size="20" maxlength="255">
                        </div>

                        <div class="h10"></div>
                        
                        <div text-angular ng-model='new_faq.text' name = 'faq-content'>
                            HO HO
                        </div>
                        
                        <div class="h20"></div>
                        <div class="h20"></div>

                        <div class="up-10"></div>
                        
                        <div>
                            구분
                            <span class="sp"></span>
                            <select ng-model = 'new_faq.sort'>
                                <option value ='0'>계정관련</option>
                                <option value ='1'>게임실행</option>
                                <option value ='2'>기타</option>
                            </select>

                            <span class="sp"></span>
                            <span class="sp"></span>

                            노출여부
                            <span class="sp"></span>
                            <select name="" ng-model = 'new_faq.show_flag'>
                                <option value = '0'>숨김</option>
                                <option value = '1'>노출</option>
                            </select>
                        </div>

                        <div class="h20"></div>

                        <div class="text-center">
                            <button type = 'submit' class="btn-default btn btn2">등록하기</button>
                            <button type = 'button' class="btn-default btn btn2 cancel-wys-slider">취소하기</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        
        
        <script>
            $('document').ready(function() {
                $('#main-cntr').on('click', '.wys-slide-btn', function() {
                    $('#wys-editor').slideDown();
                });
                
                $('#main-cntr').on('click', '.cancel-wys-slider', function() {
                    $('#wys-editor').slideUp();
                });
            });
        </script>