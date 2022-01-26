<?php $__env->startSection('title', $post->title); ?>

<?php $__env->startSection('content'); ?>
   
    <div class="bg-pink-50 dark:bg-gray-900">
        <div class="container max-w-screen-xl  py-12 mx-auto   items-center">
            <div class="text-4xl font-bold mb-2"><?php echo e($post->title); ?></div>
            <div class="w-full rounded h-52 overflow-hidden">
                <img src="<?php echo e($post->thumbnail_src('jose_full')); ?>" class="rounded-lg shadow-sm w-full h-52 object-cover">
            </div>
            <a href="<?php echo e($post->author->permalink); ?>"><?php echo e($post->author->nickname); ?></a> - <?php echo e($post->full_date); ?>

        </div>
    </div>
    <div class="max-w-screen-xl mx-auto py-10">
        <?php echo e($post->content); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/thomasmoiluiavon/Sites/jose/App/Views/single.blade.php ENDPATH**/ ?>