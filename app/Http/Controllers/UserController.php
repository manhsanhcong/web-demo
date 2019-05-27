<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc');
        $users = User::all();
        return view('user.list', compact('users'));
    }

    public function list()
    {
        $user = new User();
        return redirect()->route('users.index', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('auth.profile.edit', compact('user'));

    }

    public function update(Request $request)
    {
        $user = User::findOrFail(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->birth_day = $request->birth_day;
        $user->save();

        return back()->with('success', 'Cập nhật profile thành công');
    }
}
