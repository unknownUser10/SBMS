<?php
include('header.php');
include('upload.php');
include('functions.php');
?>

<style type="text/css">
	b{color: green;}
	strong{color: red;}	
	h2{color: green;}
</style>



<h2>MOA's and MOVs Copies</h2>
<hr>

						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Select File to Submit</h4>
			</div>


			<div class="panel-body form-group form-group-sm">
				
				<form action="mmc.php" method="post" enctype="multipart/form-data">

					<div class="row">
						<div class="col-xs-5">
							<input type="file" name="myfile" class="form-control">
						</div>
						
						<div class="col-xs-1">
						<label>Date:</label>
						</div>

						<div class="col-xs-3">
							<input type="date" name="sub_date" class="form-control" required>
						</div>
						
						<div class="col-xs-1">
						<label>Uploader: &nbsp;&nbsp;</label>
						</div>

						<div class="col-xs-2">
							<b ><input type="text" name="user" class="form-control" value="<?php echo $_SESSION['login_username'];?>" readonly style="color:green;"></b>
						</div>

					</div>
					<div class="row">		
							<div class="col-xs-12">
									<input type="text" name="remarks" class="form-control" placeholder="Remarks">
								</div>
							<div class="col-xs-12 margin-top btn-group">
									<button type="submit" name="ind5_mmc" class="btn btn-success float-right" data-loading-text="Submitting...">Submit File</button>
							</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>



<!-- this part is for the table -->

<div class="row">
	
	<div class="col-xs-12">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Files Submitted</h4>
			</div>
			
			<div class="panel-body form-group form-group-sm">
				<?php mmc(); ?>
			</div>
		</div>
	</div>
<div>



<?php
	include('../footer.php');
?>