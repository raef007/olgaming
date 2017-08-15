
						<div style="padding:0px 10px 10px 10px;" class="body-wrap">
							 
						    <div class="h80"></div>
						
						    <div id="tab_templit" class="div-tab tabs swipe-tab tabs-color-top" style="width:600px;">
						        <div class="w-tab bg-light">
						            <ul class="nav nav-tabs" data-toggle="tab-hover">
						                <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
						                <li ng-repeat = 'site in master.sites track by $index'><a href = "" data-target="#tab_{{ $index + 1}}" data-toggle="tab">{{ site.site_name }}</a></li>
						            </ul>
						        </div>
						        <div class="tab-content">
						            <div class="tab-pane active" id="tab_0">
						                <div class="row">
						                    <div class="col-md-12">
						                        <div class="form-group">
						                            <input type="text" class="form-control1" id="input" placeholder="">
						                            <div class="h10"></div>
						                            <textarea name="txtarea1" id="txtarea1" class="form-control1" placeholder="안녕하세요. 운영진입니다." style="height:240px;"></textarea>
						                        </div>						
						                        <div class="text-center">
						                            <button class="btn-default btn-black btn btn2">저장</button>
						                            <button class="btn-default btn btn2">취소</button>
						                        </div>
						                    </div>
						                </div>
						            </div>
						            <div class="tab-pane" id="tab_{{ $index + 1 }}" ng-repeat = 'site in master.sites track by $index'>
						                <div class="row">
						                    <div class="col-md-12" ng-repeat = 'memo in site.memos track by $index'>
						                        <div >
						                            <input type="text" class="form-control1" ng-model="memo.subject">
						                            <input type="hidden" class="form-control1" ng-model="memo.jm_seq">
						                            <div class="h10"></div>
						                            <textarea name="txtarea1" id="txtarea1" class="form-control1"  ng-model="memo.text" style="height:240px;"></textarea>
						                        </div>
						                        <div class="text-center">
						                            <button class="btn-default btn-black btn btn2" ng-click='saveSubscribeForm(memo)'>저장</button>
						                            <button class="btn-default btn btn2" >취소</button>
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>	