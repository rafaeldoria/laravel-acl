<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $posts = $post->all();
        $posts = $post->where('user_id', Auth::user()->id)->get();
        return view('home', compact('posts'));
    }

    public function update($idPost)
    {
        $posts = Post::find($idPost);
        if(Gate::denies('update-post', $posts)){
            return view('welcome');
        }
        return view('post-update', compact('posts'));
    }

    public function rolesPermissions()
    {
        $user_name = Auth::user()->name;
        foreach (Auth::user()->roles as $key => $value) {
            echo "<b>".$role->name."</b>";
            $permissions = $role->permissions;
            foreach ($permission as $key => $permission) {
                echo $permission->name;
            }
            echo "<hr>";
        }
    }
}
