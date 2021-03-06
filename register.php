<?php
error_reporting(0);
echo '<html><head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="js\materialize.min.js"></script></head></html>';
$dbhost = "localhost";
$dbuser = "itinvadaurz";
$dbpass = "itinvadaurz";
$dbname = "invadaurz";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
  echo '<div class="row">
  <div class="col l12 m12 s12 center">
  <span class="center red-text">Error Occurred: '.mysqli_error($conn).'</span>'.
  '</div>
  </div>';
  die($conn);
}
else{
  if(isset($_POST['btnSubmit'])){
    $rollno = $_POST['roll'];
    $rollno = strtolower($rollno);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $name = $fname.' '.$lname;
    $degree = $_POST['degree'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $password = $_POST['pwd'];
    if($_POST['pwd']!=$_POST['cpwd']){
      echo '<script>swal("Warning!","Your passwords don\'t match","warning");</script>';
    }
    else{
      $sql = "SELECT rollno FROM userdetails WHERE rollno = '$rollno'";
      $res = mysqli_query($conn, $sql);
      $res = mysqli_fetch_row($res);
      if($res[0]==$rollno){
        echo '<script>swal("Warning!","You\'re already registered","warning");</script>';
      }
      else{
        $sql = "LOCK TABLE userdetails WRITE";
        $res = mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        $sql = "INSERT INTO userdetails(rollno, name, degree, branch, year, phone, mail, password) VALUES('$rollno', '$name', '$degree', '$branch', $year, '$phone', '$mail', '$password')";
        $res = mysqli_query($conn, $sql);
        if(!$res){
          echo '<div class="row">
          <div class="col l12 m12 s12 center">
          <span class="center red-text">Error Occurred: '.mysqli_error($conn).'</span>'.
          '</div>
          </div>';
        }
        else{
          $width = $height = 200;
          $url   = urlencode("http://invadaurz.in/eventRegistration.php?rollno=$rollno");
          //echo "<img src=\"http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chl=$url\">";
          $content = file_get_contents("http://chart.googleapis.com/chart?chs={$width}x{$height}&cht=qr&chl=$url");
          file_put_contents("img/qr/$rollno.png",$content);
          $qr = "img/qr/$rollno.png";
          require_once "mail.php";
          $from = "<invadaurz2k17@gmail.com>";//Invadaurz Gmail ID goes here
    			$to = "<$mail>";//SU email id goes here
    			$subject = "Confirmation for Invadaurz Registration";
          $host = "ssl://smtp.gmail.com";
    			$port = "465";
          $content_type = "text/html; charset: utf8";
          $mime_version = 1.0;
          $uname = "invadaurz2k17@gmail.com";//Invadaurz Gmail ID goes here
    			$password = "sandeeppuma";//Invadaurz Gmail password
    			$headers = array ('From' => $from,
    			'To' => $to,
    			'Subject' => $subject,
          'Content-type' => $content_type,
          'MIME-Version' => $mime_version);
          $file_url = "http://www.invadaurz.in/img/qr/$rollno.png";
          $subject = "Confirmation of Invadaurz Registration";
          $body = '<html><head></head><body>
          <h1>Hey '.$name.'! </h1>
          <p>You\'re sucessfully registered for Invadaurz 2k17. You\'re sent a QR Code along with this mail. Use this QR Code to register for the events.</p>
          <p> <img src="'.$file_url.'" alt="qrcode"/> </p>
          </body></html>';
    			$smtp = Mail::factory('smtp',array ('host' => $host,'port' => $port,'auth' => true,'username' => $uname, 'password' => $password));
          $email = $smtp->send($to, $headers, $body);
          if (PEAR::isError($email)) {
              //echo("<p>" . $email->getMessage() . "</p>");
          }
          else {
              echo '<script>swal("Success!","You\'re successfully registered. Please check out your mail for further details...","success");</script>';
          }

          /*}
          else{
            echo '<script>swal("Error!","An unidentified problem occurred. Please try again. Sorry for the inconvenience.","error");</script>';
          }*/
        }
        $sql = "UNLOCK TABLES";
        $res = mysqli_query($conn, $sql);
        echo mysqli_error($conn);
      }
    }
    unset($_POST['btnSubmit']);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>INVADAURZ | ITA | 2017</title>
  <link rel="icon" href="img/ITALogo.jpeg">
  <meta charset="utf-8">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css\materialize.min.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
  <link rel="stylesheet" href="css\animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <script src="js\materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".button-collapse").sideNav();
    $(".modal").modal();
    $('select').material_select();
    $(".parallax").parallax();
  });
  $("#formValidate").validate({
    rules: {
      fname: {
        required: true,
        minlength: 5
      },lname: {
        required: true,
        minlength: 5
      },
      mail: {
        required: true,
        email:true
      },
      psw: {
        required: true,
        minlength: 5
      },
      cpwd: {
        required: true,
        minlength: 5,
        equalTo: "#pwd"
      },
      curl: {
        required: true,
        url:true
      },
      crole:"required",
      ccomment: {
        required: true,
        minlength: 15
      },
      cgender:"required",
      cagree:"required",
    },
    //For custom messages
    messages: {
      uname:{
        required: "Enter a username",
        minlength: "Enter at least 5 characters"
      }
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
  });

  var options = [
    {selector: '#techText', offset: 50, callback: function(el) {
      $("#techText").addClass("animated slideInLeft");
    } },
    {selector: '#funText', offset: 50, callback: function(el) {
      $("#funText").addClass("animated slideInRight");
    } }
  ];
  Materialize.scrollFire(options);
  </script>
  <style>
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    font-family: 'Philosopher', sans-serif;
  }

  main {
    flex: 1 0 auto;
  }

  </style>
