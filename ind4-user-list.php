<?php

include('header.php');
include('functions.php');

?>


<div class="row">
	
	<div class="col-xs-12">
		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Indicator 4 Users</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<?php getInd4Users(); ?>
			</div>
			<div class="panel-heading">
				<p><a href="users-list.php"> < back </a>|<a href="ind4-user-add.php"> add indicator4 users </a></p>
			</div>
		</div>
	</div>

</div>

<div id="delete_user_ind4" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</spa></button>
        <h4 class="modal-title">Delete user</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this user?</p>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php
	include('footer.php');
?>