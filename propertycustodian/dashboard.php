<?php

include('header.php');
include('functions.php');

?>

<style type="text/css">
	
	b{
		color: green;
	}
	i{
		color: red;
		font-weight: bold;
	}


</style>

<!-- item add success response alert -->
<?php

if(isset($_GET['message'])){

	$message = $_GET['message'];
	echo $message;
}

?>
<br>
<p></p>
<!-- response alert -->

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>

<!-- this part is for the info -->

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>About</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<p>Regularly resource inventory is collaboratively undertaken by learning managers.
					Learning managers, learning facilitators, and community stakeholders as basis for resource allocation and mobilization.
				</p>
			</div>
		</div>
	</div>
</div>
	
<!-- add / edit item -->

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 style="color:#337ab7;">Add Item</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_item">
					<input type="hidden" name="action" value="action_inventory">

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="item" placeholder="Item (REQUIRED)" required>
						</div>
						<div class="col-xs-8">
							<input type="text" class="form-control margin-bottom required" name="description" placeholder="Item description (REQUIRED)">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control" name="opn" placeholder="Old product no.">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="npn" placeholder="New product no.">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="umeasure" placeholder="Unit of measure">
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="uvalue" placeholder="Unit of value">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom" name="qpcard" placeholder="Quantity per property card">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="qpcount" placeholder=" Quantity per physical count (REQUIRED)" required>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="location" placeholder="Item location (REQUIRED)" required>
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control margin-bottom required" name="condition" placeholder="Item condition (REQUIRED)" required>
						</div>
						
					</div>

					<div class="row">

						<div class="col-xs-12">
							<input type="text" class="form-control margin-bottom" name="remarks" placeholder="Remarks">
						</div>

					</div>

					<!-- Save button -->
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_item" class="btn btn-success float-right" value="Save Item" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
			<div class="panel-heading">
				<p><a href="dashboard.php">refresh</a> | <a href="view-records.php"> view records only</a> | <a href="print.php">print records</a></p>
			</div>
			<div class="panel-heading">
				<p><b style="color:red;">Note: </b>Fields with a (REQUIRED) notes cannot be empty. After successfully add or delete an item, kindly refresh the page. Thank you!</p>
			</div>
		</div>
	</div>
</div>


<!-- this part is for the table -->

<div class="row">
	
	<div class="col-xs-12">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Items</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<?php inventory(); ?>
			</div>
			

		</div>
	</div>
<div>



<div id="delete_item" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</spa></button>
        <h4 class="modal-title">Delete item</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




</section>
 <!-- /.content -->




<?php
	include('../footer.php');
?>