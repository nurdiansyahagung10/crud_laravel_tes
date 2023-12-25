<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datamodel;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = datamodel::all();
        $no = 1;
        return view('tampil', ['data' => $data, 'no' => $no]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request -> get('name');
        $jenis = $request -> get('jenis');

        $post = [
            'name' => $name,
            'jenis' => $jenis,
        ];

        datamodel::create($post);
        return redirect()->route('data.index',[]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = datamodel::find($id)->get();
        return view('edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->get('name');
        $jenis = $request->get('jenis');

        $post = [
            'name' => $name,
            'jenis' => $jenis,
        ];

        datamodel::find($id) -> update($post);
        return redirect()->route('data.index', []);   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        datamodel::find($id)->delete();
        return redirect()->route('data.index', []);
    }
}
