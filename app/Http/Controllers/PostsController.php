<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Validator;
class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');

    }
    public function show()
    {
    	return view('posts.show');

    }
    public function create()
    {
    	   return view('posts.create');

    }
   
     public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $post = Post ::create($request->all());
        return redirect()->back();
    }
}
