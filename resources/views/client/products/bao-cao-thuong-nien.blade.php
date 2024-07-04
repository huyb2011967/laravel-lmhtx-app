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
                                        <a href="./index.html">Trang chủ</a>
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="bc-item">
                                        <a href="./bcthuongnien.html">Báo cáo thường niên</a>
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
                                                <div class="date-tp-3">05<span>11</span></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="/client/imgs/timthumb-bctn-2020.jpg" alt="" title="" class="adaptive">
                                                    </a>
                                                </figure>
                                                <!-- <p class="sub-title_vca"><i></i></p> -->
                                                <h3 class="title-5">
                                                    <a href="#" alt="" title="">Báo cáo thường niên Liên minh HTX Việt Nam 2020</a>
                                                </h3>
                                                <p class="p">Báo cáo thường niên Liên minh HTX Việt Nam 2020</p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>Ngày 05/11/2024</span></div>
                                                </div>
                                            </article>
                                            <article class="post post-tp-26">
                                                <div class="date-tp-3">30<span>07</span></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="/client/imgs/timthumb-bctn-2019.png" alt="" title="" class="adaptive">
                                                    </a>
                                                </figure>
                                                <!-- <p class="sub-title_vca"><i></i></p> -->
                                                <h3 class="title-5">
                                                    <a href="#" alt="" title="">Báo cáo thường niên Liên minh HTX Việt Nam 2019</a>
                                                </h3>
                                                <p class="p">Báo cáo thường niên Liên minh HTX Việt Nam 2019</p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>Ngày 30/07/2020</span></div>
                                                </div>
                                            </article>
                                            <article class="post post-tp-26">
                                                <div class="date-tp-3">12<span>04</span></div>
                                                <figure>
                                                    <a href="#">
                                                        <img src="/client/imgs/timthumb-bctn-2018.jpg" alt="" title="" class="adaptive">
                                                    </a>
                                                </figure>
                                                <!-- <p class="sub-title_vca"><i></i></p> -->
                                                <h3 class="title-5">
                                                    <a href="#" alt="" title="">Báo cáo thường niên Liên minh HTX Việt Nam 2018</a>
                                                </h3>
                                                <p class="p">Báo cáo thường niên Liên minh HTX Việt Nam 2018</p>
                                                <div class="meta-tp-2">
                                                    <div class="date"><span>Ngày 12/04/2019</span></div>
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