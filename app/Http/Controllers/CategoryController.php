<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function Index()
    {
        $data = Category::all( );
        dd($data);
        return view('Admin/Category/IndexCategory');
    }

    public function create()
    {
        // dd('ini fungsi create');
        $product = Category::all();
        return view('Admin/Category/Add', compact('category'));
    }


    public function store(Request $request)
    {
        $validator = $request->validate([
            'nipt' => 'required|integer',
            'tittle' => 'required|string',
            'fill' => 'required|string',
            'datemade' => 'required|date',
          
            
        ]);
        // dd($validator);
        Category::create($validator);
        return redirect('category')->with('success', 'Data Berhasil Diinput');
    }


    public function show(string $id)
    {
        //
    }

public function edit(string $id)
    {
        $data = Category::find($id);
     
       return view('Admin/Post/Edit', compact('data', 'post'));
    }

    public function update(Request $request, string $id)
   
    {
        // dd($request);
        $validator = $request->validate([
            'nipt' => 'required|integer',
            'tittle' => 'required|string',
            'fill' => 'required|string',
            'datemade' => 'required|date',
          
        ]);
        Category::find($id)->update($validator);
        return redirect('category')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy(string $id)
    {
        // dd('ini fungsi delete');
        Category::find($id)->delete();
        return redirect('category')->with('success', 'Data Berhasil Dihapus');
    }

}
