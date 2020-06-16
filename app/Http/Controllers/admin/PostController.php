<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Post;
use App\Model\user\Tag;
use App\Model\user\Category;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $tags=Tag::all();
        $categories=Category::all();
        return view('admin.post.create', compact('tags','categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'sub_title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]); 

        if($request->hasFile('image'))
        {
           $imageName=$request->image->store('public');
        }

        $post = new Post;
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->image = $imageName;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('post.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $post=Post::with('tags','categories')->where('id',$id)->first();
        $tags=Tag::all();
        $categories=Category::all();
        return view('admin.post.edit', compact('post','tags','categories')); 
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'sub_title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'required',
        ]); 

        if($request->hasFile('image'))
        {
           $imageName=$request->image->store('public');
        }
        $post = Post::find($id);
        $post->title = $request->title;
        $post->sub_title = $request->sub_title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->image = $imageName;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect(route('post.index'));
    }

    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->back();
    }
}
