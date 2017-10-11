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
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    font-family: 'Philosopher', sans-serif;
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

<body style="font-size:1.4rem;overflow-x: hidden;background:#e3f2fd">
  <div class="navbar">
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

        <div class="parallax-container hide-on-small-only">
          <div class="parallax">
            <img src="../../img/banner/BubbleBugs.jpg"/>
          </div>
        </div>
        <div class="hide-on-med-and-up">
          <img src="../../img/banner/BubbleBugs.jpg" class="responsive-img"/>
        </div>

    <p> &nbsp; </p>
    <div class="row <!--wow rollIn--> flow-text">
    <div class="section-white col l10 offset-l1 m10 offset-m1 s10 offset-s1">
      <div class="container">
        <div class="">
          <div class="center blue-text text-accent-2" style="padding: 0 0 10px 0"> BUBBLE BUGS </div>
          <span class="blue-text text-accent-2"> DESCRIPTION</span>
          <p> Tired of writing codes? Lets debug then... </p>
          <span class="blue-text text-accent-2"> DETAILS</span>
          <p> Debugging of C and C++ snippets for 2 rounds with 3 levels each </p>
          <p>&nbsp;</p>
          <span class="blue-text text-accent-2"> ROUNDS</span>
          <div class="row">
          <div class="">
            <div class="card ">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width ">
                  <li class="tab"><a href="#test1" class="active">Round 1</a></li>
                  <li class="tab"><a class="" href="#test2">Round 2</a></li>
                <li class="indicator" style="right: 206px; left: 0px;"></li></ul>
              </div>
              <div class="card-content ">
                <div id="test1" style="font-size:0.8em" class="active">
                    <ul>
                      <li> <span class="blue-text text-accent-2"> > </span> This round has 3 levels. </li>
                      <li> <span class="blue-text text-accent-2"> > </span> Five snippets in each level. Difficulty depends upon the level. </li>
                      <li> <span class="blue-text text-accent-2"> > </span> If a player marks a line with a bug he will be awarded mark. If he chooses the wrong line then his score will be reduced. </li>
                      <li> <span class="blue-text text-accent-2"> > </span> This round mainly has syntactic and type errors. The time limit for each snippet is fixed. </li>
                    </ul>
                </div>
                <div id="test2" class="" style="display: none;font-size:0.8em">
                  <ul>
                    <li> <span class="blue-text text-accent-2"> > </span> This round also has 3 levels. </li>
                    <li> <span class="blue-text text-accent-2"> > </span> The rules are same as that of round 1 </li>
                    <li> <span class="blue-text text-accent-2"> > </span> This round includes syntactic, semantic, type, run-time and logical errors </li>
                    <li> <span class="blue-text text-accent-2"> > </span> This round can contain some questions related to exceptions  </li>
                  </ul>
                </div>
              </div>
              <div class="card-action">
                <div style="font-size:0.8em">
                  <span class="blue-text text-accent-2"> Team: 1-2 members </span>
                  <span class="blue-text text-accent-2 right"> For I and II Years only </span>
                </div>
              </div>
            </div>
          </div>
        </div>


          <span class="blue-text text-accent-2"> CONTACT</span>
          <p> Manthiravalli K. &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:97891 16499">97891 16499</a>  </span> </p>
          <p> Amirtha Varshini M. &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:73730 55828">73730 55828</a>  </span></p>
          <p> Janani R. &nbsp;-&nbsp;<span> <i class="material-icons"> phone  </i> <a href="tel:89037 01728">89037 01728</a>  </span></p>
          <p> Akshaya A. &nbsp;-&nbsp;<span> <i class="material-icons"> phone  </i> <a href="tel:99768 76682">99768 76682</a>  </span></p>
        </div>
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
