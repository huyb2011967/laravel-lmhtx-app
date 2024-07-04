@extends('admin.users.main')

@section('content')
<div id="edit-form-container" class="edit-form-container" style="display: block;">
        <form id="edit-form" method="POST" action="{{ route('members.update', $member->id_user) }}">
            @csrf
            @method('PUT')
            <label for="edit-name">Full Name:</label>
            <input type="text" id="edit-name" name="edit-name" value="{{ $member->name_user }}"><br>
            <label for="edit-email">Email:</label>
            <input type="email" id="edit-email" name="edit-email" value="{{ $member->email }}"><br>
            <label for="edit-phone">Phone:</label>
            <input type="text" id="edit-phone" name="edit-phone" value="{{ $member->phone_user }}"><br>
            <label for="edit-address">Address:</label>
            <input type="text" id="edit-address" name="edit-address" value="{{ $member->address_user }}"><br>
            <button id="button" type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection