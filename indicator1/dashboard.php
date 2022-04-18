<?php

include('header.php');
include('functions.php');
?>

<style type="text/css">
	
	h4{color: #337ab7;};

</style>

<!-- this part is for the info -->

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Info</h4>
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
				<h4>INDICATOR 1 USERS</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<?php ind1_users(); ?>
			</div>
			<div class="panel-heading">
				<p><b style="color:red;">Note:</b>This informations are displayed for communication and monitoring purposes only. You are not allowed to take and use any informations given without the owners permission.</p>
			</div>

		</div>
	</div>
<div>











<?php
	include('../footer.php');
?>