<div class="container-fluid project-containter-padding justify-content-center project-row ">
    <?php $__currentLoopData = $projectList['project']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-sm-3 project-card">
            <div class="project-title">
                <?php echo e($project['name']); ?>

            </div>

            <div class="project-details">
                <?php echo e($project['details']); ?>

            </div>
            <div class="project-tags">
                Tags:
                <?php $__currentLoopData = $project['tags']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tagList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-inline bill">
                        <span class="badge badge-pill badge-light"><?php echo e($tagList); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="project-code">
               <button class="btn btn-outline-dark">Code
                   <i class="fab fa-git"></i>
               </button>
        </div>
            <div class="project-design">
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#projectNR-<?php echo e($project['id']); ?>">Design
                    <i class="far fa-object-ungroup"></i>
                </button>
            </div>
        </div>
        <?php echo $__env->make('templates.project-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH /home/vagrant/Portfolio_black/resources/views/templates/project-template.blade.php ENDPATH**/ ?>