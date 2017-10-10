<html>

   <head>
      <title>Sending HTML email using PHP</title>
   </head>

   <body>
     <?php
     require_once "mail.php";
     $name="Sandeep";
     $rno="15I243";
     $college="PSG";
     $dept="IT";
     $email = "sandeeparockia@gmail.com";
     //FROM KRIYA EMAIL TO SU EMAIL
			$from = "<invadaurz2k17@gmail.com>";//Kriya Gmail ID goes here
			$to = "<invadaurz2k17@gmail.com>";//SU email id goes here
			$subject = "Student Details";
			$body = "Student Detail:\n\n\n Name:".$name."\n Roll Number:".$rno."\nCollege:".$college."\nDepartment:".$dept;
			$host = "ssl://smtp.gmail.com";
			$port = "465";
			$uname = "invadaurz2k17@gmail.com";//Kriya Gmail ID goes here
			$password = "sandeeppuma";//Kriya Gmail password
			$headers = array ('From' => $from,
			'To' => $to,
			'Subject' => $subject);
			$smtp = Mail::factory('smtp',array ('host' => $host,'port' => $port,'auth' => true,'username' => $uname, 'password' => $password));
        if (PEAR::isError($smtp)) {
          echo("<p>" . $smtp->getMessage() . "</p>");
        }
			$mail = $smtp->send($to, $headers, $body);
      //FROM KRIYA EMAIL TO PARTICIPANT"S EMAIL
			$to=$email;
			$subject = "Conformation of Registration";
			$body = "Hi,\n\n\n You have been successfully registered for Kriya 2k17 and your Kriya ID is ".$name.".Use this ID and the password entered during registeration to login into the Kriya website";
			$headers = array ('From' => $from,
			'To' => $to,
			'Subject' => $subject);
			$smtp = Mail::factory('smtp',array ('host' => $host,'port' => $port,'auth' => true,'username' => $uname,'password' => $password));
			$mail = $smtp->send($to, $headers, $body);
			if (PEAR::isError($mail)) {
				echo("<p>" . $mail->getMessage() . "</p>");
			} else {
				//die("your account has been created");
			}

     ?>

   </body>
</html>
