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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <script src="js\materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".button-collapse").sideNav();
    $(".modal").modal();
    $('select').material_select();
    $(".parallax").parallax();
  });
  $("#formValidate").validate({
       rules: {
         fname: {
             required: true,
             minlength: 5
         },lname: {
             required: true,
             minlength: 5
         },
           mail: {
               required: true,
               email:true
           },
           psw: {
       required: true,
       minlength: 5
     },
     cpwd: {
       required: true,
       minlength: 5,
       equalTo: "#pwd"
     },
     curl: {
               required: true,
               url:true
           },
           crole:"required",
           ccomment: {
       required: true,
       minlength: 15
           },
           cgender:"required",
     cagree:"required",
       },
       //For custom messages
       messages: {
           uname:{
               required: "Enter a username",
               minlength: "Enter at least 5 characters"
           }
       },
       errorElement : 'div',
       errorPlacement: function(error, element) {
         var placement = $(element).data('error');
         if (placement) {
           $(placement).append(error)
         } else {
           error.insertAfter(element);
         }
       }
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
          <li class="left active"><a class="waves-effect" href="register.php">REGISTER</a></li>
          <li class="right"><a class="waves-effect" href="about.html">ABOUT US</a></li>
          <li class="right"><a class="waves-effect" href="contact.html">CONTACT US</a></li>
          <li class="right"><a class="waves-effect" href="schedule.html">SCHEDULE</a></li>
          <li class="right"><a class="waves-effect" href="events.html">EVENTS</a></li>
          <li class="right"><a class="waves-effect" href="home.php">HOME</a></li>
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
    <li><a class="waves-effect active" href="register.php">REGISTER</a></li>
  </ul>
  <main>
    <form class="form" action="" method="post">
    <div class="container">
      <div class="row">
          <hr>
          <h3 class="red-text row center">
            Register
          </h3>


          <div>

            <div class="row">
              <div class="">
                <span class="input-field col l3 m3 s6">
                  <input id="first_name" type="text" class="validate">
                  <label for="fname">First Name</label>
                </span>
                <span class="input-field col l3 m3 s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="lname">Last Name</label>
                </span>
                <span class="input-field col l6 m6 s12">
                  <input id="roll" type="text" class="validate" />
                  <label for="roll">Roll No.</label>
                </span>
                <div id="degree" class="input-field col l6 m6 s12">
                <select>
                  <option value="1" selected>B.Tech.</option>
                  <option value="2">B.E.</option>
                  <option value="3">M.Tech.</option>
                  <option value="4">M.E.</option>
                  <option value="5">M.Sc.</option>
                </select>
                <label for="degree">Degree</label>
              </div>
              <div id="branch" class="input-field col l6 m6 s12">
                <select>
                  <option value="1" selected>IT</option>
                  <option value="2">CSE</option>
                  <option value="3">Mech</option>
                  <option value="4">EEE</option>
                  <option value="5">ECE</option>
                </select>
                <label for="branch">Branch</label>
              </div>
              <div id="year" class="input-field col l6 m6 s12">
                <select>
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
                <label for="year">Year</label>
              </div>


              <div id="college" class="input-field col l6 m6 s12">
                <select>
                  <option value="1">PSG College of Technology</option>
                </select>
                <label for="college">College</label>
              </div>

                <div id="pmobile" class="input-field col l6 m6 s12">
                  <input id="pmobile" type="text" class="validate">
                  <label for="pmobile">Mobile</label>
                </div>
                <div id="pmobile" class="input-field col l6 m6 s12">
                  <input id="pmobile" type="text" class="validate">
                  <label for="pmobile">Mail ID</label>
                </div>

                <div id="pmobile" class="input-field col l6 m6 s12">
                  <input id="pmobile" type="password" class="validate">
                  <label for="pmobile">Password</label>
                </div>
                <div id="pmobile" class="input-field col l6 m6 s12">
                  <input id="pmobile" type="password" class="validate">
                  <label for="pmobile">Confirm Password</label>
                </div>



</div>
</div>
</div>




      </div>
      <div class="row">
        <div class="center">
          <button type="submit" class="btn waves-effect waves-light green center">Register</button>
        </div>
    </div>
  </div>
</form>


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
