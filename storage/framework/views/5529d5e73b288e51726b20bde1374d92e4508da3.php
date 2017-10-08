<?php echo $__env->make('user_block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OWL</title>
        <link rel="stylesheet" href="css/frontPage.css">
    </head>
    <body>
        <div class="top-menu ">
            <div class="menu main-center">
                <div class="links top-margin text-regular ">
                    <a href="<?php echo e(url('/')); ?>">OwlNet</a>
                    <a href="<?php echo e(route('logout')); ?>">logout</a>
                    <a href="<?php echo e(route('SignIn')); ?>">login</a>
                    <a href="<?php echo e(route('Registration')); ?>">registration</a>
                    <a href="<?php echo e(route('News')); ?>">news</a>
                    <a href="<?php echo e(route('gallery')); ?>">gallery</a>
                    
                    <input type="search" placeholder="search" name="searchInput" id="input-field" class="text-regular">
                </div>
            </div>

        </div>
        <!-- main -->
        <div class="wrapper ">
            <div class="main-center">

            <div class="leftcolumn">
                <?php echo $__env->yieldContent('user_block'); ?>
                

            </div>
            <div class="rightcolumn"> 
            <?php echo $__env->yieldContent('gallery'); ?>   
            <?php echo $__env->yieldContent('post'); ?>
            <?php echo $__env->yieldContent('news'); ?> 
            <?php echo $__env->yieldContent('Registration'); ?>
            <?php echo $__env->yieldContent('login'); ?>
            <?php echo $__env->yieldContent('avatar_edit'); ?>

                                      
                </div>                
            </div>
            </div>
        </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"></script>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/filleLoad.js"></script>
    </body>
</html>
