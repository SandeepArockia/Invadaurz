<!DOCTYPE html>
<html lang="en">
<head>
  <title>INVADAURZ | ITA | 2017</title>
  <link rel="icon" href="../../img/ITALogo.jpeg">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
  <link rel="stylesheet" href="../../css/animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../../js/materialize.min.js"></script>
  <!--<script src="../../js/wow.min.js"></script>-->
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
  .carousel .carousel-item{
    width:100%;
  }
  a{
    text-decoration:none;
  }
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

<body style="font-size:1.4rem">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="center brand-logo">INVADAURZ</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse waves-effect"><i class="material-icons">menu</i></a>
        <ul class=" hide-on-med-and-down">
          <li class="left"><a class="waves-effect" href="../../register.php">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="../../about.php">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="../../contact.php">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="../../schedule.php">SCHEDULE</a></li>
          <li class="right active"><a class="waves-effect" href="../../events.php">EVENTS</a></li>
          <li class="right"><a class="waves-effect" href="../../home.php">HOME</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="mobile-demo">
    <li><a class="waves-effect" href="../../home.php"><i class="material-icons">home</i></a></li>
    <li class="active"><a class="waves-effect" href="../../events.php">EVENTS</a></li>
    <li><a class="waves-effect" href="../../schedule.php">SCHEDULE</a></li>
    <li><a class="waves-effect" href="../../contact.php">CONTACT US</a></li>
    <li><a class="waves-effect" href="../../about.php">ABOUT US</a></li>
    <li><a class="waves-effect" href="../../register.php">REGISTER</a></li>
  </ul>

  <main>
    <div class="parallax-container">
      <div class="parallax"> <img src="../../img/banner/acute.png"/> </div>
    </div>
    <p> &nbsp; </p>
    <div class="row <!--wow rollIn--> flow-text">
      <div class="section-white col l10 offset-l1 m10 offset-m1 s10 offset-s1">
        <div class="container">
          <div class="">
            <div class="center blue-text text-accent-2" style="padding: 0 0 10px 0"> ACUTE </div>
            <span class="blue-text text-accent-2"> DESCRIPTION</span>
            <p> Just, don't think too technically. And definitely not too savvy. There's a little grey area in there and that's where you operate. Good luck out there. </p>
            <span class="blue-text text-accent-2"> DETAILS</span>
            <p> This is a three round event. Early rounds are simple but tricky, later round get just harder. Beat the clock ... </p>
            <p>&nbsp;</p>
            <span class="blue-text text-accent-2"> ROUNDS</span>

            <div class="row">
              <div class="">
                <div class="card ">
                  <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width ">
                      <li class="tab"><a href="#test1" class="active">ASAP</a></li>
                      <li class="tab"><a class="" href="#test2">Rebus</a></li>
                      <li class="tab"><a href="#test3" class="">Codecode</a></li>
                      <li class="indicator" style="right: 206px; left: 0px;"></li></ul>
                    </div>
                    <div class="card-content ">
                      <div id="test1" style="font-size:0.8em" class="active">
                        <ul>
                          <li> <span class="blue-text text-accent-2"> > </span> Anagram, Ciphers, Crests and Deductions</li>
                          <li> <span class="blue-text text-accent-2"> > </span> Just ASAP</li>
                        </ul>
                      </div>
                      <div id="test2" class="" style="display: none;font-size:0.8em">
                        <ul>
                          <li> <span class="blue-text text-accent-2"> > </span> A REBUS is a picture representation of a name, work, or phrase</li>
                          <li> <span class="blue-text text-accent-2"> > </span> Each "rebus" puzzle box below portrays a common word or phrase. Can you guess what it is?</li>
                        </div>
                        <div id="test3" style="display: none;font-size:0.8em" class="">
                          <ul>
                            <li> <span class="blue-text text-accent-2"> > </span> Finding output to get number</li>
                            <li> <span class="blue-text text-accent-2"> > </span> Use the number to code</li>
                            <li> <span class="blue-text text-accent-2"> > </span> Being the final round, it contains both coding and decoding, points allocated such as for the players to compete</li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-action">
                        <div style="font-size:0.8em">
                          <span class="blue-text text-accent-2"> Team: 2-3 members </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <span class="blue-text text-accent-2"> CONTACT</span>
              <p> Sandeep Arockia &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:97900 68112">97900 68112</a>  </span> </p>
              <p> Pooventhiran G &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:79042 58168">79042 58168</a>  </span></p>
              <p> Sree Saju Dhawani K &nbsp;-&nbsp;<span> <i class="material-icons"> phone  </i> <a href="tel:87546 71891">87546 71891</a>  </span></p>
            </div>
          </div>
        </div>
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
