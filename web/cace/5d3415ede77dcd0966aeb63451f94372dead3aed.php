<html>
    <head>
        <?php echo e(wp_head()); ?>

        <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
        

       
    </head>
    <body>
        <div class="container">
            <ul>
                <li>
                    <a href="/">Accueil</a>
                </li>
                <li>
                    <a href="/blog">Blog</a>
                </li>
                <li>
                    <a href="/books">Books</a>
                </li>
            </ul>
            <?php echo $__env->yieldContent('content'); ?>
            
        </div>

        
    </body>
</html><?php /**PATH /Users/thomasmoiluiavon/Sites/jose/App/layouts/app.blade.php ENDPATH**/ ?>