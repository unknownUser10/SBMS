<?php

include('header.php');
include('functions.php');
include_once("includes/config.php");

?>

<style type="text/css">
	
	.btn{		
 			 background-color: #337ab7; 
 			 border: none;
 			 border-radius: 5px;
 			 color: white;
 			 padding:15px 28px;
 			 margin-right: 5px;
 			 margin-bottom: 5px;
 			 text-align: center;
 			 text-decoration: none;
 			 display: inline-block;
 			 font-size: 16px;
	 		}
	 .btn:hover{
	 	background-color:green;
	 	color: white;
	 	text-decoration: none;
	 }
	.category{
		color: gray;
	}
	 h4{
	 	color: green;
	 }
	 .user{
	 	text-decoration: none;
	 	color: #fff;
	 }
	 .user:hover{
	 	text-decoration: none;
	 	color: #fff;
	 }


</style>



<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>VIEW USERS</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="" id="">
				

					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<p class="category">Indicator Users:</p>

							<button class="btn"><a class="user" href="ind1-user-list.php">Indicator 1 Users</a></button>
							
							<button class="btn"><a class="user" href="ind2-user-list.php">Indicator 2 Users</a></button>
							
							<button class="btn"><a class="user" href="ind3-user-list.php">Indicator 3 Users</a></button>
							
							<button class="btn"><a class="user" href="ind4-user-list.php">Indicator 4 Users</a></button>
							
							<button class="btn"><a class="user" href="ind5-user-list.php">Indicator 5 Users</a></button>
							
							<br><br><br><br><br><br>
							<p class="category">Inventory Users:</p>
							<button class="btn"><a class="user" href="pcustodian-user-list.php">Property Custodian</a></button>

							<br><br><br><br>
							<p class="category">Sub - Administrative Users:</p>
							<button class="btn"><a class="user" href="sbm-user-list.php">SBM Coordinators</a></button>


							<br><br><br><br>
							<p class="category">Administrative Users:</p>
							<button class="btn"><a class="user" href="admin-user-list.php">Administrator (ICT)</a></button>

							<br><br>
						</div>
					</div>

				</form>
			</div>
			<div class="panel-heading">
				<p><a href="users-add.php">| Add Users |</a></p>
				<p><b>Note:</b> To VIEW the users, kindly chose it's category above.</p>
			</div>
		</div>
	</div>









<?php
	include('footer.php');
?>