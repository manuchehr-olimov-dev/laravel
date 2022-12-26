

<?php $__env->startSection("content"); ?>
<div class="col-md-12">
              
  <div class="h-100 p-5 bg-light rounded-3 border">

    <h1>Пост</h1>

    <form action="/post/add" method="post">
      <?php echo csrf_field(); ?>
      <div class = "mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Your title..." required>
      </div>
      
      <div class = "mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" name = "body" id="body" rows="3" placeholder="Your body..." required></textarea>
      </div>

      <button class="btn btn-success" type="submit">Добавить</button>

    </form>
      
  </div>

</div>
<div class="col-md-12 mt-4">
  
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="h-100 mb-4 p-5 bg-light rounded-3 border">    
      <form action="/post/edit-form" method="post">
        <?php echo csrf_field(); ?>
        <a href="/post/<?php echo e($post->id); ?>">
          
          <h2>  <?php echo e($post->title); ?>  </h2>
        
        </a>
        
        <p><?php echo e($post->body); ?></p>

        <input type="hidden" name="id"    value="<?php echo e($post->id); ?>">
        <input type="hidden" name="title" value="<?php echo e($post->title); ?>">
        <input type="hidden" name="body"  value="<?php echo e($post->body); ?>">

        
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#changeModal" type="submit">Изменить</button>
        <button class="btn btn-danger" id = "deletePost"  type="button" value = <?php echo e($post->id); ?>>Удалить</button>
      
      </form>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("base-layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel\resources\views/posts/main.blade.php ENDPATH**/ ?>