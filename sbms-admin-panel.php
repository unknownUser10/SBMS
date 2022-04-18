<?php

include('header.php');
include('functions.php');

?>

<style type="text/css">
	.info, .message{
		text-align: center;
	}
	.name{
		color: green;
	}
</style>




<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="info">Welcome <b class="name"> <?php echo $_SESSION['login_username']; ?> </b>!</h2>
			</div>

			<div class="panel-body form-group form-group-sm">
				<p class="message">Everything you need is available at the side menu. Please proceed, Thank you!
				</p>
				<p></p>
				<p></p>
				<p></p>
				<p></p>
				<p></p>
				<p></p>
				<p></p>
				<p></p>
				<p></p>
			</div>
			<br><br><br><br><br>

			<div class="panel-heading">
				<!-- <p>Engracia L. Valdomar National High School, 1996</p> -->
			</div>

		</div>
	</div>
</div>







<?php
	include('footer.php');
?>