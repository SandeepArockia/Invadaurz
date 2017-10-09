<?php
error_reporting(0);
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
  echo '<html><head><script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <script src="js\materialize.min.js"></script></head></html>';
  if(isset($_POST['btnLogin'])){
    $rollno = $_POST['rollno'];
    $rollno = strtolower($rollno);
    $password = $_POST['pwd'];
    $sql = "SELECT password FROM userdetails WHERE rollno = '$rollno'";
    $res = mysqli_query($conn, $sql);
    $res = mysqli_fetch_row($res);
    echo '<script>swal("Error!","'.mysqli_error($conn).'","error");</script>';
    if($res[0]!=$password){
      echo '<script>swal("Error!","Roll number or password invalid","error");</script>';
    }
    else{
      echo '<script>swal("Logged in!","You\'re logged in to Invadaurz","success");</script>';
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css\materialize.min.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css\animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js\materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".button-collapse").sideNav();
    $(".modal").modal();
    $(".parallax").parallax();
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


    <div class="video-container" style="background-image: url('back.jpg');">
      <iframe src="data/rastaa.mp4?controls=0" frameborder="0" ></iframe>
    </div>
  </div>

  <div class="center ">
    <div class="card">
      <div class="card-content">
          <p>
            ⁠⁠⁠⁠⁠"The delight of opening a new pursuit imparts the vivacity of youth to all"
          </p>
        </div>
      </div>
    </div>


  </div>
  <div class="container row center" style="padding:50px 0px 0px 0px">
    <a href="events.php#technicalText">
      <div class="col l6 s12 m6" id="techText">
          <div class="card blue-grey" style="padding:0px 20px 0px 20px">
            <div class="card-content white-text">
              <span class="card-title">Technical</span>
              <hr>
              <p style="text-align: justify">
                A pursuit and hunt for talents. Talent wins games but teamwork and intelligence wins championships. Here we are to bring in the champions in you!
              </p>
            </div>
          </div>
      </div>
    </a>
    <a href="events.php#funText">
      <div class="col l6 s12 m6" id="funText" style="padding:0px 20px 0px 20px">
        <div class="row">
          <div class="card blue-grey">
            <div class="card-content white-text">
              <span class="card-title">Fun</span>
              <hr>
              <p style="text-align: justify">
                Enjoyment is an incredible energizer to the soul! And here is yet another chance in a million to keep your spirits high with our fun events...
              </p>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <hr>
  <div class="container center">
    <h4>Sponsors</h4>
    <marquee behavior="scroll" direction="left">
      <img class=""  style="height:100px" src="img/time.jpg">
      &emsp;&emsp;
      &emsp;&emsp;
      <img class=""  style="height:100px" src="img/kfcLogo.png">
    </marquee>
  </div>
</main>
<div class="container">
  <div class="row">
    <div id="loginModal" class="modal">
      <form class="col l12 m12 s12" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="modal-content">
          <div class="row center">
            Participant Login
          </div>
          <div class="row">
            <div class="input-field col l10 offset-l1 m10 offset-m1 s10 offset-s1">
              <i class="prefix material-icons">account_circle</i>
              <input id="rollno" name="rollno" type="text" class="validate" required/>
              <label for="rollno">Roll No.</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col l10 offset-l1 m10 offset-m1 s10 offset-s1">
              <i class="prefix material-icons">lock</i>
              <input id="password" name="pwd" type="password" class="validate" required/>
              <label for="password">Password</label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="center">
            <button type="submit" name="btnLogin" class="btn waves-effect waves-light green center">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<footer class="page-footer">
  <div class="row">
    <div class="col l6 offset-l1 s12">
      <div id="map"></div>
      <div id="googleMap" style="width:100%;height:300px;"></div>
      <script>
      function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(11.024389,77.003580),
          zoom:17,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
      }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDInQjNqxLhAH69iVTWAgfl96DhpYr2Ps4&callback=myMap"></script>
    </div>
    <div class="col l4 offset-l1 s12">
      <h5 class="white-text">Contact</h5>
      <ul>
        <li>Kevin &nbsp;-&nbsp; <a class="white-text" href="tel:75984 07070">75984 07070</a></li>
        <li>Madhu &nbsp;-&nbsp; <a class="white-text" href="tel:82208 66766">82208 66766</a></li>
        <li>Deepthi &nbsp;-&nbsp; <a class="white-text" href="tel:94420 81821">94420 81821</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      INVADAURZ 2k17
      <a class="grey-text text-lighten-4 right" href="#!">The Science of Today is the Technology of Tomorrow!</a>
    </div>
  </div>
</footer>
</html>
