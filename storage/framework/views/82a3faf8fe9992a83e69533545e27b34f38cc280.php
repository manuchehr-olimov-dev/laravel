<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container py-4">
        <header class="pb-3 mb-2 border-bottom">
          <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
            <span class="fs-4">Post Maker</span>
          </a>
        </header>
    
        <div class="p-5 mb-4 bg-light rounded-3">
    
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
      
            <?php echo $__env->yieldContent("post"); ?>

        </div>
        
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
  
  $( document ).ready(function(){
    
      // Удаление поста
      $("#deletePost").click(function (e) { 
        e.preventDefault();
        let postId = $(this).attr("value");
        
        if(postId)
        {
          $.ajax({
            url: "/post/delete",
            type: "post",
            data: JSON.stringify(postId),
            dataType: "json",
            contentType: "application/json",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data){
            }
          });
        }
        location.reload();
       });

       
      });
</script>
</html><?php /**PATH C:\OSPanel\domains\laravel\resources\views/layouts/posts.blade.php ENDPATH**/ ?>