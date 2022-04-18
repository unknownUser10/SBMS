<?php

include('header.php');
include('functions.php');
include_once("includes/config.php");

?>



<style type="text/css">
	
	.info{
		color: #337ab7;
	}
	.title{
		color: green;
		text-decoration: underline;
	}
	.sub-title{
		color: #337ab7;
	}

	ul li{
		list-style-type: none;
	}
	.list{
		text-decoration: none;
		color: #333;
	}
	.list:hover{
		color: green;
	}
	.title-list{
		color: color: #337ab7;
	}
	.title-list:hover{
		color: green;
	}


</style>




<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="info">Info</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<p>Regularly resource inventory is collaboratively undertaken by learning managers.
					Learning managers, learning facilitators, and community stakeholders as basis for resource allocation and mobilization.
				</p>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			
			<div class="panel-heading">
				<h4>Indicator 1</h4>
			</div>
			
			<div class="panel-body form-group form-group-sm">
				

				<h4 class="title">Resource Inventory System</h5>
				
				<ul>

					<br>

					<p class="sub-title"><b>1. Inventory of Resources</b></p>
						<ul>
							
							<li><a class="list" href="indicator1/mor-admin/human-resources.php">1.1 Human Resources</a></li>
							<li><a class="list" href="indicator1/mor-admin/financial-resources.php">1.2 Financial Resources</a></li>
							<li><a class="list" href="indicator1/mor-admin/tech-resources.php">1.3 Technological Resources</a></li>
							<li><a class="list" href="indicator1/mor-admin/material-resources.php">1.4 Material Resources</a></li>
						</ul>
						<br>
					
					<p class="sub-title"><b>2. Resource Inventory Processes / Procedure</b></p>
						<ul>
							<li><a class="list" href="indicator1/mor-admin/fgdstakeholders.php">2.1 FGD with Stakeholders</a></li>
							<li><a class="list" href="indicator1/mor-admin/rsp.php">2.2 Resource Strategic Plan / Resource Allocation Mobilization Plan</a></li>
							<li><a class="list" href="indicator1/mor-admin/mqi.php">2.3 Monthly / Quarterly Inventory</a></li>
						</ul>
						<br>

						<br>
					
					<p class="sub-title"><b>3. Transparency</b></p>
						<ul>
							<li><a class="list" href="indicator1/mor-admin/ptb.php">3.1 Posting of Transparency Board</a></li>
							<li><a class="list" href="indicator1/mor-admin/rmooe.php">3.2 Reports on MOOE Utilization Fund vis-a-vis SIP/AIP</a></li>
							<li><a class="list" href="indicator1/mor-admin/rsefu.php">3.3 Reports on Special Education Fund (SEF) Utilization</a></li>
							<li><a class="list" href="indicator1/mor-admin/rigp.php">3.4 Reports on Income Generating Project/Canteen/SBM Funds Utilization</a></li>
						</ul>
						<br>

					<p class="sub-title"><b>4. Reporting to Stakeholders of Funds Utilization</b></p>
						<ul>
							<li><a class="list" href="indicator1/mor-admin/mcc.php">4.1 Meetings / Conferences / Consultation</a></li>
							<li><a class="list" href="indicator1/mor-admin/fgdsori.php">4.2 FGD by Stakeholders & Sub Organizations on Resource Inventory & Utilization</a></li>
						</ul>
						<br>

						<br>
						<p><a class="title-list" href="indicator1/mor-admin/rirdv.php"><b>5. Resource Inventory & Reports Duly Validated / Signed by Authorized Team</b></a></p>
						
						<p> <a class="title-list" href="indicator1/mor-admin/sipaip.php"><b>6. SIP / AIP</b></a></p>
						
						<p ><a class="title-list" href="indicator1/mor-admin/lr.php"><b>7. Liquidation Reports</b></a></p>
						
						<p ><a class="title-list" href="indicator1/mor-admin/nr.php"><b>8. Narrative Reports</b></a></p>
						
						<p ><a class="title-list" href="indicator1/mor-admin/osa.php"><b>9. Other Supporting Artifacts</b></a></p>


				</ul>
			</div>
			<div class="panel-heading">
			<!-- <p><a href="indicator1.php">< refesh</a></p> -->

			<p>Published by: <b>GoldenState BSIT Students, 2022.</b></p>


			</div>
		</div>
	</div>
</div>










<?php
	include('footer.php');
?>