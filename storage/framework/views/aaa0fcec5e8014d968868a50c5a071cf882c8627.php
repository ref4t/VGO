<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form method="post" action="<?php echo e(route('admin.storebike')); ?>" >
	<?php echo e(@csrf_field()); ?>

    <table>
    	<tr>
            <td><h2>Bike Name</h2> <input type="text" name="name" required></td>
            <td><h2>Brand</h2> <input type="text" name="brand" required></td>
    		<td><h2>Price</h2> <input type="text" name="price" required></td>
            <td><h2>Status</h2><select name="status">
                    <option value="none">None</option>
                    <option value="mostpopular">Most Populer</option>
                    <option value="newarrival">New Arrival</option>
                    <option value="upcoming">Upcoming</option>
                </select></td>
    	</tr>
    	<tr>
    		<td><h3>Engine</h3></td>
    		<td> Type <input type="text" name="etype" required></td>
    		<td> Displacement <input type="text" name="edisplacement" required></td>
    		<td> Max Power <input type="text" name="emaxpower" required></td>
    		<td> Max Torque <input type="text" name="emaxtorque" required></td>
            <td>No. of Gears<input type="text" name="noofgears" required></td>	
    	</tr>
    	<tr>
    		<td><h3>Suspension</h3></td>
    		<td> Front <input type="text" name="sfront" required></td>
    		<td> Rear <input type="text" name="srear" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Brakes</h3></td>
    		<td> Front <input type="text" name="bfront" required></td>
    		<td> Rear <input type="text" name="brear" required></td>
    		
    			
    	</tr>
		<tr>
    		<td><h3>Tyres</h3></td>
    		<td> Front <input type="text" name="tfront" required></td>
    		<td> Rear <input type="text" name="trear" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Fuel Tank</h3></td>
    		<td> Capacity <input type="text" name="fuelcap" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Electricals</h3></td>
    		<td> System <input type="text" name="esystem" required></td>
    		<td> Head Lamp <input type="text" name="headlamp" required></td>
    		
    			
    	</tr>
    	<tr>
    		<td><h3>Dimesions</h3></td>
    		<td> Length(mm) <input type="text" name="dlength" required></td>
    		<td> Ground Clearence (mm) <input type="text" name="dgroundclear" required></td>
    		<td> Height (mm) <input type="text" name="dheight" required></td>
    		<td> Width (mm) <input type="text" name="dwidth" required></td>
    		<td> Wheelbase (mm) <input type="text" name="dwheelbase" required></td>
    		<td> Kerb Weight (kg) <input type="text" name="dkerbweight" required></td>
    		
    			
    	</tr>
        <tr>
            <td><h3>Others</h3></td>
            <td> Top Speed <input type="text" name="topspeed" required></td>
            <td>Milage by company <input type="text" name="milagecompany" required></td>
            <td>Milage by users <input type="text" name="milageusers" required></td>
            <td>Cooling System <input type="text" name="coolingsystem" required></td>
            <td>Starting Method <input type="text" name="startingmethod" required></td>
            <td>ABS System <select name="abs">
                    <option value="notavailable">Not Available</option>
                    <option value="available">Available</option>

                </select></td>
        </tr>
    </table>
    <p>
    <input type="submit" name="">
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