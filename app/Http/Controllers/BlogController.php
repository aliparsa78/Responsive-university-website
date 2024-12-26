<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class BlogController extends Controller
{
    function index(request $req)
    {
        $blogs = blog::get();
        return view('Blogs.index',compact('blogs'));
    }
    function insert(request $req)
    {
        $blog = new blog();
        $blog->blog_name = $req->blog_name;
        $blog->blog_capacity = $req->capacity;
        $blog->blog_detail = $req->details;
        $blog->status = $req->status;
        $blog->save();
        return back()->with('message','Blog added successfuly');;
    }
    function edit(request $req,$id)
    {   
        $blog = blog::find($id);
        return view('Blogs/edit',compact('blog'));
    }
    function update(request $req, $id)
    {
        $blog = blog::find($id);
        $blog->blog_name = $req->blog_name;
        $blog->blog_capacity = $req->capacity;
        $blog->blog_detail = $req->details;
        $blog->status = $req->status;
        $blog->update();
        return redirect('/blog')->with('message','Blog updated successfuly !!!');
    }
    function delete($id)
    {
        $blog = blog::find($id);
        if($blog->exists()){
            $blog->delete();
            return redirect("/blog")->with('danger','Blog deleted successfuly !!');
        }else{
            return "No";
        }
    }
}
