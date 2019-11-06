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
      $input = $request->all();

      $input['date'] = dateConvertFormtoDB($request->date);
      $input['publish_date'] = dateConvertFormtoDB($request->publish_date);
      $input['created_by'] = Auth::user()->id;

      $imageData=$request->file('photo');
      if($imageData){

          $photo_home_page = md5(str_random(30).time().'_'.$request->file('photo')).'.'.$request->file('photo')->getClientOriginalExtension();
          Image::make($request->file('photo'))->resize(500, 620)->save(public_path(ImageFilePath::$blogHomePagePhoto) . $photo_home_page);
          $input['blog_home_page_photo'] = $photo_home_page;

          $blog_list_photo = md5(str_random(30).time().'_'.$request->file('photo')).'.'.$request->file('photo')->getClientOriginalExtension();
          Image::make($request->file('photo'))->resize(300, 175)->save(public_path(ImageFilePath::$blogListPhoto) . $blog_list_photo);
          $input['blog_list_photo'] =  $blog_list_photo;

          $profile_photo = md5(str_random(30).time().'_'.$request->file('photo')).'.'.$request->file('photo')->getClientOriginalExtension();
          Image::make($request->file('photo'))->resize(685, 400)->save(public_path(ImageFilePath::$blogProfilePhoto) . $profile_photo);
          $input['profile_photo'] = $profile_photo;
      }


      $blog_description = $request->get('blog_description');

      $dom = new DOMDocument();

      $dom->loadHtml($blog_description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

      $images = $dom->getElementsByTagName('img');

      foreach($images as $k => $img){

          $src = $img->getAttribute('src');

         if(preg_match('/data:image/', $src)){

              preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
              $mimetype = $groups['mime'];

              $filename = uniqid();
              $filepath = "/uploads/blog_photo/blog_text_photo/$filename.$mimetype";

              $image = Image::make($src)
              ->encode($mimetype, 100)
              ->save(public_path($filepath));

              $new_src = asset($filepath);
              $img->removeAttribute('src');
              $img->setAttribute('src', $new_src);

              }
          }

        $input['blog_description'] =  $dom->saveHTML();

      try {
          DB::beginTransaction();

           $data = Blog::create($input);


          DB::commit();
          $bug = 0;
      } catch (\Exception $e) {
          DB::rollback();
          $bug = $e->errorInfo[1];
      }

      if ($bug == 0) {
          return redirect()->route('blog.edit', $data->id)->with('successMsg', 'Blog Data successfully saved !');
      } elseif ($bug == 1062) {
          return redirect('blog')->with('errorMsg', 'Blog is Found Duplicate !');
      } else {
          return redirect()->back()->with('errorMsg', 'Something Error Found !, Please try again.');
      }
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
