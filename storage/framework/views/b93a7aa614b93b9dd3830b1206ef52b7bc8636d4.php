<div class="container">
    <div class="container-fluid project-containter-padding justify-content-center project-row ">
        <?php $__currentLoopData = $projectList['project']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($project['id'] <= 6): ?>
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
                    <div class="project-design">
                        <button type="button" class="btn btn-outline-dark" data-toggle="modal"
                                data-target="#projectNR-<?php echo e($project['id']); ?>">Design
                            <i class="far fa-object-ungroup"></i>
                        </button>
                    </div>
                    <div class="project-code">
                        <?php if(!empty($project['github'])): ?>
                            <a href="<?php echo e($project['github']); ?>">
                                <button class="btn btn-outline-dark">Public
                                    <i class="fab fa-git"></i>
                                </button>
                            </a>
                        <?php else: ?>

                            <button class="btn btn-outline-dark" disabled>Private
                                <i class="fab fa-git"></i>
                            </button>
                        <?php endif; ?>
                    </div>

                </div>

            <?php//Off for public atm @include('templates.project-modal')?>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="col-12 project-more">And lots <a class="details-button" href="https://github.com/sarziv">more</a>!</div>
</div>

<?php /**PATH /home/vagrant/Portfolio_black/resources/views/templates/project-template.blade.php ENDPATH**/ ?>