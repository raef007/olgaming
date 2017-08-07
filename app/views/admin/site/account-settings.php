<ng-include src="'../app/views/admin/common/modal/msg-prompt.php'"></ng-include>

<div style="padding: 0px 10px 10px 10px;" class="body-wrap">
    
    <div class="h80"></div>

    <div id="tab_site_set" class="div-tab tabs swipe-tab tabs-color-top">
        <div class="w-tab bg-light">
            <ul class="nav nav-tabs" data-toggle="tab-hover">
                <li ng-class="0 == $index ? 'active' : ''" ng-repeat = 'site in master.sites track by $index'><a href = "" data-target="#tab_0{{ $index }}" data-toggle="tab">{{ site.site_name }}</a></li>
            </ul>
        </div>
        
        
        <div class="tab-content">
            <div class="tab-pane" ng-class = "0 == $index ? 'active' : ''" id = "tab_0{{ $index }}" ng-repeat = 'site in master.sites track by $index'>
                <div class="table-responsive">
                <h4>계좌 설정</h4>
                    <button class="btn btn-default pull-right" ng-click = 'addAccountRow($index, site)'>추가하기</button>
                    
                    <form ng-submit = 'saveAccountForm()'>
                        <div class="h20"></div>
                        <div class="h20"></div>
                        <table class="table table-bordered" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th><input type="checkbox"></th>
                                    <th>입금 레벨</th>
                                    <th>은행명</th>
                                    <th>계좌번호</th>
                                    <th>예금주</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat = 'account in site.level_accounts track by $index'>
                                    <td><input ng-model = 'account.lvl_check' type="checkbox" value = '1'></td>
                                    <td>
                                        <select ng-model = 'account.level' name = 'level'>
                                            <option value='0'>가입</option>
                                            <option value='1'>소액</option>
                                            <option value='2'>중액</option>
                                            <option value='3'>고액</option>
                                        </select>
                                    </td>
                                    <td><input type="text" style="text-align:center;" size="6" ng-model = 'account.bank_name' ></td>
                                    <td><input type="text" style="text-align:center;" ng-model = 'account.bank_account'></td>
                                    <td><input type="text" style="text-align:center;" size="12" ng-model = 'account.bank_owner'></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="text-center col-lg-12">                            
                            <button type = 'button' class="btn btn-default pull-right">취소하기</button>
                            <button type = 'submit' class="btn btn-default pull-right" style = 'margin-right: 5px;'>저장하기</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    
</div>