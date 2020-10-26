<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(20);

        return view('users', compact('users'));
    }

    public function create()
    {
        return view('add_user');
    }

    public function store(UserRequest $request)
    {       
        $data = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        ];

        User::create($data);

        flash('Thêm mới người dùng thành công!')->success();

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
