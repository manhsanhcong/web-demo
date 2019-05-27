<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/admin/dist/img/user.png"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Bài viết</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url("/post") }}"><i class="fa fa-circle-o"></i>Tất cả bài viết</a></li>
                    <li><a href="{{ url("/post/create")}}"><i class=" fa fa-circle-o"></i>Viết bài mới</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Chuyên mục</a></li>
                </ul>
            </li>
            <li>
                <a href="http://127.0.0.1:8000/ckfinder/ckfinder.html?type=Images&CKEditor=content&CKEditorFuncNum=1&langCode=en">
                    <i class="fa fa-camera"></i> <span>Thư viện</span>
                    <span class="pull-right-container">
          </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-building"></i> <span>Thể loại</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{(route('categories.list'))}}"><i class="fa fa-circle-o"></i>Danh sách thể loại</a>
                    </li>
                    <li><a href="{{(route('categories.create'))}}"><i class="fa fa-circle-o"></i>Thêm mới thể loại</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Thành viên</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{(route('users.list'))}}"><i class="fa fa-circle-o"></i>Tất cả người dùng</a></li>
                    <li><a href="{{ route('register') }}"><i class="fa fa-circle-o"></i>Thêm mới thành viên</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Cài đặt</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/changePassword') }}"><i class="fa fa-circle-o"></i>Thay đổi mật khẩu</a></li>
                    <li><a href="{{ url('/changeProfile')}}"><i class="fa fa-circle-o"></i>Thay đổi thông tin</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Điều khoản & Chính sách</span>
                    <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Điều khoản</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Chinh sách</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
            <small class="label pull-right bg-red">3</small>
            <small class="label pull-right bg-blue">17</small>
          </span>
                </a>
            </li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
