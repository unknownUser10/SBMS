<?php 

include_once('includes/config.php');


//add inventory items
if(isset($_POST['submit']))
{

	if(!empty($_POST['item']) && !empty($_POST['description']) && !empty($_POST['qpcount']) && !empty($_POST['location']) && !empty($_POST['condition'])){

		$item = $_POST['item'];
		$description = $_POST['description'];
		$opn = $_POST['opn'];
		$npn = $_POST['npn'];
		$umeasure = $_POST['umeasure'];
		$uvalue = $_POST['uvalue'];
		$qpcard = $_POST['qpcard'];
		$qpcount = $_POST['qpcount'];
		$location = $_POST['location'];
		$item_condition = $_POST['condition'];
		$remarks = $_POST['remarks'];

		
		$query = "INSERT INTO `inventory`(`item`, `description`, `opn`, `npn`, `umeasure`, `uvalue`, `qpcard`, `qpcount`, `location`, `condition`, `remarks`) VALUES ('$item','$description','$opn','$npn','$umeasure','$uvalue','$qpcard','$qpcount','$location','$item_condition','$remarks')";


		$run = mysqli_query($mysqli, $query) or die(mysqli_error());

			if($run){

				header("location:dashboard.php?message=<b>SUCCESS:</b> Item added successfully!");
			}
			else
			{
				header("location:dashboard.php?message=<i>ERROR:</i> Sorry, there's an error.");
			}

	}

	else
	{
		header("location:dashboard.php?message=<i>ERROR:</i> Please, fill in the required fields.");
	}

}





?>