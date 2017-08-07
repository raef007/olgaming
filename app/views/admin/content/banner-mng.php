    <ng-include src="'../app/views/admin/common/modal/msg-prompt.php'"></ng-include>
    
    <div style="padding:0px 10px 10px 10px;" class="body-wrap">
    
        <div class="h80"></div>

        <div id="tab_banner_adm" class="div-tab tabs swipe-tab tabs-color-top">
            <div class="w-tab bg-light">
                <ul class="nav nav-tabs" data-toggle="tab-hover">
                    <li ng-click = 'changeSiteId(site)' ng-class = "0 == $index ? 'active' : ''" ng-repeat = 'site in master.sites track by $index'><a href = "" data-target="#tab_{{ $index }}" data-toggle="tab">{{ site.site_name }}</a></li>
                </ul>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane" ng-class = "0 == $index ? 'active' : ''" id="tab_{{ $index }}" ng-repeat = 'site in master.sites track by $index'>
                    
                    <div id="tab_banner_adm0" class="div-tab tabs swipe-tab tabs-color-top">
                        <div class="w-tab bg-light">
                            <ul class="nav nav-tabs" data-toggle="tab-hover">
                                <li class="active"><a href = "" ng-click = 'changeBannerSort(0)' data-target="#tab_{{ $index }}0" data-toggle="tab">매인배너</a></li>
                                <li><a href = "" ng-click = 'changeBannerSort(1)' data-target="#tab_{{ $index }}1" data-toggle="tab">서브배너</a></li>
                                <li><a href = "" ng-click = 'changeBannerSort(2)' data-target="#tab_{{ $index }}2" data-toggle="tab">라이브카지노배너</a></li>
                                <li><a href = "" ng-click = 'changeBannerSort(3)' data-target="#tab_{{ $index }}3" data-toggle="tab">베팅슬립배너</a></li>
                                <li><a href = "" ng-click = 'changeBannerSort(4)' data-target="#tab_{{ $index }}4" data-toggle="tab">포인트전환배너</a></li>
                                <li><a href = "" ng-click = 'changeBannerSort(5)' data-target="#tab_{{ $index }}5" data-toggle="tab">모바일웹</a></li>
                            </ul>
                        </div>
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_{{ $index }}0">
                    
                                메인 상단 중앙 (로테이션)
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
                                                <th>종료일시</th><th>타겟</th>
                                                <th>순서</th>
                                                <th>노출</th>
                                                <th>등록일시</i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat = 'banner in site.mains track by $index'>
                                                <td><input type="checkbox" ng-model = 'banner.banner_check'></td>
                                                <td>{{ site.site_name }}</td>
                                                <td>{{ banner.admin_name }}</td>
                                                <td><img src="<?php echo URL::To('assets/images/banners') ?>/{{ banner.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                <td> <a href = '' ng-click = 'loadBannerInf(banner)'><i class = 'fa fa-edit'>&nbsp;</i>{{ banner.subject }}</td>
                                                <td>
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="fr_date" ng-model = 'banner.start_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                    </div>
                                                    
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class = 'col-md-6'><input type="text" name="to_date" ng-model = 'banner.end_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10"></div>

                                                    <div class = 'col-md-6'><input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10"></div>
                                                </td>
                                                <td ng-if = '0 == banner.ink_target'>현재 창</td>
                                                <td ng-if = '1 == banner.ink_target'>새 창</td>
                                                <td ng-if = '2 == banner.ink_target'>새 탭</td>
                                                <td>
                                                    <select class="col-md-8" style="float:none;" ng-model = 'banner.ordering'>
                                                        <option value = '0'>0</option>
                                                        <option value = '1'>1</option>
                                                    </select>
                                                </td>
                                                <td>
                                                <select name="" id="" class="col-md-8" style="float:none;" ng-model = 'banner.show_flag'>
                                                    <option value = '0'>No</option>
                                                    <option value = '1'>Yes</option>
                                                </select>
                                                </td>
                                                <td>{{ banner.reg_date }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_{{ $index }}1">
                    
                                메인 상단 중앙 (로테이션)
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
                                                <th>종료일시</th><th>타겟</th>
                                                <th>순서</th>
                                                <th>노출</th>
                                                <th>등록일시</i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat = 'banner in site.subbanners track by $index'>
                                                <td><input type="checkbox" ng-model = 'banner.banner_check'></td>
                                                <td>{{ site.site_name }}</td>
                                                <td>{{ banner.admin_name }}</td>
                                                <td><img src="<?php echo URL::To('assets/images/banners') ?>/{{ banner.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                <td> <a href = '' ng-click = 'loadBannerInf(banner)'><i class = 'fa fa-edit'>&nbsp;</i>{{ banner.subject }}</td>
                                                <td>
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="fr_date" ng-model = 'banner.start_date' class="datepicker1" size="6" maxlength="10">
                                                    </div>
                                                    
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class = 'col-md-6'><input type="text" name="to_date" ng-model = 'banner.end_date' placeholder="8/12/2018" size="6" maxlength="10"></div>

                                                    <div class = 'col-md-6'><input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10"></div>
                                                </td>
                                                <td>{{ banner.ink_target }}</td>
                                                <td>
                                                    <select id="" class="col-md-8" style="float:none;" ng-model = 'banner.ordering'>
                                                        <option value = '0'>1</option>
                                                        <option value = '1'>2</option>
                                                    </select>
                                                </td>
                                                <td>
                                                <select name="" id="" class="col-md-8" style="float:none;" ng-model = 'banner.show_flag'>
                                                    <option value = '0'>No</option>
                                                    <option value = '1'>Yes</option>
                                                </select>
                                                </td>
                                                <td>{{ banner.reg_date }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_{{ $index }}2">
                    
                                메인 상단 중앙 (로테이션)
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
                                                <th>종료일시</th><th>타겟</th>
                                                <th>순서</th>
                                                <th>노출</th>
                                                <th>등록일시</i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat = 'banner in site.casinos track by $index'>
                                                <td><input type="checkbox" ng-model = 'banner.banner_check'></td>
                                                <td>{{ site.site_name }}</td>
                                                <td>{{ banner.admin_name }}</td>
                                                <td><img src="<?php echo URL::To('assets/images/banners') ?>/{{ banner.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                <td> <a href = '' ng-click = 'loadBannerInf(banner)'><i class = 'fa fa-edit'>&nbsp;</i>{{ banner.subject }}</td>
                                                <td>
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="fr_date" ng-model = 'banner.start_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                    </div>
                                                    
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class = 'col-md-6'><input type="text" name="to_date" ng-model = 'banner.end_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10"></div>

                                                    <div class = 'col-md-6'><input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10"></div>
                                                </td>
                                                <td>{{ banner.ink_target }}</td>
                                                <td>
                                                    <select id="" class="col-md-8" style="float:none;" ng-model = 'banner.ordering'>
                                                        <option value = '0'>1</option>
                                                        <option value = '1'>2</option>
                                                    </select>
                                                </td>
                                                <td>
                                                <select name="" id="" class="col-md-8" style="float:none;" ng-model = 'banner.show_flag'>
                                                    <option value = '0'>No</option>
                                                    <option value = '1'>Yes</option>
                                                </select>
                                                </td>
                                                <td>{{ banner.reg_date }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="tab_{{ $index }}3">
                    
                                메인 상단 중앙 (로테이션)
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
                                                <th>종료일시</th><th>타겟</th>
                                                <th>순서</th>
                                                <th>노출</th>
                                                <th>등록일시</i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat = 'banner in site.betslips track by $index'>
                                                <td><input type="checkbox" ng-model = 'banner.banner_check'></td>
                                                <td>{{ site.site_name }}</td>
                                                <td>{{ banner.admin_name }}</td>
                                                <td><img src="<?php echo URL::To('assets/images/banners') ?>/{{ banner.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                <td> <a href = '' ng-click = 'loadBannerInf(banner)'><i class = 'fa fa-edit'>&nbsp;</i>{{ banner.subject }}</td>
                                                <td>
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="fr_date" ng-model = 'banner.start_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                    </div>
                                                    
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class = 'col-md-6'><input type="text" name="to_date" ng-model = 'banner.end_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10"></div>

                                                    <div class = 'col-md-6'><input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10"></div>
                                                </td>
                                                <td>{{ banner.ink_target }}</td>
                                                <td>
                                                    <select id="" class="col-md-8" style="float:none;" ng-model = 'banner.ordering'>
                                                        <option value = '0'>1</option>
                                                        <option value = '1'>2</option>
                                                    </select>
                                                </td>
                                                <td>
                                                <select name="" id="" class="col-md-8" style="float:none;" ng-model = 'banner.show_flag'>
                                                    <option value = '0'>No</option>
                                                    <option value = '1'>Yes</option>
                                                </select>
                                                </td>
                                                <td>{{ banner.reg_date }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_{{ $index }}4">
                    
                                메인 상단 중앙 (로테이션)
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
                                                <th>종료일시</th><th>타겟</th>
                                                <th>순서</th>
                                                <th>노출</th>
                                                <th>등록일시</i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat = 'banner in site.ptcnvs track by $index'>
                                                <td><input type="checkbox" ng-model = 'banner.banner_check'></td>
                                                <td>{{ site.site_name }}</td>
                                                <td>{{ banner.admin_name }}</td>
                                                <td><img src="<?php echo URL::To('assets/images/banners') ?>/{{ banner.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                <td> <a href = '' ng-click = 'loadBannerInf(banner)'><i class = 'fa fa-edit'>&nbsp;</i>{{ banner.subject }}</td>
                                                <td>
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="fr_date" ng-model = 'banner.start_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                    </div>
                                                    
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class = 'col-md-6'><input type="text" name="to_date" ng-model = 'banner.end_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10"></div>

                                                    <div class = 'col-md-6'><input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10"></div>
                                                </td>
                                                <td>{{ banner.ink_target }}</td>
                                                <td>
                                                    <select id="" class="col-md-8" style="float:none;" ng-model = 'banner.ordering'>
                                                        <option value = '0'>1</option>
                                                        <option value = '1'>2</option>
                                                    </select>
                                                </td>
                                                <td>
                                                <select name="" id="" class="col-md-8" style="float:none;" ng-model = 'banner.show_flag'>
                                                    <option value = '0'>No</option>
                                                    <option value = '1'>Yes</option>
                                                </select>
                                                </td>
                                                <td>{{ banner.reg_date }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab_{{ $index }}5">
                    
                                메인 상단 중앙 (로테이션)

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
                                                <th>종료일시</th><th>타겟</th>
                                                <th>순서</th>
                                                <th>노출</th>
                                                <th>등록일시</i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat = 'banner in site.mbwebs track by $index'>
                                                <td><input type="checkbox" ng-model = 'banner.banner_check'></td>
                                                <td>{{ site.site_name }}</td>
                                                <td>{{ banner.admin_name }}</td>
                                                <td><img src="<?php echo URL::To('assets/images/banners') ?>/{{ banner.img_path }}" style = 'height: 20px; width: 40px;'></td>
                                                <td> <a href = '' ng-click = 'loadBannerInf(banner)'><i class = 'fa fa-edit'>&nbsp;</i>{{ banner.subject }}</td>
                                                <td>
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="fr_date" ng-model = 'banner.start_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                                    </div>
                                                    
                                                    <div class = 'col-md-6'>
                                                        <input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class = 'col-md-6'><input type="text" name="to_date" ng-model = 'banner.end_date' class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10"></div>

                                                    <div class = 'col-md-6'><input type="text" name="time" placeholder="오전 01:00" size="6" maxlength="10"></div>
                                                </td>
                                                <td>{{ banner.ink_target }}</td>
                                                <td>
                                                    <select id="" class="col-md-8" style="float:none;" ng-model = 'banner.ordering'>
                                                        <option value = '0'>1</option>
                                                        <option value = '1'>2</option>
                                                    </select>
                                                </td>
                                                <td>
                                                <select name="" id="" class="col-md-8" style="float:none;" ng-model = 'banner.show_flag'>
                                                    <option value = '0'>No</option>
                                                    <option value = '1'>Yes</option>
                                                </select>
                                                </td>
                                                <td>{{ banner.reg_date }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="up-10"></div>
                        
                        <div class="text-right">
                            <button class="btn btn-default" ng-click = 'saveBannersForm()'>저장하기</button>
                            <button class="btn btn-default" ng-click = 'deleteBannersForm()'>삭제하기</button>
                            <a class="btn btn-default" href = "" ng-click = 'openNewBanner(site)'>신규등록</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="tab_banner_set" class="div-tab tabs swipe-tab tabs-color-top" style = 'display: none;'>
        <form ng-submit = 'saveBannerForm()'>
            <div class="w-tab bg-light">
                
                <div>
                    제목
                    <span class="sp"></span>
                    <span class="sp"></span>
                    <input type="text" ng-model = 'new_banner.subject' class="" size="20" maxlength="255">
                </div>

                <div class="h10"></div>

                <div>
                    기간
                    <span class="sp"></span>
                    <span class="sp"></span>
                    <input type="text" name="fr_date" ng-model = 'new_banner.start_date' id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                    <select name="" id="" class="">
                        <option>오전 00:00</option>
                        <option>오전 01:00</option>
                    </select>
                    부터

                    <span class="sp"></span>
                    <input type="text" name="to_date" ng-model = 'new_banner.end_date' id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                    <select name="" id="" class="">
                        <option>오전 00:00</option>
                        <option>오전 01:00</option>
                    </select>

                    <span class="sp"></span>
                    <input type="checkbox">
                    무기한 진행
                </div>

                <div class="h10"></div>

                <div>
                    링크타겟<span style="margin:0 -16px 0 0;"></span>
                    <span class="sp"></span>
                    <span class="sp"></span>
                    <label class="radio-a">
                        <input type="radio" value = '0' ng-model = 'new_banner.ink_target' checked>
                    </label> 현재 창
                    <span class="sp"></span>
                    <label class="radio-a">
                        <input type="radio" value = '1' ng-model = 'new_banner.ink_target'>
                    </label> 새 창
                    <span class="sp"></span>
                    <label class="radio-a">
                        <input type="radio" value = '2' ng-model = 'new_banner.ink_target'>
                    </label> 새 탭
                </div>

                <div class="h10"></div>

                <div>
                    링크주소<span style="margin:0 -16px 0 0;"></span>
                    <span class="sp"></span>
                    <span class="sp"></span>
                    <input type="text" size="25" maxlength="255"> (http:// 또는 https:// 필수 입력)
                </div>

                <div class="h10"></div>

                <div>
                    순서
                    <span class="sp"></span>
                    <span class="sp"></span>
                    <select ng-model = 'new_banner.ordering'>
                        <option value = '0'>1</option>
                        <option value = '1'>2</option>
                    </select>
                </div>

                <div class="h10"></div>

                <div>
                    노출여부
                    <span class="sp"></span>
                    <span class="sp"></span>
                    <label class="radio-a">
                        <input type="radio" name="use" value = '1' ng-model = 'new_banner.show_flag' checked>
                    </label> YES
                    <span class="sp"></span>
                    <label class="radio-a">
                        <input type="radio" name="use" value = '0' ng-model = 'new_banner.show_flag'>
                    </label> NO
                </div>

                <div class="h10"></div>

                배너 등록

                <div class="h10"></div>

                <textarea ui-tinymce = 'tinymceOptions' ng-model="new_banner.text"></textarea>
                
                <div class="h10"></div>
                
                <div class="text-center">
                    <button class="btn-default btn btn2">등록하기</button>
                    <button class="btn-default btn btn2" ng-click = 'resetNewBanner(master.sites[0])'>취소하기</button>
                </div>

            </div>
        </form>
    </div>
    
    <script>
        $(document).ready(function() {
            
            $('#main-cntr').delegate(".datepicker1", "focusin", function(){
                $(this).datepicker(({ dateFormat: 'yymmdd' }));
            });
            
        });
    </script>