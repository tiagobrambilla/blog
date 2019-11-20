<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;

class AdminVideoController extends Controller
{
    
    public function index()
    {
        $videos = Video::all();
        
        return view('admin.Videos.index',compact('videos'));
    }
    
    
    public function create()
    {
        return view('admin.Videos.create');
    }
    
    
    public function store(Request $request)
    {
        $video = new Video;
        $video->titulo = $request->titulo;
        $video->descricao =$request->descricao;
        $video->link = $request->link;
        $video->save();
        
        return redirect('admin/videos');
        
    }
    
    
    public function show($id)
    {
        //
    }
    
    
    public function edit($id)
    {
        $video = Video::find($id);
        return view('admin.Videos.edit', compact('video'));
    }
    
    
    public function update(Request $request, $id)
    {
        $video = Video::find($id);
        $video->titulo = $request->titulo;
        $video->descricao =$request->descricao;
        $video->link = $request->link;
        $video->save();
        
        return redirect('admin/videos');
        
    }
    
    
    public function destroy($id)
    {
        $video = Video::find($id);
        
        $video->delete();
        
        return redirect('admin/videos');
    }
}
