@extends('admin.users.main')

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <!-- <img src="#" name alt="Ảnh đại diện" class="profile-photo">
        <br>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control-file" id="avatar" name="avatar">
            </div>
            <button type="submit" class="btn btn-primary">Update Avatar</button>
        </form> -->
        <h1 id="full-name">{{ $user->name_user }}</h1>
        <!-- <h2 id="job-title">{{ $user->id_role }}</h2> -->
        <button id="edit-button" class="btn btn-primary" onclick="showEditForm()">Chỉnh sửa thông tin</button>
    </div>
    <div class="profile-content">
        <section class="personal-info">
            <h3>Thông tin cá nhân</h3>
            <p><strong>Email:</strong> <span id="email">{{ $user->email }}</span></p>
            <p><strong>Phone:</strong> <span id="phone">{{ $user->phone_user }}</span></p>
            <p><strong>Address:</strong> <span id="address">{{ $user->address_user }}</span></p>
        </section>
    </div>
    <div id="edit-form-container" class="edit-form-container" style="display:none;">
        <form id="edit-form" method="POST" action="{{ route('profile.update') }}">
            @csrf
            <label for="edit-name">Full Name:</label>
            <input type="text" id="edit-name" name="edit-name" value="{{ $user->name_user }}"><br>
            <label for="edit-email">Email:</label>
            <input type="email" id="edit-email" name="edit-email" value="{{ $user->email }}"><br>
            <label for="edit-phone">Phone:</label>
            <input type="text" id="edit-phone" name="edit-phone" value="{{ $user->phone_user }}"><br>
            <label for="edit-address">Address:</label>
            <input type="text" id="edit-address" name="edit-address" value="{{ $user->address_user }}"><br>
            <button id="button" type="submit" class="btn btn-primary">Save</button>
            <button id="button" type="button" class="btn btn-primary" onclick="hideEditForm()">Cancel</button>
        </form>
    </div>
</div>
@endsection