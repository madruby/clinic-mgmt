<!DOCTYPE html>
<head>
<title>Patient_search</title>
</head>
<<<<<<< HEAD
<body>
<?php 
include("func.php");
if(isset($_POST['patient_search_submit']))
{
	global $con;
	$contact=$_POST['contact'];
	$query="SELECT * FROM doctorapp WHERE contact='$contact'";
	$result=mysqli_query($con,$query);

	echo "<div class='container-fluid' style='margin-top:150px;'>
	     <div class='card'>
	     <div class='card-body' style='background-color:#3498DB;color:#ffffff;'></div>
		 <a href='patient_details.php' class='btn btn-light'>Go back</a></div>
 		  
		<table class='table table-hover'>
  <thead>
    <tr>
=======

<body>
<?php include("func.php");
if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['contact'];
	$query="select * from doctrapp where contact='$contact'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' style='margin-top:150px;'>
	     <div class='card'>
		 <div class='card-body'>
		 <a href='patient_details.php' class='btn btn-light'>Go back</a></div>
 		  <div class='card-body' style='background -color:#3498DB;color:#ffffff;background-size:cover;
 		  background-image:url('image/3.jpg');>
 		  </div>
		<table class='table table-hover'>
      <thead>
     <tr>
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
      <th>First name</th>
	  <th>Last name</th>
	  <th>Email id</th>
	  <th>Contact</th>
	  <th>Doctor Appointment</th>
	  <th>Payment status</th>
         </tr>
<<<<<<< HEAD
  </thead>
  <tbody>
 ";
  	while($row=mysqli_fetch_array($result)){
=======
       </thead>
        <tbody>
        ";
  	 while($row=mysqli_fetch_array($result))
  	 {
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
		$fname=$row['fname'];
	 $lname=$row['lname'];
 	 $email=$row['email'];
	 $contact=$row['contact'];
	 $docapp=$row['docapp'];
	 $pay_status=$row['pay_status'];
<<<<<<< HEAD
	 echo"<tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
       <td>$pay_status</td>
    </tr>";
	}
=======
	 echo"	<tr>
      		<td>$fname</td>
      		<td>$lname</td>
      		<td>$email</td>
     		<td>$contact</td>
      		<td>$docapp</td>
       		<td>$pay_status</td>
    		</tr>";
	    }
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
	echo"</tbody></table></div></div>";
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

