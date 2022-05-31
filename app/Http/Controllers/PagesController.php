<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public $post;

    // public function mount($id){
    //     $this->post = Post::where('id', $id)->first();
    // }

    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(50);
        return view('Pages.index', compact('posts'));
    }
}
