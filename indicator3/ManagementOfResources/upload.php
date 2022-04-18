<?php 


$conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS,DATABASE_NAME);


//upload files to database by table


//for the HR Inventory
if(isset($_POST['ind3_hri']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/HumanResourceInventory/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_hri (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the Financial RI
if(isset($_POST['ind3_fri']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/FinancialResourceInventory/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_fri (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the Tech. Resource Inventory
if(isset($_POST['ind3_tri']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/TechResourceInventory/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_tri (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the Material Res. Inv.
if(isset($_POST['ind3_mri']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/MaterialResourceInventory/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_mri (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the ME Res. Inv.
if(isset($_POST['ind3_ri']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/MEforResourceInventory/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_ri (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the HRDP
if(isset($_POST['ind3_hrdp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/HumanResourceDevPlan/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_hrdp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the FMDP
if(isset($_POST['ind3_fmdp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/FinancialManagementDevPlan/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_fmdp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the  TRI Plan
if(isset($_POST['ind3_trip']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/TechResourceImprovementPlan/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_trip (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the spdp
if(isset($_POST['ind3_spdp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/SchoolPhysicalDevPlan/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_spdp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the ME Res. Mngt.
if(isset($_POST['ind3_merm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/MEofResourceManagement/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_merm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the REPORTING OF me results
if(isset($_POST['ind3_rmer']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/ReportingMEResults/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_rmer (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the QA for SMEPA
if(isset($_POST['ind3_qs']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/QAforSMEPA/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_qs (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the Internal Stake. Net. Mech.
if(isset($_POST['ind3_isnm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/InternalStakeholdersNetMechanism/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_isnm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the ESNM
if(isset($_POST['ind3_esnm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/ExternalStakeholdersNetMechanism/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_esnm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the M&E for NSP
if(isset($_POST['ind3_men']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/MEforNSP/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_men (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the Memoranda
if(isset($_POST['ind3_memo']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/Memoranda/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_memo (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the Invitation Letters
if(isset($_POST['ind3_il']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/InvitationLetters/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_il (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the Attendance Records
if(isset($_POST['ind3_ar']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/AttendanceRecords/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_ar (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the Pictures
if(isset($_POST['ind3_pic']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/Pictures/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_pic (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the Minutes of Meeting
if(isset($_POST['ind3_mom']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/MinutesOfMeeting/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_mom (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the SMEPA Reports
if(isset($_POST['ind3_sr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/SMEPAReports/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_sr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the Records of Sched. of Meetings
if(isset($_POST['ind3_rsm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/RecordsSchedMeetings/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_rsm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the OSA
if(isset($_POST['ind3_osa']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind3_uploads/OSAReports/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>Error:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind3_osa (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted successfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


?>