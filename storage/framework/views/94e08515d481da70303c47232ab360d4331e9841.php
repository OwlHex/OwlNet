<?php $__env->startSection('gallery'); ?>
	 <div class="gallery-block">
       
          <img src="/img/logo02.png" onclick="onClick(this)" class="imageGallery">
          <img src="/img/bg01.png" onclick="onClick(this)" class="imageGallery">
          <img src="/img/bg02.png" onclick="onClick(this)" class="imageGallery">
          <img src="/img/logo03.png" onclick="onClick(this)" class="imageGallery">
          <img src="/img/post-bg.jpg" onclick="onClick(this)" class="imageGallery">
        
    </div>

    <!-- modal -->
        <div>
        <div id="modal01" class="main-center" onclick="this.style.display='none'">
          <!-- <span class="" title="Close Modal Image"><i class=""></i></span> -->
          <div class="modal-content ">
            <img id="img01" class=" gallery-zoom">
          </div>
        </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>