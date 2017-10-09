<?php
  $conn = mysqli_connect("localhost","ita","invadaurz2k17");
  if(!$conn){
    echo "DB connection fails: ".mysqli_error();
  }
  else{
  $rollno = $_REQUEST["rollno"];
  echo '<html>
          <head>
            <link type="text/css" rel="stylesheet" href="css\materialize.min.css"  media="screen,projection"/>
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <script src="js\materialize.min.js"></script>
            <title> Participant Attendance </title>
            <script>
              $(document).ready(function() {
                $("select").material_select();
              });
            </script>
          </head>
          <body>
          <div class="navbar-fixed" style="background: #005985">
            <nav style="background: #005985">
              <div class="nav-wrapper">
                <a href="#" class="center brand-logo">INVADAURZ</a>
              </div>
            </nav>
          </div>
            <div class="container">
              <div class="row">
                <div class="col s12 center">
                  <h4> Participant Event Registration </h4>
                </div>
              </div>
              <div class="row">
                <div class="col s12 center">
                  <form action="'.$_SERVER['PHP_SELF'].'" method="post">
                    <div class="input-field col s12">
                      <select name="eventSelect">
                        <option value="" disabled selected>Choose the Event</option>
                        <option value="" disabled >Technical</option>
                        <option value="bugboss" >Bug Boss </option>
                        <option value="ctf" > Capture the Flag</option>
                        <option value="coderelay" >Code Relay </option>
                        <option value="computergeeks" >Computer Geeks </option>
                        <option value="doctype" >&lt;!Doctype&gt; </option>
                        <option value="zesttech" >Zest Tech </option>
                        <option value="acute" >Acute </option>
                        <option value="bubblebugs" > Bubble Bugs</option>
                        <option value="" disabled >Fun</option>
                        <option value="wheeloffortune" >Wheel of Fortune </option>
                        <option value="razzwhale" >Razz Whale </option>
                        <option value="cryptica" > Cryptica</option>
                        <option value="8inamaze" > 8 in a Maze</option>
                        <option value="gamearena" > Game Arena</option>
                        <option value="funbuzz" >Fun Buzz </option>
                        <option value="crimescene" >Crime Scene </option>
                        <option value="runsomewhere" > Run Somewhere</option>
                      </select>
                      <label> Event </label>
                    </div>
                    <div class="input-field col s12">
                      <input id="passcode" name="passcode" type="text" class="validate" />
                      <label for="passcode">Passcode </label>
                    </div>
                    <div class="input-field col s12">
                      <button name="btnSubmitPA" type="submit" class="btn waves-effect waves-light center"> Register </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </body>
        </html>';
        if(isset($_POST['btnSubmitPA'])){
          $sql = "INSERT INTO Attendance () VALUES ()";
          unset($_POST['btnSubmitPA']);
        }
      }
?>
