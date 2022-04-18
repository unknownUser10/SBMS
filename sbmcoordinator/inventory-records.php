<?php

include('header.php');


?>

<style type="text/css">
	.info, .message{
		text-align: center;
	}
	.name{
		color: green;
	}
</style>

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


<?php
	include('footer.php');
?>