

<?php $__env->startSection("post"); ?>

<div class="col-md-12 mt-4">
  
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="h-100 mb-4 p-5 bg-light rounded-3 border">    
      <form action="/post/change/<?php echo e($post->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <h2><?php echo e($post->title); ?></h2>
        <p><?php echo e($post->body); ?></p>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#changeModal" type="submit">Изменить</button>
        <button class="btn btn-danger" id = "deletePost"  type="button" value = <?php echo e($post->id); ?>>Удалить</button>
      
      </form>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.posts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel\resources\views/show_posts.blade.php ENDPATH**/ ?>