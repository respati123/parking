@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')



    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>

                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable ui-sortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="nav-tabs-custom" style="cursor: move;">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right ui-sortable-handle">
                        <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
                        <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                        <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
                    </ul>
                    <div class="tab-content no-padding">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="513" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.633331px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,261H488" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">7,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,202H488" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">15,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,143H488" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="84.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4.000000000000028">22,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,84.00000000000003H488" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="25.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4.000000000000028">30,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,25.00000000000003H488" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="410.5735115431349" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4">2013</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="222.90400972053462" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4">2012</tspan></text><path style="fill-opacity: 1;" fill="#74a5c2" stroke="none" d="M66,219.05493333333334C77.79343863912516,219.56626666666668,101.38031591737544,222.62345,113.1737545565006,221.10026666666667C124.96719319562575,219.57708333333335,148.55407047387604,209.1355825136612,160.3475091130012,206.86946666666668C172.01275820170108,204.6279825136612,195.34325637910084,204.88215,207.00850546780072,203.06986666666666C218.6737545565006,201.25758333333332,242.00425273390036,194.9129178506375,253.66950182260024,192.3712C265.4629404617254,189.80155118397084,289.04981773997565,182.51721666666668,300.8432563791008,182.6244C312.63669501822596,182.73158333333333,336.2235722964763,204.18057122040074,348.01701093560143,193.22866666666667C359.6822600243013,182.39580455373408,383.0127582017011,101.94395359116025,394.67800729040096,95.48533333333336C406.21506682867556,89.09768692449359,429.28918590522477,135.1380230769231,440.8262454434994,141.8436C452.61968408262453,148.69818974358975,476.20656136087484,147.7554,488,149.726L488,261L66,261Z" fill-opacity="1"></path><path style="" fill="none" stroke="#3c8dbc" d="M66,219.05493333333334C77.79343863912516,219.56626666666668,101.38031591737544,222.62345,113.1737545565006,221.10026666666667C124.96719319562575,219.57708333333335,148.55407047387604,209.1355825136612,160.3475091130012,206.86946666666668C172.01275820170108,204.6279825136612,195.34325637910084,204.88215,207.00850546780072,203.06986666666666C218.6737545565006,201.25758333333332,242.00425273390036,194.9129178506375,253.66950182260024,192.3712C265.4629404617254,189.80155118397084,289.04981773997565,182.51721666666668,300.8432563791008,182.6244C312.63669501822596,182.73158333333333,336.2235722964763,204.18057122040074,348.01701093560143,193.22866666666667C359.6822600243013,182.39580455373408,383.0127582017011,101.94395359116025,394.67800729040096,95.48533333333336C406.21506682867556,89.09768692449359,429.28918590522477,135.1380230769231,440.8262454434994,141.8436C452.61968408262453,148.69818974358975,476.20656136087484,147.7554,488,149.726" stroke-width="3"></path><circle cx="66" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="113.1737545565006" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="160.3475091130012" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="207.00850546780072" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="253.66950182260024" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="300.8432563791008" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="348.01701093560143" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="394.67800729040096" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="440.8262454434994" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="488" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><path style="fill-opacity: 1;" fill="#eaf3f6" stroke="none" d="M66,240.02746666666667C77.79343863912516,239.8072,101.38031591737544,241.35496666666666,113.1737545565006,239.1464C124.96719319562575,236.93783333333334,148.55407047387604,223.33676429872497,160.3475091130012,222.35893333333334C172.01275820170108,221.39173096539162,195.34325637910084,233.23263333333333,207.00850546780072,231.36626666666666C218.6737545565006,229.4999,242.00425273390036,209.2890577413479,253.66950182260024,207.428C265.4629404617254,205.54649107468123,289.04981773997565,214.4391666666667,300.8432563791008,216.39600000000002C312.63669501822596,218.35283333333336,336.2235722964763,232.37947613843355,348.01701093560143,223.08266666666668C359.6822600243013,213.88690947176687,383.0127582017011,148.22682412523022,394.67800729040096,142.42573333333334C406.21506682867556,136.6883907918969,429.28918590522477,170.47037838827842,440.8262454434994,176.92893333333336C452.61968408262453,183.53101172161175,476.20656136087484,190.23343333333335,488,194.66826666666668L488,261L66,261Z" fill-opacity="1"></path><path style="" fill="none" stroke="#a0d0e0" d="M66,240.02746666666667C77.79343863912516,239.8072,101.38031591737544,241.35496666666666,113.1737545565006,239.1464C124.96719319562575,236.93783333333334,148.55407047387604,223.33676429872497,160.3475091130012,222.35893333333334C172.01275820170108,221.39173096539162,195.34325637910084,233.23263333333333,207.00850546780072,231.36626666666666C218.6737545565006,229.4999,242.00425273390036,209.2890577413479,253.66950182260024,207.428C265.4629404617254,205.54649107468123,289.04981773997565,214.4391666666667,300.8432563791008,216.39600000000002C312.63669501822596,218.35283333333336,336.2235722964763,232.37947613843355,348.01701093560143,223.08266666666668C359.6822600243013,213.88690947176687,383.0127582017011,148.22682412523022,394.67800729040096,142.42573333333334C406.21506682867556,136.6883907918969,429.28918590522477,170.47037838827842,440.8262454434994,176.92893333333336C452.61968408262453,183.53101172161175,476.20656136087484,190.23343333333335,488,194.66826666666668" stroke-width="3"></path><circle cx="66" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="113.1737545565006" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="160.3475091130012" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="207.00850546780072" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="253.66950182260024" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="300.8432563791008" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="348.01701093560143" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="394.67800729040096" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="440.8262454434994" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="488" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="display: none;"></div></div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="543" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><path style="opacity: 0;" fill="none" stroke="#3c8dbc" d="M271.5,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,359.7277551949771,180.44625304313007" stroke-width="2" opacity="0"></path><path style="" fill="#3c8dbc" stroke="#ffffff" d="M271.5,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,362.56364732624417,181.4248826052307L399.1151459070204,194.03833029452744A135,135,0,0,1,271.5,285Z" stroke-width="3"></path><path style="opacity: 1;" fill="none" stroke="#f56954" d="M359.7277551949771,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,187.78484627831412,108.73398312817662" stroke-width="2" opacity="1"></path><path style="" fill="#f56954" stroke="#ffffff" d="M362.56364732624417,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,185.09400205154566,107.40757544301087L145.92726941747117,88.10097469226493A140,140,0,0,1,403.8416327924656,195.6693795646951Z" stroke-width="3"></path><path style="opacity: 0;" fill="none" stroke="#00a65a" d="M187.78484627831412,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,271.47067846904883,243.333328727518" stroke-width="2" opacity="0"></path><path style="" fill="#00a65a" stroke="#ffffff" d="M185.09400205154566,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,271.46973599126824,246.3333285794739L271.4575884998742,284.9999933380171A135,135,0,0,1,150.4120097954186,90.31165416754118Z" stroke-width="3"></path><text style="text-anchor: middle; font-family: &quot;Arial&quot;; font-size: 15px; font-weight: 800;" x="271.5" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan dy="140">In-Store Sales</tspan></text><text style="text-anchor: middle; font-family: &quot;Arial&quot;; font-size: 14px;" x="271.5" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" transform="matrix(1,0,0,1,0,0)"><tspan dy="160">30</tspan></text></svg></div>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->

            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable ui-sortable">

                <!-- Calendar -->
                <div class="box box-solid bg-green-gradient">
                    <div class="box-header ui-sortable-handle" style="cursor: move;">
                        <i class="fa fa-calendar"></i>

                        <h3 class="box-title">Calendar</h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <!-- button with a dropdown -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i></button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Add new event</a></li>
                                    <li><a href="#">Clear events</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">View calendar</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"><div class="datepicker datepicker-inline"><div class="datepicker-days" style=""><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">July 2018</th><th class="next">»</th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td class="old day" data-date="1529798400000">24</td><td class="old day" data-date="1529884800000">25</td><td class="old day" data-date="1529971200000">26</td><td class="old day" data-date="1530057600000">27</td><td class="old day" data-date="1530144000000">28</td><td class="old day" data-date="1530230400000">29</td><td class="old day" data-date="1530316800000">30</td></tr><tr><td class="day" data-date="1530403200000">1</td><td class="day" data-date="1530489600000">2</td><td class="day" data-date="1530576000000">3</td><td class="day" data-date="1530662400000">4</td><td class="day" data-date="1530748800000">5</td><td class="day" data-date="1530835200000">6</td><td class="day" data-date="1530921600000">7</td></tr><tr><td class="day" data-date="1531008000000">8</td><td class="day" data-date="1531094400000">9</td><td class="day" data-date="1531180800000">10</td><td class="day" data-date="1531267200000">11</td><td class="day" data-date="1531353600000">12</td><td class="day" data-date="1531440000000">13</td><td class="day" data-date="1531526400000">14</td></tr><tr><td class="day" data-date="1531612800000">15</td><td class="day" data-date="1531699200000">16</td><td class="day" data-date="1531785600000">17</td><td class="day" data-date="1531872000000">18</td><td class="day" data-date="1531958400000">19</td><td class="day" data-date="1532044800000">20</td><td class="day" data-date="1532131200000">21</td></tr><tr><td class="day" data-date="1532217600000">22</td><td class="day" data-date="1532304000000">23</td><td class="day" data-date="1532390400000">24</td><td class="day" data-date="1532476800000">25</td><td class="day" data-date="1532563200000">26</td><td class="day" data-date="1532649600000">27</td><td class="day" data-date="1532736000000">28</td></tr><tr><td class="day" data-date="1532822400000">29</td><td class="day" data-date="1532908800000">30</td><td class="day" data-date="1532995200000">31</td><td class="new day" data-date="1533081600000">1</td><td class="new day" data-date="1533168000000">2</td><td class="new day" data-date="1533254400000">3</td><td class="new day" data-date="1533340800000">4</td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2018</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month focused">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2010-2019</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year focused">2018</span><span class="year">2019</span><span class="year new">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2090</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade focused">2010</span><span class="decade">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div><div class="datepicker-centuries" style="display: none;"><table class="table-condensed"><thead><tr><th colspan="7" class="datepicker-title" style="display: none;"></th></tr><tr><th class="prev">«</th><th colspan="5" class="datepicker-switch">2000-2900</th><th class="next">»</th></tr></thead><tbody><tr><td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today" style="display: none;">Today</th></tr><tr><th colspan="7" class="clear" style="display: none;">Clear</th></tr></tfoot></table></div></div></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer text-black">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Progress bars -->
                                <div class="clearfix">
                                    <span class="pull-left">Task #1</span>
                                    <small class="pull-right">90%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                </div>

                                <div class="clearfix">
                                    <span class="pull-left">Task #2</span>
                                    <small class="pull-right">70%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="clearfix">
                                    <span class="pull-left">Task #3</span>
                                    <small class="pull-right">60%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                </div>

                                <div class="clearfix">
                                    <span class="pull-left">Task #4</span>
                                    <small class="pull-right">40%</small>
                                </div>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->

            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->



@endsection