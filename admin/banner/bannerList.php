<!DOCTYPE html>
<html lang="en">


	<?php
	if (basename(__DIR__) != 'admin') {
		$baseUrl = '../';
		$isInternalUrl = true;
	} else {
		$baseUrl = '';
		$isInternalUrl = false;
	}


	include '../includes/head.php';
	require '../controlar/dbconfig.php'

	?>




<body>

	<!-- Main navbar -->
	<?php include '../includes/header.php' ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php include '../includes/adminsidebar.php' ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">


					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="datatable_basic.html">Datatables</a></li>
							<li class="active">Basic</li>
						</ul>


					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">




					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">All Banners</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li style="margin-right: 10px;"><a style="color:#fff;" href="bannerAdd.php" class="btn btn-primary add-new">Add New</a></li>
									<li><a data-action="collapse"></a></li>
									<li><a data-action="reload"></a></li>
									<li><a data-action="close"></a></li>
								</ul>
							</div>
						</div>


						<table class="table table-bordered datatable-basic">
							<thead>
								<tr>
									<th width="5%">SL</th>
									<th width="20%">Title</th>
									<th width="20%">Sub Title</th>
									<th width="30%">Details</th>
									<th width="15%">Image</th>
									<th width="10%" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php

								$selectQry = "SELECT * From banners where active_status = 1" ;
								$bannerList = mysqli_query($dbcon, $selectQry);

								foreach ($bannerList as $key => $banner) {
									
						
								?>

								<tr>
									<td><?php echo ++$key ;?></td>
									<td><?php echo $banner['title'];?></td>
									<td><?php echo $banner['sub_title'];?></td>
									<td><?php echo $banner['details'];?></td>
									<td><?php echo $banner['Image'];?></td>
									<td class="text-center">
										<a href="bannerUpdate.php?banner_id=<?php echo $banner['id'];?>" class="dropdown-toggle"><i class=" icon-pencil7"></i> </a>
										<a href="#" class="dropdown-toggle"><i class="  icon-trash"></i> </a>
									</td>
								</tr>

								<?php }?>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->


					<!-- Footer -->
					<?php include '../includes/footer.php' ?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<?php include '../includes/scripts.php' ?>
</body>

</html>