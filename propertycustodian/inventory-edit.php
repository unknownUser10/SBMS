<?php


include('header.php');


$getID = $_GET['id'];

// output any connection error
if ($mysqli->connect_error) {
	die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
}

// the query
$query = "SELECT * FROM inventory WHERE id = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if($result) {
	while ($row = mysqli_fetch_assoc($result)) {	

		$item = $row['item'];
		$description = $row['description'];
		$opn = $row['opn'];
		$npn = $row['npn'];
		$umeasure = $row['umeasure'];
		$uvalue = $row['uvalue'];
		$qpcard = $row['qpcard'];
		$qpcount = $row['qpcount'];
		$location = $row['location'];
		$condition = $row['condi'];
		$remarks = $row['remarks'];

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
				<h4> Inventory | Editing Item <?php echo $getID; ?></h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="update_item">
					<input type="hidden" name="action" value="update_item_inventory">
					<input type="hidden" name="id" value="<?php echo $getID; ?>">


					<!-- input fields -->
					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="item" placeholder="Item"  value="<?php echo $item; ?>">
						</div>
						<div class="col-xs-8">
							<input type="text" class="form-control margin-bottom" name="description" placeholder="Item description"  value="<?php echo $description; ?>">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control" name="opn" placeholder="Old product no."  value="<?php echo $opn; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="npn" placeholder="New product no."  value="<?php echo $npn; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="umeasure" placeholder="Unit of measure"  value="<?php echo $umeasure; ?>">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="uvalue" placeholder="Unit of value"  value="<?php echo $uvalue; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="qpcard" placeholder="Quantity per property card"  value="<?php echo $qpcard; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="qpcount" placeholder=" Quantity per physical count"  value="<?php echo $qpcount; ?>">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="location" placeholder="Item location"  value="<?php echo $location; ?>">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="condition" placeholder="Item Condition"  value="<?php echo $condition; ?>">
						</div>		
					</div>

					<div class="row">
						<div class="col-xs-12">
							<input type="text" class="form-control margin-bottom" name="remarks" placeholder="Remarks"  value="<?php echo $remarks; ?>">
						</div>
					</div>


					<!-- button -->
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_update_inventory" class="btn btn-success float-right" value="Edit item" data-loading-text="Editing...">
						</div>
					</div>

				</form>
			</div>
			<div class="panel-heading">
				<p><a href="dashboard.php">< back </a></p>
				<p><b style="color: red;">Note:</b> Please leave the inputs as it is if you're not changing anything. Only change those you want to change.</p>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>