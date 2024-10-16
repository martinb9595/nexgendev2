

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7 justify-content-center">
		<div class="page-leftheader text-center">
			<h4 class="page-title mb-0"> <?php echo e(__('Logos Manager')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-globe mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Frontend Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Logos')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>					
	<div class="row justify-content-center">
		<div class="col-lg-6 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
				
					<form action="<?php echo e(route('admin.settings.appearance.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
						<h6 class="fs-12 font-weight-bold mb-5 plan-title-bar mt-3"><?php echo e(__('Frontend Logos')); ?></h6>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Frontend Logo')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box border">
											<img src="<?php echo e(URL::asset($settings->logo_frontend)); ?>" alt="Frontend Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Logo')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="240px by 70px" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="logo_frontend" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['logo_frontend'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('logo_frontend')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Frontend Footer Logo')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box border">
											<img src="<?php echo e(URL::asset($settings->logo_frontend_footer)); ?>" alt="Frontend Footer Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Logo')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="240px by 70px" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="logo_frontend_footer" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['logo_frontend_footer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('logo_frontend_footer')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Frontend Collapsed')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box border">
											<img src="<?php echo e(URL::asset($settings->logo_frontend_collapsed)); ?>" alt="Frontend Collapsed Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Logo')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="240px by 70px" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="logo_frontend_collapsed" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['logo_frontend_collapsed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('logo_frontend_collapsed')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Favicon')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box">
											<img src="<?php echo e(URL::asset('uploads/logo/favicon.ico')); ?>" class="border w-20 mt-3" alt="Favicon Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Favicon')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="32px by 32px ICO Format" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="favicon_logo" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['favicon_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('favicon_logo')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<h6 class="fs-12 font-weight-bold mb-5 plan-title-bar mt-6"><?php echo e(__('Dashboard Logos')); ?></h6>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Dashboard Logo')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box border">
											<img src="<?php echo e(URL::asset($settings->logo_dashboard)); ?>" alt="Dashboard Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Logo')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="240px by 70px" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="logo_dashboard" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['logo_dashboard'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('logo_dashboard')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Dashboard Dark Logo')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box border">
											<img src="<?php echo e(URL::asset($settings->logo_dashboard_dark)); ?>" alt="Dashboard Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Logo')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="240px by 70px" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="logo_dashboard_dark" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['logo_dashboard_dark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('logo_dashboard_dark')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Dashboard Collapsed')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box border">
											<img src="<?php echo e(URL::asset($settings->logo_dashboard_collapsed)); ?>" alt="Dashboard Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Logo')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="240px by 70px" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="logo_dashboard_collapsed" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['logo_dashboard_collapsed'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('logo_dashboard_collapsed')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<div class="card shadow-0">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Dashboard Collapsed Dark')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-5">
										<div class="input-box border">
											<img src="<?php echo e(URL::asset($settings->logo_dashboard_collapsed_dark)); ?>" alt="Dashboard Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-7">
										<div class="input-box">
											<label class="form-label fs-12"><?php echo e(__('Select Logo')); ?> <span class="text-muted">(<?php echo e(__('Recommended Size')); ?>)</span></label>
											<div class="input-group file-browser">									
												<input type="text" class="form-control border-right-0 browse-file" placeholder="240px by 70px" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="logo_dashboard_collapsed_dark" style="display: none;">
													</span>
												</label>
											</div>
											<?php $__errorArgs = ['logo_dashboard_collapsed_dark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('logo_dashboard_collapsed_dark')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div>
									</div>					

								</div>
							</div>
						</div>

						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-center mb-2 mt-1">
							<button type="submit" class="btn btn-primary pl-8 pr-8 ripple"><?php echo e(__('Save')); ?></button>							
						</div>				

					</form>

				</div>
			</div>
		</div>
	</div>	
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- File Uploader -->
	<script src="<?php echo e(theme_url('js/avatar.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viralhub/public_html/nexgen.to/resources/views/default/admin/frontend/appearance/index.blade.php ENDPATH**/ ?>