<header class="header-tp-4">
    <div class="main-header">
        <div class="mh-top">
            <a href="#">
                <img src="/client/imgs/bn-top.jpg" alt class="img-fluid">
            </a>
        </div>

        <div class="mh-bottom">
            <div class="container container-fluid">
                <div class="main-nav-wrap">
                    <!-- nav -->
                    <nav class="main-nav navbar navbar-expand-lg">
                        <div class="container container-fluid">
                            <a class="navbar-brand text-white me-auto" href="{{ route('home') }}">
                                <i class="fa fa-home" style="font-size: 35px; margin-right: 20px;"></i>
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <!-- Gioi thieu -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white fs-14 fw-600 smg-l-r text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Giới thiệu
                                        </a>
                                        <ul class="dropdown-menu bg-cus">
                                            <li><a class="dropdown-item cl-fw-5" href="{{ route('lich-su-phat-trien') }}">Lịch sử phát triển</a></li>
                                            <li><a class="dropdown-item cl-fw-5" href="{{ route('chuc-nang-nhiem-vu') }}">Chức năng nhiệm vụ</a></li>
                                            <li><a class="dropdown-item cl-fw-5" href="{{ route('lanh-dao-vca') }}">Lãnh đạo VCA</a></li>
                                            <li><a class="dropdown-item cl-fw-5" href="{{ route('co-cau-to-chuc') }}">Cơ cấu tổ chức</a></li>
                                            <li><a class="dropdown-item cl-fw-5" href="{{ route('mang-luoi') }}">Mạng lưới Liên minh HTX Tỉnh/TP</a></li>
                                            <li><a class="dropdown-item cl-fw-5" href="{{ route('bao-cao-thuong-nien') }}">Báo cáo thường niên</a></li>
                                        </ul>
                                    </li>

                                    @foreach ($categoryGroups as $categoryGroup)
                                    <li class="nav-item dropdown" style="margin-right: 20px;">
                                        <a class="nav-link dropdown-toggle text-white fs-14 fw-600 smg-l-r text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{$categoryGroup->name_cg}}
                                        </a>
                                        <ul class="dropdown-menu bg-cus">
                                            @foreach ($categoryGroup->category as $category)
                                            <li>
                                                <a class="dropdown-item cl-fw-5" href="{{ route('category.articles', $category->id_category) }}">{{$category->name_category}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach

                                </ul>
                                <!-- search -->
                                <form action="{{ route('search') }}" method="post" class="d-flex text-white" role="search">
                                    @csrf
                                    <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success border-white text-white" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>