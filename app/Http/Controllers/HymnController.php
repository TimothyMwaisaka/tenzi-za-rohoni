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

use Illuminate\Http\Request;

class HymnController extends Controller
{
    public function index()
    {
        $hymns = Hymn::all();
        return view('pages.index', compact('hymns'));
    }

    public function create()
    {
        return view('pages.add_hymn');
    }

    public function store(Request $request)
    {
        $hymn = new Hymn();
        $hymn->number = $request->number;
        $hymn->title = $request->title;
        $hymn->song = $request->song;
        $hymn->save();
        return redirect()->back()->with('success', 'Hymn added successfully..!');
    }

    public function show($id)
    {
        $hymns = Hymn::find($id);
        return view('pages.show_hymn', compact('hymns'));
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}