</head>

<body style="font-size:1.4rem;overflow-x: hidden;background:#e3f2fd">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="center brand-logo">INVADAURZ</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse waves-effect"><i class="material-icons">menu</i></a>
        <ul class=" hide-on-med-and-down">
          <li class="left active"><a class="waves-effect" href="register.php">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="about.php">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="contact.php">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
          <li class="right"><a class="waves-effect" href="events.php">EVENTS</a></li>
          <li class="right"><a class="waves-effect" href="home.php">HOME</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="mobile-demo">
    <li><a class="waves-effect" href="home.php"><i class="material-icons">home</i></a></li>
    <li><a class="waves-effect" href="events.php">EVENTS</a></li>
    <li><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
    <li><a class="waves-effect" href="contact.php">CONTACT US</a></li>
    <li><a class="waves-effect" href="about.php">ABOUT US</a></li>
    <liclass="active"><a class="waves-effect" href="register.php">REGISTER</a></li>
  </ul>
  <main>
    <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="container">
        <div class="row">
          <h3 class="blue-text text-accent-1 row center">
            Invadaurz Registration
          </h3>
          <div>
            <div class="row">
              <div class="">
                <span class="input-field col l3 m3 s6">
                  <input id="first_name" name="fname" type="text" class="validate" required>
                  <label for="fname">First Name</label>
                </span>
                <span class="input-field col l3 m3 s6">
                  <input id="last_name" name="lname" type="text" class="validate" required>
                  <label for="lname">Last Name</label>
                </span>
                <span class="input-field col l6 m6 s12">
                  <input id="roll" type="text" name="roll" class="validate" required/>
                  <label for="roll">Roll No.</label>
                </span>
                <div id="degree" class="input-field col l6 m6 s12">
                  <select name="degree" required>
                    <option value="B.E.">B.E.</option>
                    <option value="B.Tech." selected>B.Tech.</option>
                    <option value="Others">Others</option>
                  </select>
                  <label for="degree">Degree</label>
                </div>
                <div id="branch" class="input-field col l6 m6 s12">
                  <select name="branch" required>
                    <option value="Automobile Engineering">Automobile Engineering</option>
                    <option value="Bio Technology"> Bio Technology</option>
                    <option value="Civil Engineering"> Civil Engineering</option>
                    <option value="Computer Science and Engineering"> Computer Science and Engineering</option>
                    <option value="Electrical and Electronics Engineering"> Electrical and Electronics Engineering </option>
                    <option value="Electronics &amp; Communication Engineering"> Electronics &amp; Communication Engineering</option>
                    <option value="Information Technology" selected>Information Technology</option>
                    <option value="Mechanical Engineering"> Mechanical Engineering</option>
                    <option value="Metallurgical Engineering"> Metallurgical Engineering</option>
                    <option value="Production Engineering"> Production Engineering</option>
                    <option value="Mechanical Engineering (Sandwich)"> Mechanical Engineering (Sandwich) </option>
                    <option value="Electrical and Electronics Engineering (Sandwich)"> Electrical and Electronics Engineering (Sandwich)</option>
                    <option value="Production Engineering (Sandwich)"> Production Engineering (Sandwich)</option>
                    <option value="Robotics and Automation Engineering"> Robotics and Automation Engineering</option>
                    <option value="Textile Technology"> Textile Technology</option>
                    <option value="Textile Technology (Part Time)"> Textile Technology (Part Time)</option>
                    <option value="Bio Medical Engineering"> Bio Medical Engineering</option>
                    <option value="Fashion Technology"> Fashion Technology</option>
                    <option value="Instrumentation and Control Engineering">Instrumentation and Control Engineering</option>
                    <option value="Applied Sciences">Applied Sciences</option>
                    <option value="Computer System and Design">Computer System and Design</option>
                    <option value="Others">Others</option>
                  </select>
                  <label for="branch">Branch</label>
                </div>

                <div id="year" class="input-field col l6 m6 s12">
                  <select name="year" required>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <label for="year">Year</label>
                </div>


                <div id="college" class="input-field col l6 m6 s12">
                  <select required>
                    <option value="1">PSG College of Technology</option>
                  </select>
                  <label for="college">College</label>
                </div>

                <div id="pmobile" class="input-field col l6 m6 s12">
                  <input id="pmobile" name="phone"type="text" class="validate" required>
                  <label for="pmobile">Mobile</label>
                </div>
                <div id="mail" class="input-field col l6 m6 s12">
                  <input id="mail" name="mail" type="email" class="validate" required>
                  <label for="mail" data-success="valid" data-error="invalid">Mail ID</label>
                </div>

                <div id="pwd" class="input-field col l6 m6 s12">
                  <input id="pwd" name="pwd" type="password" class="validate" required>
                  <label for="pwd">Password</label>
                </div>
                <div id="cpwd" class="input-field col l6 m6 s12">
                  <input id="cpwd" name="cpwd" type="password" class="validate" required>
                  <label for="cpwd">Confirm Password</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="center">
            <button type="submit" name="btnSubmit" class="btn waves-effect waves-light green center">Register</button>
          </div>
        </div>
      </div>
    </form>
  </main>

  <footer class="page-footer">
    <div class="footer">
      <div class="container">
        INVADAURZ 2k17
        <a class="grey-text text-lighten-4 right" href="#!">The Science of Today is the Technology of Tomorrow!</a>
      </div>
    </div>
  </footer>
  </html>
