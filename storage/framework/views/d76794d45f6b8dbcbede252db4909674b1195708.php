<?php $__env->startSection('title', 'Bike List'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Bike List</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
			<td>Carburettor</td>
			<td>Compression</td>
			<td>Bore x Stroke</td>
			<td>Engine Oil Capacity</td>
			<td>Kill Switch</td>
			<td>Chassis Type</td>
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
			<td>Passlight</td>
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

		<?php $__currentLoopData = $bikeinfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>

			<td><?php echo e($data->name); ?></td>
			<td><?php echo e($data->brand); ?></td>
			<td><?php echo e($data->price); ?></td>
			<td><?php echo e($data->etype); ?></td>
			<td><?php echo e($data->edisplacement); ?></td>
			<td><?php echo e($data->emaxpower); ?></td>
			<td><?php echo e($data->emaxtorque); ?></td>
			<td><?php echo e($data->carburettor); ?></td>
			<td><?php echo e($data->compression); ?></td>
			<td><?php echo e($data->borestroke); ?></td>
			<td><?php echo e($data->eoilcap); ?></td>
			<td><?php echo e($data->killswitch); ?></td>
			<td><?php echo e($data->chassistype); ?></td>
			<td><?php echo e($data->noofgears); ?></td>
			<td><?php echo e($data->sfront); ?></td>
			<td><?php echo e($data->srear); ?></td>
			<td><?php echo e($data->bfront); ?></td>
			<td><?php echo e($data->brear); ?></td>
			<td><?php echo e($data->tfront); ?></td>
			<td><?php echo e($data->trear); ?></td>
			<td><?php echo e($data->fuelcap); ?></td>
			<td><?php echo e($data->esystem); ?></td>
			<td><?php echo e($data->headlamp); ?></td>
			<td><?php echo e($data->passlight); ?></td>
			<td><?php echo e($data->dlength); ?></td>
			<td><?php echo e($data->dgroundclear); ?></td>
			<td><?php echo e($data->dheight); ?></td>
			<td><?php echo e($data->dwidth); ?></td>
			<td><?php echo e($data->dwheelbase); ?></td>
			<td><?php echo e($data->dkerbweight); ?></td>
			<td><?php echo e($data->topspeed); ?></td>
			<td><?php echo e($data->milagecompany); ?></td>
			<td><?php echo e($data->milageusers); ?></td>
			<td><?php echo e($data->coolingsystem); ?></td>
			<td><?php echo e($data->startingmethod); ?></td>
			<td><?php echo e($data->abs); ?></td>
			<td><a href="editbike/<?php echo e($data->id); ?>">edit</button><a></td>

		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</div>

<div id="search">
    <tablesearch></tablesearch>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>