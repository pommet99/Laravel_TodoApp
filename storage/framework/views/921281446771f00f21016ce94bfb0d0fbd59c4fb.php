<?php $__env->startSection('content'); ?>

<div class="container justify-content-center align-items-center" style="margin-top:10%;">
    <div class="col-sm text-align-center">
    <h1 class="text-center" style="color:white; font-size:50px;"><strong>Editer votre tâche <?php echo e($todo->title); ?></strong></h1><br>

    <form action="<?php echo e(route('todo.update', $todo->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="input-group mb-3 w-100">
        <input type="text" class="form-control form-control-lg" name='title' value="<?php echo e($todo->title); ?>" placeholder="Titre.." aria-label="Recipient's username" aria-describedby="button-addon2">
        <input type="text" class="form-control form-control-lg" name='description' value="<?php echo e($todo->description); ?>" placeholder="Description.." aria-label="Recipient's description" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-sucess" type="submit" id="button-addon2" style="background-color:#2ad000">Sauvegarder</button>
    </div>
    </div>
    </form>
   


</div>
</div>
<?php $__env->stopSection(); ?>

  

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\DevWeb\Laravel\IIM-A2-laravel-contact-list-exo\resources\views/todo/edit.blade.php ENDPATH**/ ?>