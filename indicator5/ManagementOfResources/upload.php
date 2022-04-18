<?php 


$conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS,DATABASE_NAME);

//upload files to database by table


//for the jf
if(isset($_POST['ind5_jf']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/JollibeeFoundation/' . $filename;

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
			$sql = "INSERT INTO ind5_jf (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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


//for the ljf
if(isset($_POST['ind5_ljf']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/LoveJanFoundation/' . $filename;

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
			$sql = "INSERT INTO ind5_ljf (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the ds
if(isset($_POST['ind5_ds']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/DOLEStanfilco/' . $filename;

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
			$sql = "INSERT INTO ind5_ds (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the edc
if(isset($_POST['ind5_edc']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/EDC/' . $filename;

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
			$sql = "INSERT INTO ind5_edc (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the ppo
if(isset($_POST['ind5_ppo']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/Others4ProjectPartners/' . $filename;

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
			$sql = "INSERT INTO ind5_ppo (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the pta
if(isset($_POST['ind5_pta']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/PTA/' . $filename;

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
			$sql = "INSERT INTO ind5_pta (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the sgc
if(isset($_POST['ind5_sgc']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/SGC/' . $filename;

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
			$sql = "INSERT INTO ind5_sgc (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the lgu
if(isset($_POST['ind5_lgu']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/LGU/' . $filename;

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
			$sql = "INSERT INTO ind5_lgu (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the abc
if(isset($_POST['ind5_abc']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/ABC/' . $filename;

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
			$sql = "INSERT INTO ind5_abc (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the aa
if(isset($_POST['ind5_aa']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/AlumniAssociation/' . $filename;

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
			$sql = "INSERT INTO ind5_aa (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the fa
if(isset($_POST['ind5_fa']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/FacultyAssociation/' . $filename;

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
			$sql = "INSERT INTO ind5_fa (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the spg
if(isset($_POST['ind5_spg']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/SPG-SSG/' . $filename;

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
			$sql = "INSERT INTO ind5_spg (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the po
if(isset($_POST['ind5_po']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/PrivateOrganization/' . $filename;

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
			$sql = "INSERT INTO ind5_po (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the rmpo
if(isset($_POST['ind5_rmpo']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/Others4RMP/' . $filename;

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
			$sql = "INSERT INTO ind5_rmpo (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the aip
if(isset($_POST['ind5_aip']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/AIP-SIP/' . $filename;

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
			$sql = "INSERT INTO ind5_aip (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the ppbm
if(isset($_POST['ind5_ppbm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/ProjectProposal&BudgetMatrix/' . $filename;

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
			$sql = "INSERT INTO ind5_ppbm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the tad
if(isset($_POST['ind5_tad']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/TrainingActivityDesigns/' . $filename;

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
			$sql = "INSERT INTO ind5_tad (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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

//for the pw
if(isset($_POST['ind5_pw']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/ProgramOfWorks/' . $filename;

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
			$sql = "INSERT INTO ind5_pw (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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
if(isset($_POST['ind5_pic']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/Pictures/' . $filename;

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
			$sql = "INSERT INTO ind5_pic (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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
}//for the rmec
if(isset($_POST['ind5_rmec']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/RecordsMEConducted/' . $filename;

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
			$sql = "INSERT INTO ind5_rmec (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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
//for the rrr
if(isset($_POST['ind5_rrr']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/RegularReportingRecords/' . $filename;

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
			$sql = "INSERT INTO ind5_rrr (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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
if(isset($_POST['ind5_ar']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/AccomplishmentReports/' . $filename;

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
			$sql = "INSERT INTO ind5_ar (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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
//for the mm
if(isset($_POST['ind5_mm']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/MinutesOfMeetings/' . $filename;

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
			$sql = "INSERT INTO ind5_mm (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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
//for the arec
if(isset($_POST['ind5_arec']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/AttendanceRecords/' . $filename;

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
			$sql = "INSERT INTO ind5_arec (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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
//for the osao
if(isset($_POST['ind5_osao']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/Others4OSA/' . $filename;

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
			$sql = "INSERT INTO ind5_osao (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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


//for the mmc
if(isset($_POST['ind5_mmc']))
{
	$filename = $_FILES['myfile']['name'];
	$uploader = $_POST['user'];
	$remarks = $_POST['remarks'];
	$date = date('Y-m-d', strtotime($_POST['sub_date']));

	$destination = 'ind5_uploads/CopiesOfMOA&MOVs/' . $filename;

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
			$sql = "INSERT INTO ind5_mmc (name, size, submission, uploader, remarks) VALUES ('$filename','$size','$date','$uploader','$remarks')";

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