<div class="col-sm-12">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>权限名称</th>
                <th>显示名称</th>
                <th>权限描述</th>
                <th>编辑</th>
            </tr>
        </thead>
        <tbody>
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
                                <li><a href="#">修改</a></li>
                                <li><a href="#">删除</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>权限名称</th>
                <th>显示名称</th>
                <th>权限描述</th>
                <th>编辑</th>
            </tr>
        </tfoot>
    </table>    
</div>
