<!DOCTYPE html>
<?php
	require 'includes/config.php';
?>
<html lang="en">
	<head>
		<style>	
		.table {
			width: 100%;
			margin-bottom: 20px;
		}	
 
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
			background-color: #f9f9f9;
		}

		.table-header{
			color: red;
		}

		.btn{
			color:#fff;
			background-color: green; 
			border-radius: 3px;
		}

		.btn:hover{
			background-color: #00c500;
			border-color: #00c500;
		}
 
		@media print{
			#print {
				display:none;
			}
		}
		@media print {
			#PrintButton {
				display: none;
			}
		}
 
		@page {
			size: auto;   /* auto is the initial value */
			margin: 0;  /* this affects the margin in the printer settings */
		}
	</style>
	</head>
<body>
	<br /> <br />
	<b style="color:blue;">Date Prepared:</b>
	<?php
		$date = date("Y-m-d", strtotime("+6 HOURS"));
		echo $date;
	?>
	<br /><br />
	<table class="table table-striped">
		<thead>
			<tr class="table-header">
				<th><u>Item</u></th>
				<th><u>Decription</u></th>
				<th><u>Old Property No.</u></th>
				<th><u>New Property No.</u></th>
				<th><u>Unit Measure</u></th>
				<th><u>Unit Value</u></th>
				<th><u>Quantity per Product Card</u></th>
				<th><u>Quantity per Physical Count</u></th>
				<th><u>Location</u></th>
				<th><u>Condition</u></th>
				<th><u>Remarks</u></th>
			</tr>
		</thead>
		<tbody>
			<?php
 
				$query = $mysqli->query("SELECT * FROM `inventory`");
				while($fetch = $query->fetch_array()){
 
			?>
 
			<tr>
				<td style="text-align:center;"><?php echo $fetch['item']?></td>
				<td style="text-align:center;"><?php echo $fetch['description']?></td>
				<td style="text-align:center;"><?php echo $fetch['opn']?></td>
				<td style="text-align:center;"><?php echo $fetch['npn']?></td>
				<td style="text-align:center;"><?php echo $fetch['umeasure']?></td>
				<td style="text-align:center;"><?php echo $fetch['uvalue']?></td>
				<td style="text-align:center;"><?php echo $fetch['qpcard']?></td>
				<td style="text-align:center;"><?php echo $fetch['qpcount']?></td>
				<td style="text-align:center;"><?php echo $fetch['location']?></td>
				<td style="text-align:center;"><?php echo $fetch['condi']?></td>
				<td style="text-align:center;"><?php echo $fetch['remarks']?></td>
			</tr>
 
			<?php
				}
			?>
		</tbody>
	</table>
	<center>
		<br><br><br>
		<button id="PrintButton" onclick="back()" class="btn">< Back</button>
		<button id="PrintButton" onclick="PrintPage()" class="btn">Print Record</button>
	</center>
</body>
<script type="text/javascript">
	function PrintPage() {
		window.print();
	}
	function back() {
		window.location = "view-records.php"; 
	}
</script>
</html>