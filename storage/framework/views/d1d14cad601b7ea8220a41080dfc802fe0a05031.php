

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER-->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Admin Dashboard')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-chart-tree-map mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Dashboard')); ?></a></li>
			</ol>
		</div>
	</div>
	<!--END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="card border-0 pb-0 dashboard-fixed-457" id="admin-dashboard-panels">
				<div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-badge-dollar mr-2 text-muted"></i><?php echo e(__('Total Earnings')); ?></h3>
					</div>
				</div>
				<div class="card-body pt-2 pb-0">

					<div class="row">
						
						<div class="col-lg-3 col-md-4 col-sm-12">
							<div class="mb-6">
								<h2 class="mb-1"><span class="number-font fs-20"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_monthly['income_current_month'][0]['data'], 2)); ?></span><h2>
								<p class="text-muted fs-11 mb-2"> <?php echo e(__('Current Month Earnings')); ?></p>
								<p class="text-muted fs-11 data-percentage-change mb-2"><span id="income_change"></span> <?php echo e(__('this month vs last')); ?></p>
							</div>
							<div class="mb-6">
								<h2 class="mb-1"><span class="number-font fs-20"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_monthly['income_past_month'][0]['data'], 2)); ?></span><h2>
								<p class="text-muted fs-11 mb-2"> <?php echo e(__('Last Month Earnings')); ?></p>
							</div>
							<div>
								<h2 class="mb-1"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['new_subscribers_current_month'])); ?></span><h2>
								<p class="text-muted fs-11 mb-2"> <?php echo e(__('New Subscribers')); ?></p>
								<p class="text-muted fs-11 data-percentage-change mb-2"><span id="subscribers_change"></span> <?php echo e(__('this month vs last')); ?></p>
							</div>
						</div>

						<div class="col-lg-9 col-md-8 col-sm-12">
							<div style="max-height: 270px">
								<span class="fs-10 text-muted" style="position: absolute; right: 1.5rem; top: -10px;"><?php echo e(__('Current Year')); ?></span>
								<canvas id="yearlyEarningsChart" style="height: 270px"></canvas>
							</div>
						</div>

						<div class="col-sm-12 mt-5">
							<div class="row">
								<div class="col-lg-4 p-5 dashboard-box-border-top dashboard-box-border-right">
									<div class="text-center">
										<h6 class="fs-12 text-muted"><?php echo e(__('Total Earnings')); ?></h6>
										<h6 class="mb-0 fs-14 font-weight-semibold"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_yearly['total_income'][0]['data'], 2)); ?></h6>
									</div>
								</div>
								<div class="col-lg-4 p-5 dashboard-box-border-top dashboard-box-border-right">
									<div class="text-center">
										<h6 class="fs-12 text-muted"><?php echo e(__('Referral Earnings')); ?></h6>
										<h6 class="mb-0 fs-14 font-weight-semibold"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_yearly['referral_earnings'][0]['data'], 2)); ?></h6>
									</div>
								</div>
								<div class="col-lg-4 p-5 dashboard-box-border-top">
									<div class="text-center">
										<h6 class="fs-12 text-muted"><?php echo e(__('Referral Payouts')); ?></h6>
										<h6 class="mb-0 fs-14 font-weight-semibold"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format((float)$total_data_yearly['referral_payouts'][0]['data'], 2)); ?></h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 col-sm-12">
			<div class="card border-0 pb-0 dashboard-fixed-457" id="admin-dashboard-panels">
				<div class="card-header pt-4 pb-0 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-cloud-word mr-2 text-muted"></i><?php echo e(__('Words Generated')); ?></h3>
					</div>
				</div>
				<div class="card-body pt-2 pb-0">
					<div class="row">						
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div>								
								<div id="chartdiv" class="h-330"></div>							
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 text-center">
							<div class="text-center">
								<h6 class="fs-12 text-muted"><?php echo e(__('Current Month Words')); ?></h6>
								<h6 class="mb-0 fs-14 font-weight-semibold"><?php echo e(number_format($total_data_monthly['words_current_month'])); ?></h6>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 text-center">
							<div class="text-center">
								<h6 class="fs-12 text-muted"><?php echo e(__('Last Month Words')); ?></h6>
								<h6 class="mb-0 fs-14 font-weight-semibold"><?php echo e(number_format($total_data_monthly['words_past_month'])); ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

	<div class="row">
		<div class="col-lg-4 col-md-12 col-sm-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-700"><?php echo e(__('Total Transactions')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['transactions_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="transactions_change"></span> <?php echo e(__('this month')); ?></span></h2>

						</div>
						<span class="fs-40 text-primary mt-m1"><i class="fa-solid fa-file-invoice-dollar"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['transactions_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['transactions_generated'][0]['data'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-700"><?php echo e(__('Total Documents Created')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['contents_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="contents_change"></span> <?php echo e(__('this month')); ?></span></h2>

						</div>
						<span class="fs-40 text-yellow mt-m1"><i class="fa-solid fa-folder-grid"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['contents_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['contents_generated'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12 mt-3">
			<div class="card overflow-hidden border-0">
				<div class="card-body">
					<div class="d-flex align-items-end justify-content-between">
						<div>
							<p class=" mb-3 fs-12 font-weight-700"><?php echo e(__('Total Images Generated')); ?> <span class="text-muted">(<?php echo e(__('Current Month')); ?>)</span></p>
							<h2 class="mb-0"><span class="number-font fs-20"><?php echo e(number_format($total_data_monthly['images_current_month'])); ?></span><span class="ml-2 text-muted fs-11 data-percentage-change"><span id="images_change"></span> <?php echo e(__('this month')); ?></span></h2>
						</div>
						<span class="fs-40 mt-m1"><i class="fa-solid fa-image-landscape"></i></span>
					</div>
					<div class="d-flex mt-2">
						<div>
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Last Month')); ?></span>
							<span class="number-font fs-11"><i class="fa fa-chain mr-1 text-success"></i><?php echo e(number_format($total_data_monthly['images_past_month'])); ?></span>
						</div>
						<div class="ml-auto">
							<span class="text-muted fs-11 mr-1"><?php echo e(__('Total')); ?> (<?php echo e(__('Current Year')); ?>)</span>
							<span class="number-font fs-11"><i class="fa fa-bookmark mr-1 text-success"></i><?php echo e(number_format($total_data_yearly['images_generated'])); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>				
	</div>	

	<div class="row">
		<div class="col-lg-3 col-md-4 col-sm-12 mt-3">
			<div class="card overflow-hidden border-0 dashboard-fixed-457" id="admin-dashboard-panels">
				<div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-users-viewfinder mr-2 text-muted"></i><?php echo e(__('Users vs Subscribers')); ?></h3>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div style="position: relative">
								<div class="mt-4">
									<canvas id="userDoughnut" class="h-330"></canvas>
								</div>
								<h6 class="text-center dashboard-center-text"><span class="text-muted fs-12"><?php echo e(__('Total Users')); ?></span><br><span class="fs-14 font-weight-semibold"><?php echo e(number_format($total_data_yearly['total_users'])); ?></span></h6>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-12 mt-3">
			<div class="card overflow-hidden border-0 dashboard-fixed-457" id="admin-dashboard-panels">
				<div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-browser mr-2 text-muted"></i><?php echo e(__('User Traffic')); ?></h3>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="mt-4">
								<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
									<div id="ga-preloader" style="position: absolute; left: 48%; top: 40%;"></div>
									<canvas id="trafficDoughnut" class="h-330"></canvas>
								<?php else: ?>
									<h6 class="text-center fs-12 text-muted justify-content-center"><?php echo e(__('GA 4 is not configured yet')); ?></h6>
								<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-12 mt-3">
			<div class="card border-0 dashboard-fixed-457" id="admin-dashboard-panels" style="max-height: 457px;">
				<div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-earth-americas mr-2 text-muted"></i><?php echo e(__('Top Countries')); ?></h3>
					</div>
				</div>
				<div class="card-body" style="overflow-y: scroll">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div>
								<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
									<div id="ga-preloader-3" style="position: absolute; left: 48%; top: 40%;"></div>
									<ul id="countryList"></ul>
								<?php else: ?>
									<h6 class="text-center fs-12 text-muted justify-content-center"><?php echo e(__('GA 4 is not configured yet')); ?></h6>
								<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-sm-12 mt-3 no-gutters">
			<div class="col-sm-12 no-gutters">
				<div class="card border-0 text-center">
					<div class="card-header pt-3 pb-1 border-0 justify-content-center">
						<div class="mt-2 mb-0 text-center">
							<h3 class="card-title mb-0 text-center font-weight-semibold"><?php echo e(__('Average Session Duration')); ?></h3>
							<span class="fs-10 text-muted">(<?php echo e(__('Last 30 Days')); ?>)</span>
						</div>
					</div>
					<div class="card-body pb-2" style="overflow-y: scroll">
						<div>
							<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
								<div class="ga-preloader" style="position: absolute; left: 48%; top: -50%;"></div>
								<h6 class="text-muted" id="google_average_session"></h6>
							<?php else: ?>
								<h6 class="text-center fs-12 text-muted justify-content-center"><?php echo e(__('GA 4 is not configured yet')); ?></h6>
							<?php endif; ?>							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 no-gutters">
				<div class="card border-0 text-center">
					<div class="card-header pt-3 pb-1 border-0 justify-content-center">
						<div class="mt-2 mb-0 text-center">
							<h3 class="card-title mb-0 text-center font-weight-semibold"><?php echo e(__('Bounce Rate')); ?></h3>
							<span class="fs-10 text-muted">(<?php echo e(__('Last 30 Days')); ?>)</span>
						</div>
					</div>
					<div class="card-body pb-2" style="overflow-y: scroll">
						<div>
							<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
								<div class="ga-preloader" style="position: absolute; left: 48%; top: -50%;"></div>
								<h6 class="text-muted" id="google_bounce_rate"></h6>
							<?php else: ?>
								<h6 class="text-center fs-12 text-muted justify-content-center"><?php echo e(__('GA 4 is not configured yet')); ?></h6>
							<?php endif; ?>							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 no-gutters">
				<div class="card border-0 text-center">
					<div class="card-header pt-3 pb-1 border-0 justify-content-center">
						<div class="mt-2 mb-0 text-center">
							<h3 class="card-title mb-0 text-center font-weight-semibold"><?php echo e(__('Sessions')); ?></h3>
							<span class="fs-10 text-muted">(<?php echo e(__('Last 30 Days')); ?>)</span>
						</div>
					</div>
					<div class="card-body pb-2" style="overflow-y: scroll">
						<div>
							<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
								<div class="ga-preloader" style="position: absolute; left: 48%; top: -50%;"></div>
								<h6 class="text-muted" id="google_sessions"></h6>								
							<?php else: ?>
								<h6 class="text-center fs-12 text-muted justify-content-center"><?php echo e(__('GA 4 is not configured yet')); ?></h6>
							<?php endif; ?>							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 no-gutters">
				<div class="card border-0 text-center">
					<div class="card-header pt-3 pb-1 border-0 justify-content-center">
						<div class="mt-2 mb-0 text-center">
							<h3 class="card-title mb-0 text-center font-weight-semibold"><?php echo e(__('Views per Session')); ?></h3>
							<span class="fs-10 text-muted">(<?php echo e(__('Last 30 Days')); ?>)</span>
						</div>
					</div>
					<div class="card-body pb-2" style="overflow-y: scroll">
						<div>
							<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
								<div class="ga-preloader" style="position: absolute; left: 48%; top: -50%;"></div>
								<h6 class="text-muted" id="google_session_views"></h6>								
							<?php else: ?>
								<h6 class="text-center fs-12 text-muted justify-content-center"><?php echo e(__('GA 4 is not configured yet')); ?></h6>
							<?php endif; ?>							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
			<div class="card overflow-hidden border-0 dashboard-fixed-457" id="admin-dashboard-panels">
				<div class="card-header d-inline pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-earth-americas mr-2 text-muted"></i><?php echo e(__('Users and Sessions')); ?></h3>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="">
								<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
									<div id="ga-preloader-2" style="position: absolute; left: 48%; top: 40%;"></div>
									<canvas id="chart-total-users-year" class="h-330"></canvas>
								<?php else: ?>
									<h6 class="text-center fs-12 text-muted justify-content-center"><?php echo e(__('GA 4 is not configured yet')); ?></h6>
								<?php endif; ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-lg col-md-12 col-sm-12 mt-3">
			<div class="card border-0 pb-5" id="admin-dashboard-panels">
				<div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-money-check-pen mr-2 text-muted"></i><?php echo e(__('Latest Registrations')); ?></h3>
						<div class="btn-group dashboard-menu-button">
							<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="export" data-bs-display="static" aria-expanded="false"><i class="fa-solid fa-ellipsis  table-action-buttons table-action-buttons-big edit-action-button"></i></button>
							<div class="dropdown-menu" aria-labelledby="export" data-popper-placement="bottom-start">								
								<a class="dropdown-item" href="<?php echo e(route('admin.user.list')); ?>"><?php echo e(__('View All')); ?></a>	
							</div>
						</div>
					</div>
				</div>
			
				<div class="col-sm-12 pl-6 pr-6">
					<div class="dashboard-3-column">
						<div class="font-weight-semibold text-muted fs-12"><?php echo e(__('User')); ?></div>
						<div class="text-right mr-4 font-weight-semibold text-muted fs-12"><?php echo e(__('Status')); ?></div>
						<div class="text-right mr-5 font-weight-semibold text-muted fs-12"><?php echo e(__('Date')); ?></div>
					</div>
				</div>
							
				<div class="card-body pt-2 height-400">

					<div class="row">
						
						<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-12">					
								<div class="card" onclick="window.location.href='<?php echo e(url('app/admin/users/'.$data->id.'/show')); ?>'">
									<div class="card-body pt-2 pb-2 pl-4 pr-4 dashboard-3-column">
										<div class="template-icon">
											<?php if($data->profile_photo_path): ?>
												<div class="d-flex">
													<div class="widget-user-image-sm overflow-hidden mr-4"><img alt="Avatar" src="<?php echo e($data->profile_photo_path); ?>"></div>
													<div class="widget-user-name fs-12"><span class="font-weight-semibold"><?php echo e($data->name); ?></span><br><span class="text-muted"><?php echo e($data->email); ?></span></div>
												</div>
											<?php else: ?>
												<div class="d-flex">
													<div class="widget-user-image-sm overflow-hidden mr-4"><img alt="Avatar" class="rounded-circle" src="<?php echo e(theme_url('img/users/avatar.png')); ?>"></div>
													<div class="widget-user-name fs-12"><span class="font-weight-semibold"><?php echo e($data->name); ?></span><br><span class="text-muted"><?php echo e($data->email); ?></span></div>
												</div>
											<?php endif; ?>										
										</div>
										<div class="text-right mb-auto mt-auto">
											<p class="fs-12 mb-0 text-muted"><span class="cell-box user-<?php echo e($data->status); ?>"><?php echo e(__(ucfirst($data->status))); ?></span></p>
										</div>
										<div class="text-right mb-auto mt-auto">
											<p class="fs-10 mb-0 text-muted"><?php echo e(date_format($data->created_at, 'd M Y')); ?><br><span><?php echo e(date_format($data->created_at, 'H:i A')); ?></span></p>
										</div>
									</div>
								</div>													
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
		</div>

		<div class="col-lg col-md-12 col-sm-12 mt-3">
			<div class="card border-0 pb-5" id="admin-dashboard-panels">
				<div class="card-header pt-4 pb-4 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-money-bill-transfer mr-2 text-muted"></i><?php echo e(__('Latest Transactions')); ?></h3>
						<div class="btn-group dashboard-menu-button">
							<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="export" data-bs-display="static" aria-expanded="false"><i class="fa-solid fa-ellipsis  table-action-buttons table-action-buttons-big edit-action-button"></i></button>
							<div class="dropdown-menu" aria-labelledby="export" data-popper-placement="bottom-start">								
								<a class="dropdown-item" href="<?php echo e(route('admin.finance.transactions')); ?>"><?php echo e(__('View All')); ?></a>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 pl-6 pr-6">
					<div class="dashboard-3-column">
						<div class="font-weight-semibold text-muted fs-12"><?php echo e(__('Plan')); ?></div>
						<div class="text-right font-weight-semibold text-muted fs-12"><?php echo e(__('Price')); ?></div>
						<div class="text-right font-weight-semibold text-muted fs-12"><?php echo e(__('Gateway')); ?></div>
						<div class="text-right mr-4 font-weight-semibold text-muted fs-12"><?php echo e(__('Status')); ?></div>
						<div class="text-right mr-5 font-weight-semibold text-muted fs-12"><?php echo e(__('Date')); ?></div>
					</div>
				</div>
				<div class="card-body pt-2 height-400">

					<div class="row">
						
						<?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-sm-12">					
								<div class="card" onclick="window.location.href='<?php echo e(url('app/admin/finance/transaction/'.$data->id.'/show')); ?>'">
									<div class="card-body pt-2 pb-2 pl-4 pr-4 dashboard-3-column">
										<div class="template-icon">
											<div class="fs-12">
												<p class="font-weight-semibold fs-12 mb-0"><?php echo e($data->plan_name); ?></p>
												<p class="text-muted fs-10 mb-0"><?php echo e(ucfirst($data->frequency)); ?> <?php echo e(__('Plan')); ?></p>
											</div>								
										</div>
										<div class="text-right mb-auto mt-auto">
											<p class="fs-12 mb-0 text-muted"><?php echo config('payment.default_system_currency_symbol'); ?><?php echo e(number_format($data->price)); ?></p>
										</div>
										<div class="text-right mb-auto mt-auto">
											<p class="fs-12 mb-0 text-muted"><?php echo e($data->gateway); ?></p>
										</div>
										<div class="text-right mb-auto mt-auto">
											<p class="fs-12 mb-0 text-muted"><?php echo e(__(ucfirst($data->status))); ?></p>
										</div>
										<div class="text-right mb-auto mt-auto">
											<p class="fs-10 mb-0 text-muted"><?php echo e(date_format($data->created_at, 'd M Y')); ?><br><span><?php echo e(date_format($data->created_at, 'H:i A')); ?></span></p>
										</div>
									</div>
								</div>													
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<?php if(config('settings.user_support') == 'enabled'): ?>
			<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
				<div class="card border-0 pb-4">
					<div class="card-header pt-4 pb-0 border-0">
						<div class="mt-3">
							<h3 class="card-title mb-2"><i class="fa-solid fa-headset mr-2 text-muted"></i><?php echo e(__('Support Tickets')); ?></h3>
							<div class="btn-group dashboard-menu-button">
								<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="export" data-bs-display="static" aria-expanded="false"><i class="fa-solid fa-ellipsis  table-action-buttons table-action-buttons-big edit-action-button"></i></button>
								<div class="dropdown-menu" aria-labelledby="export" data-popper-placement="bottom-start">								
									<a class="dropdown-item" href="<?php echo e(route('admin.support')); ?>"><?php echo e(__('View All')); ?></a>	
								</div>
							</div>
						</div>
					</div>
					<div class="card-body pt-2 height-400">
						<table class="table table-hover" id="database-backup">
							<thead>
								<tr role="row">
									<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('Ticket ID')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0 text-left"><?php echo e(__('Subject')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0 text-center"><?php echo e(__('Category')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0 text-center"><?php echo e(__('Status')); ?></th>
									<th class="fs-12 font-weight-700 border-top-0 text-right"><?php echo e(__('Last Updated')); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr class="relative" style="height: 60px">
									<td><a class="font-weight-bold text-primary" href="<?php echo e(route("admin.support.show", $data->ticket_id )); ?>"><?php echo e($data->ticket_id); ?></a>
									</td>
									<td class="text-left text-muted"><?php echo e(ucfirst($data->subject)); ?></td>
									<td class="text-center text-muted"><?php echo e(ucfirst($data->category)); ?></td>
									<td class="text-center"><span class="cell-box support-<?php echo e(strtolower($data->status)); ?>"><?php echo e(__(ucfirst($data->status))); ?></span></td>
									<td class="text-right text-muted"><?php echo e(\Carbon\Carbon::parse($data->updated_at)->diffForHumans()); ?></td>
									<td class="w-0 p-0" colspan="0">
										<a class="strage-things" style="position: absolute; inset: 0px; width: 100%" href="<?php echo e(route("admin.support.show", $data->ticket_id )); ?>"><span class="sr-only"><?php echo e(__('View')); ?></span></a>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>					
					</div>
				</div>                      
			</div> 
		<?php endif; ?>  

		<div class="col-lg-6 col-md-6 col-sm-12 mt-3">
			<div class="card border-0 pb-4">
				<div class="card-header pt-4 pb-0 border-0">
					<div class="mt-3">
						<h3 class="card-title mb-2"><i class="fa-solid fa-solid fa-message-exclamation mr-2 text-muted"></i><?php echo e(__('Notifications')); ?></h3>
						<div class="btn-group dashboard-menu-button">
							<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" id="export" data-bs-display="static" aria-expanded="false"><i class="fa-solid fa-ellipsis  table-action-buttons table-action-buttons-big edit-action-button"></i></button>
							<div class="dropdown-menu" aria-labelledby="export" data-popper-placement="bottom-start">								
								<a class="dropdown-item" href="<?php echo e(route('admin.notifications')); ?>"><?php echo e(__('View All')); ?></a>	
							</div>
						</div>
					</div>
				</div>
				<div class="card-body pt-2 dashboard-timeline height-400">					
					<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
						<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="vertical-timeline-item vertical-timeline-element">
								<div>
									<span class="vertical-timeline-element-icon">
										<?php if($notification->data['type'] == 'new-payment'): ?>
											<i class="badge badge-dot badge-dot-xl badge-secondary"> </i>
										<?php elseif($notification->data['type'] == 'new-user'): ?>
											<i class="badge badge-dot badge-dot-xl badge-primary"> </i>
										<?php elseif($notification->data['type'] == 'payout-request'): ?>
											<i class="badge badge-dot badge-dot-xl badge-success"> </i>
										<?php else: ?>
											<i class="badge badge-dot badge-dot-xl badge-warning"> </i>
										<?php endif; ?>
										
									</span>
									<div class="vertical-timeline-element-content">
										<h4 class="fs-13"><a href="<?php echo e(route("admin.notifications.systemShow", $notification->id)); ?>">
											<?php if($notification->data['type'] == 'new-payment'): ?>
												<b><?php echo e(__('Payment')); ?>:</b>
											<?php elseif($notification->data['type'] == 'new-user'): ?>
												<b><?php echo e(__('Registration')); ?>:</b>
											<?php elseif($notification->data['type'] == 'payout-request'): ?>
												<b><?php echo e(__('Payout')); ?>:</b>
											<?php endif; ?>
											</a> <?php echo e(__($notification->data['subject'])); ?></h4>
										<p><span class="text-muted fs-12"><?php echo e(__('User Info')); ?>: <?php echo e(__($notification->data['name'])); ?> | <?php echo e(__($notification->data['email'])); ?></span></p>
										<span class="vertical-timeline-element-date text-center"><?php echo e(\Carbon\Carbon::parse($notification->created_at)->format('M d, Y')); ?> <br> <?php echo e(\Carbon\Carbon::parse($notification->created_at)->format('H:i A')); ?></span>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>											  					
				</div>
			</div>                      
		</div>  
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Chart JS -->
	<script src="<?php echo e(URL::asset('plugins/chart/chart.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('plugins/googlemaps/loader.js')); ?>"></script>
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
	<script type="text/javascript">
		let loading = `<span class="loading">
						<span style="background-color: #1e1e2d;"></span>
						<span style="background-color: #1e1e2d;"></span>
						<span style="background-color: #1e1e2d;"></span>
						</span>`;
		$(function() {

			"use strict";

			var monthlyEarnings = JSON.parse(`<?php echo $chart_data['monthly_earnings']; ?>`);
			var monthlyEarningsDataset = Object.values(monthlyEarnings);

			// FINANCE REVENUE TABLE
			let chartColor = "#FFFFFF";
			let gradientChartOptionsConfiguration = {
				maintainAspectRatio: false,
				plugins: {
					legend: {
						display: false,
					},
					tooltip: {
						titleAlign: 'center',
						bodySpacing: 4,
						mode: "nearest",
						intersect: 0,
						position: "nearest",
						xPadding: 20,
						yPadding: 20,
						caretPadding: 20
					},
				},			
				responsive: true,
				scales: {
					y: {
						display: 1,
						grid: 0,
						ticks: {
							display: true,
							padding: 10,
							beginAtZero: true,
							stepSize: 500,
							color: '#b7bdc9',
							font: {
                        		size: 10
                    		},
						},
						grid: {
							zeroLineColor: "transparent",
							drawTicks: false,
							display: false,
							drawBorder: false,
						}
					},
					x: {
						display: 1,
						grid: 0,
						ticks: {
							display: true,
							padding: 10,
							beginAtZero: true,
							color: '#b7bdc9',
							font: {
                        		size: 10
                    		},
						},
						grid: {
							zeroLineColor: "transparent",
							drawTicks: false,
							display: false,
							drawBorder: false,
						}
					}
				},
				layout: {
					padding: {
						left: 0,
						right: -10,
						top: 0,
						bottom: -10
					}
				},
				elements: {
					line: {
						tension : 0.4
					},
				},
			};

			let ctx2 = document.getElementById('yearlyEarningsChart').getContext("2d");
			let gradientStroke = ctx2.createLinearGradient(500, 0, 100, 0);
			gradientStroke.addColorStop(0, '#18ce0f');
			gradientStroke.addColorStop(1, chartColor);
			let gradientFill = ctx2.createLinearGradient(0, 170, 0, 50);
			gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
			gradientFill.addColorStop(1, "rgba(24,206,15, 0.4)");
			let myChart = new Chart(ctx2, {
				type: 'line',
				data: {
					labels: ['<?php echo e(__('Jan')); ?>', '<?php echo e(__('Feb')); ?>', '<?php echo e(__('Mar')); ?>', '<?php echo e(__('Apr')); ?>', '<?php echo e(__('May')); ?>', '<?php echo e(__('Jun')); ?>', '<?php echo e(__('Jul')); ?>', '<?php echo e(__('Aug')); ?>', '<?php echo e(__('Sep')); ?>', '<?php echo e(__('Oct')); ?>', '<?php echo e(__('Nov')); ?>', '<?php echo e(__('Dec')); ?>'],
					datasets: [{
						label: "<?php echo e(__('Earnings')); ?>",
						borderColor: "#18ce0f",
						pointBorderColor: "#FFF",
						pointBackgroundColor: "#18ce0f",
						pointBorderWidth: 1,
						pointHoverRadius: 4,
						pointHoverBorderWidth: 1,
						pointRadius: 2,
						fill: true,
						backgroundColor: gradientFill,
						borderWidth: 2,
						data: monthlyEarningsDataset
					}]
				},
				options: gradientChartOptionsConfiguration
			});


			$(document).ready(function() {

				<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
					$.ajax({
						headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
						method: 'GET',
						url: '/app/admin/dashboard/analytics',
						beforeSend: function() {
							let btn = document.getElementById('ga-preloader');					       
							btn.innerHTML = loading;  
							let btn2 = document.getElementById('ga-preloader-2');					       
							btn2.innerHTML = loading;
							let btn3 = document.getElementById('ga-preloader-3');					       
							btn3.innerHTML = loading;  
							var elements = document.getElementsByClassName("ga-preloader");
							for (var i = 0; i < elements.length; i++) {elements[i].innerHTML = loading;}      
						},
						complete: function() {
							let btn = document.getElementById('ga-preloader');					
							btn.innerHTML = ''; 
							let btn2 = document.getElementById('ga-preloader-2');					       
							btn2.innerHTML = ''; 
							let btn3 = document.getElementById('ga-preloader-3');					       
							btn3.innerHTML = ''; 
							var elements = document.getElementsByClassName("ga-preloader");
							for (var i = 0; i < elements.length; i++) {elements[i].innerHTML = ''}              
						},
						success: function (data) {

							if (data['status'] == 200) {
								
								<?php if(!empty(config('services.google.analytics.property')) && !empty(config('services.google.analytics.credentials'))): ?>
									// GA USERS
									var usersData = JSON.parse(data['google_users']);
									var userSessionsData = JSON.parse(data['google_user_sessions']);
									var usersDataset = Object.values(usersData);
									var userSessionsDataset = Object.values(userSessionsData);

									let usersOptionsConfiguration = {
										maintainAspectRatio: false,
										plugins: {
											legend: {
												display: false,
											},
											tooltip: {
												titleAlign: 'center',
												bodySpacing: 4,
												mode: "nearest",
												intersect: 0,
												position: "nearest",
												xPadding: 20,
												yPadding: 20,
												caretPadding: 20
											},
										},			
										responsive: true,
										scales: {
											y: {
												display: 1,
												grid: 0,
												ticks: {
													display: true,
													padding: 10,
													beginAtZero: true,
													stepSize: 50,
													color: '#b7bdc9',
													font: {
														size: 10
													},
												},
												grid: {
													zeroLineColor: "transparent",
													drawTicks: false,
													display: false,
													drawBorder: false,
												}
											},
											x: {
												display: 1,
												grid: 0,
												ticks: {
													display: true,
													padding: 10,
													beginAtZero: true,
													color: '#b7bdc9',
													font: {
														size: 10
													},
												},
												grid: {
													zeroLineColor: "transparent",
													drawTicks: false,
													display: false,
													drawBorder: false,
												}
											}
										},
										layout: {
											padding: {
												left: 0,
												right: 0,
												top: 0,
												bottom: 0	
											}
										},
										elements: {
											line: {
												tension : 0.4
											},
										},
									};

									let ctx3 = document.getElementById('chart-total-users-year').getContext("2d");
									let gradientStroke3 = ctx3.createLinearGradient(500, 0, 100, 0);
									gradientStroke3.addColorStop(0, '#007bff');
									gradientStroke3.addColorStop(1, chartColor);
									let gradientFill3 = ctx3.createLinearGradient(0, 250, 0, 150);
									gradientFill3.addColorStop(0, "rgba(128, 182, 244, 0)");
									gradientFill3.addColorStop(1, "rgba(0, 123, 255, 0.4)");
									let gradientFill4 = ctx3.createLinearGradient(0, 250, 0, 150);
									gradientFill4.addColorStop(0, "rgba(128, 182, 244, 0)");
									gradientFill4.addColorStop(1, "rgba(255, 191, 0, 0.4)");
									let myChart3 = new Chart(ctx3, {
										type: 'line',
										data: {
											labels: usersDataset[0],
											datasets: [{
												label: "<?php echo e(__('Users')); ?>",
												borderColor: "#007bff",
												pointBorderColor: "#FFF",
												pointBackgroundColor: "#007bff",
												pointBorderWidth: 1,
												pointHoverRadius: 4,
												pointHoverBorderWidth: 1,
												pointRadius: 2,
												fill: true,
												backgroundColor: gradientFill3,
												borderWidth: 2,
												data: usersDataset[1]
											},
											{
												label: "<?php echo e(__('Sessions')); ?>",
												borderColor: "#ffab00",
												pointBorderColor: "#FFF",
												pointBackgroundColor: "#ffab00",
												pointBorderWidth: 1,
												pointHoverRadius: 4,
												pointHoverBorderWidth: 1,
												pointRadius: 2,
												fill: true,
												backgroundColor: gradientFill4,
												borderWidth: 2,
												data: userSessionsDataset[1]
											}]
										},
										options: usersOptionsConfiguration
									});
									

									// TRAFFIC SOURCE
									let trafficLabel = JSON.parse(data['traffic_label']);
									let trafficData = JSON.parse(data['traffic_data']);
									let trafficLabelDataset = Object.values(trafficLabel);
									let trafficDataDataset = Object.values(trafficData);
									let trafficDoughnut = document.getElementById('trafficDoughnut');
									new Chart(trafficDoughnut, {
										type: 'doughnut',
										data: {
											labels: trafficLabelDataset,
											datasets: [{
												data: trafficDataDataset,
												backgroundColor: [
													'#1e1e2d',
													'#007bff',
													'#a367dc',
													'#fca639',
													'#52b3ea',
													'#e34a8a',
												],
												hoverOffset: 4,
												weight: 0.001,
												borderWidth: 0
											}]
										},
										options: {
											cutout: 90,
											maintainAspectRatio: false,
											legend: {
												display: false,
												labels: {
													display: false
												}
											},
											responsive: true,
											animation: {
												onComplete: () => {
													delayed3 = true;
												},
												delay: (context) => {
													let delay = 0;
													if (context.type === 'data' && context.mode === 'default' && !delayed3) {
														delay = context.dataIndex * 50 + context.datasetIndex * 5;
													}
													return delay;
												},
											},
											plugins: {
												tooltip: {
													cornerRadius: 2,
													xPadding: 10,
													yPadding: 10,
													backgroundColor: '#000000',
													titleColor: '#FF9D00',
													yAlign: 'bottom',
													xAlign: 'center',
												},
												legend: {
													position: 'bottom',
													labels: {
														boxWidth: 10,
														font: {
															size: 10
														},
													}
												}
											}
										}
									});


									// BOX INFO
									document.getElementById('google_session_views').innerHTML = data['google_session_views'];
									document.getElementById('google_sessions').innerHTML  = data['google_sessions'];
									document.getElementById('google_bounce_rate').innerHTML  = (data['google_bounce_rate'] * 100).toFixed(2) + '%';
									document.getElementById('google_average_session').innerHTML  = data['google_average_session'];

									$('#countryList').append(data['google_countries']).show().fadeIn("slow");

								<?php endif; ?>
							} 	
									
						},
						error: function(data) {
							let btn = document.getElementById('ga-preloader');					
							btn.innerHTML = ''; 
							let btn2 = document.getElementById('ga-preloader-2');					       
							btn2.innerHTML = ''; 
							let btn3 = document.getElementById('ga-preloader-3');					       
							btn3.innerHTML = ''; 
							var elements = document.getElementsByClassName("ga-preloader");
							for (var i = 0; i < elements.length; i++) {elements[i].innerHTML = ''}    
						}
				
					});
				<?php endif; ?>
			});

			

			
			// USER DONUGHNUT CHART
			let userDoughnut = document.getElementById('userDoughnut');
			let delayed3;
			new Chart(userDoughnut, {
				type: 'doughnut',
				data: {
					labels: [
						'<?php echo e(__('Non-Subscribers')); ?>',
						'<?php echo e(__('Subscribers')); ?>',
					],
					datasets: [{
						data: ['<?php echo e($total_data_yearly['total_nonsubscribers']); ?>', '<?php echo e($total_data_yearly['total_subscribers']); ?>'],
						backgroundColor: [
							'#1e1e2d',
							'#007bff',
						],
						hoverOffset: 4,
						weight: 0.001,
						borderWidth: 0
					}]
				},
				options: {
					cutout: 90,
					maintainAspectRatio: false,
					legend: {
						display: false,
						labels: {
							display: false
						}
					},
					responsive: true,
					animation: {
						onComplete: () => {
							delayed3 = true;
						},
						delay: (context) => {
							let delay = 0;
							if (context.type === 'data' && context.mode === 'default' && !delayed3) {
								delay = context.dataIndex * 50 + context.datasetIndex * 5;
							}
							return delay;
						},
					},
					plugins: {
						tooltip: {
							cornerRadius: 2,
							xPadding: 10,
							yPadding: 10,
							backgroundColor: '#000000',
							titleColor: '#FF9D00',
							yAlign: 'bottom',
							xAlign: 'center',
						},
						legend: {
							position: 'bottom',
							labels: {
								boxWidth: 10,
								font: {
									size: 12
								},
								padding: 30
							}
						}
					}
				}
			});

			
			// WORDS GENERATED
			am5.ready(function() {

				var root = am5.Root.new("chartdiv");

				root.setThemes([
				am5themes_Animated.new(root)
				]);

				var chart = root.container.children.push(
				am5percent.PieChart.new(root, {
					startAngle: 160, endAngle: 380
				})
				);

				var series0 = chart.series.push(
				am5percent.PieSeries.new(root, {
					valueField: "documents",
					categoryField: "model",
					startAngle: 160,
					endAngle: 380,
					radius: am5.percent(70),
					innerRadius: am5.percent(65)
				})
				);

				var colorSet = am5.ColorSet.new(root, {
				colors: [series0.get("colors").getIndex(0)],
				passOptions: {
					lightness: -0.05,
					hue: 0
				}
				});

				series0.set("colors", colorSet);

				series0.ticks.template.set("forceHidden", true);
				series0.labels.template.set("forceHidden", true);

				var series1 = chart.series.push(
				am5percent.PieSeries.new(root, {
					startAngle: 160,
					endAngle: 380,
					valueField: "words",
					innerRadius: am5.percent(80),
					categoryField: "model"
				})
				);

				series1.ticks.template.set("forceHidden", true);
				series1.labels.template.set("forceHidden", true);


				var label = chart.seriesContainer.children.push(
				am5.Label.new(root, {
					textAlign: "center",
					centerY: am5.p100,
					centerX: am5.p50,
					text: "[fontSize:12px]<?php echo e(__('Total Words Generated')); ?>[/]\n[bold fontSize:22px]<?php echo e(number_format($total_data_yearly['words_generated'])); ?>[/]"
				})
				);

				var data = [
					{
						model: "GPT 3.5 Turbo",
						words: '<?php echo e($chart_data['gpt3_words']); ?>',
						documents: '<?php echo e($chart_data['gpt3_tasks']); ?>',
					},
					{
						model: "GPT 4",
						words: '<?php echo e($chart_data['gpt4_words']); ?>',
						documents: '<?php echo e($chart_data['gpt4_tasks']); ?>',
					},
					{
						model: "GPT 4o",
						words: '<?php echo e($chart_data['gpt4o_words']); ?>',
						documents: '<?php echo e($chart_data['gpt4o_tasks']); ?>',
					},
					{
						model: "GPT 4 Turbo",
						words: '<?php echo e($chart_data['gpt4t_words']); ?>',
						documents: '<?php echo e($chart_data['gpt4t_tasks']); ?>',
					},
					{
						model: "Claude 3 Opus",
						words: '<?php echo e($chart_data['opus_words']); ?>',
						documents: '<?php echo e($chart_data['opus_tasks']); ?>',
					},
					{
						model: "Claude 3 Sonnet",
						words: '<?php echo e($chart_data['sonnet_words']); ?>',
						documents: '<?php echo e($chart_data['sonnet_tasks']); ?>',
					},
					{
						model: "Claude 3 Haiku",
						words: '<?php echo e($chart_data['haiku_words']); ?>',
						documents: '<?php echo e($chart_data['haiku_tasks']); ?>',
					},
					{
						model: "Gemini Pro",
						words: '<?php echo e($chart_data['gemini_words']); ?>',
						documents: '<?php echo e($chart_data['gemini_tasks']); ?>',
					},
				];

				series0.data.setAll(data);
				series1.data.setAll(data);

			}); 


			// Percentage Difference First Row
			var subscribers_current_month = JSON.parse(`<?php echo $percentage['subscribers_current']; ?>`);	
			var subscribers_past_month = JSON.parse(`<?php echo $percentage['subscribers_past']; ?>`);
			var income_current_month = JSON.parse(`<?php echo $percentage['income_current']; ?>`);	
			var income_past_month = JSON.parse(`<?php echo $percentage['income_past']; ?>`);
			(income_current_month[0]['data'] == null) ? income_current_month = 0 : income_current_month = income_current_month[0]['data'];
			(income_past_month[0]['data'] == null) ? income_past_month = 0 : income_past_month = income_past_month[0]['data'];

			var images_current_month = JSON.parse(`<?php echo $percentage['images_current']; ?>`);
			var images_past_month = JSON.parse(`<?php echo $percentage['images_past']; ?>`);
			var contents_current_month = JSON.parse(`<?php echo $percentage['contents_current']; ?>`);
			var contents_past_month = JSON.parse(`<?php echo $percentage['contents_past']; ?>`);
			var transactions_current_month = JSON.parse(`<?php echo $percentage['transactions_current']; ?>`);
			var transactions_past_month = JSON.parse(`<?php echo $percentage['transactions_past']; ?>`);

			var subscribers_current_total = parseInt(subscribers_current_month);
			var subscribers_past_total = parseInt(subscribers_past_month);
			var income_current_total = parseInt(income_current_month);
			var income_past_total = parseInt(income_past_month);

			var images_current_total = parseInt(images_current_month);
			var images_past_total = parseInt(images_past_month);
			var contents_current_total = parseInt(contents_current_month);
			var contents_past_total = parseInt(contents_past_month);
			var transactions_current_total = parseInt(transactions_current_month);
			var transactions_past_total = parseInt(transactions_past_month);

			var subscribers_change = mainPercentageDifference(subscribers_past_month, subscribers_current_month);
			var income_change = mainPercentageDifference(income_past_month, income_current_month);
			var images_change = mainPercentageDifference(images_past_month, images_current_month);
			var contents_change = mainPercentageDifference(contents_past_month, contents_current_month);
			var transactions_change = mainPercentageDifference(transactions_past_month, transactions_current_month);

			document.getElementById('subscribers_change').innerHTML = subscribers_change;
			document.getElementById('income_change').innerHTML = income_change;
			document.getElementById('images_change').innerHTML = images_change;
			document.getElementById('contents_change').innerHTML = contents_change;
			document.getElementById('transactions_change').innerHTML = transactions_change;

			function mainPercentageDifference(past, current) {
				if (past == 0) {
					var change = (current == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-success"><i class="fa fa-caret-up"></i> 100%</span>';   					
					return change;
				} else if(current == 0) {
					var change = (past == 0) ? '<span class="text-muted"> 0%</span>' : '<span class="text-danger"><i class="fa fa-caret-down"></i> 100%</span>';
					return change;
				} else if(past == current) {
					var change = '<span class="text-muted"> 0%</span>';
					return change; 
				}

				var difference = current - past;
    			var difference_value, result;

				var totalDifference = Math.abs(difference);
				var change = (totalDifference/past) * 100;				

				if (difference > 0) { result = '<span class="text-success"><i class="fa fa-caret-up"></i> ' + change.toFixed(1) + '%</span>'; }
				else if(difference < 0) {result = '<span class="text-danger"><i class="fa fa-caret-down"></i> ' + change.toFixed(1) + '%</span>'; }
				else { difference_value = '<span class="text-muted"> ' + change.toFixed(1) + '%</span>'; }				

				return result;
			}

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viralhub/public_html/nexgen.to/resources/views/default/admin/dashboard/index.blade.php ENDPATH**/ ?>