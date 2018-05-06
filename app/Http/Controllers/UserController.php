<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('pages.users', compact('users'))->with('title', 'Users');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'User deleted successfully..!');
    }
}
