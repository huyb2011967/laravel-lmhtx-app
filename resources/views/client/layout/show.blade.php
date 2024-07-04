@extends('client.layout.page')

@section('content-articles')

<div class="content">
    <div class="pst-block">
        <div class="pst-block-main">
            <div class="post-content">
                <article>
                    <p><i>{{$article->subtitle_article}}</i></p>
                    <h1 class="title-16">{{$article->title_article}}</h1>
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
                        {!!$article->content_article!!}
                    </div>
                </article>
                <hr class="border-hr">
                @include('client.slider1')
            </div>
        </div>
    </div>
</div>

@endsection