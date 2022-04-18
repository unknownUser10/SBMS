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




<!-- this part is for the table -->

<div class="row">
	
	<div class="col-xs-12">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Items</h4>
			</div>
			

			<div class="panel-body form-group form-group-sm">
				<?php inventory(); ?>
				<div class="panel-heading">
				<p><a href="dashboard.php">< Dashboard</a> | <a href="print.php">print records</a></p>
			</div>
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