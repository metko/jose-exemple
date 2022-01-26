<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <h2><?php echo e($page->title); ?></h2>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/thomasmoiluiavon/Sites/jose/App/homepage.blade.php ENDPATH**/ ?>