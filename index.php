<?php
include('header-login.php');
include_once("includes/config.php");



?>

<div class="row vertical-offset-100">
	<div id="response" class="alert alert-success" style="display:none;">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		<div class="message"></div>
	</div>

	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default login-panel">
		  	<div class="panel-heading panel-login">
		  		<h1 class="text-center">
					<img src="<?php echo SCHOOL_LOGO ?>" class="img-responsive">
				</h1>
		    	
		 	</div>
		  	<div class="panel-body">
		    	<form accept-charset="UTF-8" role="form" style="text-align:center;">
	                <fieldset>

	                	<div class="input-group form-group">
			    			<p style="text-align: center;"> <b>Please chose your disignation to <a href="admin-login.php" class="admin">log-in.</a></b></p>
			    		</div>

			    	  	<button type="button" class="btn btn-danger btn-block" style="border-color: #fff;"> <a href="indicator1/index.php" style="text-decoration:none; color: #fff;"><b>Indicator 1</b></button>

			    	  	<button type="button" class="btn btn-danger btn-block" style="border-color: #fff;"> <a href="indicator2/index.php" style="text-decoration:none; color: #fff;"><b>Indicator 2</b></button>

			    	  	<button type="button" class="btn btn-danger btn-block" style="border-color: #fff;" > <a href="indicator3/index.php" style="text-decoration:none; color: #fff;"><b>Indicator 3</b></button>

			    	  	<button type="button" class="btn btn-danger btn-block" style="border-color: #fff;"> <a href="indicator4/index.php" style="text-decoration:none; color: #fff;"><b>Indicator 4</b></button>

			    	  	<button type="button" class="btn btn-danger btn-block" style="border-color: #fff;"> <a href="indicator5/index.php" style="text-decoration:none; color: #fff;"><b>Indicator 5</b></button>

			    	  	<button type="button" class="btn btn-danger btn-block" style="border-color: #fff;"> <a href="sbmcoordinator/index.php" style="text-decoration:none; color: #fff;"><b>SBM Coordinator</b></button>

			    	  	<button type="button" class="btn btn-danger btn-block" style="border-color: #fff;"> <a href="propertycustodian/index.php" style="text-decoration:none; color: #fff;"><b>Property Custodian</b></button>
			    	  
			    	  <br>
			    			<!-- para ni sa warning sa babah sa inputs -->
			    		<div class="input-group form-group">
			    			<p style="text-align: center; color: #333;"> <b>Note:</b> If you forgot your password, please contact the admin immediately.</p>
			    		</div>
			    		


			    	</fieldset>
		      	</form>
		    </div>
		</div>
	</div>
</div>

<?php
	include('footer.php');
?>