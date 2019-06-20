@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<form class="form-inline" method="post" action="{{ route('admin.storebike') }}" >
    {{@csrf_field()}}
    <div style="overflow-x:auto;">
    <table>
        <tr>
            <td><h2>Bike Name</h2> <input type="text" name="name" required /></td>
            <td><h2>Brand</h2> <input type="text" name="brand" required /></td>
            <td><h2>Price</h2> <input type="text" name="price" required /></td>
            <td><h2>Status</h2><select name="status">
                    <option value="none">None</option>
                    <option value="mostpopular">Most Populer</option>
                    <option value="newarrival">New Arrival</option>
                    <option value="upcoming">Upcoming</option>
                </select></td>
        </tr>
        <tr>
            <td><h3>Engine</h3></td>
            <td> Type <input type="text" name="etype" required /></td>
            <td> Displacement <input type="text" name="edisplacement" required /></td>
            <td> Max Power <input type="text" name="emaxpower" required /></td>
            <td> Max Torque <input type="text" name="emaxtorque" required /></td>
            <td>No. of Gears<input type="text" name="noofgears" required /></td>
            <td>Cooling System <select name="coolingsystem">
                    <option value="Not Available">Not Available</option>
                    <option value="air cooled">Air Cooled</option>
                    <option value="oil cooled">Oil Cooled</option>
                    <option value="water cooled">Water Cooled</option>
                </select></td>
                <td> Engine Kill Switch <select name="killswitch">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>
    </tr><tr>
            <td>Starting Method <select name="startingmethod">
                    <option value="Self ignition Only">Self </option>
                    <option value="Self and Kick ignition">Self And kick</option>
                    <option value="Kick ignition only">Kick</option>
                    <option value="Clutch Ingnition">Clutch</option>
                </select></td>
            
            
            <td>Carburettor <input type="text" name="carburettor" required /></td>          
            <td>Bore X Stroke <input type="text" name="borestroke" required /></td>         
            <td>Compression Ratio<input type="text" name="compression" required /></td>         
            <td>Engine Oil Capacity<input type="text" name="eoilcap" required /></td>     
             <td> Engine Kill Switch <select name="killswitch">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>
            <td>Chassis Type <input type="text" name="chassistype" required></td>

        </tr>
        <tr>
            <td><h3>Suspension</h3></td>
            <td> Front <input type="text" name="sfront" required /></td>
            <td> Rear <input type="text" name="srear" required /></td>
            
                
        </tr>
        <tr>
            <td><h3>Brakes</h3></td>
            <td> Front <input type="text" name="bfront" required /></td>
            <td> Rear <input type="text" name="brear" required /></td>
            <td>ABS System <select name="abs">
                    <option value="Not Available">Not Available</option>
                    <option value="ABS Channel Given but not installed">ABS Channel Given but not installed</option>
                    <option value="Single Channel">Single Channel</option>
                    <option value="Dual Channel">Dual Channel</option>
                    <option value="CBS Available">CBS</option>

                </select></td>
                
        </tr>
        <tr>
            <td><h3>Tyres</h3></td>
            <td> Front <input type="text" name="tfront" required /></td>
            <td> Rear <input type="text" name="trear" required /></td>
            
                
        </tr>
        <tr>
            <td><h3>Fuel</h3></td>
            <td>Fuel Capacity <input type="text" name="fuelcap" required/></td>
            <td>Milage by company <input type="text" name="milagecompany" required /></td>
            <td>Milage by users <input type="text" name="milageusers" required /></td>
            
                
        </tr>
        <tr>
            <td><h3>Electricals</h3></td>
            <td> System <input type="text" name="esystem" required/></td>
            <td> Head Lamp <input type="text" name="headlamp" required /></td>
                <td> Pass Light <select name="passlight">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>
                
        </tr>
        <tr>
            <td><h3>Dimesions</h3></td>
            <td> Length(mm) <input type="text" name="dlength" required/></td>
            <td> Ground Clearence (mm) <input type="text" name="dgroundclear" required/></td>
            <td> Height (mm) <input type="text" name="dheight" required/></td>
            <td> Width (mm) <input type="text" name="dwidth" required/></td>
            <td> Wheelbase (mm) <input type="text" name="dwheelbase" required/></td>
            <td> Kerb Weight (kg) <input type="text" name="dkerbweight" required/></td>
            
                
        </tr>
        <tr>
            <td><h3>Others</h3></td>
            <td> Top Speed <input type="text" name="topspeed" required/></td>

            
        </tr>
    </table>
    </div>
    <p>
    <input type="submit" name="">
</p>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop