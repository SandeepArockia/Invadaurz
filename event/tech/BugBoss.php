<!DOCTYPE html>
<html lang="en">
<head>
  <title>INVADAURZ | ITA | 2017</title>
  <link rel="icon" href="../../img/ITALogo.jpeg">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../css\materialize.min.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="../../css\animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../../js\materialize.min.js"></script>
  <!--<script src="../../js\wow.min.js"></script>-->
  <script>
  var options = [
    {selector: '.section-white', offset: 50, callback: function(el) {
      $(".section-white").addClass("animated slideInUp");
    } }
  ];
  Materialize.scrollFire(options);
  $(document).ready(function(){
    $(".button-collapse").sideNav();
    $(".parallax").parallax();
    $('ul.tabs').tabs({
      swipeable : true,
      responsiveThreshold : 1920
    });
  });
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
  .carousel .carousel-item{
  width:100%;
}
a{
  text-decoration:none;
}
  </style>
</head>

<body style="font-family:Lato;font-size:1.4rem">
    <nav>
      <div class="navbar">
      <div class="nav-wrapper">
        <a href="../../#" class="center brand-logo">INVADAURZ</a>
        <a href="../../#" data-activates="mobile-demo" class="button-collapse waves-effect"><i class="material-icons">menu</i></a>
        <ul class=" hide-on-med-and-down">
          <li class="left"><a class="waves-effect" href="../../#">LOGIN</a></li>
          <li class="left"><a class="waves-effect" href="../../#">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="../../about.html">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="../../contact.html">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="../../schedule.html">SCHEDULE</a></li>
          <li class="right active"><a class="waves-effect" href="../../events.html">EVENTS</a></li>
          <li class="right"><a class="waves-effect" href="../../home.php">HOME</a></li>
        </ul>
        <ul class="side-nav active" id="mobile-demo" style="display: block">
          <li><a class="waves-effect" href="../../home.php"><i class="material-icons">home</i></a></li>
          <li class="active"><a class="waves-effect" href="../../events.html">EVENTS</a></li>
          <li><a class="waves-effect" href="../../schedule.html">SCHEDULE</a></li>
          <li><a class="waves-effect" href="../../contact.html">CONTACT US</a></li>
          <li><a class="waves-effect" href="../../about.html">ABOUT US</a></li>
          <li><a class="waves-effect" href="../../#">LOG IN</a></li>
          <li><a class="waves-effect" href="../../#">REGISTER</a></li>
        </ul>
      </div>
    </div>
    </nav>

  <main>
    <div class="parallax-container">
      <div class="parallax"> <img src="../../img/parallax.jpg"/> </div>
    </div>
    <p> &nbsp; </p>
    <div class="row <!--wow rollIn--> flow-text">
    <div class="section-white col l10 offset-l1 m10 offset-m1 s10 offset-s1">
      <div class="container">
        <div class="">
          <div class="center red-text text-accent-1" style="padding: 0 0 10px 0"> BUG BOSS </div>
          <span class="red-text text-accent-1"> DESCRIPTION</span>
          <p> Become the Boss of bugs. </p>
          <span class="red-text text-accent-1"> DETAILS</span>
          <p> Thupucikku Thupucikku Bug Boss! </p>
          <p>&nbsp;</p>
          <span class="red-text text-accent-1"> ROUNDS</span>

          <div class="row">
          <div class="">
            <div class="card ">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width ">
                  <li class="tab"><a href="#test1" class="active">LEVEL 1</a></li>
                  <li class="tab"><a class="" href="#test2">LEVEL 2</a></li>
                <li class="indicator" style="right: 206px; left: 0px;"></li></ul>
              </div>
              <div class="card-content">
                <div id="test1" style="font-size:0.8em" class="active">
                    <ul>
                      <li> <span class="red-text text-accent-1"> > </span>When Bug Gives You Banana </li>
                      <li> <span class="red-text text-accent-1"> > </span>Refucter it </li>
                      <li> <span class="red-text text-accent-1"> > </span>A Funking Fault Finder </li>
                    </ul>
                </div>
                <div id="test2" class="" style="display: none;font-size:0.8em">
                  <ul>
                    <li> <span class="red-text text-accent-1"> > </span>The Failures' Monster Bug </li>
                    <li> <span class="red-text text-accent-1"> > </span>The Heisenberg </li>
                    <li> <span class="red-text text-accent-1"> > </span>The Mad Girlfriend Bug </li>
                </div>
              </div>

              <div class="card-action">
                <div style="font-size:0.8em">
                  <span class="red-text text-accent-1"> Team: 2-3 members </span>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>


          <span class="red-text text-accent-1"> CONTACT</span>
          <p> Akilan &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> 90958 84527<a href="tel:90958 84527"></a>  </span> </p>
          <p> Abirami &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> 95970 69541<a href="tel:95970 69541 "></a>  </span></p>
        </div>
      </div>
    </div>
   </div>
  </main>


  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 offset-l1 s8">
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
        <div class="col l4 offset-l1 s4">
          <h5 class="white-text">Contacts</h5>
          <ul>
            <li><span class="grey-text text-lighten-3">Harish</span></li>
            <li><span class="grey-text text-lighten-3">1234567890</span></li>
            <li><span class="grey-text text-lighten-3">Deepthi</span></li>
            <li><span class="grey-text text-lighten-3">1234567890</span></li>
            <li><span class="grey-text text-lighten-3">Kevin</span></li>
            <li><span class="grey-text text-lighten-3">1234567890</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        INVADAURZ 2017
        <a class="grey-text text-lighten-4 right" href="../../#!">Quote...</a>
      </div>
    </div>
  </footer>

  </html>