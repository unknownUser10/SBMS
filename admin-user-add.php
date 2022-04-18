<?php

include('header.php');

?>

<h1>Add Users</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
	






	<!-- admin add user -->

	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Add Administrator</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_user">
					<input type="hidden" name="action" value="admin_user">

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="name" placeholder="Name">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="username" placeholder="Enter username">
						</div>

						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="email" placeholder="Enter user's email address">

						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control" name="phone" placeholder="Enter user's phone number">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control required" name="password" id="password" placeholder="Enter user's password">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_user" class="btn btn-success float-right" value="Add user" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
			<div class="panel-heading">
				<p><a href="admin-user-list.php">< back </a>| <a href="admin-user-add.php"> refresh </a></p>
			</div>
		</div>
	</div>




</div>

<?php
	include('footer.php');
?>