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
    $(".parallax").parallax();
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

  </style>
</head>

<body style="font-family:Lato;font-size:1.4rem">
  <nav>
    <div class="navbar">
      <div class="nav-wrapper">
        <a href="#" class="center brand-logo">INVADAURZ</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse waves-effect"><i class="material-icons">menu</i></a>
        <ul class=" hide-on-med-and-down">
          <li class="left"><a class="waves-effect modal-trigger" href="#loginModal">LOGIN</a></li>
          <li class="left"><a class="waves-effect" href="register.php">REGISTER</a></li>
          <li class="right active"><a class="waves-effect" href="about.php">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="contact.php">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
          <li class="right"><a class="waves-effect" href="events.php">EVENTS</a></li>
          <li class="right"><a class="waves-effect" href="home.php">HOME</a></li>
        </ul>
        <ul class="side-nav active" id="mobile-demo" style="display: block">
          <li><a class="waves-effect" href="home.php"><i class="material-icons">home</i></a></li>
          <li><a class="waves-effect" href="events.php">EVENTS</a></li>
          <li><a class="waves-effect" href="schedule.php">SCHEDULE</a></li>
          <li><a class="waves-effect" href="contact.php">CONTACT US</a></li>
          <li class="active"><a class="waves-effect" href="about.php">ABOUT US</a></li>
          <li><a class="waves-effect modal-trigger" href="#loginModal">LOG IN</a></li>
          <li><a class="waves-effect" href="register.php">REGISTER</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
    <div class="container">
      <div class="row">
        <div id="loginModal" class="modal">
          <form class="col l12 m12 s12" action="">
            <div class="modal-content">
              <div class="row center">
                Login
              </div>
              <div class="row">
                <div class="input-field col l10 offset-l1 m10 offset-m1 s10 offset-s1">
                  <i class="prefix material-icons">account_circle</i>
                  <input id="user_name" type="text" class="validate" />
                  <label for="user_name">Username</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col l10 offset-l1 m10 offset-m1 s10 offset-s1">
                  <i class="prefix material-icons">lock</i>
                  <input id="password" type="password" class="validate"/>
                  <label for="password">Password</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="center">
                <button type="submit" class="btn waves-effect waves-light green center">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax">
        <img src="img\about.png"/>
      </div>
    </div>

    <div class="center">
      <img src="img\invadaurzLogo.png"/>

      <div class="row">
        <div class="container">

          <h3 class="red-text text-accent-1">  About ITA </h3>
          <p>
            ITA is a Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <h3 class="red-text text-accent-1">  Faculty </h3>
          <div class="center push-l3 col l6">
            <div class="card horizontal">
              <div class="card-image">
                <img src="img\person\faculty.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Radhika Engimuri</a>
                </div>
                <div class="card-content">
                  <p>Faculty Adviser</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="container">
          <h3 class="red-text text-accent-1">
            Members
          </h3>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\kevin.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Kevin Anto J</a>
                </div>
                <div class="card-content">
                  <p>Secretary</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card   horizontal">
              <div class="card-image">
                <img src="img\person\madhumithag.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Madhumitha G</a>
                </div>
                <div class="card-content">
                  <p>JS III</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\deepthi.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Deepthi Sri S.</a>
                </div>
                <div class="card-content">
                  <p>JS III</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\parthiban.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Parthiban S.</a>
                </div>
                <div class="card-content">
                  <p>Joint Secretary-II Year</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\harish.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Harish D</a>
                </div>
                <div class="card-content">
                  <p>Executive III</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\varshini.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Varshini M.E.</a>
                </div>
                <div class="card-content">
                  <p>Executive IV</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\sree.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Sree Karthik N.</a>
                </div>
                <div class="card-content">
                  <p>Executive III</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\mathumithas.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Mathumitha S.</a>
                </div>
                <div class="card-content">
                  <p>Executive II</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\sarav.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Sarav Krishna E</a>
                </div>
                <div class="card-content">
                  <p>Operation Team IV</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\roshni.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Roshni Chandrasekar AR</a>
                </div>
                <div class="card-content">
                  <p>Operation Team</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\kirubha.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Kirubha R</a>
                </div>
                <div class="card-content">
                  <p>Operation Team</p>
                </div>
              </div>
            </div>
          </div>
          <div class="center col l4">
            <div class="card  horizontal">
              <div class="card-image">
                <img src="img\person\roohit.jpg" class="responsive-image">
              </div>
              <div class="card-stacked">
                <div class="card-action">
                  <a href="#">Roohit</a>
                </div>
                <div class="card-content">
                  <p>Operation Team II</p>
                </div>
              </div>
            </div>
          </div>
              </div>
            </div>
          </div>
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
