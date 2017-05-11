@extends('layouts.admin.app')
@section('content-header')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
<h1>
    角色
    <small>系统后台角色</small>
  </h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
    <li><a href="{{ route('roles.index') }}">角色</a></li>
    <li class="active">列表</li>
</ol>
@endsection
@section('content')
<div class="row">
<div class="col-xs-12">
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('roles.create') }}" class="btn btn-danger pull-right"> <i class="fa fa-fw fa-plus-square"></i> 添加角色</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    @include('admin.grid.showentries')
                </div>

                <div class="row">
                    @include('admin.role.table', ['roles' => $roles])
                </div>
            </div>
            <div class="row">
                @include('admin.grid.paginator', ['page' => $roles])
            </div>
            
        </div>
        <!-- /.box-body -->
    </div>

</div>
</div>
@endsection

@section('javascript')
<!-- DataTables -->
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
@endsection
