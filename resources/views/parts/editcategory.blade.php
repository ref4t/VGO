@extends('adminlte::page')

@section('title', 'Add Parts')

@section('content_header')
    <h1>Add Parts</h1>
@stop

@section('content')
    <div class="container">
        <form method="post" action="{{ route('part.updatecategory',$parts_category->id) }}" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="panel panel-body col-sm-10">
                <div class="well well-sm">
                    <div class="form-group row">
                        <label for="part_name" class="col-sm-2 col-form-label lb-lg">Part Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="category_name" class="form-control" value="{{ $parts_category->category_name }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label lb-lg">Part Category Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div align="center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ URL::asset('vendor/adminlte/css/addpart.css') }}">
@endsection
