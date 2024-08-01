<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //

    public function Index()
    {
        $data = Product::all( );
        dd($data);
        return view('Admin/Product/IndexProduct');
    }

    public function create()
    {
        // dd('ini fungsi create');
        $product = Product::all();
        return view('Admin/Product/Add', compact('product'));
    }


    public function store(Request $request)
    {
        $validator = $request->validate([
            'nip' => 'required|integer',
            'namaproduct' => 'required|string',
            'photo' => 'required|string',
            'price' => 'required|integer',
            'descproduct' => 'required|string',
            
        ]);
        // dd($validator);
        Product::create($validator);
        return redirect('product')->with('success', 'Data Berhasil Diinput');
    }


    public function show(string $id)
    {
        //
    }

public function edit(string $id)
    {
        $data = Product::find($id);
     
       return view('Admin/Product/Edit', compact('data', 'product'));
    }

    public function update(Request $request, string $id)
   
    {
        // dd($request);
        $validator = $request->validate([
            'nip' => 'required|integer',
            'nameproduct' => 'required|string',
            'foto' => 'required|string',
            'price' => 'required|integer',
            'descproduk' => 'required|string',
        ]);
        Product::find($id)->update($validator);
        return redirect('product')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy(string $id)
    {
        // dd('ini fungsi delete');
        Product::find($id)->delete();
        return redirect('product')->with('success', 'Data Berhasil Dihapus');
    }
    
}
