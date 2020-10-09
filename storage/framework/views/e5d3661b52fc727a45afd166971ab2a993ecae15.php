;

<?php $__env->startSection('content'); ?>;
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- TODO href de la balise <a> pour pointer vers la route de création de contact -->
                <a class="btn btn-primary float-right" href="<?php echo e(route('contacts.create')); ?>">Ajouter un contact</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du contact</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- TODO : Début de la boucle -->
                    <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($contact->id); ?></td>
                        <td><?php echo e($contact->name); ?></td>
                        <td><?php echo e($contact->tel); ?></td>
                        <td><?php echo e($contact->email); ?></td>

                        <td>
                            <!-- TODO href de la balise <a> pour pointer vers la route de modification du contact -->
                            <a class="btn btn-primary" href="<?php echo e(route('contacts.edit', $contact->id)); ?>">Modifier</a>


                            <a class="btn btn-danger" onclick="document.getElementById('delete-form-<?php echo e($contact->id); ?>').submit()">Supprimer</a>
                            <form id="delete-form-<?php echo e($contact->id); ?>" method='post' action="<?php echo e(route('contacts.destroy', $contact->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <!-- TODO Form pour la suppression d'un contact -->

                            </form>
                        </td>
                    </tr>
                    <!-- TODO : Conditions pas de contact -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td>Vous n'avez pas encore de contact</td>
                    </tr>
                    <!-- TODO : FIN Boucle -->
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\DevWeb\Laravel\IIM-A2-laravel-contact-list-exo\resources\views/contacts/index.blade.php ENDPATH**/ ?>