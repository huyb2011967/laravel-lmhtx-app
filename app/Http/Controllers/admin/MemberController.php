<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    public function index()
    {
        $members = Users::all();

        return view('admin.members.viewMembers', compact('members'), [
            'title' => 'Danh sách người dùng'
        ]);
    }

    public function show($id)
    {
        $member = Users::findOrFail($id);

        return view('admin.members.show', compact('member'), [
            'title' => 'Thông tin người dùng'
        ]);
    }

    public function add()
    {
        return view('admin.members.add', [
            'title' => 'Thêm thành viên'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Tạo bản ghi mới
        Users::create([
            'id_role' => 2,
            'name_user' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);

        // Hiển thị thông báo tạo thành công
        return redirect()->route('members.index')->with('success', 'Thêm thành viên thành công!');
    }

    public function importFromExcel()
    {
    //     $request->validate([
    //         'excel_file' => 'required|file|mimes:xls,xlsx',
    //     ]);

    //     $users = Excel::toArray([], $request->file('excel_file'))[0];

    //     foreach ($users as $key => $user) {
    //         if ($key > 0) { // Bỏ qua dòng tiêu đề
    //             Users::create([
    //                 'id_role' => 2,
    //                 'name_user' => $user[0], // Giả sử cột đầu tiên là "name"
    //                 'email' => $user[1], // Giả sử cột thứ hai là "email"
    //                 'password' => Hash::make($user[2]), // Giả sử cột thứ ba là "password"
    //             ]);
    //         }
    //     }

    //     return redirect()->route('members.index')->with('success', 'Dữ liệu người dùng đã được tải lên thành công!');
    }

    public function edit($id)
    {
        $member = Users::findOrFail($id);

        return view('admin.members.edit', compact('member'), [
            'title' => 'Chỉnh sửa thông tin thành viên'
        ]);
    }

    public function update(Request $request, $id)
    {
        $member = Users::findOrFail($id);

        $member->name_user = $request->input('edit-name');
        $member->email = $request->input('edit-email');
        $member->phone_user = $request->input('edit-phone');
        $member->address_user = $request->input('edit-address');

        $member->save();

        return redirect()->route('members.index')->with('success', 'Chỉnh sửa thông tin thành viên thành công!');
    }

    public function destroy($id)
    {
        $member = Users::findOrFail($id);
        $member->delete();

        // Hiển thị thông báo xóa thành công
        return redirect()->back()->with('success', 'Xóa thành viên thành công!');
    }
}
