<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('content'); ?>
   <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h2><?php echo e($post->title); ?></h2>
        <?php if (\Illuminate\Support\Facades\Blade::check('env')): ?>
            coucou
        <?php endif; ?>
        <a href="<?php echo e($post->permalink); ?>">Likn</a>
    </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/thomasmoiluiavon/Sites/jose/App/homepage.blade.php ENDPATH**/ ?>