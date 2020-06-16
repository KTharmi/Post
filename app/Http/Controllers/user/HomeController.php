<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Post;
use App\Model\user\Category;
use App\Model\user\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status',1)->orderBy('created_at', 'DESC')->paginate(5);
        return view('user.blog', compact('posts'));
    }
    public function tag(Tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog', compact('posts'));
    }
    public function category(Category $category)
    {
        $posts = $category->posts();
        return view('user.blog', compact('posts'));
    }
}
