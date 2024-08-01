<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //

    public function Index()
    {
        $data = Post::all( );
        dd($data);
        return view('Admin/Post/IndexPost');
    }

    public function create()
    {
        // dd('ini fungsi create');
        $product = Post::all();
        return view('Admin/Post/Add', compact('post'));
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
        Post::create($validator);
        return redirect('post')->with('success', 'Data Berhasil Diinput');
    }


    public function show(string $id)
    {
        //
    }

public function edit(string $id)
    {
        $data = Post::find($id);
     
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
        Post::find($id)->update($validator);
        return redirect('post')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy(string $id)
    {
        // dd('ini fungsi delete');
        Post::find($id)->delete();
        return redirect('post')->with('success', 'Data Berhasil Dihapus');
    }
    
}
