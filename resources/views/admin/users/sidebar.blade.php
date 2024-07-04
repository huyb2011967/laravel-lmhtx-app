<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('main')}}" class="brand-link">
        <img src="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LIÊN MINH HỢP TÁC XÃ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a class="d-block">Người dùng: {{Auth::user()->name_user}}</ơ>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('profile')}}" class="nav-link">
                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                        <i class="fa-solid fa-user"></i>
                        <p>
                            Thông tin cá nhân
                        </p>
                    </a>
                </li>
                @if(Auth::user()->id_role == 1)
                <li class="nav-item">
                    <a href="{{route('members.index')}}" class="nav-link">
                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                        <i class="fa-solid fa-users"></i>
                        <p>Thành viên</p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                        <i class="fa-solid fa-newspaper"></i>
                        <p>Bài viết<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if(Auth::user()->id_role == 1)
                        <li class="nav-item">
                            <a href="{{route('articles.index')}}" class="nav-link">
                                <!-- <i class="far fa-circle nav-icon"></i> -->
                                <i class="fa-solid fa-terminal"></i>
                                <p>Danh sách bài viết</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('article.review')}}" class="nav-link">
                                <!-- <i class="far fa-circle nav-icon"></i> -->
                                <i class="fa-solid fa-terminal"></i>
                                <p>Duyệt bài viết</p>
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{route('article.management')}}" class="nav-link">
                                <!-- <i class="far fa-circle nav-icon"></i> -->
                                <i class="fa-solid fa-terminal"></i>
                                <p>Quản lý bài viết</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('articles.add')}}" class="nav-link">
                                <!-- <i class="far fa-circle nav-icon"></i> -->
                                <i class="fa-solid fa-terminal"></i>
                                <p>Đăng bài viết</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>