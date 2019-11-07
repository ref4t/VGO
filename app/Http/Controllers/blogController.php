<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use App\Model\blogTags;
use App\Model\BlogCategory;
use Illuminate\Http\Request;

use Auth;
use DB;
use Carbon\Carbon;
use Image;
use File;
Use App\Lib\ImageFilePath;
use DOMDocument;
use Input;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $blogCategoryList = Blog::all();
      return view("admin.blog.form",compact('blogCategoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $url = str_replace(' ','-',$request->slug);

      $blog = new Blog;

      $blog->blog_title = $request->blog_title;
      $blog->slug = $url;
      $blog->author_name = $request->author_name;
      $blog->location = $request->location;
      $blog->blog_short_description = $request->blog_short_description;
      $blog->blog_description = $request->blog_description;
      $blog->status = 0;

      if($request->hasfile('photo')){
          $file = $request->file('photo');
          $extension = $file->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $file->move('images/blog',$filename);
          $blog->profile_photo=$filename;
      }
      else{
          return $request;
          $parts->$image='';
      }

      $blog->save();

      return redirect()->route('blog.view');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
