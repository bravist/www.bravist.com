@extends('layouts.admin.app')
@section('content-header')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.css') }}">
<h1>
    角色与权限
    <small>权限管理</small>
  </h1>
<ol class="breadcrumb">
    <li><a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i> 角色与权限</a></li>
    <li class="active">权限管理</li>
</ol>
@endsection
@section('content')
<div class="row">
<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr><tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                    </tr>
                    <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 5.5
                        </td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
            </table>
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
<!-- SlimScroll -->
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>

<script type="text/javascript">
    $(function () {
        $("#example1").DataTable();
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
        });
  });
</script>
@endsection
