<?php
include('header.php');
include('upload.php');
include('functions.php');
?>

<style type="text/css">
		b{
		color: green;
	}
	h2{
		color: green;
	}
</style>



<h2>Others</h2>
<hr>
<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Select File to Submit</h4>
			</div>


			<div class="panel-body form-group form-group-sm">
				
				<form action="rmpo.php" method="post" enctype="multipart/form-data">

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
									<button type="submit" name="ind5_rmpo" class="btn btn-success float-right" data-loading-text="Submitting...">Submit File</button>
							</div>

					</div>
				</form>
			</div>
			<div class="panel-heading">
				<p><a href="../../indicator-5-list.php"> < back </a>|<a href="rmpo.php"> refresh </a></p>
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
				<?php rmpo(); ?>
			</div>
		</div>
	</div>
<div>
<div id="delete_file_ind5_rmpo" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</spa></button>
        <h4 class="modal-title">Delete file</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this file?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php
	include('../footer.php');
?>