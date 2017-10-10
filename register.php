<?php
include ".\\PHPMailer\\src\\PHPMailer.php";
error_reporting(0);
echo '<html><head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="js\materialize.min.js"></script></head></html>';
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
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
          //Mail params
          /*$email = new PHPMailer();
          $email->isSMTP();
          $email->SMTPDebug=2;
          $email->Host = 'smtp.gmail.com';
          $email->Port = 587;
          $email->SMTPSecure = 'tls';
          $email->SMTPAuth = true;
          $email->Username = "pr.gksp@gmail.com";
          $email->Password = "3110902098";
          $email->setFrom("pr.gksp@gmail.com","Information Technology Association");
          $email->Subject = "Invadaurz 2k17 Registration";
          $email->Body = "hi";/* '<html>
          <head>
          <link rel="icon" href="img/ITALogo.jpeg">
          <meta charset="utf-8">
          <link type="text/css" rel="stylesheet" href="css\materialize.min.css"  media="screen,projection"/>
          <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <script src="js\materialize.min.js"></script>"
          </head>
          <body>
            <div class="row">
              <div class="col l12 m12 s12">
                <h1 class="green"> Registration Successful! </h1>
                <p class="left"> Hey '.$name.'!</p>
                <p style="text-align: justify"> You\'re sucessfully registered for Invadaurz 2k17. You\'re sent a QR Code along with this mail. While participating in the event, use this QR Code to register for the events.</p>
                <p class="center" style="color: #005985"> Don\'t miss it!</p>
              </div>
            </div>
          </body>
          </html>';
          $email->AddAddress("pooventhiran_g@icloud.com");
          $path_of_qr = "/img/qr/";
          $email->AddAttachment($path_of_qr, $rollno.".png");
          $mailStat = $email->Send();
          $mailStat = true;
          if($mailStat){*/
            echo '<script>swal("Success!","You\'re successfully registered. Please check out your mail for further details...","success");</script>';
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
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
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
  }

  main {
    flex: 1 0 auto;
  }

  </style>
</head>

<body style="font-family:Lato;font-size:1.4rem">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="center brand-logo">INVADAURZ</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse waves-effect"><i class="material-icons">menu</i></a>
        <ul class=" hide-on-med-and-down">
          <li class="left"><a class="waves-effect modal-trigger" href="#loginModal">LOGIN</a></li>
          <li class="left"><a class="waves-effect" href="register.php">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="about.php">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="contact.php">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
          <li class="right"><a class="waves-effect" href="events.php">EVENTS</a></li>
          <li class="right active"><a class="waves-effect" href="home.php">HOME</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="mobile-demo">
    <li class="active"><a class="waves-effect" href="home.php"><i class="material-icons">home</i></a></li>
    <li><a class="waves-effect" href="events.php">EVENTS</a></li>
    <li><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
    <li><a class="waves-effect" href="contact.php">CONTACT US</a></li>
    <li><a class="waves-effect" href="about.php">ABOUT US</a></li>
    <li><a class="waves-effect modal-trigger" href="#loginModal">LOG IN</a></li>
    <li><a class="waves-effect" href="register.php">REGISTER</a></li>
  </ul>
  <main>
    <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="container">
        <div class="row">
          <h3 class="red-text row center">
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
                    <option value="1" selected>B.Tech.</option>
                    <option value="2">B.E.</option>
                    <option value="3">M.Tech.</option>
                    <option value="4">M.E.</option>
                    <option value="5">M.Sc.</option>
                  </select>
                  <label for="degree">Degree</label>
                </div>
                <div id="branch" class="input-field col l6 m6 s12">
                  <select name="branch" required>
                    <option value="1" selected>Automobile Engineering</option>
                    <option value="2"> Bio Technology</option>
                    <option value="3"> Civil Engineering</option>
                    <option value="4"> Computer Science and Engineering</option>
                    <option value="5"> Electrical and Electronics Engineering </option>
                    <option value="6"> Electronics &amp; Communication Engineering</option>
                    <option value="7">Information Technology</option>
                    <option value="8"> Mechanical Engineering</option>
                    <option value="9"> Metallurgical Engineering</option>
                    <option value="10"> Production Engineering</option>
                    <option value="11"> Mechanical Engineering (Sandwich) </option>
                    <option value="12"> Electrical and Electronics Engineering (Sandwich)</option>
                    <option value="13"> Production Engineering (Sandwich)</option>
                    <option value="14"> Robotics and Automation Engineering</option>
                    <option value="15"> Textile Technology</option>
                    <option value="16"> Textile Technology (Part Time)</option>
                    <option value="17"> Bio Medical Engineering</option>
                    <option value="18"> Fashion Technology</option>
                    <option value="19"> Instrumentation and Control Engineering</option>
                    <option value="20"> Applied Sciences</option>
                    <option value="21"> Computer System and Design</option>
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
