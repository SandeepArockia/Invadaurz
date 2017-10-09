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
          <li class="left"><a class="waves-effect modal-trigger" href="#loginModal">LOGIN</a></li>
          <li class="left"><a class="waves-effect" href="../../register.php">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="../../about.php">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="../../contact.php">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="../../schedule.php">SCHEDULE</a></li>
          <li class="right active"><a class="waves-effect" href="../../events.php">EVENTS</a></li>
          <li class="right"><a class="waves-effect" href="../../home.php">HOME</a></li>
        </ul>
        <ul class="side-nav active" id="mobile-demo" style="display: block">
          <li><a class="waves-effect" href="../../home.php"><i class="material-icons">home</i></a></li>
          <li class="active"><a class="waves-effect" href="../../events.php">EVENTS</a></li>
          <li><a class="waves-effect" href="../../schedule.php">SCHEDULE</a></li>
          <li><a class="waves-effect" href="../../contact.php">CONTACT US</a></li>
          <li><a class="waves-effect" href="../../about.php">ABOUT US</a></li>
          <li><a class="waves-effectwaves-effect modal-trigger" href="#loginModal">LOG IN</a></li>
          <li><a class="waves-effect" href="../../#">REGISTER</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="parallax-container">
      <div class="parallax"> <img src="../../img\parallax.jpg"/> </div>
    </div>
    <p> &nbsp; </p>
    <div class="row <!--wow rollIn--> flow-text">
    <div class="section-white col l10 offset-l1 m10 offset-m1 s10 offset-s1">
      <div class="container">
        <div class="">
          <div class="center red-text text-accent-1" style="padding: 0 0 10px 0"> Computer Geeks </div>
          <span class="red-text text-accent-1"> DESCRIPTION</span>
          <p> It's time to show off your hacking skills!! </p>
          <span class="red-text text-accent-1"> DETAILS</span>
          <p> You will have to prove yourself how good you can code in minimal number of lines.  The competition is designed for students to display skills in PC assembly with great precision and speed.  </p>
          <p>&nbsp;</p>
          <span class="red-text text-accent-1"> ROUNDS</span>

          <div class="row">
          <div class="">
            <div class="card ">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width ">
                  <li class="tab"><a href="#test1" class="active">Scanty coders</a></li>
                  <li class="tab"><a class="" href="#test2"> CPU Imbroglio </a></li>
                <li class="indicator" style="right: 206px; left: 0px;"></li></ul>
              </div>
              <div class="card-content ">
                <div id="test1" style="font-size:1em" class="active">
                  <p>
                  It's time to show off your hacking skills!! You will have to prove yourself how good you can code in minimal number of lines. The range of the lines of code will be set by the moderators between which you will have to code as short as possible. The code that is short and precise wins. 10 people are shortlisted in this round.
                </p>
                </div>
                <div id="test2" class="" style="display: none;font-size:1em">
                  <p style="font-size:.9em">
                  The competition is designed for students to display skills in PC assembly with great precision and speed. All the computer parts must be replaced back on the computer and to the right positions. Participants will identify the different computer components and arrange them to a working Computer, they will be provided Internet and tools until it has started to successful boot to a Microsoft operating system designated.
                </p>
                </div>
              </div>
            </div>
          </div>
        </div>


          <span class="red-text text-accent-1"> CONTACT</span>
          <p>Mahesh Kumar&emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:"></a>  </span> </p>
          <p> Raghavendra&emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:"></a>  </span></p>
          </div>
      </div>
    </div>
   </div>
  </main>
  <div class="container">
    <div class="row">
      <div id="loginModal" class="modal">
        <form class="col l12 m12 s12" action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
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
    <div class="footer">
      <div class="container">
        INVADAURZ 2k17
        <a class="grey-text text-lighten-4 right" href="#!">The Science of Today is the Technology of Tomorrow!</a>
      </div>
    </div>
  </footer>


  </html>
