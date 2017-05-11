@extends('layouts.admin.app')
@section('content-header')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
<h1>
    后台管理员
    <small>系统后台用户</small>
  </h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> 控制台</a></li>
    <li><a href="{{ route('managers.index') }}">管理员</a></li>
    <li class="active">修改</li>
</ol>
@endsection
@section('content')

<div class="row">
<div class="col-xs-12">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">修改管理员</h3>
        </div>
        
        <!-- /.box-header -->
        <form class="form-horizontal" action="{{ route('managers.update', $manager->id) }}" method="POST">
            {{ csrf_field() }}
            {!! method_field('patch') !!}
            <input type="hidden" name="manager" value="{{ $manager->id }}">
            <div class="box-body">
                @include('flash::message')
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-2 control-label">权限名</label>

                    <div class="col-sm-10">
                        <input type="name" name="name" class="form-control" readonly placeholder="权限名" id="name" value="{{ $manager->name }}">
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('display_name') ? 'has-error': '' }}">
                    <label for="display_name" class="col-sm-2 control-label">权限昵称</label>

                    <div class="col-sm-10">
                        <input type="display_name" name="display_name" class="form-control" id="display_name" placeholder="权限昵称" value="{{ $manager->display_name }}">
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
                        <textarea class="form-control" name="description" class="description" rows="3" placeholder="权限描述...">{{ $manager->description }}</textarea>
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
                <a href="{{ route('managers.index') }}" class="btn btn-default ">返 回 </a>
                <button type="submit" class="btn btn-primary pull-right">保 存</button>
            </div>
            <!-- /.box-footer -->
        </form>
        <!-- /.box-body -->
    </div>

</div>
</div>

@endsection
@include('admin.modal.flash')