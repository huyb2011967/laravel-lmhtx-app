<!doctype html>
<html lang="en">

@include('client.head')

<style>
    .adaptive-v2 {
        height: 85px;
    }
</style>

<body>
    <div class="main-wrapper">
        <!-- header + nav -->
        @include('client.header')

        <!-- body -->
        <div class="inner-wrapper">
            <div class="main">
                <div class="main-content">
                    <!-- trending line -->
                    <div class="trending-posts-line">
                        <div class="container">
                            <div class="trending-line">
                                <div class="trending-now"><strong>Sự kiện</strong></div>
                                <div class="highlight_news">
                                    <marquee scrolldelay="150" onmouseover="this.stop();" onmouseout="this.start();">
                                        <ul class="list-unstyled">
                                            @foreach($articles as $article)
                                            <li>
                                                <a href="{{route('category.show', $article->id_article)}}">{{$article->title_article}}</a>
                                            </li> .
                                            @endforeach
                                        </ul>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- section 1 -->
                    <div class="section container mg-bottom">
                        <div class="row">
                            <div class="col-half-4-5 slider-container-s-1">
                                <div class="slider-s-1">
                                    @foreach($articles->take(10) as $article)
                                    <div class="slider-item-s-1">
                                        <div class="card-s-1-left">
                                            <img src="{{ asset('storage/images/' . $article->image_article) }}" class="card-img-top adaptive" alt="Hội nghị Ban Thường vụ Liên minh Hợp tác xã Việt Nam lần thứ 16, nhiệm kỳ 2020-2025" title="Hội nghị Ban Thường vụ Liên minh Hợp tác xã Việt Nam lần thứ 16, nhiệm kỳ 2020-2025">
                                            <div class="card-body">
                                                <h6 class="card-subtitle mb-2 text-muted">{{$article->subtitle_article}}</h6>
                                                <h5 class="card-title">{{$article->title_article}}</h5>
                                                <div class="card-text truncate">{!!$article->content_article!!}</div>
                                                <p class="card-text"><small class="text-muted">Ngày {{$article->date_article = DATE_FORMAT(now(), 'd/m/Y')}}</small></p>
                                                <div class="real-more-r">
                                                    <a href="{{route('category.show', $article->id_article)}}">Đọc thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="slider-controls-s-1">
                                    <button id="prevBtn">&lt;</button>
                                    <button id="nextBtn">&gt;</button>
                                </div>
                            </div>
                            <div class="col-half-2-5">
                                <div class="card-s-1">
                                    <img src="/client/imgs/cds.jpg" class="card-img-top" alt="Card Image 1">
                                    <p class="truncate card-text p-l fs-12">Nâng cao năng lực chuyển đổi số cho HTX và thành viên tại Quảng Nam.
                                    </p>
                                </div>
                                @foreach($articles->take(4) as $article)
                                <div class="card-s-1">
                                    <div class="card-body">
                                        <p class="truncate card-text p-l fs-12">{{$article->title_article}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="col-half-3 mt-3 mt-md-0">
                                <div class="card-s-1">
                                    <img src="/client/imgs/daihoi51.jpg" class="card-img-top" alt="Banner Image">
                                </div>
                                <div class="mt-3 custom-buttons">
                                    <div class="row">
                                        <div class="col-6 mb-2">
                                            <a href="#" class="btn">
                                                <i class="fas fa-comments"></i>
                                                <h4 style="font-size: 12px;">HỢP TÁC XÃ CẦN BIẾT</h4>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <a href="#" class="btn">
                                                <i class="fas fa-laptop"></i>
                                                <h4 style="font-size: 12px;">NGHIÊN CỨU TRAO ĐỔI</h4>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <a href="#" class="btn">
                                                <i class="fas fa-envelope"></i>
                                                <h4 style="font-size: 12px;">THƯ GÓP Ý</h4>
                                            </a>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <a href="#" class="btn">
                                                <i class="fas fa-calendar-alt"></i>
                                                <h4 style="font-size: 12px;">ĐỀ ÁN DỰ ÁN</h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- section -->
                    <div class="section">
                        <a href="#">
                            <img src="/client/imgs/thang-htxz.jpg" alt class="adaptive">
                        </a>
                    </div>

                    <!-- slider -->
                    <div class="slider-container-1 container">
                        <h2 class="text-center text-white py-4" style="margin-top: 20px;">CUNG ỨNG DỊCH VỤ</h2>
                        <div class="slider-1">
                            <div class="slider-item-1 col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="/client/imgs/timthumb-xuctienthuongmai.jpg" alt="Xúc tiến thương mại">
                                    <div class="card-body text-center">
                                        <h3 class="card-title"><a href="#">Xúc tiến thương mại</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item-1 col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="/client/imgs/timthumb-khoahoccongnghe.jpg" alt="Khoa học công nghệ">
                                    <div class="card-body text-center">
                                        <h3 class="card-title"><a href="#">Khoa học công nghệ</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item-1 col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="/client/imgs/timthumb-hotrovon.jpg" alt="Hỗ trợ vốn phát triển Hợp tác xã">
                                    <div class="card-body text-center">
                                        <h3 class="card-title"><a href="#">Hỗ trợ vốn phát triển Hợp tác xã</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item-1 col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="/client/imgs/timthumb-daotaoboiduong.jpg" alt="Đào tạo bồi dưỡng">
                                    <div class="card-body text-center">
                                        <h3 class="card-title"><a href="#">Đào tạo bồi dưỡng</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item-1 col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card">
                                    <img class="card-img-top" src="/client/imgs/timthumb (1).jpg" alt="Hợp tác quốc tế">
                                    <div class="card-body text-center">
                                        <h3 class="card-title"><a href="#">Hợp tác quốc tế</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-controls-1">
                            <button id="prevBtn-1"> <i class="fa-solid fa-angle-left"></i> </button>
                            <button id="nextBtn-1"> <i class="fa-solid fa-angle-right"></i> </button>
                        </div>
                    </div>
                    <!-- slider-1 END -->

                    <!-- section 2 -->
                    <div class="section" style="margin-top: 20px;">
                        <div class="row">
                            <div class="content col-sm-8">
                                <!-- box - tin vca -->
                                <div id="tinvca" class="popular-pst">
                                    <div class="pst-block">
                                        <div class="pst-block-head">
                                            <h3 class="title-4 tieude">
                                                <a href="{{ route('category.articles', 1) }}" alt="Tin VCA" title="Tin VCA"><span>Tin VCA</span></a>
                                            </h3>
                                            <div class="filters">
                                                <div class="filters-more">
                                                    <div class="filters-btn">
                                                        <span><a href="{{ route('category.articles', 1) }}" style="color: #DB8E0A;"><i class="fa-sharp fa-solid fa-up-right-from-square"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pst-block-main">
                                            <div class="col-row">
                                                <div class="col-half">
                                                    @foreach($articles->where('category.id_category', 1)->take(1) as $article)
                                                    <article class="post post-tp-5">
                                                        <figure>
                                                            <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="Hội nghị Ban Thường vụ Liên minh Hợp tác xã Việt Nam lần thứ 16, nhiệm kỳ 2020-2025" title="Hội nghị Ban Thường vụ Liên minh Hợp tác xã Việt Nam lần thứ 16, nhiệm kỳ 2020-2025" class="adaptive"></a>
                                                        </figure>
                                                        <p class="sub-title_vca"><i></i></p>
                                                        <h3 class="title-5"><a href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                        </h3>
                                                        <div class="p truncate">{!!$article->content_article!!}</div>
                                                        <div class="read-more-r">
                                                            <a href="{{route('category.show', $article->id_article)}}" alt="" title="">Đọc thêm</a>
                                                        </div>
                                                    </article>
                                                    @endforeach
                                                </div>
                                                <div class="col-half">
                                                    @foreach($articles->where('category.id_category', 1)->skip(1)->take(6) as $article)
                                                    <article class="post post-tp-6">
                                                        <figure>
                                                            <a href="{{route('category.show', $article->id_article)}}">
                                                                <img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive-v2">
                                                            </a>
                                                        </figure>
                                                        <h3 class="title-6">
                                                            <a class="truncate" href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                        </h3>
                                                    </article>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- box HTX + Lien minh HTX tinh/TP -->
                                <div id="box-htx">
                                    <div class="col-row">
                                        <!-- box - htx -->
                                        <div class="design-pst">
                                            <div class="pst-block">
                                                <div class="pst-block-head">
                                                    <h2 class="title-4">
                                                        <strong>
                                                            <a href="{{ route('category.articles', 2) }}" alt="Hợp tác xã" title="Hợp tác xã"><span>Hợp tác xã</span></a>
                                                        </strong>
                                                    </h2>
                                                    <div class="filters">
                                                        <div class="filters-more">
                                                            <div class="filters-btn">
                                                                <span><a href="{{ route('category.articles', 2) }}" style="color: #DB8E0A;"><i class="fa-sharp fa-solid fa-up-right-from-square"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pst-block-main">
                                                    <div class="col-row">
                                                        <div class>
                                                            @foreach($articles->where('category.id_category', 2)->take(1) as $article)
                                                            <article class="post post-tp-5">
                                                                <figure>
                                                                    <a href="{{route('category.show', $article->id_article)}}">
                                                                        <img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive">
                                                                    </a>
                                                                </figure>
                                                                <p class="sub-title_vca"><i></i></p>
                                                                <h3 class="title-5"><a href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                                </h3>
                                                                <div class="p truncate">{!!$article->content_article!!}</div>
                                                                <div class="read-more-l">
                                                                    <a href="{{route('category.show', $article->id_article)}}" alt="" title="">Đọc thêm</a>
                                                                </div>
                                                            </article>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <hr class="pst-block-hr">
                                                    <div class="col-row">
                                                        <div class>
                                                            @foreach($articles->where('category.id_category', 2)->skip(1)->take(4) as $article)
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" class="adaptive-v2"></a>
                                                                </figure>
                                                                <h3 class="title-6">
                                                                    <a class="truncate" href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                                </h3>
                                                            </article>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box - Lien minh htx tinh tp -->
                                        <div class="design-pst">
                                            <div class="pst-block">
                                                <div class="pst-block-head">
                                                    <h2 class="title-4">
                                                        <strong>
                                                            <a href="{{ route('category.articles', 6) }}" alt="Liên minh HTX Tỉnh / TP" title="Liên minh HTX Tỉnh / TP"><span>Liên minh
                                                                    HTX Tỉnh / TP</span></a>
                                                        </strong>
                                                    </h2>
                                                    <div class="filters">
                                                        <div class="filters-more">
                                                            <div class="filters-btn">
                                                                <span><a href="{{ route('category.articles', 6) }}" style="color: #DB8E0A;"><i class="fa-sharp fa-solid fa-up-right-from-square"></i></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pst-block-main">
                                                    <div class="col-row">
                                                        <div class>
                                                            @foreach($articles->where('category.id_category', 6)->take(1) as $article)
                                                            <article class="post post-tp-5">
                                                                <figure>
                                                                    <a href="{{route('category.show', $article->id_article)}}">
                                                                        <img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive">
                                                                    </a>
                                                                </figure>
                                                                <p class="sub-title_vca"><i></i></p>
                                                                <h3 class="title-5"><a href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                                </h3>
                                                                <div class="p truncate">{!!$article->content_article!!}</div>
                                                                <div class="read-more-l">
                                                                    <a href="{{route('category.show', $article->id_article)}}" alt="" title="">Đọc thêm</a>
                                                                </div>
                                                            </article>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <hr class="pst-block-hr">
                                                    <div class="col-row">
                                                        <div class>
                                                            @foreach($articles->where('category.id_category', 6)->skip(1)->take(4) as $article)
                                                            <article class="post post-tp-6">
                                                                <figure>
                                                                    <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" class="adaptive-v2"></a>
                                                                </figure>
                                                                <h3 class="title-6">
                                                                    <a class="truncate" href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                                </h3>
                                                            </article>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- box - kinh te -->
                                <div class="popular-pst">
                                    <div class="pst-block">
                                        <div class="pst-block-head">
                                            <h3 class="title-4">
                                                <a href="{{ route('category.articles', 3) }}" alt="Kinh tế" title="Kinh tế"><span>Kinh tế</span></a>
                                            </h3>
                                            <div class="filters">
                                                <div class="filters-more">
                                                    <div class="filters-btn">
                                                        <span><a href="{{ route('category.articles', 3) }}" style="color: #DB8E0A;"><i class="fa-sharp fa-solid fa-up-right-from-square"></i></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pst-block-main">
                                            <div class="col-row">
                                                @foreach($articles->where('category.id_category', 3)->take(3) as $article)
                                                <div class="col-half-3-3">
                                                    <article class="post post-tp-5">
                                                        <figure>
                                                            <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive"></a>
                                                        </figure>
                                                        <p class="sub-title_vca"><i>{{$article->subtitle_article}}</i></p>
                                                        <h3 class="title-5">
                                                            <a href="{{route('category.show', $article->id_article)}}" alt="" title="">
                                                                {{$article->title_article}}
                                                            </a>
                                                        </h3>
                                                        <div class="p truncate">{!!$article->content_article!!}</div>
                                                        <div class="read-more-l">
                                                            <a href="{{route('category.show', $article->id_article)}}" alt="" title="">Đọc thêm</a>
                                                        </div>
                                                    </article>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- box - VHXH -->
                                <div class="popular-pst">
                                    <div class="pst-block">
                                        <div class="pst-block-head">
                                            <h3 class="title-4">
                                                <a href="{{ route('category.articles', 7) }}" alt="" title=""><span>Văn hóa xã hội</span></a>
                                            </h3>
                                            <div class="filters">
                                                <div class="filters-more">
                                                    <div class="filters-btn">
                                                        <span>
                                                            <a href="{{ route('category.articles', 7) }}" style="color: #DB8E0A;">
                                                                <i class="fa-sharp fa-solid fa-up-right-from-square"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pst-block-main">
                                            <div class="col-row">
                                                <div class="col-half">
                                                    @foreach($articles->where('category.id_category', 7)->take(1) as $article)
                                                    <article class="post post-tp-5">
                                                        <figure>
                                                            <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive"></a>
                                                        </figure>
                                                        <p class="sub-title_vca"><i></i></p>
                                                        <h3 class="title-5"><a href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                        </h3>
                                                        <div class="p truncate">{!!$article->content_article!!}</div>
                                                        <div class="read-more-r">
                                                            <a href="{{route('category.show', $article->id_article)}}" alt="" title="">Đọc thêm</a>
                                                        </div>
                                                    </article>
                                                    @endforeach
                                                </div>
                                                <div class="col-half">
                                                    @foreach($articles->where('category.id_category', 7)->skip(1)->take(6) as $article)
                                                    <article class="post post-tp-6">
                                                        <figure>
                                                            <a href="{{route('category.show', $article->id_article)}}">
                                                                <img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive-v2">
                                                            </a>
                                                        </figure>
                                                        <h3 class="title-6">
                                                            <a class="truncate" href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                                                        </h3>
                                                    </article>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tin dia phuong + khoi nghiep sang tao-->
                                <div class="col-row">
                                    <div class="design-pst">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4">
                                                    <strong><a href="{{ route('category.articles', 8) }}">Tin địa phương</a></strong>
                                                </h2>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="col-row">
                                                    <div class>
                                                        @foreach($articles->where('category.id_category', 8)->take(4) as $article)
                                                        <article class="post post-tp-6">
                                                            <figure>
                                                                <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" class="adaptive-v2"></a>
                                                            </figure>
                                                            <h3 class="title-6">
                                                                <a class="truncate" href="{{route('category.show', $article->id_article)}}">{{$article->title_article}}</a>
                                                            </h3>
                                                        </article>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="design-pst">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4">
                                                    <strong><a href="{{ route('category.articles', 9) }}">Khởi nghiệp sáng tạo</a></strong>
                                                </h2>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="col-row">
                                                    <div class>
                                                        @foreach($articles->where('category.id_category', 9)->take(4) as $article)
                                                        <article class="post post-tp-6">
                                                            <figure>
                                                                <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" class="adaptive-v2"></a>
                                                            </figure>
                                                            <h3 class="title-6">
                                                                <a class="truncate" href="{{route('category.show', $article->id_article)}}">{{$article->title_article}}</a>
                                                            </h3>
                                                        </article>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- van ban + lien minh HTX -->
                                <div class="col-row">
                                    <div class="design-pst">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4">
                                                    <strong><a href="#">Văn bản mới</a></strong>
                                                </h2>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="col-row">
                                                    <div class>
                                                        <article class="post post-tp-6">
                                                            <figure>
                                                                <a href="#"><img src="/client/imgs/pdf.jpg" width="70" alt="" class="adaptive"></a>
                                                            </figure>
                                                            <h3 class="title-6">
                                                                <a class="truncate" href="#">Luật HTX năm 2023</a>
                                                            </h3>
                                                        </article>
                                                        <article class="post post-tp-6">
                                                            <figure>
                                                                <a href="#"><img src="/client/imgs/pdf.jpg" width="70" alt="" class="adaptive"></a>
                                                            </figure>
                                                            <h3 class="title-6">
                                                                <a class="truncate" href="#">Luật HTX năm 2023</a>
                                                            </h3>
                                                        </article>
                                                        <article class="post post-tp-6">
                                                            <figure>
                                                                <a href="#"><img src="/client/imgs/pdf.jpg" width="70" alt="" class="adaptive"></a>
                                                            </figure>
                                                            <h3 class="title-6">
                                                                <a class="truncate" href="#">Luật HTX năm 2023</a>
                                                            </h3>
                                                        </article>
                                                        <article class="post post-tp-6">
                                                            <figure>
                                                                <a href="#"><img src="/client/imgs/pdf.jpg" width="70" alt="" class="adaptive"></a>
                                                            </figure>
                                                            <h3 class="title-6">
                                                                <a class="truncate" href="#">Luật HTX năm 2023</a>
                                                            </h3>
                                                        </article>
                                                        <article class="post post-tp-6">
                                                            <figure>
                                                                <a href="#"><img src="/client/imgs/pdf.jpg" width="70" alt="" class="adaptive"></a>
                                                            </figure>
                                                            <h3 class="title-6">
                                                                <a class="truncate" href="#">Luật HTX năm 2023</a>
                                                            </h3>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="design-pst">
                                        <div class="pst-block">
                                            <div class="pst-block-head">
                                                <h2 class="title-4">
                                                    <strong><a href="./lienminh-htx-tinh-tp.html">Liên minh htx tỉnh/tp</a></strong>
                                                </h2>
                                            </div>
                                            <div class="pst-block-main">
                                                <div class="col-row">
                                                    <div class>
                                                        <article class="post post-tp-5">
                                                            <figure>
                                                                <a href="#"><img src="/client/imgs/Banner4_1.png" alt="" class="adaptive"></a>
                                                            </figure>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="side-bar col-sm-4">
                                <div class="js-sidebar">
                                    <div class="sb-addinner">
                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/ĐH.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>
                                    </div>

                                    <div id="carouselExampleRide" class="gallery carousel slide" data-bs-ride="true">
                                        <h4 class="title-gallery"><a href="./thuvienanh.html" title="">Thư viện ảnh</a>
                                        </h4>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="/client/imgs/g-i-1.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/client/imgs/g-i-2.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="/client/imgs/g-i-4.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>

                                    <div class="sb-addinner">
                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/tong ket 10 nam luat_1.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/tong ket 20 nam nghi quyet.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/trien khai dieu le.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/Xanh lá Vàng Khung Linh hoạt Ảnh làm trọng tâm Tiệm tạp hoá Áp phích.png" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/quy ho tro.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/ket noi cung cau.png" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/Diễn đàn KTHT MTTN.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/tong ket nghi quyet 19.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/tieng noi htx.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/gr.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/htx voi bac ho.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                        <div class="addinner-inner">
                                            <a href="#">
                                                <img src="/client/imgs/bn.jpg" class="img-responsive adaptive" alt="Định Hóa">
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @include('client.btnBackTop')

    @include('client.footer')

    @include('client.script')

</body>

</html>