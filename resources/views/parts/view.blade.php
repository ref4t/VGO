@extends('adminlte::page')

@section('title', 'Parts List')

@section('content_header')
    <h1>Parts List</h1>
@stop

@section('content')
<div class="container">
    <div class="table-responsive col-sm-10">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Id</th>
          <th>Parts Name</th>
          <th>Brand Name</th>
          <th>Description</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($parts as $data)
            <tr>
              <td>{{ $data->id }}</td>
              <td>{{ $data->part_name }}</td>
              <td>{{ $data->part_brand }}</td>
              <td>{{ $data->part_description }}</td>
              <td><a href="edit-parts/{{ $data->id }}">Edit</a></td>
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
