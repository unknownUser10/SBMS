<?php 


$conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS,DATABASE_NAME);


//upload files to database by table


//for the Internal Factors
if(isset($_POST['ind2_ifsrm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/InternalFactorsAffectingSRM/' . $filename;

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
			$sql = "INSERT INTO ind2_ifsrm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the GAP Analysis
if(isset($_POST['ind2_ga']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/GAPAnalysis/' . $filename;

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
			$sql = "INSERT INTO ind2_ga (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the Rapid Appraisal
if(isset($_POST['ind2_ra']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/RapidAppraisal/' . $filename;

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
			$sql = "INSERT INTO ind2_ra (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the Results of Other Analysis PRocess
if(isset($_POST['ind2_fgdr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/FGDResource/' . $filename;

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
			$sql = "INSERT INTO ind2_fgdr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the ROAP
if(isset($_POST['ind2_roap']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/ResultsOtherAnalysisProcess/' . $filename;

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
			$sql = "INSERT INTO ind2_roap (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the Planning Sched
if(isset($_POST['ind2_ps']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/PlanningSched/' . $filename;

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
			$sql = "INSERT INTO ind2_ps (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the Min/Docs of the Plan. Meeting
if(isset($_POST['ind2_dpm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/DocumentsOfPlanningMeeting/' . $filename;

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
			$sql = "INSERT INTO ind2_dpm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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


//for the Supplemental Plan
if(isset($_POST['ind2_sp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/SupplementalPlan/' . $filename;

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
			$sql = "INSERT INTO ind2_sp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the Attendance Record
if(isset($_POST['ind2_ar']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/AttendanceRecord/' . $filename;

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
			$sql = "INSERT INTO ind2_ar (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the Supporting Artifacts
if(isset($_POST['ind2_sa']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/SupportingArtifacts/' . $filename;

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
			$sql = "INSERT INTO ind2_sa (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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


//for the HRDP
if(isset($_POST['ind2_hrdp']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/HRDP-SPPD/' . $filename;

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
			$sql = "INSERT INTO ind2_hrdp (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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


//for the Feedback Mechanism
if(isset($_POST['ind2_fm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind2_uploads/FeedbackMechanism/' . $filename;

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
			$sql = "INSERT INTO ind2_fm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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