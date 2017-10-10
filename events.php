<!DOCTYPE html>
<html lang="en">
<head>
  <title>INVADAURZ | ITA | 2017</title>
  <link rel="icon" href="img/ITALogo.jpeg">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".button-collapse").sideNav()
  });
  </script>
  <style>
  img#eventLogo{
    transition: color 0.8s ;
    -webkit-transition: color 0.8s;
  }
  img#eventLogo:hover{
    box-shadow: 1px 1px 5px 5px;
    color: #448aff;
  }
  .icon-border{
    border-style: solid;
    border-radius: 25px;
    border-width: 3px;
  }
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  slideInUp
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
          <li class="left"><a class="waves-effect" href="register.php">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="about.php">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="contact.php">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
          <li class="right active"><a class="waves-effect" href="events.php">EVENTS</a></li>
          <li class="right"><a class="waves-effect" href="home.php">HOME</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="mobile-demo">
    <li class="active"><a class="waves-effect" href="home.php"><i class="material-icons">home</i></a></li>
    <li class="active"><a class="waves-effect" href="events.php">EVENTS</a></li>
    <li><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
    <li><a class="waves-effect" href="contact.php">CONTACT US</a></li>
    <li><a class="waves-effect" href="about.php">ABOUT US</a></li>
    <li><a class="waves-effect" href="register.php">REGISTER</a></li>
  </ul>

  <main>
    <div class="container">
      <div class="row">
        <a id="technicalText">
          <h3 class="blue-text text-accent-2">
            Technical Event
          </h3>
          <div style="text-indent:10%;" class="black-text">
            A pursuit and hunt for talents.
            Talent wins games but teamwork and intelligence wins championships.
            Here we are to bring in the champions in you!
          </div>
          <p> &nbsp; </p>
          <div class="row">
          </div>
          <div class="col l3 m6 s6 animated slideInUp">
            <a href="event/tech/BugBoss.php"> <img src="img/tech/BugBoss.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="Bug Boss"/> </a>
          </div>
          <div class="col l3 m6 s6 animated slideInUp">
            <a href="event/tech/CaptureTheFlag.php" > <img src="img/tech/CaptureTheFlag.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="Capture The Flag"/> </a>
          </div>
          <div class="col l3 m6 s6 animated slideInUp " >
            <a href="event/tech/CodeRelay.php" > <img src="img/tech/CodeRelay.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="Code Relay"/> </a>
          </div>
          <div class="col l3 m6 s6 animated slideInUp">
            <a href="event/tech/ComputerGeeks.php" > <img src="img/tech/ComputerGeeks.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="Computer Geeks"/> </a>
          </div>
          <div class="col l3 m6 s6 animated slideInUp">
            <a href="event/tech/DOCTYPE.php" > <img src="img/tech/DOCTYPE.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="<!DOCTYPE>"/> </a>
          </div>
          <div class="col l3 m6 s6 animated slideInUp">
            <a href="event/tech/ZestTech.php" > <img src="img/tech/ZestTech.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="Zest Tech"/> </a>
          </div>
          <div class="col l3 m6 s6 animated slideInUp">
            <a href="event/tech/Acute.php" > <img src="img/tech/Acute.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="Acute"/> </a>
          </div>
          <div class="col l3 m6 s6 animated slideInUp">
            <a href="event/tech/BubbleBugs.php" > <img src="img/tech/BubbleBug.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="Bubble Bug"/> </a>
          </div>
        </a>
      </div>
      <p> &nbsp; </p>
      <div class="divider"></div>
      <p> &nbsp; </p>
      <div class="row">
        <a id="funText">
          <h3 class="blue-text text-accent-2">
            Fun Event
          </h3>
          <div style="text-indent:10%;"  class="black-text">
            A pursuit and hunt for talents.
            Talent wins games but teamwork and intelligence wins championships.
            Here we are to bring in the champions in you!
          </div>
          <p> &nbsp; </p>
          <div class="row">
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/WheelOfFortune.php" > <img src="img/fun/WheelOfFortune.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="Wheel of Fortune"/> </a>
            </div>
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/RazzWhale.php" > <img src="img/fun/RazzWhale.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="Razz Whale"/> </a>
            </div>
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/Cryptica.php" > <img src="img/fun/Cryptica.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="Cryptica"/> </a>
            </div>
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/8-In-A-Maze.php" > <img src="img/fun/8.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="8-in-a-Maze"/> </a>
            </div>
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/GameArena.php" > <img src="img/fun/GameArena.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="Game Arena"/> </a>
            </div>
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/FunBuzz.php" > <img src="img/fun/FunBuzz.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="Fun Buzz"/> </a>
            </div>
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/CrimeScene.php" > <img src="img/fun/CrimeScene.png" class="animated slideInLeft icon-border white" id="eventLogo" style="width:100%" title="Crime Scene"/> </a>
            </div>
            <div class="col l3 m6 s6 animated fadeIn">
              <a href="event/fun/Run-Some-Where.php" > <img src="img/fun/Run-Some-Where.png" class="animated slideInRight icon-border white" id="eventLogo" style="width:100%" title="Run Somewhere"/> </a>
            </div>
          </div>
        </a>
      </div>
    </div>
  </main>
  <footer class="page-footer ">
    <div class="container">
      INVADAURZ 2k17
      <a class="grey-text text-lighten-4 right" href="#!">The Science of Today is the Technology of Tomorrow!</a>
    </div>
  </footer>

  </html>
