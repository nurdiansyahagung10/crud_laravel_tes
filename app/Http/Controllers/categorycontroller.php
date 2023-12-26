<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorymodel;
use App\Models\datamodel;

class categorycontroller extends Controller
{
    public function index(){
        $no = 1;
        $category = categorymodel::all();
        return view('categorytampil', ['category' => $category, 'no' => $no]);
    }
    public function create(){
        return view('createcategory');
    }

    public function store(Request $request){
        $name = $request -> get('name');
        categorymodel::create(['name' => $name]);

        return redirect() ->route('category.index');
    }

    public function destroy(string $category){
        categorymodel::find($category) -> delete();

        return redirect() ->route('category.index');
    }

    public function  sortbycategory ( string $data){
        $category = categorymodel::all();
        $data = datamodel::with('category')->where('category_id', $data)->get();
        $no = 1;
        return view('sorttampil', ['data' => $data, 'no' => $no, 'category' => $category]);
    }
}
