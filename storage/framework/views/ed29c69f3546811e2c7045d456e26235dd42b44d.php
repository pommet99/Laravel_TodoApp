<?php $__env->startSection('content'); ?>

<div class="container justify-content-center align-items-center" style="margin-top:10%;">
    <div class="col-sm text-align-center">
    <h1 class="text-center" style="color:white; font-size:50px;"><strong>Todo App</strong></h1><br>
    <h2 class="text-white">Ajoute une tâche:</h2>
    <form action="<?php echo e(route('todo.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="input-group mb-3 w-100">
        <input type="text" class="form-control form-control-lg" name='title' placeholder="Titre.." aria-label="Recipient's username" aria-describedby="button-addon2">
        <input type="text" class="form-control form-control-lg" name='description' placeholder="Description.." aria-label="Recipient's description" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-sucess" type="submit" id="button-addon2" style="background-color:#2ad000">Ajouter à la liste</button>
    </div>
    </div>
    </form>
    <br>
    <h2 class="text-white">Ma liste de tâches:</h2>
    <div class="bg-white">
        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="w-100 d-flex align-items-center justify-content-between">
            <div class="p-3">
                <?php if($todo->completed == 0): ?>
                <i class="fas fa-times" style="margin:5px;"></i>
                <?php else: ?> 
                <i class="fas fa-check" style="margin:5px;"></i>

                <?php endif; ?> <?php echo e($todo->title); ?></div>

        
        <div class="mr-4 d-flex align-items-center">
            <?php if($todo->completed == 0): ?>
            <form action="<?php echo e(route('todo.update', $todo->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <input type="text" name="completed" value="1" hidden>
                <button class="btn btn-warning" style="margin-right:12px;">Marquer comme terminer</button>
                </form>

            <?php else: ?>
            <form action="<?php echo e(route('todo.update', $todo->id)); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <input type="text" name="completed" value="0" hidden>
                <button class="btn btn-success" style="margin-right:12px;">Marquer comme non-terminer</button>
                </form>
            <?php endif; ?>


            <button type="button" class="border-0 bg-transparent p-2" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="far fa-eye"></i>
              </button>
            
             <a class="inline-block" href="<?php echo e(route('todo.edit', $todo->id)); ?>">
            <i class="far fa-edit"></i>
             </a> 

            <form action="<?php echo e(route('todo.destroy', $todo->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
            <button class="border-0 bg-transparent p-2"><i class="fas fa-trash"></i></button>
            </form>

        </div>
       </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
     </div>
    </div>


     <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Description:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($todo->description); ?> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>
  </div> 


</div>
<?php $__env->stopSection(); ?>

  

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\DevWeb\Laravel\IIM-A2-laravel-contact-list-exo\resources\views/home.blade.php ENDPATH**/ ?>