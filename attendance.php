<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	

 <div class="container">
 	 <div class="card">
	  <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
	   <div class="row">
	   <div class="col-md-2">
	   <a href="admin-panel.php" class="btn btn-light">Go back</a>
	   </div>
	   <div class="col-md-4"><h3>Doctor Attendance</h3></div>
	  
	   </div>
	    <div class="card-body"></div>
		<table class="table table-hover">
  <thead>
    <tr>
      <th>Doctor's name</th>
	  <th>Specialization</th>
	  <th>Email Id</th>
	  <th>Contact</th>
	  <th>Atendance</th>
         </tr>
  </thead>
  <tbody>
  <?php get_doctor_attendance();?>
  </tbody>
</table>
</div>
 </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
