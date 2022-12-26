

<?php $__env->startSection("content"); ?>
<div class="h-100 mb-4 p-5 bg-light rounded-3 border">    
    <form action='/post/edit-form' method="post">
      <?php echo csrf_field(); ?>
      <h2>  <?php echo e($title); ?>  </h2>
      <p>   <?php echo e($body); ?> </p>

      <input type="hidden" name="id"    value="<?php echo e($id); ?>">
      <input type="hidden" name="title" value="<?php echo e($title); ?>">
      <input type="hidden" name="body"  value="<?php echo e($body); ?>">

      
      <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#changeModal" type="submit">Изменить</button>
      <button class="btn btn-danger" id = "deletePost"  type="button" value = <?php echo e($id); ?>>Удалить</button>
    
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("base-layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel\resources\views/posts/show.blade.php ENDPATH**/ ?>