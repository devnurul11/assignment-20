<!DOCTYPE html>
<html lang="en">


	<?php
	if (basename(__DIR__) != 'admin') {
		$baseUrl = '../';
		$isInternalUrl = true;
	}else{
		$baseUrl = '';
		$isInternalUrl = false;
	}
	
	
	include '../includes/head.php' ?>



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

				<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Basic examples</h5>
									<div class="heading-elements">
										<ul class="icons-list">
											<li style="margin-right: 10px;"><a style="color:#fff;" href="bannerList.php" class="btn btn-primary add-new">Go Back</a></li>
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">

								<?php 
								require'../controlar/dbconfig.php';

								$banner_id = $_GET['banner_id'];
								$getSingleDataQry = "SELECT * FROM banners WHERE id= {$banner_id}";
								$getResult = mysqli_query($dbcon, $getSingleDataQry);

								?>

								<form class="form-horizontal" action="../controlar/bannerControler.php" method="POST">
								<?php
								if (isset($_GET['mag'])) {

								?>
									<div class="alert alert-success no-border">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Well done!</span> <?php echo $_GET['mag']; ?> <a href="#" class="alert-link">this important</a> alert message.
									</div>
								<?php } ?>
								<fieldset class="content-group">

								<?php 
								foreach($getResult as $key => $banner){

								
									?>
									<input type="hidden" class="form-control" id="title" name="title" value="<?php echo $banner['id']?>">
									<div class="form-group">
										<label class="control-label col-lg-3" for="title">Banner Title</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="title" name="title" value="<?php echo $banner['title']?>">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-3" for="sub_title">Banner Sub Title</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="sub_title" name="sub_title" value="<?php echo $banner['sub_title']?>">
										</div>
									</div>



									<div class="form-group">
										<label class="control-label col-lg-3" for="details">Details</label>
										<div class="col-lg-9">
											<textarea rows="5" cols="5" class="form-control" placeholder="Details here" id="details" name="details" > <?php echo $banner['details']?> </textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-3" for="image">File</label>
										<div class="col-lg-9">
											<input type="file" class="form-control" id="image" name="image">
										</div>
									</div>
									<?php }?>
								</fieldset>


								<div class="text-right">
									<button type="submit" class="btn btn-primary" name="updateBanner">Update </button>
								</div>

								
							</form>
								</div>
							</div>


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