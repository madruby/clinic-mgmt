<?php
<<<<<<< HEAD
$con=mysqli_connect("localhost","root","","hmsdb");
=======
$con=mysqli_connect("localhost","root","","cmsdb");
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
if(isset($_POST['login_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
<<<<<<< HEAD
	$query="select * from logintb where username='$username' and password='$password' ";
=======
	$query="select * from logindb where username='$username' and password='$password' ";
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	}
	else{

		echo "<script> alert('enter correct details.')  </script>" ;
		echo "<script>  window.open('index.php','_self')  </script>"  ;
	}
}
if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$pay_status=$_POST['pay_status'];
<<<<<<< HEAD
	$query="insert into doctorapp values('$fname','$lname','$email','$contact','$docapp','$pay_status')";
=======
	$query="insert into doctrapp values('$fname','$lname','$email','$contact','$docapp','$pay_status')";
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert('Appointment registered.')  </script>" ;
		echo "<script>  window.open('admin-panel.php','_self')  </script>"  ;
	}

}

function get_patient_details()
{
	global $con;
<<<<<<< HEAD
	$query="SELECT * FROM doctorapp ";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
	 $fname=$row['fname'];
=======
	$query="select * from doctrapp ";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
	 $lname=$row['lname'];
 	 $email=$row['email'];
	 $contact=$row['contact'];
	 $docapp=$row['docapp'];
	 $pay_status=$row['pay_status'];
	 echo"<tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
       <td>$pay_status</td>
    </tr>";
	}
	
}
<<<<<<< HEAD
=======

>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
if(isset($_POST['update_data']))
{
	global $con;
	$contact=$_POST['contact'];
	$status=$_POST['status'];
<<<<<<< HEAD
	$query="UPDATE doctorapp SET pay_status='$status'  WHERE contact='$contact';";
=======
	$query="update doctrapp set pay_status='$status' where contact='$contact';";
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
$result=mysqli_query($con,$query);
	if($result)
	{
		header("Location:update.php");
	}
}

<<<<<<< HEAD
function display_doctors()
{
	global $con;
	$query="select * from doctb";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$name=$row['name'];
		echo '<option value="'.$name.'">'.$name.'</option>';
	}
}
if(isset($_POST['doc_sub']))
{
	$name=$_POST['name'];
	$query="INSERT INTO doctb(name)VALUES('$name')";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:adddoc.php");
}
=======
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9


function get_doctor_attendance()
{
<<<<<<< HEAD

   global $con;
   $query="select * from doctordb";
   $result=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result))
   {

      $dname=$row['dname'];
	 $special=$row['special'];
 	 $email=$row['email'];
	 $contact=$row['contact'];
	 if(isset($_POST['attendance']))
=======
	
	global $con;

	$query="select * from doctordb ";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$dname=$row['dname'];
	 $special=$row['special'];
 	 $email=$row['email'];
	 $contact=$row['contact'];
	
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
	 echo"<tr>
      <td>$dname</td>
      <td>$special</td>
      <td>$email</td>
      <td>$contact</td>
<<<<<<< HEAD
      <td>
		PRESENT<input type='radio' name='attendance[]' value='Present'> ABSENT<input type='radio' name='attendance[]' value='Absent'>
    </td> 
         </tr>";
   }
}


?>
=======
      <td>	PRESENT<input required type='radio' name='attendance[]' value='Present'> ABSENT<input required type='radio' name='attendance[]' value='Absent'>
		</td>
    </tr>";
	}
}
?>
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
