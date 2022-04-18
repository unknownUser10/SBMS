<?php


include_once("../includes/config.php");



// get files from db table ind2_ifsrm
function ifsrm() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_ifsrm ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {
	
	print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/InternalFactorsAffectingSRM/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_ga
function ga() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_ga ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/GAPAnalysis/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_ra
function ra() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_ra ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/RapidAppraisal/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

// get files from db table ind2_fgdr
function fgdr() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_fgdr ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/FGDResource/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_roap
function roap() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_roap ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

	print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/ResultsOtherAnalysisProcess/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}



// get files from db table ind2_ps
function ps() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_ps ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/PlanningSched/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_dpm
function dpm() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_dpm ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/DocumentsOfPlanningMeeting/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_sp
function sp() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_sp ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {
		
		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/SupplementalPlan/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_ar
function ar() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_ar ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/AttendanceRecord/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_sa
function sa() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_sa ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/SupportingArtifacts/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


// get files from db table ind2_hrdp
function hrdp() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_hrdp ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/HRDP-SPPD/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}
		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}

// get files from db table ind2_fm
function fm() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind2_fm ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>
				
				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Actions</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

						<a href="../ManagementOfResources/ind2_uploads/FeedbackMechanism/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

				    </td>

				    
			    </tr>
		    ';
		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>There are no files to display.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();
}


?>

