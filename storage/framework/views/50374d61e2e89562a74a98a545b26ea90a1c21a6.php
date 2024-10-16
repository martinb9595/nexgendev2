

<?php $__env->startSection('page-header'); ?>
<!-- PAGE HEADER -->
<div class="page-header mt-5-7 justify-content-center">
	<div class="page-leftheader text-center">
		<h4 class="page-title mb-0"><i class="text-primary mr-2 fs-16 fa-solid fa-rectangles-mixed"></i><?php echo e(__('Integrations')); ?></h4>
		<h6 class="text-muted"><?php echo e(__('Posts your contents directly to your favorite CMS')); ?></h6>
		<ol class="breadcrumb mb-2 justify-content-center">
			<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-id-badge mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Integrations')); ?></a></li>
		</ol>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row justify-content-center">
		<div class="col-lg-10 col-md-12 col-sm-12">
			<div class="card border-0">				
				<div class="card-body pt-5">
					<form class="w-100" action="<?php echo e(route('user.integration.update', $id)); ?>" method="POST" enctype="multipart/form-data">
						<?php echo method_field('PUT'); ?>
						<?php echo csrf_field(); ?>
						<div class="row justify-content-center">	

							<div class="col-lg-5 col-md-8 col-sm-12">

								<div class="text-center mt-5">
									<img class="mb-4" style="max-width: 9rem" src="<?php echo e(theme_url($id->logo)); ?>" alt="">	
								</div>								

								<p class="fs-14 text-muted text-center mb-7"><?php echo e(__('Provide your')); ?> <?php echo e(__($id->app)); ?> <?php echo e(__('connection informaiton')); ?></p>

								<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-12">													
										<div class="input-box">								
											<h6><?php echo e(__($field['title'])); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" name="<?php echo e($field['name']); ?>" 
												<?php if(!is_null($credentials)): ?>
													<?php $__currentLoopData = $credentials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$credential): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php if($field['name'] == $key): ?>
															value="<?php echo e($credential); ?>"
														<?php endif; ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>
												required>
											</div> 
										</div> 
									</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="input-box">										
										<div class="form-group mt-3">
											<label class="custom-switch">
												<input type="checkbox" name="status" class="custom-switch-input" <?php if(!is_null($current) && $current->status): ?> checked <?php endif; ?>>
												<span class="custom-switch-indicator"></span>
												<span class="ml-2"><?php echo e(__('Activate')); ?></span>
											</label>
										</div>
									</div>
								</div>

								<div class="col-sm-12 text-center mb-5">
									<button type="submit" class="btn btn-primary ripple pl-8 pr-8"><?php echo e(__('Save')); ?></button>	
								</div>	
							</div>					
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viralhub/public_html/nexgen.to/resources/views/default/user/integration/edit.blade.php ENDPATH**/ ?>