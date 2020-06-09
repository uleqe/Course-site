<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auth form</title>
    <link rel="stylesheet" href="course_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <style type="text/css">
        	.login-form {
        		width: 340px;
            	margin: 50px auto;
        	}
            .login-form form {
            	margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
            body{
                font-size: 100%;
            }
    </style>


    <script>
    
        $(document).ready(function(){
            $("#sign-in").click(function(){
                event.preventDefault();
                $.ajax('auth1.php', {
                    type: 'POST',  
                    data: { username:   $("#email").val(),
                            password:$("#password").val()},  
                    accepts: 'application/json; charset=utf-8',
                    success: function (data) {
                        if (data.message == 'success') {
                            window.location.href = "main.php";
                        }
                    },
                    error: function (errorData, textStatus, errorMessage) {
                        var msg = (errorData.responseJSON != null) ? errorData.responseJSON.errorMessage : '';
                        $("#error1").text('Error: ' + msg + ', ' + errorData.status);
                        $("#error1").show();
                    }  
                });
            });
        });

    </script>


</head>
<body>
    <!-- navigation bar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" style="font-size: 115%">
        <h5 class="my-0 mr-md-auto font-weight-normal" style="font-size: 180%"><a href="site.php" style="text-decoration: none">CourseSites</a></h5>
        <nav class="my-2 my-md-0 mr-md-3" style="font-size: 170%;">
            <a class="p-2 text-dark" href="site.php">Home</a>
            <a class="p-2 text-dark" href="#">Courses</a>
            <a class="p-2 text-dark" href="#">About us</a>
        </nav>
        <a class="btn btn-outline-primary" href="auth.php" style="font-size: 170%">Sign in</a>  
    </div>

    <!-- form authorization -->
    <div class="login-form" >
        <form action="auth.php" method="post" style="font-size: 150%">
            <h2 class="text-center">Log in</h2>   
            <span class="error text-danger" id="error1" style="display: none"></span>    
            <!-- <?php //include('error.php'); ?> -->
            <div class="form-group">
                <input type="email" id="email" class="form-control" style="font-size: 110%" placeholder="Enter email" name="log_name" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control" style="font-size: 110%" placeholder="Enter password" name="log_pass" required>
            </div>
            <div class="form-group">
                <input id="sign-in" type="submit" class="btn btn-primary btn-block" style="font-size: 110%" style="color: hsl(211, 100%, 50%);" name="login" value="Sign-in"></input>
            </div>
            <div class="clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox">Remember me</label>
                <!-- <a href="#" class="pull-right">Forgot Password?</a> -->
            </div>        
        </form>
        <p class="text-center" style="font-size: 170%"><a href="register.php">Create an Account</a></p>
    </div>

</body>
</html>