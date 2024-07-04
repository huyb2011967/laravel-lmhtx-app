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
                                        <a href="{{ route('lich-su-phat-trien') }}">{{$title}}</a>
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
                                                <h1 class="title-16">Lịch sử phát triển</h1>
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
                                                    <p>
                                                        Ngày 11 tháng 4 năm 1946, Chủ tịch Hồ Chí Minh viết thư­ gửi
                                                        điền chủ nông gia Việt Nam kêu gọi tham gia hợp tác xã nông
                                                        nghiệp. Sau lời kêu gọi của Ngư­ời, hàng loạt cơ sở kinh tế hợp
                                                        tác đ­ược thành lập và các hợp tác xã phát triển mạnh mẽ vào
                                                        những năm 50-60 của thế kỷ XX. Cùng với quá trình phát triển của
                                                        phong trào hợp tác xã ở Việt Nam, các cơ quan quản lý, tổ chức
                                                        đại diện và hỗ trợ cho các hợp tác xã cũng từng bước được thành
                                                        và phát triển. Năm 1955, Ban quản lý hợp tác xã mua bán Việt Nam
                                                        được thành lập. Đến năm 1961 thành lập Liên hiệp xã tiểu thủ
                                                        công nghiệp Việt Nam. Đây là hai tổ chức cấp quốc gia quản lý,
                                                        đại diện, hỗ trợ các hợp tác xã mua bán và tiểu thủ công nghiệp
                                                        trên quy mô cả nước.
                                                    </p>
                                                    <p>
                                                        Ngày 18/12/1991, Chủ tịch Hội đồng Bộ trưởng (nay là Thủ tướng
                                                        Chính phủ) ra Quyết định số 409/CT thành lập Hội đồng Trung ương
                                                        lâm thời các doanh nghiệp ngoài quốc doanh Việt Nam trên cơ sở
                                                        hợp nhất Liên hiệp Hợp tác xã tiểu thủ công nghiệp Trung ương và
                                                        Ban quản lý hợp tác xã mua bán Việt Nam. Ngày 30/10/1993, Đại
                                                        hội đại biểu toàn quốc các hợp tác xã Việt Nam lần thứ nhất được
                                                        tiến hành. Đại hội đã thông qua Điều lệ Hội đồng Trung ương Liên
                                                        minh các hợp tác xã Việt Nam là tổ chức hỗ trợ, đại diện và bảo
                                                        vệ quyền, lợi ích cho các hợp tác xã thuộc các lĩnh vực tiểu thủ
                                                        công nghiệp, giao thông vận tải, thương mại dịch vụ, xây dựng và
                                                        các ngành nghề phi nông nghiệp khác. Điều lệ của Hội đồng Liên
                                                        minh hợp hợp tác xã Việt Nam được Thủ tướng Chính phủ chuẩn y
                                                        tại Quyết định số 582-TTg/QĐ ngày 01/12/1993. Đến nay, Điều lệ
                                                        của Liên minh hợp tác xã Việt Nam được Thủ tướng Chính phủ chuẩn
                                                        y tại Quyết định số 105/QĐ-TTg ngày 24/01/2017.
                                                    </p>
                                                    <p>
                                                        Kể từ khi Luật Hợp tác xã đầu tiên được Quốc hội thông qua năm
                                                        1996, có hiệu lực thi hành từ 01/01/1997 đến Luật Hợp tác xã
                                                        2003 và Luật Hợp tác xã năm 2012 đã tạo hành lang pháp lý thuận
                                                        lợi cho khu vực hợp tác xã phát triển.
                                                    </p>
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
                                                            <a href="./chucnangnhiemvu.html">
                                                                <i class="fa fa-circle-o"></i>Chức năng nhiệm vụ
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