<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ $manager->avatar }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ $manager->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{ $manager->avatar }}" class="img-circle" alt="User Image">

                        <p>
                            {{ $manager->email }}
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="" class="btn btn-default btn-flat">个人信息</a>
                        </div>
                        
                        <div class="pull-right">
                        <a href="{{ route('logout.admin') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat" > 登 出</a>
                        <form id="logout-form" action="{{ route('logout.admin') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>
</nav>
