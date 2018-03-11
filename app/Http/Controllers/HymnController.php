<?php

/*
|--------------------------------------------------------------------------
| Author: Timothy Mwaisaka
|--------------------------------------------------------------------------
| Email: timothymwaisaka@gmail.com
|--------------------------------------------------------------------------
| Date: 21/10/2017
|--------------------------------------------------------------------------
|
*/

namespace App\Http\Controllers;

use App\Hymn;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HymnController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

    public function index()
    {
        $hymns = Hymn::all();
        return view('pages.index', compact('hymns'))->with('title','Home');
    }

    public function create()
    {
        return view('pages.add_hymn')->with('title','New Song');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'number' => 'required|unique:hymns|max:255',
            'title' => 'required',
            'song' => 'required',
        ));
        $hymn = $request->all();
        Hymn::create($hymn);
        return redirect()->back()->with('success', 'Hymn added successfully..!');
    }

    public function show($id)
    {
        $hymns = Hymn::find($id);
        return view('pages.show_hymn', compact('hymns'))->with('title','Song');
    }

    public function edit($id)
    {
        $hymns = Hymn::find($id);
        return view('pages.edit_hymn', compact('hymns'))->with('title','Edit Song');
    }

    public function update(Request $request, $id)
    {
        $hymn = Hymn::find($id);
        $inputs = $request->all();
        $hymn->fill($inputs)->save();
        //return redirect()->with('success', 'Hymn updated successfully..!');
        return redirect()->route('view-songs', ['id' => $id])->with('updated', 'Hymn updated successfully..!');
    }

    public function destroy($id)
    {
        Hymn::find($id)->delete();
        return redirect('/')->with('delete', 'Hymn deleted successfully..!');
    }
}
