@extends('admin.users.main')

@section('content')
<form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card card-primary">
        <div class="card-body" style="display: block;">
            <div class="form-group">
                <label for="inputTitle">Tiêu đề bài viết</label>
                <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Nhập tiêu đề cho bài viết">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputSubtitle">Phụ đề bài viết</label>
                <input type="text" name="subtitle" id="inputSubtitle" class="form-control" placeholder="Nhập phụ đề cho bài viết">
                @error('subtitle')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="inputContent">Nội dung bài viết</label>
                <textarea id="inputContent" name="content" class="form-control" rows="4" style="height: 142px;" placeholder="Nhập nội dung cho bài viết"></textarea>
                <script>
                    CKEDITOR.replace('content');
                </script>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Hình ảnh cho bài viết</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" placeholder="Hình ảnh cho bài viết (có thể để trống)">
                        <label class="custom-file-label" for="exampleInputFile">Choose ảnh</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Bài viết thuộc danh mục</label>
                <select class="form-control" name="category">
                    @foreach($categories as $category)
                    <option value="{{$category->id_category}}">{{$category->name_category}}</option>
                    @endforeach
                </select>
                @error('category')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Đăng bài</button>
        </div>
    </div>
</form>


@endsection