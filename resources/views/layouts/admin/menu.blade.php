<ul class="nav" id="side-menu">
    <li class="sidebar-search">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
        <!-- /input-group -->
    </li>
    <li>
        <a href="{{ url('/index') }}"><i class="fa fa-dashboard fa-fw"></i> 首页</a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-key fa-fw"></i> 权限模块
            <span class="fa arrow"></span>
        </a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ url('/usermain') }}">用户管理</a>
            </li>
            <li>
                <a href="{{ url('/rolemain') }}">角色管理</a>
            </li>
            <li>
                <a href="{{ url('/privmain') }}">权限管理</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
    <li>
        <a href="#">
            <i class="fa fa-user fa-fw"></i> 个人中心
            <span class="fa arrow"></span>
        </a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ url('/profilemain') }}">资料管理</a>
            </li>
            <li>
                <a href="{{ url('/pwdmain') }}">密码管理</a>
            </li>
             <li>
                <a href="{{ url('/logout') }}">退出登录</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
</ul>