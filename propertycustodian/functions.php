<?php


//the connection for this is in the dashboard, includes - header.php


// get files from db table inventory
function inventory() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM inventory ORDER BY item ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>Item</th>
				<th>Decription</th>
				<th>OldNo.</th>
				<th>NewNo.</th>
				<th>UMeasure</th>
				<th>UValue</th>
				<th>QPCard</th>
				<th>QPCount</th>
				<th>Location</th>
				<th>Condition</th>
				<th>Remarks</th>
				<th>Actions</th>


			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['item'].'</td>
				    <td>'.$row["description"].'</td>
				    <td>'.$row["opn"].'</td>
				    <td>'.$row["npn"].'</td>
				    <td>'.$row['umeasure'].'</td>
				    <td>'.$row["uvalue"].'</td>
				    <td>'.$row["qpcard"].'</td>
				    <td>'.$row["qpcount"].'</td>
				    <td>'.$row['location'].'</td>
				    <td>'.$row["condi"].'</td>
				    <td>'.$row["remarks"].'</td>
				    
				    <td>

				    	<a href="inventory-edit.php?id='.$row["id"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

				    	<a data-user-id="'.$row['id'].'" class="btn btn-danger btn-xs delete-user"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>
				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no data to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

?>

