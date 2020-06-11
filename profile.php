<?php 
session_start();
require_once "link.php";
$stmt = $link->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $_SESSION['user']['email']);

$stmt->execute();


$result = $stmt->get_result();

$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" style="font-size: 130%">
        <h5 class="my-0 mr-md-auto font-weight-normal" style="font-size: 130%"><a href="auth.php" style="text-decoration: none;color:blue;">CourseSites</a></h5>
        <nav class="my-2 my-md-0 mr-md-3" id="menu">
            <a class="p-2 text-dark" href="#">Home</a>
            <a class="p-2 text-dark" href="#courses">Courses</a>
            <a class="p-2 text-dark" href="#">About us</a>
        </nav>
        <!-- <a class="btn btn-outline-primary" href="auth.php" style="font-size: 105%">
        Sign-in
        </a> -->
        <a href="profile.php" style="color:blue;">
        <?php 
            print $row['username'];
        ?>
        </a>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        <form method="post" action="update.php">
                        <span class="error text-danger" id="error1" style="display: none"></span>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Username</label> 
                                <div class="col-8">
                                  <input id="username" name="username"  class="form-control here" required="required" type="text" value="<?php print $row['username']; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="name" name="name" value="<?php print $row['fname']; ?>" placeholder="Enter your first name" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" value="<?php print $row['lname']; ?>" placeholder="Last Name" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="email" name="email" value="<?php print $row['email']; ?>" class="form-control here" required="required" type="text" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="publicinfo" class="col-4 col-form-label">Public Info</label> 
                                <div class="col-8">
                                  <a style="decoration:none;"><?php print $row['public_info']; ?></a>
                                  <textarea id="publicinfo" value="" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="password">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <input id="update" name="submit" type="submit" class="btn btn-primary" value="Update My Profile"></input>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <a href="sign_out.php" class="btn btn-primary" style="color:white">Sign out</a>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>

<script>
    //   $(document).ready(function() {
    //     $("#update").click(function(){
    //             event.preventDefault();
    //             $.ajax('update.php', {
    //                 type: 'POST',  
    //                 data: { username:   $("#email").val(),
    //                         newpass:$("#newpass").val(),
    //                         fname:$('#name').val(),
    //                         lname:$('#lastname').val(),
    //                         p_info:$('#publicinfo').val(),
    //                         email:$('#email').val()
    //                       }
    //                 accepts: 'application/json; charset=utf-8',
    //                 success: function (data) {
    //                     if (data.message == 'success') {
    //                         alert("Data successfully updated!");
    //                         window.location.href = "profile.php";
    //                     }
    //                     // alert(response);
    //                 }
    //                 error: function (errorData, textStatus, errorMessage) {
    //                     var msg = (errorData.responseJSON != null) ? errorData.responseJSON.errorMessage : '';
    //                     $("#error1").text('Error: ' + msg + ', ' + errorData.status);
    //                     $("#error1").show();
    //                 }  
    //             });

    //   });
    // });
    </script>

</body>
</html>