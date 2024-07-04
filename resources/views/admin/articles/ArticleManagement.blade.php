@extends('admin.users.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"></h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
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
                @foreach($articles->where('id_user', Auth::id())->sortByDesc('date_article') as $article)
                <tr>
                    <td>{{$article->id_article}}</td>
                    <td>{{$article->users->name_user}}</td>
                    <td>{{$article->date_article = DATE_FORMAT(now(), 'd/m/Y')}}</td>
                    <td>{{$article->title_article}}</td>
                    <td>{{$article->category->name_category}}</td>
                    <td>
                        @if ($article->status->id_status == 1)
                        <span style="color: green;">{{$article->status->name_status}}</span>
                        @elseif($article->status->id_status == 2)
                        <spa style="color: #DB8E0A">{{$article->status->name_status}}</spa>
                        @else
                        <spa style="color: red">{{$article->status->name_status}}</spa>
                        @endif
                    </td>
                    <td class="project-actions">
                        <a class="btn btn-info btn-sm" href="{{route('article.viewDetail', $article->id_article)}}" title="Xem chi tiết bài viết">
                            Xem
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('articles.edit', $article->id_article)}}" title="Chỉnh sửa bài viết">
                            Sửa
                        </a>
                        <a class="btn btn-danger btn-sm delete-btn" href="#" data-id="{{$article->id_article}}">
                            Xóa
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <!-- /.card-body -->
</div>

<script>
    $(document).ready(function() {
        $('.delete-btn').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            if (confirm('Are you sure you want to delete this article?')) {
                // Chuyển hướng đến đường dẫn xóa
                window.location.href = "{{ route('articles.remove', ':id') }}".replace(':id', id);
            }
        });
    });
</script>

@endsection