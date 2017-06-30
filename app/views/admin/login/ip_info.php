						<div style="padding:0px 10px 10px 10px;" class="body-wrap">

				           <!--  <div class="location-info">
				                <div class="location-info-content">
				                    로그인 관리
				                    <span class="location-info-sp">></span>
				                    IP 블록 정보
				                </div>
				            </div> -->
				
				            <div class="h80"></div>
				
				            <div id="tab_ip_block_info" class="div-tab tabs swipe-tab tabs-color-top">
				                <div class="w-tab bg-light">
				                    <ul class="nav nav-tabs" data-toggle="tab-hover">
				                        <li class="active"><a href = "" data-target="#tab_0" data-toggle="tab">전체</a></li>
				                        <li><a href = "" data-target="#tab_1" data-toggle="tab">ACE</a></li>
				                        <li><a href = "" data-target="#tab_2" data-toggle="tab">TOP</a></li>
				                    </ul>
				                </div>
				                
				                <div class="tab-content">
				                    <div class="tab-pane active" id="tab_0">
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <tbody class = 'ip-input'>
				                                    <tr>
				                                        <td class="bg">IP</td>
				                                        <td style="text-align:left !important;">
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">~
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">
				                                        마지막 칸은 PC 등 연결 된 IP 입력시에만 사용하세요
				                                        </td>
				                                    </tr>
				                                    <tr>
				                                        <td class="bg">사유</td>
				                                        <td style="text-align:left !important;"><input type="text" name="" value="" id="" class="" size="50%" placeholder="사유를 입력하세요">
				                                        <button class="btn-success btn-black btn">등록</button></td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				
				                        <form name="" id="" class="" method="get">
				                            <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                            <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                            
				                            <span class="sp"></span>
				
				                            <select name="selector1" id="selector1" class="">
				                                <option>IP</option>
				                                <option>사유</option>
				                            </select>
				                            <input type="text" value="" size="6">
				                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
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
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				
				                        <div class="text-center relative">
				                            <nav>
				                                <ul class="pagination pagination-sm">
				                                    <li><a href="#" aria-label="First">처음</a></li>
				                                    <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                    <li><a href="#">2</a></li>
				                                    <li><a href="#">3</a></li>
				                                    <li><a href="#">4</a></li>
				                                    <li><a href="#">5</a></li>
				                                    <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                    <li><a href="#" aria-label="Last">마지막</a></li>
				                                </ul>
				                            </nav>
				
				                            <div class="page-select-opt1">
				                                한 페이지에
				                                <select name="selector1" id="selector1" class="">
				                                    <option>전체</option>
				                                    <option>10</option>
				                                    <option>25</option>
				                                    <option>50</option>
				                                    <option>100</option>
				                                </select>
				                                항목 보기
				                            </div>
				                        </div>
				                    </div>
				
				                    <div class="tab-pane" id="tab_1">
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <tbody class = 'ip-input'>
				                                    <tr>
				                                        <td class="bg">IP</td>
				                                        <td style="text-align:left !important;">
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">~
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">
				                                        마지막 칸은 PC 등 연결 된 IP 입력시에만 사용하세요
				                                        </td>
				                                    </tr>
				                                    <tr>
				                                        <td class="bg">사유</td>
				                                        <td style="text-align:left !important;"><input type="text" size="50%" name="" value="" id="" class="" placeholder="사유를 입력하세요">
				                                        <button class="btn-success btn-black btn">등록</button></td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				
				                        <form name="" id="" class="" method="get">
				                            <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                            <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                            
				                            <span class="sp"></span>
				
				                            <select name="selector1" id="selector1" class="">
				                                <option>IP</option>
				                                <option>사유</option>
				                            </select>
				                            <input type="text" value="" size="6">
				                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
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
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				
				                        <div class="text-center relative">
				                            <nav>
				                                <ul class="pagination pagination-sm">
				                                    <li><a href="#" aria-label="First">처음</a></li>
				                                    <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                    <li><a href="#">2</a></li>
				                                    <li><a href="#">3</a></li>
				                                    <li><a href="#">4</a></li>
				                                    <li><a href="#">5</a></li>
				                                    <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                    <li><a href="#" aria-label="Last">마지막</a></li>
				                                </ul>
				                            </nav>
				
				                            <div class="page-select-opt1">
				                                한 페이지에
				                                <select name="selector1" id="selector1" class="">
				                                    <option>전체</option>
				                                    <option>10</option>
				                                    <option>25</option>
				                                    <option>50</option>
				                                    <option>100</option>
				                                </select>
				                                항목 보기
				                            </div>
				                        </div>				
				                    </div>
				
				                    <div class="tab-pane" id="tab_2">
				                        <div class="table-responsive">
				                            <table class="table table-bordered">
				                                <tbody class = 'ip-input'>
				                                    <tr>
				                                        <td class="bg">IP</td>
				                                        <td style="text-align:left !important;">
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">.
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">~
				                                        <input type="text" style="text-align:right" name="" value="" id="" class="" placeholder="" size="6" maxlength="3">
				                                        마지막 칸은 PC 등 연결 된 IP 입력시에만 사용하세요
				                                        </td>
				                                    </tr>
				                                    <tr>
				                                        <td class="bg">사유</td>
				                                        <td style="text-align:left !important;"><input type="text" name="" size="50%" value="" id="" class="" placeholder="사유를 입력하세요">
				                                        <button class="btn-success btn-black btn">등록</button></td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				
				                        <form name="" id="" class="" method="get">
				                            <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                            <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
				                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
				                            
				                            <span class="sp"></span>
				
				                            <select name="selector1" id="selector1" class="">
				                                <option>IP</option>
				                                <option>사유</option>
				                            </select>
				                            <input type="text" value="" size="6">
				                            <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
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
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                    <tr>
				                                        <td>35</td>
				                                        <td>ACE</td>
				                                        <td>123.123.123.123</td>
				                                        <!-- <td>★kosobojs(쫑국이) 캐나다 아이피차단★</td> -->
				                                        <td>
				                                            <select name="by_reason" id="inputBy_reason" class=" col-md-8 by_reason" style="float:none;" required="required">
				                                                <option value="1">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="2">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                                <option value="3">★kosobojs(쫑국이) 캐나다 아이피차단★</option>
				                                            </select>
				                                        </td>
				                                        <td>YYYY-MM-DD HH:MM:SS</td>
				                                        <td><button class="btn-default btn">해제</button></td>
				                                    </tr>
				                                </tbody>
				                            </table>
				                        </div>
				
				                        <div class="text-center relative">
				                            <nav>
				                                <ul class="pagination pagination-sm">
				                                    <li><a href="#" aria-label="First">처음</a></li>
				                                    <li class="disabled"><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
				                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				                                    <li><a href="#">2</a></li>
				                                    <li><a href="#">3</a></li>
				                                    <li><a href="#">4</a></li>
				                                    <li><a href="#">5</a></li>
				                                    <li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
				                                    <li><a href="#" aria-label="Last">마지막</a></li>
				                                </ul>
				                            </nav>
				
				                            <div class="page-select-opt1">
				                                한 페이지에
				                                <select name="selector1" id="selector1" class="">
				                                    <option>전체</option>
				                                    <option>10</option>
				                                    <option>25</option>
				                                    <option>50</option>
				                                    <option>100</option>
				                                </select>
				                                항목 보기
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>