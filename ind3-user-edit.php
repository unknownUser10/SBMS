<?php


include('header.php');


$getID = $_GET['id'];

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}

// the query
$query = "SELECT * FROM ind3_users WHERE id = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['name']; // name
		$username = $row['username']; // username
		$email = $row['email']; // email address
		$phone = $row['phone']; // phone number
		$password = $row['password']; // password
	}
}

/* close connection */
$mysqli->close();

?>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>(Indicator 3) Editing User (<?php echo $getID; ?>)</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="update_user">
					<input type="hidden" name="action" value="update_user_ind3">
					<input type="hidden" name="id" value="<?php echo $getID; ?>">

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="name" placeholder="Name" value="<?php echo $name; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="username" placeholder="Enter username" value="<?php echo $username; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="email" placeholder="Enter user's email address" value="<?php echo $email; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control" name="phone" placeholder="Enter user's phone number" value="<?php echo $phone; ?>">
						</div>
						<div class="col-xs-4">
							<input type="password" class="form-control required" name="password" id="password" placeholder="Enter user's new password, if left empty it won't change.">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_update_ind3" class="btn btn-success float-right" value="Edit user" data-loading-text="Editing...">
						</div>
					</div>
				</form>
			</div>
			<div class="panel-heading">
				<p><a href="ind3-user-list.php">< back </a></p>
				<p><b>Note:</b> Please leave the inputs as it is if you're not changing anything. Only change those you want to change. For the password, you can leave it empty if you're not changing.</p>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>