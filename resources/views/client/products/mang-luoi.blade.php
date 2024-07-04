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
                                        <a href="{{ route('mang-luoi') }}">{{$title}}</a>
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
                                        <div class="post-content">
                                            <article>
                                                <p><i></i></p>
                                                <h1 class="title-16">Mạng lưới Liên minh HTX Tỉnh/TP</h1>
                                                <div class="share-date" style="clear: both;">
                                                    <div class="meta-tp-5">
                                                        <div class="date-tp-4">
                                                            <i class="fa fa-calendar"></i>
                                                            20/12/2018
                                                            <img onclick="window.print();" class="pt-post_thumb" src="/client/imgs/print.png" style="width: 15px; display: inline-block; cursor: pointer; line-height: 100%;
                                                                text-align: center; top: -6px; right: -20px;">
                                                        </div>
                                                    </div>
                                                    <div class="share">
                                                        <!-- <div id="fb-root" class="fb_reset"></div> -->
                                                        <script>
                                                            (function(d, s, id) {
                                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                                if (d.getElementById(id)) return;
                                                                js = d.createElement(s);
                                                                js.id = id;
                                                                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
                                                                fjs.parentNode.insertBefore(js, fjs);
                                                            }(document, 'script', 'facebook-jssdk'));
                                                        </script>
                                                        <div class="fb-like" data-href="lich-su-phat-trien-a1.html" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false">
                                                        </div>
                                                        <div class="fb-share-button" data-href="lich-su-phat-trien-a1.html" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=lich-su-phat-trien-a1.html" class="fb-xfbml-parse-ignore">Chia sẻ
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-items">
                                                    <p></p>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p><strong>Tây Bắc</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Hòa Bình</a></li>
                                                                <li><a href="#" title="">Lai Châu</a></li>
                                                                <li><a href="#" title="">Điện Biên</a></li>
                                                                <li><a href="#" title="">Lào Cai</a></li>
                                                                <li><a href="#" title="">Yên Bái</a></li>
                                                                <li><a href="#" title="">Sơn La</a></li>
                                                                <li><a href="#" title="">Phú Thọ</a></li>
                                                            </ul>
                                                            <p><strong>Đông Bắc</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Bắc Kạn</a></li>
                                                                <li><a href="#" title="">Cao Bằng</a></li>
                                                                <li><a href="#" title="">Hà Giang</a></li>
                                                                <li><a href="#" title="">Lạng Sơn</a></li>
                                                                <li><a href="#" title="">Thái Nguyên</a></li>
                                                                <li><a href="#" title="">Tuyên Quang</a></li>
                                                            </ul>
                                                            <p><strong>Trung du Bắc Bộ</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Bắc Giang</a></li>
                                                                <li><a href="#" title="">Vĩnh Phúc</a></li>
                                                                <li><a href="#" title="">Hưng Yên</a></li>
                                                                <li><a href="#" title="">Hải Dương</a></li>
                                                                <li><a href="#" title="">Bắc Ninh</a></li>
                                                                <li><a href="#" title="">Quảng Ninh</a></li>
                                                            </ul>
                                                            <p><strong>Đồng bằng sông Hồng</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Hà Nam</a></li>
                                                                <li><a href="#" title="">Hà Nội</a></li>
                                                                <li><a href="#" title="">Hải Phòngf</a></li>
                                                                <li><a href="#" title="">Nam Định</a></li>
                                                                <li><a href="#" title="">Ninh Bình</a></li>
                                                                <li><a href="#" title="">Thái Bình</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p><strong>Bắc Trung Bộ</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Thanh Hóa</a></li>
                                                                <li><a href="#" title="">Nghệ An</a></li>
                                                                <li><a href="#" title="">Hà Tĩnh</a></li>
                                                                <li><a href="#" title="">Quảng Bình</a></li>
                                                                <li><a href="#" title="">Quảng Trị</a></li>
                                                                <li><a href="#" title="">Thừa Thiên Huế</a></li>
                                                            </ul>
                                                            <p></p>
                                                            <p><strong>Duyên hải miền Trung</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Đà Nẵng</a></li>
                                                                <li><a href="#" title="">Quảng Nam</a></li>
                                                                <li><a href="#" title="">Quảng Ngãi</a></li>
                                                                <li><a href="#" title="">Khánh Hòa</a></li>
                                                                <li><a href="#" title="">Phú Yên</a></li>
                                                                <li><a href="#" title="">Nam Định</a></li>
                                                                <li><a href="#" title="">Ninh Thuận</a></li>
                                                            </ul>
                                                            <p><strong>Tây Nguyên</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Kon Tum</a></li>
                                                                <li><a href="#" title="">Gia Lai</a></li>
                                                                <li><a href="#" title="">Đak Nông</a></li>
                                                                <li><a href="#" title="">Đak Lắc</a></li>
                                                                <li><a href="#" title="">Lâm Đồng</a></li>
                                                            </ul>
                                                            <p><strong>Đông Nam Bộ</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Tây Ninh</a></li>
                                                                <li><a href="#" title="">Đồng Nai</a></li>
                                                                <li><a href="#" title="">Bình Dương</a></li>
                                                                <li><a href="#" title="">Bình Phước</a></li>
                                                                <li><a href="#" title="">Bình Thuận</a></li>
                                                                <li><a href="#" title="">TP.Hồ Chí Minh</a></li>
                                                                <li><a href="#" title="">BR-Vũng Tàu</a></li>

                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p><strong>Tây Bắc sông Hậu</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Đồng Tháp</a></li>
                                                                <li><a href="#" title="">Bến Tre</a></li>
                                                                <li><a href="#" title="">Tiền Giang</a></li>
                                                                <li><a href="#" title="">Long An</a></li>
                                                                <li><a href="#" title="">Trà Vinh</a></li>
                                                                <li><a href="#" title="">Vĩnh Long</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <p><strong>Tây Nam Sông Hậu</strong></p>
                                                            <ul>
                                                                <li><a href="#" title="">Cần Thơ</a></li>
                                                                <li><a href="#" title="">An Giang</a></li>
                                                                <li><a href="#" title="">Bạc Liêu</a></li>
                                                                <li><a href="#" title="">Cà Mau</a></li>
                                                                <li><a href="#" title="">Hậu Giang</a></li>
                                                                <li><a href="#" title="">Kiên Giang</a></li>
                                                                <li><a href="#" title="">Sóc Trăng</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p></p>
                                                </div>
                                            </article>
                                            <hr class="border-hr">
                                            <div class="pst-box">
                                                <div class="pst-box-head">
                                                    <div class="title-blc-1">
                                                        <h4>Tin liên quan</h4>
                                                    </div>
                                                </div>
                                                <div class="tinlienquan">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('lich-su-phat-trien') }}">
                                                                <i class="fa fa-circle-o"></i>Lịch sử phát triển
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @include('client.slider1')
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