<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
=======
  <html lang="en">
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
<<<<<<< HEAD
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Doctor's Clinic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
=======
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Clinic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
 </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout.php">
        <i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="patient_search.php">
<<<<<<< HEAD
     <input class="form-control mr-sm-2" type="text" placeholder="enter contact number" aria-label="Search" name="contact">
=======
      <input class="form-control mr-sm-2" type="text" placeholder="enter contact number" aria-label="Search" name="contact">
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="patient_search_submit" value="Search">
    </form>
  </div>
</nav>
<<<<<<< HEAD
 <div class="jumbotron" style="border-radius:0;background:url('image2.jpg');background-size:cover;height:400px;"></div>
=======
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
 <div class="jumbotron" id="ab1" style="background:url('image/4.jpg') no-repeat;
                              background-size:cover;height:300px;
							  background-color:#3498DB;color:#ffffff;"></div>
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
   <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
  <div class="col-md-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appointment</a>
<<<<<<< HEAD
      
      <a class="list-group-item list-group-item-action" id="list-patient-list" data-toggle="list" href="#list-patient" role="tab" aria-controls="patient">Patient Details</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Payment Status</a>
      
      <a class="list-group-item list-group-item-action" id="list-doctor-list" data-toggle="list" href="#list-doctor" role="tab" aria-controls="doctor">Doctors Section</a>
       <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="attend">Attendance</a>
=======
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Payment Status</a>
      <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-patient" role="tab" aria-controls="patient">Patient Details</a>
     
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Doctors Section</a>
       <a class="list-group-item list-group-item-action" id="list-attend-list" data-toggle="list" href="#list-attend" role="tab" aria-controls="settings">Attendance</a>
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
    </div><br>
  </div>
  <div class="col-md-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
              <center><h4>Create an appointment</h4></center></div>
<<<<<<< HEAD
			          <div class="card-body">
=======
			  <div class="card-body" >
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
              <form class="form-group" method="post" action="func.php">
                <div class="row">
                  <div class="col-md-4"><label>First Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="fname"></div><br><br>
                  <div class="col-md-4"><label>Last Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="lname"></div><br><br>
                  <div class="col-md-4"><label>Email id:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="email"></div><br><br>
                  <div class="col-md-4"><label>Contact Number:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="contact"></div><br><br>
                  <div class="col-md-4"><label>Doctor:</label></div>
                  <div class="col-md-8">
                   <select name="docapp" class="form-control" >
<<<<<<< HEAD
                   <!-- <option value="Dr. Punam Shaw">Dr.Punam Shaw</option>
                      <option value="Dr. Ashok Goyal">Dr.Ashok Goyal</option>-->
                      
                  </select>
=======
                     <option value="Dr. Punam Shaw">Dr.Punam Shaw</option>
                      <option value="Dr. Ashok Goyal">Dr.Ashok Goyal</option>
                      </select>
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
                    </div>  
                  <div class="col-md-4"><label>Payment:</label></div>
                  <div class="col-md-8">
                    <select name="pay_status" class="form-control" >
                      <option value="Paid">Paid</option>
                      <option value="Pay later">Pay later</option>
                    </select>
                  </div><br><br>
                  <div class="col-md-4">
                    <input type="submit" name="pat_submit" value="Create new entry" class="btn btn-primary" id="inputbtn">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>
<<<<<<< HEAD
       <div class="tab-pane fade" id="list-patient" role="tabpanel" aria-labelledby="list-patient-list">
        <?php include("patient_details.php");?>
      </div>
=======
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
        <div class="card">
          <div class="card-body">
            <form class="form-group" method="post" action="func.php">
              <input type="text" name="contact" class="form-control" placeholder="enter contact"><br>
              <select name="status" class="form-control">
                <option value="paid">paid</option>
                <option value="pay later">pay later</option>
              </select><br><hr>
              <input type="submit" value="update" name="update_data" class="btn btn-primary">
<<<<<<< HEAD
              </form>
          </div>
        </div>
      </div>
        <div class="tab-pane fade" id="list-doctor" role="tabpanel" aria-labelledby="list-doctor-list">
            <div class="card">
          <div class="card-body">
=======
            </form>
          </div>
        </div><br><br>
      </div> 


      <div class="tab-pane fade" id="list-patient" role="tabpanel" aria-labelledby="list-patient-list">
        


      <?php include("patient_details.php");
     ?>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
        <form class="form-group" method="post" action="func.php">
          <label>Doctors name: </label>
          <input type="text" name="name" placeholder="enter doctors name" class="form-control">
          <br>
          <input type="submit" name="doc_sub" value="Add Doctor" class="btn btn-primary">
        </form>
      </div>
<<<<<<< HEAD
    </div>
  </div>
       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">
         <?php include("attendance.php");?>
=======
       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">
        
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
       </div>
    </div>
  </div>
</div>
<<<<<<< HEAD
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--Sweet alert js-->
 <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>-->

<!--<script type="text/javascript">
$(document).ready(function()){
	swal({
  title: 'Welcome!',
  text: 'Have a great day!'
=======
   </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--Sweet alert js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>"
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	swal({
  title: 'Welcome!',
  text: 'Have a great day!',
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
  imageUrl: 'images.jpg',
  imageWidth: 250,
  imageHeight: 250,
  imageAlt: 'Custom image',
  animation: false
})
}
<<<<<<< HEAD
</script>	-->
</body>
</html>

=======
</script>	
</body>
</html>
>>>>>>> 2acd73308eb5eb0c1cdee431cfb35a220b2234b9
