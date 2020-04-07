<?php

namespace App\Http\Controllers;

use App\Post;
use App\Camara;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        return view('posts',[
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }

    //CAMARAS
    public function camaras()
    {
        return view('camaras',[
            'camaras' => Camara::with('user')->latest()->paginate()
        ]);
    }
    public function camara(Camara $camara)
    {
        return view('camara', ['camara' => $camara]);
    }


}
