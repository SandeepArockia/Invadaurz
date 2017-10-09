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
          <li class="left"><a class="waves-effect modal-trigger" href="#registerModal">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="about.html">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="contact.html">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="schedule.html">SCHEDULE</a></li>
          <li class="right"><a class="waves-effect" href="events.html">EVENTS</a></li>
          <li class="right active"><a class="waves-effect" href="home.php">HOME</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="side-nav" id="mobile-demo">
    <li class="active"><a class="waves-effect" href="home.php"><i class="material-icons">home</i></a></li>
    <li><a class="waves-effect" href="events.html">EVENTS</a></li>
    <li><a class="waves-effect" href="schedule.html">SCHEDULE</a></li>
    <li><a class="waves-effect" href="contact.html">CONTACT US</a></li>
    <li><a class="waves-effect" href="about.html">ABOUT US</a></li>
    <li><a class="waves-effect modal-trigger" href="#loginModal">LOG IN</a></li>
    <li><a class="waves-effect modal-trigger" href="#registerModal">REGISTER</a></li>
  </ul>
  <main>
    <div class="container">
      <div class="row">
        <form class="col l12 m12 s12" action="">
          <hr>
          <h3 class="red-text row center">
            Register
          </h3>

          <div>
            <div class="row">
              <div class="input-field col l6">
                <input id="user_name" type="text" class="validate" />
                <label for="user_name">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col l6">
                <input id="password" type="password" class="validate" />
                <label for="password">Password</label>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="center">
            <button type="submit" class="btn waves-effect waves-light green center">Register</button>
          </div>
        </form>
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
