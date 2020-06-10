<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Register</title>
    <style>
        .reg{
            background-color: hsl(211, 100%, 50%);
        }
        .log{
            color: hsl(211, 100%, 50%);
        }
        .reg-form {
        	width: 680px;
            margin: 50px auto;
        }  
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
    
    $(document).ready(function(){    
        $("#registrate").click(function(){
        event.preventDefault();
            $.ajax('register1.php',{
                type: 'POST',
                data: {
                    email:$("#email").val(),
                    fname:$("#fname").val(),
                    pass:$("#pass").val()
                },
                accepts:'application/json; charset=utf-8',
                success: function(data){
                    if (data.message == 'success') {
                       window.location.href = "auth.php";
                       $("#success").text('You successfully created an account');
                       $("#success").show();
                    }
                },
                error: function (errorData, textStatus ,errorMessage) {
                    var msg = (errorData.responseJSON != null) ? errorData.responseJSON.errorMessage : '';
                    $("#error2").text('Error: ' + msg);
                    $("#error2").show();
                }
            });               
        });

        $('input[name="email"]').bind('blur',function(){
                $.ajax({
                    url: 'fix.php',
                    type: 'POST',
                    data: {
                        email:$("#email").val()
                    },
                    dataType: "html",
                    beforeSend: function(){
                        $("#wait").text('Wait a few minutes..');
                        $("#wait").show();
                    },
                    success: function(data){
                        data = JSON.parse(data);
                        if (data == 'success') {
                            $("#wait").text(data).css('color','green');
                        }else{
                            $("#wait").text(data).css('color','red');
                        }
                    }
                })
            })

    });
    </script>

</head>
<body>

    <!-- navigation bar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" style="font-size: 110%">
        <h5 class="my-0 mr-md-auto font-weight-normal" style="font-size: 125%"><a href="main.php" style="text-decoration: none">CourseSites</a></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="main.php">Home</a>
            <a class="p-2 text-dark" href="#">Courses</a>
            <a class="p-2 text-dark" href="#">About us</a>
        </nav> 
    </div>

    <div class="container reg-form">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register</div>
                    <div class="card-body">
                        <form class="form-horizontal" >
                            <!-- <?php //include('error.php'); ?> -->
                            <span class="error text-danger" id="error2" style="display: none"></span> 
                            <span class="error text-danger" id="success" style="display: none"></span> 
                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="text" id="fname" class="form-control" name="name" id="name" placeholder="Enter your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <span class="error text-danger" id="wait" style="display: none"></span> 
                            </div>
                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="password"  class="form-control" name="password" id="pass" placeholder="Enter your Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input id="registrate" type="submit" class="btn btn-primary btn-lg btn-block login-button reg" name="register" value="Register"></input>
                            </div>
                            <div class="login-register" style="text-align: center;">
                                <p style="text-align: center;">Already have an account?<a href="auth.php" class="log">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>