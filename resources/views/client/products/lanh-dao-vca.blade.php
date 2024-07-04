<!doctype html>
<html lang="en">

@include('client.head')

<body>
    <div class="main-wrapper">
        <!-- header + nav -->
        @include('client.header')
        <!-- header + nav END -->

        <!-- body + footer -->
        <div class="inner-wrapper">
            <div class="main">
                <div class="main-content">
                    <!-- page head tile -->
                    <div class="page-head-tile">
                        <div class="container">
                            <div class="breadcrumbs-block">
                                <ul class="breadcrumbs">
                                    <li class="bc-item">
                                        <a href="{{ route('home') }}">Trang chủ</a>
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="bc-item">
                                        <a href="{{ route('lanh-dao-vca') }}">{{$title}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- page head tile END -->
                    <div class="section" style="position: relative;">
                        <div class="row">
                            <div class="content">
                                <div class="pst-block">
                                    <div class="pst-block-main">
                                        <div class="posts">
                                            <article class="post post-tp-26">
                                                <div class="date-tp-3">01<span>03</span></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="/client/imgs/timthumb-ldvca-1.jpg" alt="" title="" class="adaptive">
                                                    </a>
                                                </figure>
                                                <!-- <p class="sub-title_vca"><i></i></p> -->
                                                <h3 class="title-5">
                                                    <a href="#" alt="" title="">Tiếp tục đổi mới, phát triển và nâng cao hiệu quả kinh tế tập thể trong giai đoạn mới</a>
                                                </h3>
                                                <p class="p">Chiều 23/2, Đoàn công tác của Đảng đoàn Liên minh Hợp tác xã (LMHTX) Việt Nam do đồng chí Cao Xuân Thu Vân, Bí thư Đảng đoàn, Chủ...</p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>Ngày 01/03/2024</span></div>
                                                </div>
                                            </article>
                                            <article class="post post-tp-26">
                                                <div class="date-tp-3">27<span>12</span></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="/client/imgs/timthumb-ldvca-2.png" alt="" title="" class="adaptive">
                                                    </a>
                                                </figure>
                                                <!-- <p class="sub-title_vca"><i></i></p> -->
                                                <h3 class="title-5">
                                                    <a href="#" alt="" title="">Lãnh đạo VCA</a>
                                                </h3>
                                                <p class="p"></p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>Ngày 27/12/2018</span></div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- side bar -->
                            @include('client.sidebar')
                            <!-- side bar END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
    </div>

    @include('client.btnBackTop')

    @include('client.footer')

    @include('client.script')

</body>

</html>