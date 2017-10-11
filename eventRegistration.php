<?php
  error_reporting(0);
  $dbhost = "localhost";
  $dbuser = "itinvadaurz";
  $dbpass = "itinvadaurz";
  $dbname = "invadaurz";
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(!$conn){
    echo '<div class="row">
            <div class="col l12 m12 s12 center">
              <span class="center red-text">Error Occurred: '.mysqli_error($conn).'</span>'.
            '</div>
          </div>';
    die($conn);
  }
  else{
  $rollno = $_REQUEST["rollno"];
  echo '<html>
          <head>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <link type="text/css" rel="stylesheet" href="css\materialize.min.css"  media="screen,projection"/>
            <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <script src="js\materialize.min.js"></script>
            <title> Participant Attendance </title>
            <style>
              body{
                font-family: \'Philosopher\', sans-serif;
              }
            </style>
            <script>
              $(document).ready(function() {
                $("select").material_select();
              });
            </script>
          </head>
          <body style="font-size:1.4rem;overflow-x: hidden;background:#e3f2fd">
          <div class="navbar-fixed" style="background: #005985">
            <nav style="background: #005985">
              <div class="nav-wrapper">
                <a href="#" class="center brand-logo">INVADAURZ</a>
              </div>
            </nav>
          </div>
            <div class="container">
              <div class="row">
                <div class="col s12 center" style="color:#005985">
                  <h4> Participant Event Registration </h4>
                </div>
              </div>
              <div class="row">
                <div class="col s12 center">
                  <form action="" method="post">
					<div class="input-field col s12">
						<input type="text" class="center" disabled id="rollno" />
						<label for="rollno">'.$rollno.'</label>
					</div>
                    <div class="input-field col s12">
                      <select name="eventSelect" required>
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
                      <input id="passcode" name="passcode" type="text" class="validate" required/>
                      <label for="passcode">Passcode </label>
                    </div>
                    <div class="input-field col s12">
                      <button name="btnSubmitPA" type="submit" class="btn waves-effect waves-light center"> Register </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>';
        if(isset($_POST['btnSubmitPA'])){
          $eventName = $_POST['eventSelect'];
          $passcode = $_POST['passcode'];
          if($passcode == "1234"){
            $sql = "SELECT rollno, event FROM eventreg WHERE rollno = '$rollno' AND event = '$eventName'";
			$res = mysqli_query($conn, $sql);
			$res = mysqli_fetch_row($res);
			if($res[0]==$rollno && $res[1]==$eventName){
				echo '<script>swal("Warning!","Already registered for the event", "warning");</script>';
			}
			else{
				$sql = "LOCK TABLE eventreg WRITE";
				$res = mysqli_query($conn, $sql);
				echo mysqli_error($conn);
				$sql = "INSERT INTO eventreg (rollno, event, status) VALUES ('$rollno','$eventName','registered')";
				$res = mysqli_query($conn, $sql);
				if($res){
					echo '<script>swal("Success!","You\'re successfully registered for the event", "success");</script>';
				}
				else{
					echo '<div class="row">
							<div class="col l12 m12 s12 center">
								<span class="center red-text">Error Occurred: '.mysqli_error($conn).'</span>'.
							'</div>
						</div>';
				}
				$sql = "UNLOCK TABLES";
				$res = mysqli_query($conn, $sql);
				echo mysqli_error($conn);
			}
		  }
          else{
            echo '<script>swal("Error!","Passcode entered is wrong", "error");</script>';
          }
		  unset($_POST['btnSubmitPA']);
        }
		echo '</body></html>';
  }
?>
