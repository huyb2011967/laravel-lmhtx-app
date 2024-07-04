@extends('admin.users.main')

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <h1 id="full-name">{{ $member->name_user }}</h1>
        <h2 id="job-title">{{ $member->role->name_role }}</h2>
    </div>
    <div class="profile-content">
        <section class="personal-info">
            <h3>Thông tin cá nhân</h3>
            <p><strong>Email:</strong> <span id="email">{{ $member->email }}</span></p>
            <p><strong>Phone:</strong> <span id="phone">{{ $member->phone_user }}</span></p>
            <p><strong>Address:</strong> <span id="address">{{ $member->address_user }}</span></p>
        </section>
    </div>
</div>
@endsection