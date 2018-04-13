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

 <form class="form-group" method="post" action="func.php">
         
          
      
		<table class="table table-hover">
  <thead>
    <tr>
      <th>Doctors Name</th>
	  <th>Specialization</th>
	  <th>Email Id</th>
	  <th>Contact</th>
	  <th>Attendance</th>
	
    </tr>
 </thead>
    <tbody>

    	<?php get_doctor_attendance();
    	?>	

    </tbody>

    <?php
    	if($_SERVER['REQUEST_METHOD']=='POST')
    	{
    		$att=$_POST['attendance'];
    		$date=date('d-m-y');
    		$query="select distinct date from attendance";
    		$result=$con->query($query);
    		$b=false;
    		if($result->num_rows>0)
    		while($check=$result->fetch_assoc()){
    			if($date==$check['date']){
    				$b=true;
    				echo "<div class='alert alert-danger'>

    				Attendance already taken!!;
    				</div>";
    			}
    	   }
        }

         if(!$b)
           {
    			 foreach ($att as $key => $value) 
    			 {


    				if($value=="Present"){
    					$query="insert into attendance(values,dname,date) values ('Present',$key,$date)";
    					$insertResult=$con->query($query);
    				}
    				else
    				{
    					$query="insert into attendance(values,dname,date) values ('Absent',$key,$date)";
    					$insertResult=$con->query($query);
    				}
    			 
    			   
    			 }

    	
    	        	if($insertResult){
    			  echo "<div class='alert alert-success'>

    				Attendance taken successfully!!;
    				</div>";

    		     }
		   
    	    }
    	
     ?>
         

  </table>
 <input type="submit" name="doc_attn" value="Take Attendance" class="btn btn-light">
  </form>
 



 </div>
</div> 
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

	



