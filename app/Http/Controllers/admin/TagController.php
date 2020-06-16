<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required',
        ]);

        $tag = new Tag;
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();

        return redirect(route('tag.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tag=Tag::where('id',$id)->first();
        return view('admin.tag.edit', compact('tag')); 
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required',
        ]);

        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->save();

        return redirect(route('tag.index'));
    }

    public function destroy($id)
    {
        Tag::where('id', $id)->delete();
        return redirect()->back();
    }
}
