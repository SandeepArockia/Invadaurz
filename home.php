<!DOCTYPE html>
<html lang="en">
<head>
  <title>INVADAURZ | ITA | 2017</title>
  <link rel="icon" href="img/ITALogo.jpeg">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".button-collapse").sideNav();
    $(".modal").modal();
    $(".parallax").parallax();
    $(".chips").material_chip();
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

  <div class="navbar">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="center brand-logo">INVADAURZ</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse waves-effect"><i class="material-icons">menu</i></a>
        <ul class=" hide-on-med-and-down">
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
    <li><a class="waves-effect" href="register.php">REGISTER</a></li>
  </ul>
  <main>


    <div class="parallax-container hide-on-small-only">
      <div class="parallax">
        <img src="img/home.jpeg"/>
      </div>
    </div>
    <div class="hide-on-med-and-up">
      <img src="img/home.jpeg" class="responsive-img"/>
    </div>

    <div class="center">
      <div class="col l12 s12 m12">
        <h4 style="color:darkblue">
          <br>
          ⁠⁠⁠⁠⁠"The delight of opening a new pursuit imparts the vivacity of youth to all"
          <br>
          <br>
        </h4>
      </div>
    </div>


  </div>
  <div class="container row center" style="padding:0px 0px 0px 0px">
    <div class="container center">
      <h4> Events </h4>
    </div>
    <a href="events.php#technicalText">
      <div class="col l6 s12 m6" id="techText">
        <div class="card small blue accent-2" style="padding:0px 20px 0px 20px">
          <div class="card-content white-text">
            <span class="card-title">TECHNICAL</span>
            <hr>
            <p style="text-align: center  ">
              A pursuit and hunt for talents. Talent wins games but teamwork and intelligence wins championships. Here we are to bring in the champions in you!
            </p>
          </div>
        </div>
      </div>
    </a>
    <a href="events.php#funText">
      <div class="col l6 s12 m6" id="funText" style="padding:0px 20px 0px 20px">
        <div class="card small blue accent-2">
          <div class="card-content white-text">
            <span class="card-title">FUN</span>
            <hr>
            <p style="text-align: center">
              Enjoyment is an incredible energizer to the soul! And here is yet another chance in a million to keep your spirits high with our fun events...
            </p>
          </div>
        </div>
      </div>
    </a>
  </div>
  <hr>
  <div class="container center">
    <h4>Sponsors</h4>
    <marquee behavior="scroll" direction="left">
      <img class=""  style="height:120px" src="img/time.jpg">
      &emsp;&emsp;
      <img class=""  style="height:120px" src="img/kfcLogo.png">
      &emsp;&emsp;
      <img class=""  style="height:120px" src="img/vakulaaLogo.png">
      &emsp;&emsp;
      <img class=""  style="height:120px" src="img/battleground.png">
      &emsp;&emsp;
      <img class=""  style="height:120px" src="img/niit.png">
      <img class=""  style="height:120px" src="img/sanga.jpg">
      &emsp;&emsp;
      <img class=""  style="height:120px" src="img/batman.png">
    </marquee>
  </div>
</main>
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
    <div class="col l4 offset-l1 s12 push-s2">
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
      <a class="grey-text text-lighten-4 right">The Science of Today is the Technology of Tomorrow!</a>
    </div>
  </div>
</footer>
</html>
