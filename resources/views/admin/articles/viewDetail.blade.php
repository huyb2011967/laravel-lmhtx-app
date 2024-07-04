@extends('admin.users.main')

@section('content')

<div class="card card-primary card-outline" style="border-top: none;">
  <div class="card-body p-0">
    <div class="mailbox-read-info">
      <h1>{{$article->title_article}}</h1>
      <h3>{{$article->subtitle_article}}
        <span class="mailbox-read-time float-right">Ngày: {{$article->date_article = DATE_FORMAT(now(), 'd/m/Y')}}</span>
      </h3>
    </div>

    <div class="mailbox-read-message">
      {!! $article->content_article !!}
    </div>

  </div>
  <!-- /.card-body -->
  <div class="card-footer bg-white">

    <img src="{{ asset('storage/images/' . $article->image_article) }}" alt="{{ $article->title_article }}" title="ảnh của bài viết">
  </div>

</div>

@endsection