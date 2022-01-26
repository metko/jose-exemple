<?php $__env->startSection('title', $page->title); ?>

<?php $__env->startSection('content'); ?>
<div>
    <div class="bg-pink-50 dark:bg-gray-900">
        <div class="container max-w-screen-xl  py-12 mx-auto   items-center">
            <div class="text-4xl font-bold mb-2"><?php echo e($page->title); ?></div>
        </div>
    </div>
    <div class="py-10 max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">
        
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-2">
                <a class="relative block"  href="<?php echo e($post->permalink); ?>">
                    <img src="<?php echo e($post->thumbnail_src('medium')); ?>" alt="Emoji Support" class="rounded-lg shadow-sm w-full h-52 object-cover">
                    <div class="absolute top-4 right-4 rounded shadow bg-white text-gray-900 dark:bg-gray-900 dark:text-white text-sm px-2 py-0.5">
                       <?php echo e($post->published_at); ?>

                    </div>
                </a>
        
                <div class="my-2 text-xl font-semibold"><?php echo e($post->title); ?></div>
                <a href="<?php echo e($post->author->permalink); ?>" class=""><?php echo e($post->author->nickname); ?></a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
      
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/thomasmoiluiavon/Sites/jose/App/Views/archive.blade.php ENDPATH**/ ?>