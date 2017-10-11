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

<body style="font-size:1.4rem">
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
            <img src="../../img/banner/runsomewhere.png"/>
          </div>
        </div>
        <div class="hide-on-med-and-up">
          <img src="../../img/banner/runsomewhere.png" class="responsive-img"/>
        </div>

    <p> &nbsp; </p>
    <div class="row <!--wow rollIn--> flow-text">
    <div class="section-white col l10 offset-l1 m10 offset-m1 s10 offset-s1">
      <div class="container">
        <div class="">
          <div class="center blue-text text-accent-2" style="padding: 0 0 10px 0"> RUN SOME WHERE </div>
          <span class="blue-text text-accent-2"> DESCRIPTION</span>
          <p> Code is your spell, cast it to reveal the marauders map. Build big to win big. </p>
          <span class="blue-text text-accent-2"> DETAILS</span>
          <p> The event is composed of 2 rounds. Crack the questions while you run in search of the treasure(straws). Collect as many straws as possible and build the longest tower and help your team to get to the final round. Crack the code and the puzzle together in a smart way. Work as a team and win as a team. </p>
          <p>&nbsp;</p>
          <span class="blue-text text-accent-2"> ROUNDS</span>

          <div class="row">
          <div class="">
            <div class="card ">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width ">
                  <li class="tab"><a href="#test1" class="active">Build The Tower</a></li>
                  <li class="tab"><a class="" href="#test2">Codeagram</a></li>
                <li class="indicator" style="right: 206px; left: 0px;"></li></ul>
              </div>
              <div class="card-content">
                <div id="test1" style="font-size:1em" class="active">
                  <p style="font-size:.77em">
                      A team consisting of three members will be given a few sets of questions. After the completion of each set, the teams will be given a clue which will take them to a specific location. One member of each team must continue solving the questions while other two goes about solving the clue. The member solving the question will be given with the clues and he/she must convey this clue to his team members via the phone.  At each location, a specific number of straws will be discovered by the team. A total of five clues will be given in succession. After a fixed time limit all the members must return with the straws that they have found and attempt to construct a tower. The teams will be shortlisted for the final round based on the height of the towers.
                  </p>
                </div>
                <div id="test2" class="" style="display: none;font-size:1em">
                  <p>
                    The teams will be given the task of coding a question plus solving a picture puzzle. One member has to start the coding initially while the other two solves the puzzle. After a fixed time, the member doing the code switches to solve the puzzle. This continues till the teams finish both the code and the puzzle. The winners are decided based on the total time taken by each team.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

          <span class="blue-text text-accent-2"> CONTACT</span>
          <p> Visal &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:99430 09590">99430 09590</a>  </span> </p>
          <p> Manigandan &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:99523 27385">99523 27385</a>  </span></p>
          <p> Maria &nbsp;-&nbsp;<span> <i class="material-icons"> phone  </i> <a href="tel:73730 31212">73730 31212</a>  </span></p>
          <p> Pavithrann &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:73730 31212">73730 31212</a>  </span> </p>
          <p> Vigneswaran &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:96882 54364">96882 54364</a>  </span> </p>
          <p> Sai Shyam &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:97151 88998">97151 88998</a>  </span> </p>
          <p> Akshayaa C &emsp;-&nbsp;<span> <i class="material-icons"> phone </i> <a href="tel:96884 66266">96884 66266</a>  </span> </p>
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
