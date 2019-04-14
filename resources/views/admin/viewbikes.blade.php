@extends('adminlte::page')

@section('title', 'Bike List')

@section('content_header')
    <h1>Bike List</h1>
@stop

@section('content')
<div style="overflow-x:auto;">
    	<table border="1">
		<tr>
			<td>Bike Name</td>
			<td>Brand</td>
			<td>Price</td>
			<td>Engine Type</td>
			<td>Engine Displacement(cc)</td>
			<td>Engine Max Power</td>
			<td>Engine Max Torque</td>
			<td>No. of Gears</td>
			<td>Suspension Front</td>
			<td>Suspension Rear</td>
			<td>Brake Front</td>
			<td>Brake Rear</td>
			<td>Tire Front</td>
			<td>Tire Rear</td>
			<td>Fuel Capacity</td>
			<td>ELectrical System</td>
			<td>Head Lamp</td>
			<td>Dimention Length</td>
			<td>Dimention Ground Clearence</td>
			<td>Dimention Height</td>
			<td>Dimention Width</td>
			<td>Dimention Wheelbase</td>
			<td>Dimention Kerb Weight</td>
			<td>Top Speed</td>
			<td>Milage By Company</td>
			<td>Milage By Users</td>
			<td>Cooling System</td>
			<td>Starting Method</td>
			<td>ABS</td>
			
		</tr>

		@foreach($bikeinfo as $data)
		<tr>
			
			<td>{{$data->name}}</td>
			<td>{{$data->brand}}</td>
			<td>{{$data->price}}</td>
			<td>{{$data->etype}}</td>
			<td>{{$data->edisplacement}}</td>
			<td>{{$data->emaxpower}}</td>
			<td>{{$data->emaxtorque}}</td>
			<td>{{$data->noofgears}}</td>
			<td>{{$data->sfront}}</td>
			<td>{{$data->srear}}</td>
			<td>{{$data->bfront}}</td>
			<td>{{$data->brear}}</td>
			<td>{{$data->tfront}}</td>
			<td>{{$data->trear}}</td>
			<td>{{$data->fuelcap}}</td>
			<td>{{$data->esystem}}</td>
			<td>{{$data->headlamp}}</td>
			<td>{{$data->dlength}}</td>
			<td>{{$data->dgroundclear}}</td>
			<td>{{$data->dheight}}</td>
			<td>{{$data->dwidth}}</td>
			<td>{{$data->dwheelbase}}</td>
			<td>{{$data->dkerbweight}}</td>
			<td>{{$data->topspeed}}</td>
			<td>{{$data->milagecompany}}</td>
			<td>{{$data->milageusers}}</td>
			<td>{{$data->coolingsystem}}</td>
			<td>{{$data->startingmethod}}</td>
			<td>{{$data->abs}}</td>
			<td><a href="editbike/{{$data->id}}">edit</button><a></td>
			
		</tr>
		@endforeach
	</table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #FD9680
}
</style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop