@extends('layouts.admin.app')
@section('content-header')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
<h1>
    角色与权限
    <small>角色管理</small>
  </h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
    <li><a href="{{ route('roles.index') }}">角色与权限</a></li>
    <li class="active">权限管理</li>
</ol>
@endsection
@section('content')

<div class="row">
<div class="col-xs-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">修改权限</h3>
        </div>
        <!-- /.box-header -->
        <form class="form-horizontal" action="{{ route('roles.update', $role->id) }}" method="POST">
            {{ csrf_field() }}
            {!! method_field('patch') !!}
            <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-2 control-label">权限名称</label>

                    <div class="col-sm-10">
                        <input type="name" name="name" class="form-control" id="name" value="{{ $role->name }}">
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('display_name') ? 'has-error': '' }}">
                    <label for="display_name" class="col-sm-2 control-label">权限显示名称</label>

                    <div class="col-sm-10">
                        <input type="display_name" name="display_name" class="form-control" id="display_name" placeholder="display_name" value="{{ $role->display_name }}">
                        @if ($errors->has('display_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('display_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label for="description" class="col-sm-2 control-label">权限描述</label>

                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" class="description" rows="3" placeholder="权限描述...">{{ $role->description }}</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-center">保 存</button>
            </div>
            <!-- /.box-footer -->
        </form>
        <!-- /.box-body -->
    </div>

</div>
</div>

@endsection
