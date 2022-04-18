<?php 


$conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS,DATABASE_NAME);


//upload files to database by table


//for the hrdp
if(isset($_POST['ind4_hrdp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/HumanResourceDevPlan/' . $filename;

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
			$sql = "INSERT INTO ind4_hrdp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the frmdp
if(isset($_POST['ind4_frmdp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/FinancialResourceManagementDevPlan/' . $filename;

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
			$sql = "INSERT INTO ind4_frmdp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the trip
if(isset($_POST['ind4_trip']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/TechResourceImprovementPlan/' . $filename;

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
			$sql = "INSERT INTO ind4_trip (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the spfdp
if(isset($_POST['ind4_spfdp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/SchoolPhysicalFacilitiesDevPlan/' . $filename;

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
			$sql = "INSERT INTO ind4_spfdp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the qaqp
if(isset($_POST['ind4_qaqp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/QAforAQP/' . $filename;

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
			$sql = "INSERT INTO ind4_qaqp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the sm
if(isset($_POST['ind4_sm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/StartUpMonitoring/' . $filename;

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
			$sql = "INSERT INTO ind4_sm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the qpm
if(isset($_POST['ind4_qpm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/QuarterlyProgressMonitoring/' . $filename;

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
			$sql = "INSERT INTO ind4_qpm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the ige
if(isset($_POST['ind4_ige']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/InitialGainEvaluation/' . $filename;

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
			$sql = "INSERT INTO ind4_ige (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the qapm
if(isset($_POST['ind4_qapm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/QA4ProgressMonitoring/' . $filename;

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
			$sql = "INSERT INTO ind4_qapm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the oe
if(isset($_POST['ind4_oe']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/OutcomeEvaluation/' . $filename;

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
			$sql = "INSERT INTO ind4_oe (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the im
if(isset($_POST['ind4_im']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/ImpactEvaluation/' . $filename;

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
			$sql = "INSERT INTO ind4_im (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the qmep
if(isset($_POST['ind4_qmep']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/QA4MEP/' . $filename;

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
			$sql = "INSERT INTO ind4_qmep (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the sfa
if(isset($_POST['ind4_sfa']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/StakeholdersForum/' . $filename;

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
			$sql = "INSERT INTO ind4_sfa (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the es
if(isset($_POST['ind4_es']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/EducationSummit/' . $filename;

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
			$sql = "INSERT INTO ind4_es (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the others
if(isset($_POST['ind4_others']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/Others/' . $filename;

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
			$sql = "INSERT INTO ind4_others (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the qrfb
if(isset($_POST['ind4_qrfb']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/QA4ReportingFeedbacking/' . $filename;

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
			$sql = "INSERT INTO ind4_qrfb (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the ild
if(isset($_POST['ind4_ild']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/InvitationLetters/' . $filename;

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
			$sql = "INSERT INTO ind4_ild (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the prog
if(isset($_POST['ind4_prog']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/Programs/' . $filename;

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
			$sql = "INSERT INTO ind4_prog (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the st
if(isset($_POST['ind4_st']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/SynthesisTemplates/' . $filename;

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
			$sql = "INSERT INTO ind4_st (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the tam
if(isset($_POST['ind4_tam']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/Templates4AgreementsMade/' . $filename;

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
			$sql = "INSERT INTO ind4_tam (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the srm
if(isset($_POST['ind4_srm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/ScheduleofRegularMeetings/' . $filename;

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
			$sql = "INSERT INTO ind4_srm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the ar
if(isset($_POST['ind4_ar']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/AttendanceRecords/' . $filename;

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
			$sql = "INSERT INTO ind4_ar (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the mom
if(isset($_POST['ind4_mom']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/MinutesOfTheMeeting/' . $filename;

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
			$sql = "INSERT INTO ind4_mom (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the vip
if(isset($_POST['ind4_vip']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/Validation&InventoryOfPrograms/' . $filename;

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
			$sql = "INSERT INTO ind4_vip (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the pic
if(isset($_POST['ind4_pic']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/Pictures/' . $filename;

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
			$sql = "INSERT INTO ind4_pic (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the nr
if(isset($_POST['ind4_nr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = '../ManagementOfResources/ind4_uploads/NarrativeReports/' . $filename;

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
			$sql = "INSERT INTO ind4_nr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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