<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group {{ $errors->has('permission') ? 'has-error' : '' }}">
                <label>设置权限</label>
                <select name="permission[]" class="form-control select2" multiple="multiple" data-placeholder="选择一个权限" style="width: 100%;">
                    @foreach ($permissions as $permission)
                        <option value="{{ $permission->id }}" @if ( isset($role->perms) && $role->perms->contains($permission)) selected @endif > {{ $permission->name }} - {{ $permission->display_name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('permission'))
                    <span class="help-block">
                        <strong>{{ $errors->first('permission') }}</strong>
                    </span>
                @endif
            </div>
            <!-- /.form-group -->  
        </div>
    </div>
</div>


@section('script')
<script src="{{ asset('js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $('select').select2();
    </script>
@endsection