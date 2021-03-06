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
    <li class="active">添加</li>
</ol>
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal" action="{{ route('roles.store') }}" method="POST">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">添加角色</h3>
            </div>
        
            <div class="box-body">
                @include('flash::message')
                <div class="col-sm-7">
                    <!-- /.box-header -->
                        {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-sm-2 control-label">角色名</label>

                                <div class="col-sm-10">
                                    <input type="name" name="name" class="form-control" placeholder="角色名" id="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('display_name') ? 'has-error': '' }}">
                                <label for="display_name" class="col-sm-2 control-label">角色昵称</label>

                                <div class="col-sm-10">
                                    <input type="display_name" name="display_name" class="form-control" id="display_name" placeholder="角色昵称" value="{{ old('display_name') }}">
                                    @if ($errors->has('display_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('display_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                <label for="description" class="col-sm-2 control-label">角色描述</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" class="description" rows="3" placeholder="角色描述...">{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        <!-- /.box-body -->
                    <!-- /.box-body -->        
                </div>

                <div class="col-sm-5">
                    <!-- form start -->
                    @include('admin.role.dispatch', ['permissions' => $permissions])
                </div>
            </div>

            <div class="box-footer">
                <a href="{{ route('roles.index') }}" class="btn btn-default ">返 回 </a>
                <button type="submit" class="btn btn-primary pull-right">保 存</button>
            </div>
            <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>
@endsection
@include('admin.modal.flash')


