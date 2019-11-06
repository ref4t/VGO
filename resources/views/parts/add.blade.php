@extends('adminlte::page')

@section('title', 'Add Parts')

@section('content_header')
    <h1>Add Parts</h1>
@stop

@section('content')
    <div class="container">
        <form method="post" action="{{ route('parts.store') }}">
         @csrf
            <div class="panel panel-body col-sm-10">
                <div class="well well-sm">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label lb-lg">Parts Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="brand" class="col-sm-2 col-form-label lb-lg">Brand Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="brand" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label lb-lg">Description</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="description" class="form-control" rows="5" required></textarea>
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
