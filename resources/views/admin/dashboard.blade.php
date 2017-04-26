@extends('layouts.admin.app')
@section('content-header')
<h1>
    控制台
    <small>控制面板</small>
  </h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> 首页</a></li>
    <li class="active">控制台</li>
</ol>
@endsection
@section('content')
<!-- /.row -->
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <!-- AREA CHART -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Area Chart</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body chart-responsive">
                <div class="chart" id="revenue-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
</div>

@endsection

<!-- jQuery 2.2.3 -->
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('js/morris.min.js') }}"></script>
<script type="text/javascript">
    $(function() {
        "use strict";
        // AREA CHART
        var area = new Morris.Area({
            element: 'revenue-chart',
            resize: true,
            data: [{
                y: '2011 Q1',
                item1: 2666,
                item2: 2666
            }, {
                y: '2011 Q2',
                item1: 2778,
                item2: 2294
            }, {
                y: '2011 Q3',
                item1: 4912,
                item2: 1969
            }, {
                y: '2011 Q4',
                item1: 3767,
                item2: 3597
            }, {
                y: '2012 Q1',
                item1: 6810,
                item2: 1914
            }, {
                y: '2012 Q2',
                item1: 5670,
                item2: 4293
            }, {
                y: '2012 Q3',
                item1: 4820,
                item2: 3795
            }, {
                y: '2012 Q4',
                item1: 15073,
                item2: 5967
            }, {
                y: '2013 Q1',
                item1: 10687,
                item2: 4460
            }, {
                y: '2013 Q2',
                item1: 8432,
                item2: 5713
            }],
            xkey: 'y',
            ykeys: ['item1', 'item2'],
            labels: ['Item 1', 'Item 2'],
            lineColors: ['#a0d0e0', '#3c8dbc'],
            hideHover: 'auto'
        });
    })
</script>

