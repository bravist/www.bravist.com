<!-- Modal -->
<form action="" id="formControl" method="POST">
{{ csrf_field() }}
{!! method_field('patch') !!}
<div class="modal fade" id="set-role" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">设置角色</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <select name="roles[]" class="form-control select2" multiple="multiple" data-placeholder="选择一个角色" style="width: 100%;">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" > {{ $role->name }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">保 存</button>
            </div>
        </div>
    </div>
</div>
</form>
@section('script')
<script src="{{ asset('js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $('select').select2();
        function setRole(id) 
        {
            var action = "{{ url("/admin/managers") }}" + '/' + id;
            $("#formControl").attr('action', action);
            $('#set-role').modal({
                keyboard: true
            });
        }
    </script>
@endsection

