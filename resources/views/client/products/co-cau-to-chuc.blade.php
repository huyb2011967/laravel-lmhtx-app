<!doctype html>
<html lang="en">

@include('client.head')

<body>
    <div class="main-wrapper">
        <!-- header + nav -->
        @include('client.header')
        <!-- header + nav END -->

        <!-- body -->
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
                                        <a href="{{ route('co-cau-to-chuc') }}">{{$title}}</a>
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
                                                <h1 class="title-16">Cơ cấu tổ chức</h1>
                                                <div class="share-date" style="clear: both;">
                                                    <div class="meta-tp-5">
                                                        <div class="date-tp-4">
                                                            <i class="fa fa-calendar"></i>
                                                            20/12/2018
                                                            <img onclick="window.print();" class="pt-post_thumb" src="./assets/imgs/print.png" style="width: 15px; display: inline-block; cursor: pointer; line-height: 100%;
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
                                                    <ul style="list-style-type: square;">
                                                        <li>
                                                            <p><strong>Đại hội đại biểu toàn quốc</strong></p>
                                                            <p>Đại hội đại biểu toàn quốc là cơ quan lãnh đạo cao nhất của Liên minh Hợp tác xã Việt Nam, gồm đại hội thường kỳ và đại hội bất thường. Đại hội thường kỳ được tổ chức 05 năm một lần, do Ban Chấp hành Liên minh Hợp tác xã Việt Nam triệu tập. Đại hội bất thường được triệu tập khi có ít nhất 2/3 (hai phần ba) tổng số ủy viên Ban Chấp hành Liên minh Hợp tác xã Việt Nam đề nghị. Đại hội thường kỳ hoặc đại hội bất thường được tổ chức khi có trên 1/2 (một phần hai) số đại biểu chính thức có mặt.</p>
                                                            <p>Đại hội có nhiệm vụ thảo luận và thông qua Báo cáo tổng kết nhiệm kỳ; phương hướng, nhiệm vụ nhiệm kỳ tới; thông qua báo cáo tổng kết và phương hướng nhiệm vụ công tác nhiệm kỳ của Ủy ban kiểm tra; thảo luận và thông qua Điều lệ sửa đổi, bổ sung; thảo luận, góp ý kiến vào Báo cáo kiểm điểm của Ban Chấp hành Liên minh Hợp tác xã Việt Nam; bầu Ban Chấp hành và Ủy ban kiểm tra Liên minh Hợp tác xã Việt Nam; các nội dung khác (nếu có); thông qua nghị quyết Đại hội.</p>
                                                            <p>Nguyên tắc biểu quyết tại Đại hội: Đại hội có thể biểu quyết bằng hình thức giơ tay hoặc bỏ phiếu kín. Việc quy định hình thức biểu quyết do Đại hội quyết định. Các Nghị quyết của Đại hội được thông qua khi có trên 1/2 (một phần hai) tổng số đại biểu tham dự Đại hội đồng ý, trừ trường hợp quyết định tại Điều 26 Điều lệ Liên minh hợp tác xã Việt Nam.</p>
                                                            <p><strong>Ban Chấp hành Liên minh Hợp tác xã Việt Nam</strong></p>
                                                            <p>Ban Chấp hành Liên minh Hợp tác xã Việt Nam là cơ quan lãnh đạo của Liên minh Hợp tác xã Việt Nam giữa hai kỳ Đại hội, do Đại hội đại biểu toàn quốc bầu. Số lượng, cơ cấu, tiêu chuẩn Ủy viên Ban Chấp hành do Đại hội quyết định. Nhiệm kỳ của Ban Chấp hành cùng với nhiệm kỳ của Đại hội.</p>
                                                            <p><strong>Ban Thường vụ Liên minh Hợp tác xã Việt Nam</strong></p>
                                                            <p>Ban Thường vụ Liên minh Hợp tác xã Việt Nam là cơ quan lãnh đạo của Liên minh Hợp tác xã Việt Nam giữa hai kỳ họp Ban Chấp hành, do Ban Chấp hành bầu trong số các Ủy viên Ban Chấp hành; Ban Thường vụ gồm: Chủ tịch, các Phó Chủ tịch và các Ủy viên. Số lượng, cơ cấu, tiêu chuẩn Ủy viên Ban Thường vụ do Ban Chấp hành quyết định. Nhiệm kỳ của Ban Thường vụ cùng với nhiệm kỳ Đại hội.</p>
                                                            <p><strong>Thường trực Liên minh Hợp tác xã Việt Nam</strong></p>
                                                            <p>Thường trực Liên minh Hợp tác xã Việt Nam gồm Chủ tịch và các Phó Chủ tịch. Thường trực có nhiệm vụ và quyền hạn: điều hành, giải quyết công việc hàng ngày, thường xuyên của Liên minh Hợp tác xã Việt Nam; chuẩn bị các nội dung, chương trình, kế hoạch hoạt động của Ban Thường vụ; chủ trì, chủ động phối hợp các Ban, Bộ, Ngành, đoàn thể Trung ương và các địa phương để quán triệt, tổ chức thực hiện các chủ trương, nghị quyết, các chính sách có liên quan đến kinh tế tập thể, nòng cốt là hợp tác xã; hướng dẫn và kiểm tra hoạt động của Liên minh Hợp tác xã các cấp và tổ hợp tác, hợp tác xã, liên hiệp hợp tác xã; tổ chức, quản lý, điều hành hoạt động của bộ máy chuyên trách; phối hợp, kiểm tra, đôn đốc các dự án, chương trình trọng điểm, các thành viên liên kết các cấp.</p>
                                                        </li>
                                                    </ul>
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
                                                            <a href="./lichsuphattrien.html">
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