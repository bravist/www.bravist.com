<div class="col-sm-12">
    @include('flash::message')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>角色名</th>
                <th>角色昵称</th>
                <th>角色描述</th>
                <th>编辑</th>
            </tr>
        </thead>
        <tbody>
            @if ($roles->isEmpty())
                <td colspan="5" style="text-align: center;">
                    <i class="fa fa-fw fa-arrow-down"></i>未查询到数据
                </td>
            @else
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->display_name }}</td>
                        <td>{{ $role->description }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">操作</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('roles.edit', $role->id) }}" >修改</a></li>

                                    <li><a href="{{ route('roles.destroy', $role->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">删除</a></li>
                                    <form id="delete-form" action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        {!! method_field('delete') !!}
                                    </form>

                                    
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>角色名</th>
                <th>角色昵称</th>
                <th>角色描述</th>
                <th>编辑</th>
            </tr>
        </tfoot>
    </table>    
</div>
@include('admin.modal.flash')