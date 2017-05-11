<div class="col-sm-12">
    @include('flash::message')
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>用户名</th>
                <th>邮箱</th>
                <th>注册时间</th>
                <th>角色</th>
                <th>编辑</th>
            </tr>
        </thead>
        <tbody>
            @if ($managers->isEmpty())
                <td colspan="5" style="text-align: center;">
                    <i class="fa fa-fw fa-arrow-down"></i>未查询到数据
                </td>
            @else
                    @foreach ($managers as $manager)
                    <tr>
                        <td>{{ $manager->id }}</td>
                        <td>{{ $manager->name }}</td>
                        <td>{{ $manager->email }}</td>
                        <td>{{ $manager->created_at->toDateTimeString() }}</td>
                        <td>{!! $manager->present()->displayRoles() !!}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">操作</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a data-toggle="modal" onclick="setRole({{ $manager->id }})" >设置角色</a>
                                    </li>
                                    <li><a href="{{ route('managers.destroy', $manager->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">删除</a></li>
                                    <form id="delete-form" action="{{ route('managers.destroy', $manager->id) }}" method="POST" style="display: none;">
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
                <th>用户名</th>
                <th>邮箱</th>
                <th>注册时间</th>
                <th>角色</th>
                <th>编辑</th>
            </tr>
        </tfoot>
    </table>    
</div>
@include('admin.modal.flash')
@include('admin.modal.role', ['roles' => $roles])