<?php $__env->startSection('title', 'Page Not Found'); ?>

<?php $__env->startSection('message', 'Sorry, the page you are looking for could not be found.'); ?>

<?php echo $__env->make('server::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>