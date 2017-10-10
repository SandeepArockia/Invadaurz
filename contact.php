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
    $(".button-collapse").sideNav()
  });
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

<body style="font-size:1.4rem">
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="center brand-logo">INVADAURZ</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse waves-effect"><i class="material-icons">menu</i></a>
        <ul class=" hide-on-med-and-down">
          <li class="left"><a class="waves-effect" href="register.php">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="about.php">ABOUT US</a></li>
          <li class="right active"><a class="waves-effect" href="contact.php">CONTACT US</a></li>
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
    <li class="active"><a class="waves-effect" href="contact.php">CONTACT US</a></li>
    <li><a class="waves-effect" href="about.php">ABOUT US</a></li>
    <li><a class="waves-effect" href="register.php">REGISTER</a></li>
  </ul>

  <main>
    <div class="container hide-on-med-and-down">
      <div class="row">
        <h3 class="blue-text text-accent-2 center">
          Get In Touch
          <i class = "material-icons medium">people</i>
        </h3>
      </div>
      <div class="row">
        <div class="col l2 m4 s4 center">
          <ul>
            <li> <i class = "material-icons large blue-text text-accent-2">phone</i> </li>
          </ul>
        </div>
        <div class="col l4 m8 s8">
          <ul>
            <li>Kevin &nbsp;-&nbsp; <a href="tel:75984 07070" class="blue-text text-accent-1">75984 07070</a></li>
            <li>Madhu &nbsp;-&nbsp; <a href="tel:82208 66766" class="blue-text text-accent-1">82208 66766</a></li>
            <li>Deepthi &nbsp;-&nbsp; <a href="tel:94420 81821" class="blue-text text-accent-1">94420 81821</a></li>
          </ul>
        </div>
        <div class="col l2 m4 s4 center">
          <ul>
            <li> <i class = "material-icons large blue-text text-accent-2">mail</i> </li>
          </ul>
        </div>
        <div class="col l4 m12 s12">
          <br>
          <a href="mailto:ita2k17@gmail.com" target="_blank" class="black-text">ita2k17@gmail.com</a>
          <a href="mailto:inavadaurz2k17@gmail.com" target="_blank" class="black-text">inavadaurz2k17@gmail.com</a>
        </div>
      </div>
    </div>
    <div class="container hide-on-large-only">
      <div class="row">
        <h3 class="blue-text text-accent-2 center">
          Get In Touch
          <i class = "material-icons medium">people</i>
        </h3>
      </div>
      <div class="row">
        <div class="col l2 m4 s4 center">
          <ul>
            <li> <i class = "material-icons large blue-text text-accent-2">phone</i> </li>
          </ul>
        </div>
        <div class="col l4 m8 s8">
          <ul>
            <li>Kevin &nbsp;-&nbsp; <a href="tel:75984 07070">75984 07070</a></li>
            <li>Madhu &nbsp;-&nbsp; <a href="tel:82208 66766">82208 66766</a></li>
            <li>Deepthi &nbsp;-&nbsp; <a href="tel:94420 81821">94420 81821</a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col l2 m4 s4 center">
          <ul>
            <li> <i class = "material-icons large blue-text text-accent-2">mail</i> </li>
          </ul>
        </div>
        <div class="col l4 m8 s8">
          <br>
          <a href="mailto:ita2k17@gmail.com" target="_blank">ita2k17@gmail.com</a>
          <a href="mailto:inavadaurz2k17@gmail.com" target="_blank">inavadaurz2k17@gmail.com</a>
        </div>
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
