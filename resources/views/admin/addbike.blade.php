@extends('adminlte::page')

@section('title', 'Add Bikes')

@section('content_header')
    <h1>Add Bikes</h1>
@stop

@section('content')
<div class="container">
    <form method="post" action="{{ route('admin.storebike') }}">
        {{ @csrf_field() }}
        <div class="panel panel-body col-sm-10">
            <div class="well well-sm">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label lb-lg">Bike Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control input-sm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label lb-lg">Brand</label>
                    <div class="col-sm-10">
                        <input type="text" name="brand" class="form-control input-sm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label lb-lg">Price</label>
                    <div class="col-sm-3">
                        <input type="text" name="price" class="form-control input-sm" required>
                    </div>
                    <label for="status" class="col-sm-2 col-form-label lb-lg">Status</label>
                    <div class="col-sm-3">
                        <select class="form-control input-sm" name="status">
                            <option value="none">None</option>
                            <option value="mostpopular">Most Populer</option>
                            <option value="newarrival">New Arrival</option>
                            <option value="upcoming">Upcoming</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-10">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="engine" class="col-form-label lb-lg">Engine</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label lb-md">Type</label>
                        <div class="col-sm-3">
                            <input type="text" name="etype" class="form-control input-sm" required>
                        </div>
                        <label for="displacement" class="col-sm-2 col-form-label lb-md">Displacement</label>
                        <div class="col-sm-3">
                            <input type="text" name="edisplacement" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="maxpower" class="col-sm-2 col-form-label lb-md">Max Power</label>
                        <div class="col-sm-3">
                            <input type="text" name="emaxpower" class="form-control input-sm" required>
                        </div>
                        <label for="displacement" class="col-sm-2 col-form-label lb-md">Max Torque</label>
                        <div class="col-sm-3">
                            <input type="text" name="emaxtorque" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gears" class="col-sm-2 col-form-label lb-md">No. of Gears</label>
                        <div class="col-sm-3">
                            <input type="text" name="noofgears" class="form-control input-sm" required>
                        </div>
                        <label for="top speed" class="col-sm-2 col-form-label lb-md">Top Speed</label>
                        <div class="col-sm-3">
                            <input type="text" name="topspeed" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="coolingsystem" class="col-sm-2 col-form-label lb-md">Cooling System</label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm" name="coolingsystem">
                                <option value="not available">Not Available</option>
                                <option value="air cooled">Air Cooled</option>
                                <option value="oil cooled">Oil Cooled</option>
                                <option value="water cooled">Water Cooled</option>
                            </select>
                        </div>
                        <label for="engine oil capacity" class="col-sm-2 col-form-label lb-md">Engine Oil Capacity</label>
                        <div class="col-sm-3">
                            <input type="text" name="eoilcap" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="carburet" class="col-sm-2 col-form-label lb-md">Carburettor</label>
                        <div class="col-sm-3">
                            <input type="text" name="carburettor" class="form-control input-sm" required>
                        </div>
                        <label for="Stroke" class="col-sm-2 col-form-label lb-md">Bore X Stroke</label>
                        <div class="col-sm-3">
                            <input type="text" name="borestroke" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="compression ratio" class="col-sm-2 col-form-label lb-md">Compression Ratio</label>
                        <div class="col-sm-3">
                            <input type="text" name="compression" class="form-control input-sm" required>
                        </div>
                        <label for="chassis type" class="col-sm-2 col-form-label lb-md">Chassis Type</label>
                        <div class="col-sm-3">
                            <input type="text" name="chassistype" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="starting method" class="col-sm-2 col-form-label lb-md">Starting Method</label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm" name="startingmethod">
                                <option value="self ignition only">Self</option>
                                <option value="self and kick ignition">Self And kick</option>
                                <option value="kick ignition only">Kick</option>
                                <option value="clutch ignition">Clutch</option>
                            </select>
                        </div>
                        <label for="enginekillswitch" class="col-sm-2 col-form-label lb-md">Engine Kill Switch</label>
                        <div class="col-sm-3">
                            <select class="form-control input-sm" name="killswitch">
                                <option value="not available">Not Available</option>
                                <option value="available">Available</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-5">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="suspension" class="col-form-label lb-lg">Suspension</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="front" class="col-sm-2 col-form-label lb-md">Front</label>
                        <div class="col-sm-4">
                            <input type="text" name="sfront" class="form-control input-sm" required>
                        </div>
                        <label for="rear" class="col-sm-2 col-form-label lb-md">Rear</label>
                        <div class="col-sm-4">
                            <input type="text" name="srear" class="form-control input-sm" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-5">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="tyres" class="col-form-label lb-lg">Tyres</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="front" class="col-sm-2 col-form-label lb-md">Front</label>
                        <div class="col-sm-4">
                            <input type="text" name="tfront" class="form-control input-sm" required>
                        </div>
                        <label for="rear" class="col-sm-2 col-form-label lb-md">Rear</label>
                        <div class="col-sm-4">
                            <input type="text" name="trear" class="form-control input-sm" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-5">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="brakes" class="col-form-label lb-lg">Brakes</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="front" class="col-sm-3 col-form-label lb-md">Front</label>
                        <div class="col-sm-3">
                            <input type="text" name="bfront" class="form-control input-sm" required>
                        </div>
                        <label for="rear" class="col-sm-3 col-form-label lb-md">Rear</label>
                        <div class="col-sm-3">
                            <input type="text" name="brear" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="abs system" class="col-sm-3 col-form-label lb-md">ABS System</label>
                        <div class="col-sm-5">
                            <select class="form-control input-sm" name="abs">
                                <option value="not available">Not Available</option>
                                <option value="abs channel given but not installed">ABS Channel Given but not installed</option>
                                <option value="single channel">Single Channel</option>
                                <option value="dual channel">Dual Channel</option>
                                <option value="cbs available">CBS</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-5">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="electricals" class="col-form-label lb-lg">Electricals</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="system" class="col-sm-3 col-form-label lb-md">System</label>
                        <div class="col-sm-3">
                            <input type="text" name="esystem" class="form-control input-sm" required>
                        </div>
                        <label for="head lamp" class="col-sm-3 col-form-label lb-md">Head Lamp</label>
                        <div class="col-sm-3">
                            <input type="text" name="head lamp" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pass light" class="col-sm-3 col-form-label lb-md">Pass Light</label>
                        <div class="col-sm-5">
                            <select class="form-control input-sm" name="passlight">
                                <option value="not available">Not Available</option>
                                <option value="Available">Available</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-10">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="fuel" class="col-form-label lb-lg">Fuel</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="fuel capacity" class="col-sm-2 col-form-label lb-md">Fuel Capacity</label>
                        <div class="col-sm-3">
                            <input type="text" name="fuelcap" class="form-control input-sm" required>
                        </div>
                        <label for="milage by company" class="col-sm-2 col-form-label lb-md">Milage by company</label>
                        <div class="col-sm-3">
                            <input type="text" name="milagecompany" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="milage by users" class="col-sm-2 col-form-label lb-md">Milage by users</label>
                        <div class="col-sm-3">
                            <input type="text" name="milageusers" class="form-control input-sm" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel col-sm-10">
        <br>
            <div class="well well-sm">
                <div class="panel-header">
                    <label for="dimesions" class="col-form-label lb-lg">Dimesions</label>
                </div>
                <div class="panel-body">
                    <div class="form-group row">
                        <label for="length" class="col-sm-2 col-form-label lb-md">Length (mm)</label>
                        <div class="col-sm-3">
                            <input type="text" name="dlength" class="form-control input-sm" required>
                        </div>
                        <label for="ground clearence" class="col-sm-2 col-form-label lb-md">Ground Clearence (mm)</label>
                        <div class="col-sm-3">
                            <input type="text" name="dgroundclear" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="height" class="col-sm-2 col-form-label lb-md">Height (mm)</label>
                        <div class="col-sm-3">
                            <input type="text" name="dheight" class="form-control input-sm" required>
                        </div>
                        <label for="width" class="col-sm-2 col-form-label lb-md">Width (mm)</label>
                        <div class="col-sm-3">
                            <input type="text" name="dwidth" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wheelbase" class="col-sm-2 col-form-label lb-md">Wheelbase (mm)</label>
                        <div class="col-sm-3">
                            <input type="text" name="dwheelbase" class="form-control input-sm" required>
                        </div>
                        <label for="kerb weight" class="col-sm-2 col-form-label lb-md">Kerb Weight (kg)</label>
                        <div class="col-sm-3">
                            <input type="text" name="dkerbweight" class="form-control input-sm" required>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div align="center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
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
