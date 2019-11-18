@extends('adminlte::page')

@section('title', 'Bike List')

@section('content_header')
    <h1>Bike List</h1>
@stop

@section('content')
 <div style="overflow-x:auto;">
    	<table border="1">
		<tr>
			<td>ID</td>
			<td>Brand Name</td>
			<td>Brand Image</td>
			<td>Actions</td>

		</tr>

		@foreach($brands as $data)
		<tr>

			<td>{{$data->brand_name}}</td>
			<td>{{$data->brand_image}}</td>
			<td><a href="edit-bike-brand/{{$data->id}}">edit</button><a></td>

		</tr>
		@endforeach
	</table>
</div>




@stop

@section('css')
     <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
