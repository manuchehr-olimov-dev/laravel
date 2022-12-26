

<?php $__env->startSection("content"); ?>

<div class="h-100 p-5 bg-light rounded-3 border">

    <h1>Изменить пост</h1>

    <form action="/post/edit" method="post">
      <?php echo csrf_field(); ?>
      <div class = "mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="<?php echo e($title); ?>" required>
      </div>
      
      <div class = "mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" name = "body" id="body" rows="3" required><?php echo e($body); ?></textarea>
      </div>

      <input type="hidden" name="id" value="<?php echo e($id); ?>">
      <button class="btn btn-success" type="submit">Изменить</button>

    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("base-layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\laravel\resources\views/posts/edit-form.blade.php ENDPATH**/ ?>