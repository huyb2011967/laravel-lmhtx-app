@extends('admin.users.main')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"></h3>
        <a class="btn btn-info btn-sm" href="{{route('members.add')}}" title="Thêm người dùng">
            <i class="fa-sharp fa-solid fa-plus"></i>
            Thêm người dùng
        </a>

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
                    <th style="width: 1%">
                        id
                    </th>
                    <th style="width: 20%">
                        Họ tên
                    </th>
                    <th style="width: 25%">
                        Email
                    </th>
                    <th>
                        Số điện thoại
                    </th>
                    <th style="width: 8%" class="text-center">
                        Vai trò
                    </th>
                    <th style="width: 20%">

                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>
                        {{$member->id_user}}
                    </td>
                    <td>
                        <a>
                            {{$member->name_user}}
                        </a>
                    </td>
                    <td>
                        {{$member->email}}
                    </td>
                    <td>
                        {{$member->phone_user}}
                    </td>
                    <td>
                        {{$member->role->name_role}}
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="{{route('members.show', $member->id_user)}}" title="Xem thông tin thành viên" >
                            Xem
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('members.edit', $member->id_user)}}" title="Sửa thông tin thành viên" >  
                            Sửa
                        </a>
                        <a class="btn btn-danger btn-sm delete-btn" href="#" data-id="{{$member->id_user}}" title="Xóa thành viên" >
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

            if (confirm('Are you sure you want to delete this member?')) {
                // Chuyển hướng đến đường dẫn xóa
                window.location.href = "{{ route('members.remove', ':id') }}".replace(':id', id);
            }
        });
    });
</script>

@endsection