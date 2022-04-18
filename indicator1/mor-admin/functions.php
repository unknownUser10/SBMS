<?php


include_once("../includes/config.php");




// get files from db table ind1_fgdsori
function fgdsori() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_fgdsori ORDER BY submission ASC";

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
			        
			    	<td>'.$row["name"].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				    <td>

				    	<a href="../ManagementOfResources/ind1_uploads/FGDbyStakeholders&SORI/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind1_fgdstakeholders
function fgdstakeholders() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_fgds ORDER BY submission ASC";

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

						<a href="../ManagementOfResources/ind1_uploads/FGDwithStakeholders/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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


// get files from db table ind1_fr
function fr() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_fr ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/FinancialResources/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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

// get files from db table ind1_hr
function hr() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_hr ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/HumanResources/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download" ><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user" title="Delete" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

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


// get files from db table ind1_lr
function lr() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_lr ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/LiquidationReports/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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



// get files from db table ind1_mr
function mr() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_mr ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/MaterialResources/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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


// get files from db table ind1_mcc
function mcc() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_mcc ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/MeteeingsConferencesConsultations/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind1_mqi
function mqi() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_mqi ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/MonthlyQuarterlyInventory/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


				    	<a data-user-id="'.$row["id"].'" class="btn btn-danger btn-xs delete-user"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete"></span></a>

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


// get files from db table ind1_nr
function nr() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_nr ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/NarrativeReports/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind1_osa
function osa() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_osa ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/OtherSupportingArtifacts/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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


// get files from db table ind1_ptb
function ptb() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_ptb ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/PostingofTrasparencyBoard/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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

// get files from db table ind1_rigp
function rigp() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_rigp ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/ReportsonIGP/'.$row["name"].'" class="btn btn-inf btn-xs"><span class="glyphicon glyphicon-download-alt" aria-hidden="true" title="Download"></span></a>

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


// get files from db table ind1_rirdv
function rirdv() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_rirdv ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/ReportsDulyValidated/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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


// get files from db table ind1_rmooe
function rmooe() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_rmooe ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/ReportsMOOEUtilization/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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

// get files from db table ind1_rsefu
function rsefu() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_rsefu ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/ReportsonSEFUtilization/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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


// get files from db table ind1_rsp
function rsp() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_rsp ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/ResourceStrategicPlan/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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


// get files from db table ind1_sipaip
function sipaip() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_sipaip ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/SIP-AIP/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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


// get files from db table ind1_tr
function techresources() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind1_tr ORDER BY submission ASC";

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

				    	<a href="../ManagementOfResources/ind1_uploads/TechResources/'.$row["name"].'" class="btn btn-inf btn-xs" title="Download"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>


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

