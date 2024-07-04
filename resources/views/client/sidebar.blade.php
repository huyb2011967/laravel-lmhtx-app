<style>
    .adaptive-v2 {
        display: block;
        max-width: 100%;
        height: 100px;
    }
</style>

<aside class="side-bar">
    <div class="pst-block-head">
        <h2 class="title-4">
            <strong><a href="#">tin nổi bật</a></strong>
        </h2>
    </div>
    <!-- <hr class="pst-block-hr"> -->
    <div class="pst-block-main">
        <div class>
            @foreach($articles->where('status.id_status', 1)->take(7) as $article)
            <article class="post post-tp-9">
                <figure>
                    <a href="{{route('category.show', $article->id_article)}}"><img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" class="adaptive-v2"></a>
                </figure>
                <h3 class="title-6">
                    <a class="truncate" href="{{route('category.show', $article->id_article)}}">{{$article->title_article}}</a>
                </h3>
                <div class="date-tp-2">Ngày {{$article->date_article = DATE_FORMAT(now(), 'd/m/Y')}}</div>
            </article>
            @endforeach
        </div>
    </div>
</aside>