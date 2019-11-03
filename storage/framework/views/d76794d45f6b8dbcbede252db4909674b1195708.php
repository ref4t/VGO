<?php $__env->startSection('title', 'Bike List'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Bike List</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div id="search">
    <tablesearch></tablesearch>
</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>