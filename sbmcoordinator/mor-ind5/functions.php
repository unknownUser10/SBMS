<?php


include_once("../includes/config.php");



// get files from db table ind5_jf
function jf() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_jf ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/JollibeeFoundation/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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



// get files from db table ind5_ljf
function ljf() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_ljf ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				     	<a href="../../indicator5/ManagementOfResources/ind5_uploads/LoveJanFoundation/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
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


// get files from db table ind5_ds
function ds() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_ds ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/DOLEStanfilco/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_edc
function edc() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_edc ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/EDC/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_ppo
function ppo() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_ppo ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>
				     	<a href="../../indicator5/ManagementOfResources/ind5_uploads/Others4ProjectPartners/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
				    	
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


// get files from db table ind5_pta
function pta() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_pta ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	
				     	<a href="../../indicator5/ManagementOfResources/ind5_uploads/PTA/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
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


// get files from db table ind5_sgc
function sgc() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_sgc ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	
				     	<a href="../../indicator5/ManagementOfResources/ind5_uploads/SGC/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
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


// get files from db table ind5_lgu
function lgu() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_lgu ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/LGU/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_abc
function abc() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_abc ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/ABC/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_aa
function aa() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_aa ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/AlumniAssociation/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_fa
function fa() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_fa ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/FacultyAssociation/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_spg
function spg() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_spg ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/SPG-SSG/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_po
function po() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_po ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	
				     	<a href="../../indicator5/ManagementOfResources/ind5_uploads/PrivateOrganization/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
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


// get files from db table ind5_rmpo
function rmpo() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_rmpo ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    		<a href="../../indicator5/ManagementOfResources/ind5_uploads/Others4RMP/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
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


// get files from db table ind5_aip
function aip() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_aip ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/AIP-SIP/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_ppbm
function ppbm() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_ppbm ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/ProjectProposal&BudgetMatrix/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_tad
function tad() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_tad ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/TrainingActivityDesigns/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>
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


// get files from db table ind5_pw
function pw() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_pw ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/ProgramOfWorks/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_pic
function pic() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_pic ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/Pictures/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_rmec
function rmec() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_rmec ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/RecordsMEConducted/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_rrr
function rrr() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_rrr ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/RegularReportingRecords/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_ar
function ar() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_ar ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/AccomplishmentReports/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_mm
function mm() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_mm ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/MinutesOfMeetings/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_arec
function arec() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_arec ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/AttendanceRecords/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_osao
function osao() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_osao ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/Others4OSA/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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


// get files from db table ind5_mmc
function mmc() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
	$query = "SELECT * FROM ind5_mmc ORDER BY submission ASC";

	// mysqli select query
	$results = $mysqli->query($query);

	if($results) {

		print '<table class="table table-striped table-hover table-bordered" id="data-table"><thead><tr>

				<th>File Name</th>
				<th>Date Submitted</th>
				<th>Uploader</th>
				<th>Remarks</th>
				<th>Action</th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

		    print '
			    <tr>
			    	<td>'.$row['name'].'</td>
				    <td>'.$row["submission"].'</td>
				    <td>'.$row["uploader"].'</td>
				    <td>'.$row["remarks"].'</td>
				     <td>

				    	<a href="../../indicator5/ManagementOfResources/ind5_uploads/CopiesOfMOA&MOVs/'.$row["name"].'" class="btn btn-inf btn-xs"><span title="Download" class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a>

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

