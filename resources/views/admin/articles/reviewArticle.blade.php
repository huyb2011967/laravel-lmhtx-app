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
    <form id="bulk-action-form" action="{{ route('article.bulkAction') }}" method="POST">
        @csrf
        <div class="card-body table-responsive p-0" style="height: 300px;">

            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="select-all">
                        </th>
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
                    @foreach($articles->where('status.id_status', 2)->sortByDesc('date_article') as $article)
                    <tr>
                        <td>
                            <input type="checkbox" name="selected_articles[]" value="{{ $article->id_article }}">
                        </td>
                        <td>{{ $article->id_article }}</td>
                        <td>{{ $article->users->name_user }}</td>
                        <td>{{$article->date_article = DATE_FORMAT(now(), 'd/m/Y')}}</td>
                        <td>{{ $article->title_article }}</td>
                        <td>{{ $article->category->name_category }}</td>
                        <td>
                            @if ($article->status->id_status == 1)
                            <span style="color: green;">{{ $article->status->name_status }}</span>
                            @elseif ($article->status->id_status == 2)
                            <span style="color: #DB8E0A">{{ $article->status->name_status }}</span>
                            @else
                            <span style="color: red;">{{ $article->status->name_status }}</span>
                            @endif
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('article.viewDetail', $article->id_article) }}" title="Xem chi tiết bài viết">
                                Xem
                            </a>
                            <a class="btn btn-success btn-sm" href="{{ route('article.approve', $article->id_article) }}" title="Duyệt bài viết">
                                Duyệt
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{route('article.rejecte', $article->id_article)}}" title="Từ chối duyệt bài viết">
                                Từ chối
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="bulk-actions">
            <button type="submit" name="action" value="approve" class="btn btn-success">Duyệt các bài viết đã chọn</button>
            <button type="submit" name="action" value="reject" class="btn btn-danger">Từ chối các bài viết đã chọn</button>
        </div>
    </form>
    <!-- /.card-body -->
</div>

<script>
    document.getElementById('select-all').addEventListener('change', function(e) {
        var checkboxes = document.querySelectorAll('input[name="selected_articles[]"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = e.target.checked;
        });
    });

    document.getElementById('bulk-action-form').addEventListener('submit', function(e) {
        var checkboxes = document.querySelectorAll('input[name="selected_articles[]"]:checked');
        if (checkboxes.length === 0) {
            alert('Vui lòng chọn ít nhất một bài viết.');
            e.preventDefault();
        }
    });
</script>

@endsection