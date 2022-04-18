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
				<p>A place is a community developed resource management system that drives appropriate behaviors of the stakeholders to ensure judicious, appropriate, and effective use of resources.
				</p>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			
			<div class="panel-heading">
				<h4>Indicator 3</h4>
			</div>
			
			<div class="panel-body form-group form-group-sm">
				

				<h4 class="title">Community / Initiated Resource Management System</h5>
				
				<ul>

					<br>

					<p class="sub-title"><b>1. Resource Inventory (RI) System</b></p>
						<ul>
							
							<li><a class="list" href="indicator3/mor-admin/hri.php">1.1 Human Resources Inventory (HRI)</a></li>
							<li><a class="list" href="indicator3/mor-admin/fri.php">1.2 Financial Resource Inventory (FRI)</a></li>
							<li><a class="list" href="indicator3/mor-admin/tri.php">1.3 Technology Resource Inventory (TRI)</a></li>
							<li><a class="list" href="indicator3/mor-admin/mri.php">1.4 Material Resource Inventory (MRI)</a></li>
							<li><a class="list" href="indicator3/mor-admin/ri.php">1.5 M&E for Resource Inventory (RI)</a></li>
						</ul>
						<br>
					
					<p class="sub-title"><b>2. Planning and Resource Programming (PRP) System</b></p>
						<ul>
							<li><a class="list" href="indicator3/mor-admin/hrdp.php">2.1 Human Resources Development Plan (HRDP)</a></li>
							<li><a class="list" href="indicator3/mor-admin/fmdp.php">2.2 Financial Management Development Plan (FMP)</a></li>
							<li><a class="list" href="indicator3/mor-admin/trip.php">2.3 Technology Resource Improvement Plan (TRIP)</a></li>
							<li><a class="list" href="indicator3/mor-admin/spdp.php">2.4 School Physical Development Plan (SPDP)</a></li>
						</ul>
						<br>

						<br>
					
					<p class="sub-title"><b>3. School M&E Plan Adjustment System</b></p>
						<ul>
							<li><a class="list" href="indicator3/mor-admin/merm.php">3.1 M&E of the Resource Management</a></li>
							<li><a class="list" href="indicator3/mor-admin/rmer.php">3.2 Reporting of M&E Results</a></li>
							<li><a class="list" href="indicator3/mor-admin/qs.php">3.3 QA for SMEPA</a></li>
						</ul>
						<br>

					<p class="sub-title"><b>4. Sustainable Public/Private Partnership (SPPP) System</b></p>
						<ul>
							<li><a class="list" href="indicator3/mor-admin/isnm.php">4.1 Internal Stakeholders Networking Mechanism</a></li>
							<li><a class="list" href="indicator3/mor-admin/esnm.php">4.2 External Stakeholders Networking Mechanism</a></li>
							<li><a class="list" href="indicator3/mor-admin/men.php">4.2 M&E for NSTP</a></li>
						</ul>
						<br>
				</ul>

				<h4 class="title">Evidences for Communication to Stakeholders</h5>
					<ul>
						<li><a class="list" href="indicator3/mor-admin/memo.php">1.1 Memoranda</a></li>
						<li><a class="list" href="indicator3/mor-admin/il.php">1.2 Invitation Letters</a></li>
						<li><a class="list" href="indicator3/mor-admin/ar.php">1.3 Attendance Records</a></li>
						<li><a class="list" href="indicator3/mor-admin/pic.php">1.4 Pictures</a></li>
					</ul>
					<br>
				<h4 class="title">Evidences of FGD / Agreements Resource Management by the Team</h5>
					<ul>
						<li><a class="list" href="indicator3/mor-admin/mom.php">1.1 Minutes of the Meeting</a></li>
						<li><a class="list" href="indicator3/mor-admin/sr.php">1.2 SMEPA Reports</a></li>
						<li><a class="list" href="indicator3/mor-admin/rsm.php">1.3 Records of Schedule of Meetings</a></li>
					</ul>
					<br>
				<h4 class="title">Other Supporting Artifacts</h5>
					<ul>
						<li><a class="list" href="indicator3/mor-admin/osa.php">1.1 Files</a></li>
					</ul>




			</div>

			<br>

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