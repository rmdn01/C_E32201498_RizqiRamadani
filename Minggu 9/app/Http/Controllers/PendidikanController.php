<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index()
    {
    	return view('backend.pendidikan.index');
    }
    public function create()
    {
    	$pendidikan = null;
    	return view('backend.pendidikan.create', compact('pendidikan'));
    }
    public function store(Request $request)
    {
    	Pendidikan::create($request->all());

    	return redirect()->route('pendidikan.index')
    					->with('success','Data Pendidikan baru telah berhasil disimpan.');
    }
}
