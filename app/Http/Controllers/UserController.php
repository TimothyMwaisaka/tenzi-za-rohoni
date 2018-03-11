<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.users', compact('users'));
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'User deleted successfully..!');
    }
}
