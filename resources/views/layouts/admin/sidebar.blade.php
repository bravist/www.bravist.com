<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="@if ($manager) {{ $manager->avatar }} @endif" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>@if ($manager) {{ $manager->name }} @endif</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
      </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> 
                    <span>用户，角色，权限</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('managers.index') }}"><i class="fa fa-user"></i> 用户</a></li>
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-user-secret"></i> 角色</a></li>
                    <li><a href="{{ route('permissions.index') }}"><i class="fa fa-fw fa-key"></i> 权限</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>