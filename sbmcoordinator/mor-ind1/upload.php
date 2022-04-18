<?php 


$conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS,DATABASE_NAME);


//upload files to database by table
//for the Human Resources
if(isset($_POST['ind1_hr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/HumanResources/' . $filename;

	$extension = pathinfo($filename, PATHINFO_EXTENSION);

	$file = $_FILES['myfile']['tmp_name'];
	$size = $_FILES['myfile']['size'];

	if(!in_array($extension, ['pdf','docx','doc','xlsx','xls', 'pptx']))
	{
		  echo "<strong>ERROR:</strong> Files accepted are only pdf, docx, doc, pptx, xlsx and xls.";
	}
	elseif($_FILES['myfile']['size'] > 10000000)
	{
		  echo "<strong>Error:</strong> File too big";

	}
	else
	{
		if(move_uploaded_file($file, $destination))
		{
			$sql = "INSERT INTO ind1_hr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<p>ERROR:</> Sorry, there's an error.";
			}
		}
	}
}

//for the Financial Resources
if(isset($_POST['ind1_fr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/FinancialResources/' . $filename;

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
			$sql = "INSERT INTO ind1_fr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the Technological Resources
if(isset($_POST['ind1_tr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/TechResources/' . $filename;

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
			$sql = "INSERT INTO ind1_tr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the Material Resources
if(isset($_POST['ind1_mr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/MaterialResources/' . $filename;

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
			$sql = "INSERT INTO ind1_mr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the FGD with Stakeholders
if(isset($_POST['ind1_fgds']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/FGDwithStakeholders/' . $filename;

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
			$sql = "INSERT INTO ind1_fgds (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the RSP
if(isset($_POST['ind1_rsp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/ResourceStrategicPlan/' . $filename;

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
			$sql = "INSERT INTO ind1_rsp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the MQI
if(isset($_POST['ind1_mqi']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/MonthlyQuarterlyInventory/' . $filename;

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
			$sql = "INSERT INTO ind1_mqi (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the PTB
if(isset($_POST['ind1_ptb']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/PostingofTrasparencyBoard/' . $filename;

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
			$sql = "INSERT INTO ind1_ptb (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the RMOOE
if(isset($_POST['ind1_rmooe']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/ReportsMOOEUtilization/' . $filename;

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
			$sql = "INSERT INTO ind1_rmooe (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the RSEFU
if(isset($_POST['ind1_rsefu']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/ReportsonSEFUtilization/' . $filename;

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
			$sql = "INSERT INTO ind1_rsefu (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the RIGP
if(isset($_POST['ind1_rigp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/ReportsonIGP/' . $filename;

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
			$sql = "INSERT INTO ind1_rigp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the MCC
if(isset($_POST['ind1_mcc']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/MeteeingsConferencesConsultations/' . $filename;

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
			$sql = "INSERT INTO ind1_mcc (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the FGDSORI
if(isset($_POST['ind1_fgdsori']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/FGDbyStakeholders&SORI/' . $filename;

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
			$sql = "INSERT INTO ind1_fgdsori (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the RIRDV
if(isset($_POST['ind1_rirdv']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/ReportsDulyValidated/' . $filename;

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
			$sql = "INSERT INTO ind1_rirdv (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the SIP/AIP
if(isset($_POST['ind1_sipaip']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/SIP-AIP/' . $filename;

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
			$sql = "INSERT INTO ind1_sipaip (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}

//for the LR
if(isset($_POST['ind1_lr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/LiquidationReports/' . $filename;

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
			$sql = "INSERT INTO ind1_lr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the NR
if(isset($_POST['ind1_nr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/NarrativeReports/' . $filename;

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
			$sql = "INSERT INTO ind1_nr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


//for the OSA
if(isset($_POST['ind1_osa']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../../indicator1/ManagementOfResources/ind1_uploads/OtherSupportingArtifacts/' . $filename;

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
			$sql = "INSERT INTO ind1_osa (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

			if (mysqli_query($conn, $sql)) 
			{
				echo " <b>Success:</b> File submitted sccuessfully!";
			}
			else
			{
				  echo "<strong>Error:</strong> Sorry, there's an error.";
			}
		}
	}
}


?>