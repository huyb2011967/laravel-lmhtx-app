@extends('client.layout.page')

@section('content-articles')

<style>
    .limited-text {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>

<div class="content">
    <div class="pst-block">
        <div class="pst-block-main">
            <div class="posts">
                @foreach($articles->where('status.id_status', 1) as $article)
                <article class="post post-tp-26">
                    <div class="date-tp-3">{{ \Carbon\Carbon::parse($article->date_article)->day }}<span>{{ \Carbon\Carbon::parse($article->date_article)->month }}</span></div>
                    <figure>
                        <a href="#">
                            <img src="{{ asset('storage/images/' . $article->image_article) }}" alt="" title="" class="adaptive">
                        </a>
                    </figure>
                    <p class="sub-title_vca fs-12"><i>{{$article->subtitle_article}}</i></p>
                    <h3 class="title-5">
                        <a href="{{route('category.show', $article->id_article)}}" alt="" title="">{{$article->title_article}}</a>
                    </h3>
                    <div class="p limited-text change">{!!$article->content_article!!}</div>
                    <div class="meta-tp-2">
                        <div class="date"><span>Ngày {{$article->date_article = DATE_FORMAT(now(), 'd/m/Y')}}</span></div>
                    </div>
                </article>
                @endforeach
                <!-- pagination -->
                @include('client.pagination')
                <!-- pagination END -->
            </div>
        </div>
    </div>
</div>

@endsection