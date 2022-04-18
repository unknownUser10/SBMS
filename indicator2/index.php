<?php
include('header-login.php');
include('functions.php');

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
		    	<form accept-charset="UTF-8" role="form" method="post" id="login_form">
		    		<input type="hidden" name="action" value="login">
	                <fieldset>
			    		<p style="text-align: left;"> <b>Indicator 2's Log-in:</b></p>
			    		
			    	  	<div class="input-group form-group">
			    	  		<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
			    		    <input class="form-control required" name="username" id="username" type="text" placeholder="Enter Username">
			    		</div>
			    		<div class="input-group form-group">
			    		 	<div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
			    			<input class="form-control required" placeholder="Password" name="password" type="password" placeholder="Enter Password">
			    		</div>

			    		<!--
			    		
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>

			    		-->

			    		<button type="button" id="btn-login" class="btn btn-danger btn-block">Login</button>
			    		<button type="button" class="btn btn-danger btn-block"> <a href="../index.php" style="text-decoration:none; color:#fff;">go back</a></button>


			    			<!-- para ni sa warning sa babah sa inputs -->
			    		<div class="input-group form-group">
			    			<p style="text-align: center;"> <b>Note:</b> If you forgot your password, please contact the admin immediately.</p>
			    		</div>
			    		


			    	</fieldset>
		      	</form>
		    </div>
		</div>
	</div>
</div>

<?php
	include('../footer.php');
?>