<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datamodel;
use App\Models\categorymodel;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = categorymodel::all();
        $data = datamodel::with('category')->get();
        $no = 1;
        return view('tampil', ['data' => $data, 'no' => $no, 'category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = categorymodel::all();
        return view('create', ['categorys' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request -> get('name');
        $harga = $request -> get('harga');
        $category = $request -> get('category_id');

        $post = [
            'name' => $name,
            'harga' => $harga,
            'category_id' => $category,
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
