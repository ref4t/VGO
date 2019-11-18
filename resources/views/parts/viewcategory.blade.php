@extends('adminlte::page')

@section('title', 'Parts Category List')

@section('content_header')
    <h1>Parts Category List</h1>
@stop

@section('content')
<div class="container">
    <div class="table-responsive col-sm-10">
    <table class="table table-hover">
      <thead>
        <tr>
          <th class="col-sm-2">Id</th>
          <th class="col-sm-4">Part Category Name</th>
          <th class="col-sm-4">Part Category Image</th>
          <th class="col-sm-2">Edit</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($parts_category as $data)
            <tr>
              <td>{{ $data->id }}</td>
              <td>{{ $data->category_name }}</td>
              <td><img src="/images/parts_category/{{ $data->image }}" alt="image" style="width:40%;height:10%;"></td>
              <td><a href="edit-parts-category/{{ $data->id }}">Edit</a></td>
            </tr>
          @endforeach
      </tbody>
    </table>
    </div>
  </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {{-- <link rel="stylesheet" href="{{ URL::asset('vendor/adminlte/css/addpart.css') }}"> --}}
@endsection
