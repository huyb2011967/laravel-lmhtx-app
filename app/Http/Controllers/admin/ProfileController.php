<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function showProfile()
    {
        $user = Auth::user();

        return view('admin.profile.viewProfile', compact('user'), [
            'title' => 'Thông tin cá nhân'
        ]);
        
    }

    // public function updateAvatar(Request $request, $id)
    // {

    //     $user = Users::findOrFail($id);

    //     $user->update([
    //         'avatar_user' => $request->file('avatar')->store('avatars', 'public')
    //     ]);
    
    //     return redirect()->back()->with('success', 'Avatar updated successfully.');

    // }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Cập nhật các trường thông tin cá nhân khác
        $user->name_user = $request->input('edit-name');
        $user->email = $request->input('edit-email');
        $user->phone_user = $request->input('edit-phone');
        $user->address_user = $request->input('edit-address');

        $user->save();

        return redirect()->route('profile')->with('success', 'Cập nhật thông tin thành công!.');
    }
}
