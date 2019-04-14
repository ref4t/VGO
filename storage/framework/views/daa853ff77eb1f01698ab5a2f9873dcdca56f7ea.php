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
                    <option value="none">None</option>
                    <option value="mostpopular">Most Populer</option>
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
    		
    			
    	</tr>
		<tr>
    		<td><h3>Tyres</h3></td>
    		<td> Front <input type="text" name="tfront" value="<?php echo e($bikes->tfront); ?>" required></td>
    		<td> Rear <input type="text" name="trear" value="<?php echo e($bikes->trear); ?>" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Fuel Tank</h3></td>
    		<td> Capacity <input type="text" name="fuelcap" value="<?php echo e($bikes->fuelcap); ?>" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Electricals</h3></td>
    		<td> System <input type="text" name="esystem" value="<?php echo e($bikes->esystem); ?>" required></td>
    		<td> Head Lamp <input type="text" name="headlamp" value="<?php echo e($bikes->headlamp); ?>" required></td>
    		
    			
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
            <td>Milage by company <input type="text" name="milagecompany" value="<?php echo e($bikes->milagecompany); ?>" required></td>
            <td>Milage by users <input type="text" name="milageusers" value="<?php echo e($bikes->milageusers); ?>" required></td>
            <td>Cooling System <input type="text" name="coolingsystem" value="<?php echo e($bikes->coolingsystem); ?>" required></td>
            <td>Starting Method <input type="text" name="startingmethod" value="<?php echo e($bikes->startingmethod); ?>" required></td>
            <td>ABS System <select name="abs">
                    <option value="Not Available">Not Available</option>
                    <option value="ABS Channel Given but not installed">ABS Channel Given but not installed</option>
                    <option value="Single Channel">Single Channel</option>
                    <option value="Dual Channel">Dual Channel</option>
                    <option value="CBS Available">CBS</option>

                </select></td>
        </tr>
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