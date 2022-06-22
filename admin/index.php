<!DOCTYPE html>
<html lang="en">
<html lang="en">
<?php
if (basename(__DIR__) != 'admin') {
	$baseUrl = '../';
	$isInternalUrl = true;
}else{
	$baseUrl = '';
	$isInternalUrl = false;
}
include'includes/head.php'?>

<body>

	<!-- Main navbar -->
	
	<?php include'includes/header.php'?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			
			<?php include'includes/adminsidebar.php'?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-7">

							<!-- Traffic sources -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Traffic sources</h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<label class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
													<input type="checkbox" class="switch" checked="checked">
													Live update:
												</label>
											</div>
										</form>
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-4">
											<ul class="list-inline text-center">
												<li>
													<a href="#" class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-plus3"></i></a>
												</li>
												<li class="text-left">
													<div class="text-semibold">New visitors</div>
													<div class="text-muted">2,349 avg</div>
												</li>
											</ul>

											<div class="col-lg-10 col-lg-offset-1">
												<div class="content-group" id="new-visitors"></div>
											</div>
										</div>

										<div class="col-lg-4">
											<ul class="list-inline text-center">
												<li>
													<a href="#" class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-watch2"></i></a>
												</li>
												<li class="text-left">
													<div class="text-semibold">New sessions</div>
													<div class="text-muted">08:20 avg</div>
												</li>
											</ul>

											<div class="col-lg-10 col-lg-offset-1">
												<div class="content-group" id="new-sessions"></div>
											</div>
										</div>

										<div class="col-lg-4">
											<ul class="list-inline text-center">
												<li>
													<a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i class="icon-people"></i></a>
												</li>
												<li class="text-left">
													<div class="text-semibold">Total online</div>
													<div class="text-muted"><span class="status-mark border-success position-left"></span> 5,378 avg</div>
												</li>
											</ul>

											<div class="col-lg-10 col-lg-offset-1">
												<div class="content-group" id="total-online"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="position-relative" id="traffic-sources"></div>
							</div>
							<!-- /traffic sources -->

						</div>

						<div class="col-lg-5">

							<!-- Sales stats -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Sales statistics</h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
												<select class="change-date select-sm" id="select_date">
													<optgroup label="<i class='icon-watch pull-right'></i> Time period">
														<option value="val1">June, 29 - July, 5</option>
														<option value="val2">June, 22 - June 28</option>
														<option value="val3" selected="selected">June, 15 - June, 21</option>
														<option value="val4">June, 8 - June, 14</option>
													</optgroup>
												</select>
											</div>
										</form>
				                	</div>
								</div>

								<div class="container-fluid">
									<div class="row text-center">
										<div class="col-md-4">
											<div class="content-group">
												<h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
												<span class="text-muted text-size-small">orders weekly</span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="content-group">
												<h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
												<span class="text-muted text-size-small">orders monthly</span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="content-group">
												<h5 class="text-semibold no-margin"><i class="icon-cash3 position-left text-slate"></i> $23,464</h5>
												<span class="text-muted text-size-small">average revenue</span>
											</div>
										</div>
									</div>
								</div>

								<div class="content-group-sm" id="app_sales"></div>
								<div id="monthly-sales-stats"></div>
							</div>
							<!-- /sales stats -->

						</div>
					</div>
					<!-- /main charts -->


					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">



						</div>

						<div class="col-lg-4">

							<!-- Progress counters -->
							<div class="row">
								<div class="col-md-6">

									<!-- Available hours -->
									<div class="panel text-center">
										<div class="panel-body">
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li class="dropdown text-muted">
							                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#"><i class="icon-sync"></i> Update data</a></li>
															<li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
															<li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
															<li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
														</ul>
							                		</li>
							                	</ul>
						                	</div>

						                	<!-- Progress counter -->
											<div class="content-group-sm svg-center position-relative" id="hours-available-progress"></div>
											<!-- /progress counter -->


											<!-- Bars -->
											<div id="hours-available-bars"></div>
											<!-- /bars -->

										</div>
									</div>
									<!-- /available hours -->

								</div>

								<div class="col-md-6">

									<!-- Productivity goal -->
									<div class="panel text-center">
										<div class="panel-body">
											<div class="heading-elements">
												<ul class="icons-list">
							                		<li class="dropdown text-muted">
							                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i> <span class="caret"></span></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#"><i class="icon-sync"></i> Update data</a></li>
															<li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
															<li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
															<li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
														</ul>
							                		</li>
							                	</ul>
											</div>

											<!-- Progress counter -->
											<div class="content-group-sm svg-center position-relative" id="goal-progress"></div>
											<!-- /progress counter -->

											<!-- Bars -->
											<div id="goal-bars"></div>
											<!-- /bars -->

										</div>
									</div>
									<!-- /productivity goal -->

								</div>
							</div>
							<!-- /progress counters -->


						

						

						</div>
					</div>
					<!-- /dashboard content -->


					<!-- Footer -->
				
					<?php include'includes/footer.php'?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
<!-- scripts -->
	<?php include'includes/scripts.php' ?>
</body>
</html>
