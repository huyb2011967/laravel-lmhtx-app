@extends('admin.users.main')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title"></h3>

        <div class="card-tools">
            <form action="{{ route('articles.search') }}" method="get">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search" onkeyup="searchTable()">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Người đăng</th>
                    <th>Ngày đăng</th>
                    <th>Tiêu đề</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles->where('status.id_status', 1)->sortByDesc('date_article') as $article)
                <tr>
                    <td>{{$article->id_article}}</td>
                    <td>{{$article->users->name_user}}</td>
                    <td>{{$article->date_article = DATE_FORMAT(now(), 'd/m/Y')}}</td>
                    <td>{{$article->title_article}}</td>
                    <td>{{$article->category->name_category}}</td>
                    <td>
                        @if ($article->status->id_status == 1)
                        <span style="color: green;">{{$article->status->name_status}}</span>
                        @else
                        <spa style="color: red">{{$article->status->name_status}}</spa>
                        @endif

                    </td>
                    <td class="project-actions">
                        <a class="btn btn-info btn-sm" href="{{route('article.viewDetail', $article->id_article)}}" title="Xem chi tiết bài viết">
                            <!-- <i class="fa-solid fa-eye"></i> -->
                            Xem
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.card-body -->
</div>

@endsection