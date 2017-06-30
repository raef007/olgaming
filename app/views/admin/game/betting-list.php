	<style>
    .cntr-green {
        color: black !important;
        background-color: lightgreen;
        padding-top: 10px;
        border-right: 1px solid #ddd;
        height: 100%;
    }
    </style>
        <div style="padding: 0px 10px 10px 10px;" class="body-wrap">
        <div class="h30"></div>
        <div id="tab_best_s" class="div-tab tabs swipe-tab tabs-color-top">
            <div class="w-tab bg-light">
                <ul class="nav nav-tabs" data-toggle="tab-hover">
                    <li class="active"><a href="#tab_0" data-toggle="tab">전체</a></li>
                    <li><a href="#tab_1" data-toggle="tab">ACE</a></li>
                    <li><a href="#tab_2" data-toggle="tab">TOP</a></li>
                </ul>
            </div>
            <div class="tab-pane active" id="tab_0">
                <div class="tab-content">
                    <div id="tab_per_s0" class="tabs swipe-tab tabs-color-top">
                                <ul class="nav nav-tabs" data-toggle="tab-hover">
                                    <li class="active"><a href="#tab_00" data-toggle="tab">전체</a></li>
                                    <li><a href="#tab_01" data-toggle="tab">오늘</a></li>
                                    <li><a href="#tab_02" data-toggle="tab">이번주</a></li>
                                    <li><a href="#tab_03" data-toggle="tab">지난주</a></li>
                                    <li><a href="#tab_04" data-toggle="tab">지난달</a></li>
                                
                                    <span class="tab-opt">
                                    <input type="text" name="fr_date" value="" id="fr_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                    <input type="text" name="to_date" value="" id="to_date" class="datepicker1" placeholder="8/12/2018" size="6" maxlength="10">
                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
                                    </span>
                                </ul>
                                    <span class="sp">                                    
                                    <label>예상 적중금</label>
                                    <select name="" id="" class="">
                                        <option>적중금</option>
                                    </select>
                                    <label>승무패</label>
                                    <select name="" id="" class="">
                                        <option>적중금</option>
                                    </select>
                                    <select name="" id="" class="">
                                        <option>아이디</option>
                                        <option>닉네임</option>
                                    </select>
                                    <input type="text" value="" size="6">
                                    <button type="submit" class="btn_submit btn-success btn-black btn">조회</button>
                                    </span>
                                <div class="h10"></div>
                            <div class="table-responsive">
                                <table class="table table-bordered" >
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>No. <i class="fa fa-sort"></i></th>
                                            <th>일시</th>
                                            <th>사이트 </th>
                                            <th>아이디 </th>
                                            <th>닉네임</th>
                                            <th>타입 </th>
                                            <th>종목</th>
                                            <th>게임수</th>
                                            <th> 베팅 내역 </th>
                                            <th>베팅액</th>
                                            <th>배당</th>
                                            <th>전체 배 당</th>
                                            <th>예상 적중금</th>
                                            <th>결과</th>
                                            <th>취소</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a class="plus collapsed" data-toggle="collapse" data-target='#d1' href = ''></a></td>
                                            <td>32</td>
                                            <td></td>
                                            <td>ACE</td>
                                            <td>test</td>
                                            <td> 닉네임 </td>
                                            <td>실시간</td>
                                            <td>농구</td>
                                            <td>3</td>
                                            <td class = 'td-no-height' >
                                                <div class = 'col-md-4 cntr-green'>
                                                    <span>1.85</span>
                                                </div>
                                                <div class = 'col-md-4 cntr-green'>
                                                    <span>1.33</span>
                                                </div>
                                                <div class = 'col-md-4 cntr-green'>
                                                    <span>11.4</span>
                                                </div>
                                            </td>
                                            <td>3,000원</td>
                                            <td>1.85 </td>
                                            <td>4.56</td>
                                            <td> 1,234,567원 </td>
                                            <td>적중</td>
                                            <td><button class="btn-default btn ">취소</button></td>
                                        </tr>
                                        <tr>
                                            <td><a class="plus collapsed" data-toggle="collapse" data-target='#d2' href = ''></a></td>
                                            <td>31</td>
                                            <td></td>
                                            <td>TOP</td>
                                            <td>idtest</td>
                                            <td> 테스트 </td>
                                            <td> 카지노 </td>
                                            <td>AG</td>
                                            <td>1</td>
                                            <td class="cntr-green" >
                                            룰렛
                                            </td>
                                            <td>2,312 원</td>
                                            <td> -</td>
                                            <td>-</td>
                                            <td> -</td>
                                            <td>적중</td>
                                            <td>취소처리</td>
                                        </tr>
                                        <tr>
                                            <td><a class="plus collapsed" data-toggle="collapse" data-target='#d3' href = ''></a></td>
                                            <td>30</td>
                                            <td></td>
                                            <td>ACE</td>
                                            <td class="cntr-red">SAMPLE</td>
                                            <td>  샘플  </td>
                                            <td>스포츠</td>
                                            <td>조합</td>
                                            <td>3</td>
                                            <td class="td-no-height">
                                                <div class = 'col-md-4 cntr-green'>
                                                    <span >1.85</span>
                                                </div>
                                                <div class = 'col-md-4 cntr-red'>
                                                    <span>1.33</span>
                                                </div>
                                                <div class = 'col-md-4 cntr-nrm'>
                                                    <span>11.4</span>
                                                </div>
                                            </td>
                                            <td>2,312원</td>
                                            <td> 1.85 </td>
                                            <td>20.45 </td>
                                            <td>12,312</td>
                                            <td>적중</td>
                                            <td><button class="btn-default btn">취소</button></td>
                                        </tr>
                                        <tr>
                                            <td><a class="plus collapsed" data-toggle="collapse" data-target='#d3' href = ''></a></td>
                                            <td>29</td>
                                            <td></td>
                                            <td>ACE</td>
                                            <td class="cntr-red">idididi</td>
                                            <td>오뎅오 </td>
                                            <td>스포츠 </td>
                                            <td>조합</td>
                                            <td>4</td>
                                            <td class="td-no-height">
                                                <div class = 'col-md-4 cntr-green'>
                                                    <span >1.85</span>
                                                </div>
                                                <div class = 'col-md-4 cntr-red'>
                                                    <span>1.33</span>
                                                </div>
                                                <div class = 'col-md-4 cntr-red'>
                                                    <span>1.23</span>
                                                </div>
                                            </td>
                                            <td>2,312원</td>
                                            <td> 1.85 </td>
                                            <td>20.45 </td>
                                            <td>12,312</td>
                                            <td>적중</td>
                                            <td><button class="btn-default btn">취소</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="position:absolute; padding:10px; z-index:100;top:223px;left:0;width:100%; padding-left: 208px;">
                                    <div class="table-responsive collapse" style="background:#fff;" id="d1">
                                        <table class="table table-bordered" style='margin-bottom:0px;'>
                                            <thead>
                                                <tr>
                                                    <th>경기 일시</th>
                                                    <th>게임 종류</th>
                                                    <th>종목</th>
                                                    <th>리그</th>
                                                    <th>경기</th>
                                                    <th>베팅 종류</th>
                                                    <th>배당률</th>
                                                    <th>회원결과</th>
                                                    <th>경기결과</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>실시간</td>
                                                    <td>농구</td>
                                                    <td>NBA</td>
                                                    <td> 보스턴 - 뉴욕 </td>
                                                    <td> 보스턴 토탈 오버/언더: 오버 (100.5) </td>
                                                    <td>1.85</td>
                                                    <td> 적중 </td>
                                                    <td>105:102</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>축구</td>
                                                    <td>EPL</td>
                                                    <td> 아스날 – 첼시  </td>
                                                    <td> 승무패: 첼시</td>
                                                    <td>1.33</td>
                                                    <td> 미적중</td>
                                                    <td>2:1</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>야구</td>
                                                    <td>KBO</td>
                                                    <td>SK – 두산</td>
                                                    <td> 홈팀 토탈골: 2.5 언더</td>
                                                    <td>11.4</td>
                                                    <td class="">진행중</td>
                                                    <td><button class="btn-default btn">취소</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div style="position:absolute; padding:10px; z-index:100;top:254px;left:0;width:100%; padding-left: 208px;">
                                    <div class="table-responsive collapse" style="background:#fff;" id="d2">
                                        <table class="table table-bordered" style='margin-bottom:0px;'>
                                            <thead>
                                                <tr>
                                                    <th>경기 일시</th>
                                                    <th>게임 종류</th>
                                                    <th>종목</th>
                                                    <th>리그</th>
                                                    <th>경기</th>
                                                    <th>베팅 종류</th>
                                                    <th>배당률</th>
                                                    <th>회원결과</th>
                                                    <th>경기결과</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>실시간</td>
                                                    <td>농구</td>
                                                    <td>NBA</td>
                                                    <td> 보스턴 - 뉴욕 </td>
                                                    <td> 보스턴 토탈 오버/언더: 오버 (100.5) </td>
                                                    <td>1.85</td>
                                                    <td> 적중 </td>
                                                    <td>105:102</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>축구</td>
                                                    <td>EPL</td>
                                                    <td> 아스날 – 첼시  </td>
                                                    <td> 승무패: 첼시</td>
                                                    <td>1.33</td>
                                                    <td> 미적중</td>
                                                    <td>2:1</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>야구</td>
                                                    <td>KBO</td>
                                                    <td>SK – 두산</td>
                                                    <td> 홈팀 토탈골: 2.5 언더</td>
                                                    <td>11.4</td>
                                                    <td class="">진행중</td>
                                                    <td><button class="btn-default btn">취소</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div style="position:absolute; padding:10px; z-index:100;top:291px;left:0;width:100%; padding-left: 208px;">
                                    <div class="table-responsive collapse" style="background:#fff;" id="d3">
                                        <table class="table table-bordered" style='margin-bottom:0px;'>
                                            <thead>
                                                <tr>
                                                    <th>경기 일시</th>
                                                    <th>게임 종류</th>
                                                    <th>종목</th>
                                                    <th>리그</th>
                                                    <th>경기</th>
                                                    <th>베팅 종류</th>
                                                    <th>배당률</th>
                                                    <th>회원결과</th>
                                                    <th>경기결과</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>실시간</td>
                                                    <td>농구</td>
                                                    <td>NBA</td>
                                                    <td> 보스턴 - 뉴욕 </td>
                                                    <td> 보스턴 토탈 오버/언더: 오버 (100.5) </td>
                                                    <td>1.85</td>
                                                    <td> 적중 </td>
                                                    <td>105:102</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>축구</td>
                                                    <td>EPL</td>
                                                    <td> 아스날 – 첼시  </td>
                                                    <td> 승무패: 첼시</td>
                                                    <td>1.33</td>
                                                    <td> 미적중</td>
                                                    <td>2:1</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>야구</td>
                                                    <td>KBO</td>
                                                    <td>SK – 두산</td>
                                                    <td> 홈팀 토탈골: 2.5 언더</td>
                                                    <td>11.4</td>
                                                    <td class="">진행중</td>
                                                    <td><button class="btn-default btn">취소</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div style="position:absolute; padding:10px; z-index:100;top:325px;left:0;width:100%; padding-left: 208px;">
                                    <div class="table-responsive collapse" style="background:#fff;" id="d4">
                                        <table class="table table-bordered" style='margin-bottom:0px;'>
                                            <thead>
                                                <tr>
                                                    <th>경기 일시</th>
                                                    <th>게임 종류</th>
                                                    <th>종목</th>
                                                    <th>리그</th>
                                                    <th>경기</th>
                                                    <th>베팅 종류</th>
                                                    <th>배당률</th>
                                                    <th>회원결과</th>
                                                    <th>경기결과</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>실시간</td>
                                                    <td>농구</td>
                                                    <td>NBA</td>
                                                    <td> 보스턴 - 뉴욕 </td>
                                                    <td> 보스턴 토탈 오버/언더: 오버 (100.5) </td>
                                                    <td>1.85</td>
                                                    <td> 적중 </td>
                                                    <td>105:102</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>축구</td>
                                                    <td>EPL</td>
                                                    <td> 아스날 – 첼시  </td>
                                                    <td> 승무패: 첼시</td>
                                                    <td>1.33</td>
                                                    <td> 미적중</td>
                                                    <td>2:1</td>
                                                </tr>
                                                <tr>
                                                    <td>YYYY-MM-DD HH:MM:SS</td>
                                                    <td>스포츠</td>
                                                    <td>야구</td>
                                                    <td>KBO</td>
                                                    <td>SK – 두산</td>
                                                    <td> 홈팀 토탈골: 2.5 언더</td>
                                                    <td>11.4</td>
                                                    <td class="">진행중</td>
                                                    <td><button class="btn-default btn">취소</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
    </div>