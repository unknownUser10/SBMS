<?php


include_once('includes/config.php');

// show PHP errors
ini_set('display_errors', 1);

// output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

$action = isset($_POST['action']) ? $_POST['action'] : "";


// Login to system ----------------------------------------------------------------------------
if($action == 'login') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	session_start();

    extract($_POST);

    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $pass_encrypt = md5(mysqli_real_escape_string($mysqli,$_POST['password']));

    $query = "SELECT * FROM `pcustodian_users` WHERE username='$username' AND `password` = '$pass_encrypt'";

    $results = mysqli_query($mysqli,$query) or die (mysqli_error());
    $count = mysqli_num_rows($results);

    if($count!="") {
		$row = $results->fetch_assoc();

		$_SESSION['login_username'] = $row['username'];


		// processing remember me option and setting cookie with long expiry date
		if (isset($_POST['remember'])) {	
			session_set_cookie_params('604800'); //one week na cookie (value in seconds)
			session_regenerate_id(true);
		}  
		
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Login Successful, Redirecting to Dashboard!'
		));
    } else {
    	echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'Login failed. Please try again!'
	    ));
    }
}


// Delete item from table
if($action == 'delete_item') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$id = $_POST["delete"];

	// the query
	$query = "DELETE FROM inventory WHERE id = ?";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('s',$id);

	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Item has been deleted successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();
} 


// Update inventory items ----------------------------------------------------------------------


if($action == 'update_item_inventory') {

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

		$id = $_POST["id"];
		$item = $_POST['item'];
		$description = $_POST['description'];
		$opn = $_POST['opn'];
		$npn = $_POST['npn'];
		$umeasure = $_POST['umeasure'];
		$uvalue = $_POST['uvalue'];
		$qpcard = $_POST['qpcard'];
		$qpcount = $_POST['qpcount'];
		$location = $_POST['location'];
		$condi = $_POST['condition'];
		$remarks = $_POST['remarks'];

	// the query
	$query = "UPDATE inventory SET item = ?, description = ?, opn = ?, npn = ?, umeasure = ?, uvalue = ?, qpcard = ?, qpcount = ?, location = ?, condi = ?, remarks = ? WHERE id = ?";

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('ssssssssssss',$item,$description,$opn,$npn,$umeasure,$uvalue,$qpcard,$qpcount,$location,$condi,$remarks,$id);

	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Item has been updated successfully!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	// close connection 
	$mysqli->close();
} 


//-----------------------------------------------------

// Adding new item to inventory
if($action == 'action_inventory') {

		
		$item = $_POST['item'];
		$description = $_POST['description'];
		$opn = $_POST['opn'];
		$npn = $_POST['npn'];
		$umeasure = $_POST['umeasure'];
		$uvalue = $_POST['uvalue'];
		$qpcard = $_POST['qpcard'];
		$qpcount = $_POST['qpcount'];
		$location = $_POST['location'];
		$condi = $_POST['condition'];
		$remarks = $_POST['remarks'];

	//our insert query query
	$query  = "INSERT INTO inventory
				(
					item,
					description,
					opn,
					npn,
					umeasure,
					uvalue,
					qpcard,
					qpcount,
					location,
					condi,
					remarks
				)
				VALUES (
					?,
					?, 
                	?,
                	?,
                	?,
                	?,
                	?,
                	?,
                	?,
                	?,
                	?
                );
              ";

    header('Content-Type: application/json');

	/* Prepare statement */
	$stmt = $mysqli->prepare($query);
	if($stmt === false) {
	  trigger_error('Wrong SQL: ' . $query . ' Error: ' . $mysqli->error, E_USER_ERROR);
	}

	/* Bind parameters. TYpes: s = string, i = integer, d = double,  b = blob */
	$stmt->bind_param('sssssssssss',$item,$description,$opn,$npn,$umeasure,$uvalue,$qpcard,$qpcount,$location,$condi,$remarks);

	if($stmt->execute()){
	    //if saving success
		echo json_encode(array(
			'status' => 'Success',
			'message'=> 'Item has been successfully added!'
		));

	} else {
	    //if unable to create new record
	    echo json_encode(array(
	    	'status' => 'Error',
	    	//'message'=> 'There has been an error, please try again.'
	    	'message' => 'There has been an error, please try again.<pre>'.$mysqli->error.'</pre><pre>'.$query.'</pre>'
	    ));
	}

	//close database connection
	$mysqli->close();
}

?>