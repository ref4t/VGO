<?php $__env->startSection('title', 'Edit Bikes'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Edit Bikes</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form method="post"  }}" >
	<?php echo e(@csrf_field()); ?>

    <table>
    	<tr>
            <td><h2>Bike Name</h2> <input type="text" name="name" value="<?php echo e($bikes->name); ?>" required></td>
            <td><h2>Brand</h2> <input type="text" name="brand" value="<?php echo e($bikes->brand); ?>" required></td>
    		<td><h2>Price</h2> <input type="text" name="price" value="<?php echo e($bikes->price); ?>" required></td>
            <td><h2>Status</h2><select name="status" value="<?php echo e($bikes->status); ?>" >
                    <option value="none"  >None</option>
                    <option value="mostpopular"  >Most Populer</option>
                    <option value="newarrival">New Arrival</option>
                    <option value="upcoming">Upcoming</option>
                </select></td>
    	</tr>
    	<tr>
    		<td><h3>Engine</h3></td>
    		<td> Type <input type="text" name="etype" value="<?php echo e($bikes->etype); ?>" required></td>
    		<td> Displacement <input type="text" name="edisplacement" value="<?php echo e($bikes->edisplacement); ?>" required></td>
    		<td> Max Power <input type="text" name="emaxpower" value="<?php echo e($bikes->emaxpower); ?>" required></td>
    		<td> Max Torque <input type="text" name="emaxtorque" value="<?php echo e($bikes->emaxtorque); ?>" required></td>
            <td>No. of Gears<input type="text" name="noofgears" value="<?php echo e($bikes->noofgears); ?>" required></td>
             <td>Cooling System <select name="coolingsystem" value="<?php echo e($bikes->coolingsystem); ?>">
                    <option value="Not Available">Not Available</option>
                    <option value="air cooled">Air Cooled</option>
                    <option value="oil cooled">Oil Cooled</option>
                    <option value="water cooled">Water Cooled</option>
                </select></td>
    </tr><tr>
            <td>Starting Method <select name="startingmethod" value="<?php echo e($bikes->startingmethod); ?>">
                    <option value="Self ignition Only">Self </option>
                    <option value="Self and Kick ignition">Self And kick</option>
                    <option value="Kick ignition only">Kick</option>
                    <option value="Clutch Ingnition">Clutch</option>
                </select></td>
          
            
            <td>Carburettor <input type="text" name="carburettor" value="<?php echo e($bikes->carburettor); ?>" required /></td>          
            <td>Bore X Stroke <input type="text" name="borestroke" value="<?php echo e($bikes->borestroke); ?>" required /></td>         
            <td>Compression Ratio<input type="text" name="compression" value="<?php echo e($bikes->compression); ?>" required /></td>         
            <td>Engine Oil Capacity<input type="text" name="eoilcap" value="<?php echo e($bikes->eoilcap); ?>" required /></td>     
             <td> Engine Kill Switch <select name="killswitch" value="<?php echo e($bikes->killswitch); ?>">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>
            <td>Chassis Type <input type="text" name="chassistype" value="<?php echo e($bikes->chassistype); ?>" required></td> 
            <td> Engine Kill Switch <select name="killswitch" value="<?php echo e($bikes->killswitch); ?>">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>     
        </tr>	
    	<tr>
    		<td><h3>Suspension</h3></td>
    		<td> Front <input type="text" name="sfront" value="<?php echo e($bikes->sfront); ?>" required></td>
    		<td> Rear <input type="text" name="srear" value="<?php echo e($bikes->srear); ?>" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Brakes</h3></td>
    		<td> Front <input type="text" name="bfront" value="<?php echo e($bikes->bfront); ?>" required></td>
    		<td> Rear <input type="text" name="brear" value="<?php echo e($bikes->brear); ?>" required></td>
    		  <td>ABS System <select name="abs" value="<?php echo e($bikes->abs); ?>">
                    <option value="Not Available">Not Available</option>
                    <option value="ABS Channel Given but not installed">ABS Channel Given but not installed</option>
                    <option value="Single Channel">Single Channel</option>
                    <option value="Dual Channel">Dual Channel</option>
                    <option value="CBS Available">CBS</option>

                </select></td>
    			
    	</tr>
		<tr>
    		<td><h3>Tyres</h3></td>
    		<td> Front <input type="text" name="tfront" value="<?php echo e($bikes->tfront); ?>" required></td>
    		<td> Rear <input type="text" name="trear" value="<?php echo e($bikes->trear); ?>" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3> Fuel </h3></td>
    		<td> Capacity <input type="text" name="fuelcap" value="<?php echo e($bikes->fuelcap); ?>" required></td>
            <td>Milage by company <input type="text" name="milagecompany" value="<?php echo e($bikes->milagecompany); ?>" required></td>
            <td>Milage by users <input type="text" name="milageusers" value="<?php echo e($bikes->milageusers); ?>" required></td>	
    	</tr>
    	<tr>
    		<td><h3>Electricals</h3></td>
    		<td> System <input type="text" name="esystem" value="<?php echo e($bikes->esystem); ?>" required></td>
    		<td> Head Lamp <input type="text" name="headlamp" value="<?php echo e($bikes->headlamp); ?>" required></td>
                <td> Pass Light <select name="passlight" value="passlight">
                    <option value="Not Available">Not Available</option>
                    <option value="Available">Available</option>

                </select></td>
    			
    	</tr>
    	<tr>
    		<td><h3>Dimesions</h3></td>
    		<td> Length(mm) <input type="text" name="dlength" value="<?php echo e($bikes->dlength); ?>" required></td>
    		<td> Ground Clearence (mm) <input type="text" name="dgroundclear" value="<?php echo e($bikes->dgroundclear); ?>" required></td>
    		<td> Height (mm) <input type="text" name="dheight" value="<?php echo e($bikes->dheight); ?>" required></td>
    		<td> Width (mm) <input type="text" name="dwidth" value="<?php echo e($bikes->dwidth); ?>" required></td>
    		<td> Wheelbase (mm) <input type="text" name="dwheelbase" value="<?php echo e($bikes->dwheelbase); ?>" required></td>
    		<td> Kerb Weight (kg) <input type="text" name="dkerbweight" value="<?php echo e($bikes->dkerbweight); ?>" required></td>
    		
    			
    	</tr>
        <tr>
            <td><h3>Others</h3></td>
            <td> Top Speed <input type="text" name="topspeed" value="<?php echo e($bikes->topspeed); ?>" required></td>
 
 
 
    </table>
    <p>
    <input type="submit" >
</p>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>