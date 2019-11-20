<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class AdminPostController extends Controller
{
    
    ic function index()
    {
        $posts = Post::all();
        
        return view('admin.Posts.index',compact('posts'));
    }
    
    
    public function create()
    {
        return view('admin.Posts.create');
    }
    
    
    public function store(Request $request)
    {
        $post = new Post;
        $post->titulo = $request->titulo;
        $post->descricao =$request->descricao;
        $post->save();
        
        return redirect('admin/posts');
        
    }
    
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.Posts.edit', compact('post'));
    }
    
    
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->titulo = $request->titulo;
        $post->descricao =$request->descricao;
        $post->save();
        
        return redirect('admin/posts');
        
    }
    
    
    public function destroy($id)
    {
        $post = Post::find($id);
        
        $post->delete();
        
        return redirect('admin/posts');
    }
}
