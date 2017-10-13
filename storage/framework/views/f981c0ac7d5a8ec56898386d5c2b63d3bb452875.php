<?php $__env->startSection('login'); ?>
<div class="post post-box">
    <div class="content">
        <div class="title m-b-md">
            Signin
        </div>

        <div class="links">
           <input type="text" placeholder="Name" name="userName">
            <input type="password" placeholder="Password" name="userPassword">

        </div>
        <button type="submit" value="submit" class="buttonViwe">(*^,^*)</button>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>