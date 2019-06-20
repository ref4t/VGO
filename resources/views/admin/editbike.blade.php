@extends('adminlte::page')

@section('title', 'Edit Bikes')

@section('content_header')
    <h1>Edit Bikes</h1>
@stop

@section('content')
<form method="post"  }}" >
	{{@csrf_field()}}
    <table>
    	<tr>
            <td><h2>Bike Name</h2> <input type="text" name="name" value="{{$bikes->name}}" required></td>
            <td><h2>Brand</h2> <input type="text" name="brand" value="{{$bikes->brand}}" required></td>
    		<td><h2>Price</h2> <input type="text" name="price" value="{{$bikes->price}}" required></td>
            <td><h2>Status</h2><select name="status" value="{{$bikes->status}}" >
                    <option value="none"  >None</option>
                    <option value="mostpopular"  >Most Populer</option>
                    <option value="newarrival">New Arrival</option>
                    <option value="upcoming">Upcoming</option>
                </select></td>
    	</tr>
    	<tr>
    		<td><h3>Engine</h3></td>
    		<td> Type <input type="text" name="etype" value="{{$bikes->etype}}" required></td>
    		<td> Displacement <input type="text" name="edisplacement" value="{{$bikes->edisplacement}}" required></td>
    		<td> Max Power <input type="text" name="emaxpower" value="{{$bikes->emaxpower}}" required></td>
    		<td> Max Torque <input type="text" name="emaxtorque" value="{{$bikes->emaxtorque}}" required></td>
            <td>No. of Gears<input type="text" name="noofgears" value="{{$bikes->noofgears}}" required></td>
             <td>Cooling System <select name="coolingsystem" value="{{$bikes->coolingsystem}}">
                    <option value="Not Available">Not Available</option>
                    <option value="air cooled">Air Cooled</option>
                    <option value="oil cooled">Oil Cooled</option>
                    <option value="water cooled">Water Cooled</option>
                </select></td>
    </tr><tr>
            <td>Starting Method <select name="startingmethod" value="{{$bikes->startingmethod}}">
                    <option value="Self ignition Only">Self </option>
                    <option value="Self and Kick ignition">Self And kick</option>
                    <option value="Kick ignition only">Kick</option>
                    <option value="Clutch Ingnition">Clutch</option>
                </select></td>
          
            
            <td>Carburettor <input type="text" name="carburettor" value="{{$bikes->carburettor}}" required /></td>          
            <td>Bore X Stroke <input type="text" name="borestroke" value="{{$bikes->borestroke}}" required /></td>         
            <td>Compression Ratio<input type="text" name="compression" value="{{$bikes->compression}}" required /></td>         
            <td>Engine Oil Capacity<input type="text" name="eoilcap" value="{{$bikes->eoilcap}}" required /></td>     
             <td> Engine Kill Switch <select name="killswitch" value="{{$bikes->killswitch}}">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>
            <td>Chassis Type <input type="text" name="chassistype" value="{{$bikes->chassistype}}" required></td> 
            <td> Engine Kill Switch <select name="killswitch" value="{{$bikes->killswitch}}">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>     
        </tr>	
    	<tr>
    		<td><h3>Suspension</h3></td>
    		<td> Front <input type="text" name="sfront" value="{{$bikes->sfront}}" required></td>
    		<td> Rear <input type="text" name="srear" value="{{$bikes->srear}}" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Brakes</h3></td>
    		<td> Front <input type="text" name="bfront" value="{{$bikes->bfront}}" required></td>
    		<td> Rear <input type="text" name="brear" value="{{$bikes->brear}}" required></td>
    		  <td>ABS System <select name="abs" value="{{$bikes->abs}}">
                    <option value="Not Available">Not Available</option>
                    <option value="ABS Channel Given but not installed">ABS Channel Given but not installed</option>
                    <option value="Single Channel">Single Channel</option>
                    <option value="Dual Channel">Dual Channel</option>
                    <option value="CBS Available">CBS</option>

                </select></td>
    			
    	</tr>
		<tr>
    		<td><h3>Tyres</h3></td>
    		<td> Front <input type="text" name="tfront" value="{{$bikes->tfront}}" required></td>
    		<td> Rear <input type="text" name="trear" value="{{$bikes->trear}}" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3> Fuel </h3></td>
    		<td> Capacity <input type="text" name="fuelcap" value="{{$bikes->fuelcap}}" required></td>
            <td>Milage by company <input type="text" name="milagecompany" value="{{$bikes->milagecompany}}" required></td>
            <td>Milage by users <input type="text" name="milageusers" value="{{$bikes->milageusers}}" required></td>	
    	</tr>
    	<tr>
    		<td><h3>Electricals</h3></td>
    		<td> System <input type="text" name="esystem" value="{{$bikes->esystem}}" required></td>
    		<td> Head Lamp <input type="text" name="headlamp" value="{{$bikes->headlamp}}" required></td>
                <td> Pass Light <select name="passlight" value="passlight">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>
    			
    	</tr>
    	<tr>
    		<td><h3>Dimesions</h3></td>
    		<td> Length(mm) <input type="text" name="dlength" value="{{$bikes->dlength}}" required></td>
    		<td> Ground Clearence (mm) <input type="text" name="dgroundclear" value="{{$bikes->dgroundclear}}" required></td>
    		<td> Height (mm) <input type="text" name="dheight" value="{{$bikes->dheight}}" required></td>
    		<td> Width (mm) <input type="text" name="dwidth" value="{{$bikes->dwidth}}" required></td>
    		<td> Wheelbase (mm) <input type="text" name="dwheelbase" value="{{$bikes->dwheelbase}}" required></td>
    		<td> Kerb Weight (kg) <input type="text" name="dkerbweight" value="{{$bikes->dkerbweight}}" required></td>
    		
    			
    	</tr>
        <tr>
            <td><h3>Others</h3></td>
            <td> Top Speed <input type="text" name="topspeed" value="{{$bikes->topspeed}}" required></td>
 
 
 
    </table>
    <p>
    <input type="submit" >
</p>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop