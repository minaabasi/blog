<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(){
        $posts=Blog::all();
        return view('client.blog.index' , [
            'posts'=>$posts
        ]);
    }

    public function index(){
        $posts=Blog::all();
        return view('admin.blog.index' , [
            'posts'=>$posts
        ]);
    }


    public function post(Blog $blog){

        return view('client.blog.post' , [
            'blog' => $blog
        ]);
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(NewBlogRequest $request){
        Blog::query()->create([
            'title'=>$request->get('title'),
            'text'=>$request->get('text'),

        ]);

        return redirect('/administrator/blog/create');
    }

    public function edit(Blog $blog){
        return view('admin.blog.edit' , [
            'blog'=>$blog
        ]);
    }

    public function update(Request  $request , Blog $blog){

        $blog->update([
            'title'=>$request->get('title'),
            'text'=>$request->get('text')
        ]);

        return redirect('/administrator/blog');

    }
}
