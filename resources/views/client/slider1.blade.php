<div class="pst-box">
    <div class="pst-box-head">
        <div class="title-blc-1">
            <h4>Tin liên quan</h4>
        </div>
    </div>
    <div class="tinlienquan">
        <ul>
            @foreach($articles->take(7) as $article)
            <li>
                <a href="{{route('category.show', $article->id_article)}}">
                    <i class="fa fa-circle-o"></i>{{$article->title_article}}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="pst-box">
    <div class="pst-box-head">
        <div class="title-blc-1">
            <h4>Tin mới nhất</h4>
        </div>
        <div class="navs">
            <span class="prevBtn"><i class="fa fa-angle-left"></i></span>
            <span class="nextBtn"><i class="fa fa-angle-right"></i></span>
        </div>
    </div>
    <div class="pst-box-main">
        <div class="slide-container-2">
            <div class="slides-2">
                @foreach($articles->take(7) as $article)
                <div class="slide-2">
                    <article class="post post-tp-5 rp-ct">
                        <figure>
                            <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive"></a>
                        </figure>
                        <h3 class="title-6">
                            <a href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                        </h3>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>