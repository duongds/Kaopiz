<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function create_post(){
        return view('createpost');
    }
    function store_post(Request $request){
        $slug=$request->input('slug');
        $title=$request->input('stitle');
        $description=$request->input('description');
        if($slug&&$title&&$description){
            return view('detail', compact('slug','title','description'));
        }
        return redirect()->back();
    }
    function index(){
        $posts=Post::query()->paginate(15);
        return view('table_bt6',['posts'=>$posts]);
        
    }
    function edit($id){
        $post=Post::query()->findOrFail($id);
        return view('Edit', compact('post'));
    }
    function update(Request $request, $id){
        $post=Post::query()->findOrFail($id);
        $post->update($request->only('posts_id','title'));
        return redirect(route('index'));
    }
    /*function create(Request $request){  
        $post= new Post();
        $post->title= $request->title;
        $post->save();
    }*/
}
