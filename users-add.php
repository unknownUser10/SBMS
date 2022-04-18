<?php

include('header.php');
include('functions.php');
include_once("includes/config.php");

?>

<style type="text/css">
	
	.btn{		
 			 background-color:  #337ab7;
 			 border: none;
 			 border-radius: 5px;
 			 color: white;
 			 padding:12px 20px;
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
	.cl{
		text-decoration: none;
		color: #fff;
	}
	.cl:hover{
		text-decoration: none;
		color: #fff;
	}
	 h4{
	 	color: green;
	 }


</style>



<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>ADD USERS</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="" id="">
				

					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<p class="category">Indicator Users:</p>

							<button class="btn" ><a class="cl" href="ind1-user-add.php">Add Indicator 1 User</a></button>
							
							<button class="btn"><a class="cl" href="ind2-user-add.php">Add Indicator 2 User</a></button>
							
							<button class="btn"><a class="cl" href="ind3-user-add.php">Add Indicator 3 User</a></button>
							
							<button class="btn"><a class="cl" href="ind4-user-add.php">Add Indicator 4 User</a></button>
							
							<button class="btn"><a class="cl" href="ind5-user-add.php">Add Indicator 5 User</a></button>
							
							<br><br><br><br><br>
							<p class="category">Inventory Users:</p>
							<button class="btn"><a class="cl" href="pcustodian-user-add.php"> Add Property Custodian </a> </button>

							<br><br><br><br>
							<p class="category">Sub - Administrative Users:</p>
							<button class="btn"><a class="cl" href="sbm-user-add.php">Add SBM Coordinators</a> </button>


							<br><br><br><br>
							<p class="category">Administrative Users:</p>
							<button class="btn"><a class="cl" href="admin-user-add.php">Add Administrator</a> </button>

							<br><br>
						</div>
					</div>

				</form>
			</div>
			<div class="panel-heading">
				<p><a href="users-list.php">| View Users |</a></p>
				<p><b>Note:</b> To ADD users, kindly chose it's category above.</p>
			</div>
		</div>
	</div>









<?php
	include('footer.php');
?>