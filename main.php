<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Course site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#menu").on("click","a", function (event) {
          event.preventDefault();
          var id  = $(this).attr('href'),
              top = $(id).offset().top;
          $('body,html').animate({scrollTop: top}, 1500);
        });
      });
    </script>
  </head>
<body>

    <!-- Navigation bar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm" style="font-size: 130%">
        <h5 class="my-0 mr-md-auto font-weight-normal" style="font-size: 130%">CourseSites</h5>
        <nav class="my-2 my-md-0 mr-md-3" id="menu">
            <a class="p-2 text-dark" href="#">Home</a>
            <a class="p-2 text-dark" href="#courses">Courses</a>
            <a class="p-2 text-dark" href="#">About us</a>
        </nav>
        <a class="btn btn-outline-primary" href="auth.php" style="font-size: 105%">
        <!-- <?php include('account.php') ?> -->
        Sign-in
        </a>
    </div>


    <!-- Main part -->
    <div class="landing">
        <div class="m-section welcome-section" id="m-section">
            <div class="m-header">
            <div class="m-header-text xlarge" role="heading">Welcome to CourseSites</div>
        </div>

        <div class="m-subsection">
            <div class="float-left">
                <video width="500" height="400" preload="auto" autoplay="true" loop="true" muted="muted">
                    <source src="video/video.mp4" type="video/mp4">
                </video>          
            </div>
            <div class="float-right">
                <div class="m-subheading" role="heading">It's never been easier to teach.<br class="hide-on-medium"/> 
                    And learn.
                </div>
                <div class="m-text">
                    <p>Learn anything! </p>
                    <p>Explore any interest or trending topic, take prerequisites, and advance your skills.</p>
                </div>
             </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="m-section browser-section">
            <div class="m-header">
                <div class="m-header-text large" role="heading">
                    Save time & money
                </div>
                <div class="m-header-text small align-center">
                    Spend less money on your learning if you plan to take multiple courses this year.
                </div>
            </div>
            <div class="m-subsection">
                <div class="m-browser-image-container align-center">
                    <img src="photo/savetime.png" alt="Placeholder picture" />
                </div>
            </div>
        </div>

        <div class="m-section image-right-section">
            <div class="m-subsection">
                <div class="float-left align-middle">
                    <div class="m-header">
                        <div class="m-header-text large" role="heading">
                            Flexible learning
                        </div>
                        <div class="m-header-text small">
                            Learn at your own pace, move between multiple courses, or switch to a different course.              
                        </div>
                    </div>
                </div>
                <div class="float-right align-middle">
                    <img src="photo/sev.png" alt="Blackboard Learn on Mobile Device" class="m-image750" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>


        <div class="m-section browser-section">
            <div class="m-header">
                <div class="m-header-text large" role="heading">
                    Unlimited certificates 
                </div>
                <div class="m-header-text small align-center">
                    Earn a certificate for every learning program that you complete at no additional cost.
                </div>
            </div>
            <div class="m-subsection">
                <div class="m-browser-image-container align-center">
                    <img src="photo/ser.png" alt="Blackboard Learn on a Desktop Computer" />
                </div>
            </div>
        </div>

        <!-- Course list -->
        <div id="courses" class="container container-login">
        <div class="row">
            <div class="col-md-8">
                <div class="m-subsection">
                    <div class="float-left hide-on-medium-down align-middle">
                        <img src="photo/page-01.jpeg" width="370" height="330" alt="Placeholder picture" class="m-image750" />
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="">
                <div class="m-header">
                    <div class="m-header-text large" role="heading">
                        Drive success
                    </div>
                    <div class="m-header-text small">
                        Continuously drive improvement with embedded insights into accessibility, learner engagement, and academic performance.
                    </div>
                </div>
            </div>
            <!-- C++ -->
            <div class="col-md-8">
                <div class="m-subsection">
                    <div class="float-left hide-on-medium-down align-middle">
                        <img src="photo/c++.jpg" width="370" height="330" alt="Placeholder picture" class="m-image750"/>
                    </div>
                </div>
            </div>    
            <div class="col-md-4">
                <div class="m-header">
                    <div class="m-header-text large" role="heading">
                        Intro to C++
                    </div>
                    <div class="m-header-text small">
                        Astana IT University.
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>


    <!-- Course lists -->
    <!-- <div class="m-section image-left-section" style="background-color: #FFFFFF">
        <div class="m-subsection">
            <div class="float-left hide-on-medium-down align-middle">
                <a href="course.php"><img src="photo/c++.jpg" width="500" height="330" alt="Placeholder picture" class="m-image750" /></a>
            </div>
            <div class="float-right align-middle">
                <div class="m-header">
                    <a href="course.php" style="text-decoration: none">
                        <div class="m-header-text large" role="heading">Intro to C++</div>
                        <div class="m-header-text small">
                            Astana IT University
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
 -->


      
<!-- 
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="art.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Fashion as Design</h5>
          <p class="card-text">Among all objects of design, our clothes are the most universal and intimate. Like other kinds of design, fashion thrives on productive tensions between form and function, automation and craftsmanship, standardization and customization, universality and self-expression, and pragmatism and utopian vision.</p>
          <a href="#" class="btn btn-primary">Take a course</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="mba.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Master of Business Administration</h5>
          <p class="card-text">Students in the iMBA program earn the same high-quality MBA degree  career or family life on hold. Students achieve business mastery, gain lifelong leadership skills, and build a global network as they work alongside fellow students and faculty.</p>
          <a href="#" class="btn btn-primary">Take a course</a>
        </div>
      </div>
      
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="sql.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">SQL for Data Science</h5>
          <p class="card-text">As data collection has increased exponentially, so has the need for people skilled at using and interacting with data; to be able to think critically, and provide insights to make better decisions and optimize their businesses. </p>
          <a href="#" class="btn btn-primary">Take a course</a>
        </div>
      </div>


      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="med.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Master of Public Health</h5>
          <p class="card-text">The online Master of Public Health in Population and Health Sciences degree from the University of Michigan provides   world through research, education, and practice.</p>
          <a href="#" class="btn btn-primary">Take a course</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="cin.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Chinese for Beginners</h5>
          <p class="card-text">Nowadays, there is an increasing number of people who are interested in Chinese culture and language. And it is useful to know about the language when coming to China for travel or business. This is an ABC Chinese course for beginners, including introduction of phonetics and daily expressions</p>
          <a href="#" class="btn btn-primary">dsd course</a>
        </div>
      </div>
  </div>  
</div> -->
<!-- END MARKETING SECTION. DO NOT CHANGE ANYTHING OUTSIDE THIS AREA. -->

</body>
</html>
