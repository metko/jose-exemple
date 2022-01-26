<?php $__env->startSection('title', 'Page Title'); ?>


<?php $__env->startSection('content'); ?>


<section class="bg-pink-50 dark:bg-gray-900">
    <div class="max-w-screen-xl mx-auto py-12 ">
        <div>
            <h1 class="text-4xl font-bold mb-4"><?php echo e($page->title); ?></h1>
        </div>
        <div>
            <?php echo e($page->content); ?>

        </div>
    </div>
</section>

<div class="max-w-screen-xl mx-auto py-10">
    <?php echo e($page->content); ?>

</div>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/thomasmoiluiavon/Sites/jose/App/Views/page.blade.php ENDPATH**/ ?>