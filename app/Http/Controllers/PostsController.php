<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Validator;
class PostsController extends Controller
{   
    public function __construct()
    {   
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {   
        $posts = Post::latest()->get(); 
    	return view('posts.index', compact('posts'));

    }
    public function show(Post $post)
    {   
    	return view('posts.show', compact('post'));

    }

    public function create()
    {   

    	return view('posts.create');

    }
   
    //  public function store(Request $request)
    // {
    //    $validator = Validator::make($request->all(), [
    //         'title' => 'required|max:255',
    //         'body' => 'required',
    //     ]);
    //     if ($validator->fails()) {
    //         return back()
    //                     ->withErrors($validator)
    //                     ->withInput();
    //     }
    //     $post = Post ::create($request->all());
    //     return redirect()->back();
    // }

   


    public function store()
    {   

        $this->validate(request(),[
              'title' => 'required',
              'body' => 'required',
            ]);

         auth()->user()->publish(
            new Post(request(['title', 'body']))
        );


        // Post ::create([
        //     'title' => request('title'), 
        //     'body' => request('body'),
        //     'user_id'=> auth()->user()->id
        //     ]);

         return redirect('/');
    }
}
