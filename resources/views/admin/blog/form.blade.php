@extends('adminlte::page')

@section('title', 'Add Bikes')

@section('content_header')
    <h1>Add Bikes</h1>
@stop

@section('content')
<div class="container">
    <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="panel panel-body col-sm-10">
            <div class="well well-sm">
                <div class="form-group row">
                    <label for="blog" class="col-sm-2 col-form-label lb-lg">Blog Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="blog_title" class="form-control input-sm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label lb-lg">URL</label>
                    <div class="col-sm-10">
                        <input type="text" name="slug" class="form-control input-sm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label lb-lg">Author Name</label>
                    <div class="col-sm-3">
                        <input type="text" name="author_name" class="form-control input-sm" required>
                    </div>
                    <label for="price" class="col-sm-2 col-form-label lb-lg">Location</label>
                    <div class="col-sm-5">
                        <input type="text" name="location" class="form-control input-sm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label lb-lg">Tags</label>
                    <div class="col-sm-3">
                        <input type="text" name="blog_tags" class="form-control input-sm" required>
                    </div>
                    <label for="price" class="col-sm-2 col-form-label lb-lg">Time to Read</label>
                    <div class="col-sm-5">
                        <input type="text" name="time_to_read" class="form-control input-sm" >
                    </div>
                </div>
                
                <div class="form-group row">
                  <label for="image" class="col-sm-2 col-form-label lb-lg">Part Image</label>
                  <div class="col-sm-6">
                      <input type="file" name="photo" class="form-control" required>
                  </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-10">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="engine" class="col-form-label lb-lg">BLog Content</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <div class="form-group">
                          <label for="blog_short_description">Blog Short Description</label>
                          <textarea class="form-control" rows="5" id="comment" name="blog_short_description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-group">
                          <label for="blog_short_description">Blog Description</label>
                          <textarea class="form-control" rows="5" id="comment" name="blog_description"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ URL::asset('vendor/adminlte/css/addbike.css') }}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
