<?php

include('header.php');


// this is to get the users for the dashboard
function ind2_users() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_users ORDER BY name ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
					<td>'.$row["email"].'</td>
				    <td>'.$row["phone"].'</td>
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no users to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

?>

<style type="text/css">
	
	h4{color: #337ab7;};

</style>


<!-- this part is for the info -->

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Info</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<p>A regular dialogue for planning, and resource programming, that is accessible and inclusive, continuously engage stakeholders and support implementation of community education plans.
				</p>
			</div>
		</div>
	</div>
</div>



<!-- this part is for the table -->

<div class="row">
	
	<div class="col-xs-12">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>INDICATOR 2 USERS</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<?php ind2_users(); ?>
			</div>
			<div class="panel-heading">
				<p><b style="color:red;">Note:</b>This informations are displayed for communication and monitoring purposes only. You are not allowed to take and use any informations given without the owners permission.</p>
			</div>

		</div>
	</div>
<div>




<?php
	include('../footer.php');
?>