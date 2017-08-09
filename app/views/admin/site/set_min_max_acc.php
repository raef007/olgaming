<ng-include src="'../app/views/admin/common/modal/msg-prompt.php'"></ng-include>

<div style="padding:0px 10px 10px 10px;" class="body-wrap">

    <div class="h80"></div>

    <div id="tab_min_set" class="div-tab tabs swipe-tab tabs-color-top">
        <div class="w-tab bg-light">
            <ul class="nav nav-tabs" data-toggle="tab-hover">
                <li ng-class="0 == $index ? 'active' : ''" ng-repeat = 'site in master.sites track by $index'><a href = "" data-target="#tab_{{ $index }}" data-toggle="tab">{{ site.site_name }}</a></li>
            </ul>
        </div>
        
        <div class="tab-content">
            <div class="tab-pane" ng-class = "0 == $index ? 'active' : ''" id = "tab_{{ $index }}" ng-repeat = 'site in master.sites track by $index'>
                
                <h3>사이트 베팅액 설정</h3>
                <h4>최대 당첨금 한도</h4>

                <div class="h20"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-3">
                            게임당 최대 지불 가능 금액 
                        </div>
                        
                        <div class="col-md-9">
                            <input type="text" size="8" ng-model = "site.max_money_per_game" class="text-right"> 원
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-2">
                            최대 배당률 
                        </div>
                        <div class="col-md-10">
                            <input type="text" size="8" ng-model="site.max_rate"> 배
                        </div>
                    </div>
                </div>

                <div class="h10"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-md-3">
                            베팅 당 당첨 상한액
                        </div>
                        <div class="col-md-9">
                            <input type="text" size="8" ng-model = "site.max_win_money_per_bet" class="text-right"> 원
                        </div>
                    </div>
                </div>

                <div class="h30"></div>

                <h4>회원 레벨별 베팅액 설정</h4>

                <div class="div-tab tabs swipe-tab tabs-color-top">
                    <div class="w-tab bg-light">
                        <ul class="nav nav-tabs" data-toggle="tab-hover">
                            <li class="active"><a href = "" data-target="#tab_{{ $index }}0" data-toggle="tab">스포츠북</a></li>
                            <li><a href = "" data-target="#tab_{{ $index }}1" data-toggle="tab">라이브카지노</a></li>
                            <li><a href = "" data-target="#tab_{{ $index }}2" data-toggle="tab">버추어스포츠</a></li>
                            <li><a href = "" data-target="#tab_{{ $index }}3" data-toggle="tab">경마</a></li>
                        </ul>
                    </div>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_{{ $index }}0">
                            
                            <div class="text-right">
                                <button class="btn btn-default" ng-click = 'addConfigRow(site, 0)'>추가하기</button>
                                <button class="btn btn-default" ng-click = 'deleteBetConfig()'>삭제하기</button>
                            </div>

                            <div class="h10"></div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>회원레벨 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>회원 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>추천인 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>하루 첫충% <i class="fa fa-sort"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat = 'config in site.sportsbook track by $index'>
                                            <td><input type="checkbox" ng-model = 'config.config_check' ng-checked = "1 == config.config_check"></td>
                                            <td><input type="text" size="8" ng-model="config.level" class="text-right"></td>
                                            <td><input type="text" ng-model = "config.realtime_min_bet_money" class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.realtime_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_min_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.member_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.recommand_mem_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.daily_first_deposit_percent' style="text-align:right" class="form-control1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-default btn2" ng-click = 'saveBetConfig()'>저장하기</button>
                                <button class="btn btn-default btn2">취소하기</button>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab_{{ $index }}1">
                    
                            <div class="text-right">
                                <button class="btn btn-default" ng-click = 'addConfigRow(site, 1)'>추가하기</button>
                                <button class="btn btn-default" ng-click = 'deleteBetConfig()'>삭제하기</button>
                            </div>

                            <div class="h10"></div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>회원레벨 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>회원 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>추천인 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>하루 첫충% <i class="fa fa-sort"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat = 'config in site.live_casino track by $index'>
                                            <td><input type="checkbox" ng-model = 'config.config_check' ng-checked = "1 == config.config_check"></td>
                                            <td><input type="text" size="8" ng-model="config.level" class="text-right"></td>
                                            <td><input type="text" ng-model = "config.realtime_min_bet_money" class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.realtime_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_min_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.member_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.recommand_mem_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.daily_first_deposit_percent' style="text-align:right" class="form-control1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-default btn2" ng-click = 'saveBetConfig()'>저장하기</button>
                                <button class="btn btn-default btn2">취소하기</button>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab_{{ $index }}2">
                            
                            <div class="text-right">
                                <button class="btn btn-default" ng-click = 'addConfigRow(site, 2)'>추가하기</button>
                                <button class="btn btn-default" ng-click = 'deleteBetConfig()'>삭제하기</button>
                            </div>

                            <div class="h10"></div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>회원레벨 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>회원 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>추천인 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>하루 첫충% <i class="fa fa-sort"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat = 'config in site.virtua_sports track by $index'>
                                            <td><input type="checkbox" ng-model = 'config.config_check' ng-checked = "1 == config.config_check"></td>
                                            <td><input type="text" size="8" ng-model="config.level" class="text-right"></td>
                                            <td><input type="text" ng-model = "config.realtime_min_bet_money" class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.realtime_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_min_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.member_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.recommand_mem_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.daily_first_deposit_percent' style="text-align:right" class="form-control1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-default btn2" ng-click = 'saveBetConfig()'>저장하기</button>
                                <button class="btn btn-default btn2">취소하기</button>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab_{{ $index }}3">
                    
                            <div class="text-right">
                                <button class="btn btn-default" ng-click = 'addConfigRow(site, 3)'>추가하기</button>
                                <button class="btn btn-default" ng-click = 'deleteBetConfig()'>삭제하기</button>
                            </div>

                            <div class="h10"></div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox"></th>
                                            <th>회원레벨 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>실시간 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최소 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>스포츠 최대 베팅액 <i class="fa fa-sort"></i></th>
                                            <th>회원 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>추천인 낙첨금 % <i class="fa fa-sort"></i></th>
                                            <th>하루 첫충% <i class="fa fa-sort"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat = 'config in site.racing track by $index'>
                                            <td><input type="checkbox" ng-model = 'config.config_check' ng-checked = "1 == config.config_check"></td>
                                            <td><input type="text" size="8" ng-model="config.level" class="text-right"></td>
                                            <td><input type="text" ng-model = "config.realtime_min_bet_money" class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.realtime_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_min_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.sport_max_bet_money' class="form-control1 text-right"></td>
                                            <td><input type="text" ng-model = 'config.member_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.recommand_mem_ppochi_percent' style="text-align:right" class="form-control1"></td>
                                            <td><input type="text" ng-model = 'config.daily_first_deposit_percent' style="text-align:right" class="form-control1"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-default btn2" ng-click = 'saveBetConfig()'>저장하기</button>
                                <button class="btn btn-default btn2">취소하기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>