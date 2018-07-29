<?php
	include("getBrowser.php");

	$ua=getBrowser(); //gets the user agent 
	$bname = $ua['name']; //gets the browser name
	$bversion = $ua['version']; //gets the browser version
	$yourbrowser= "Your current browser is: " . $bname . " " . $bversion;
	
	$myDate = $today = date("D M j, y"); //for todays date
	
	$browser = getVersion(); // gets latest version of browsers
			
	$mess = checkBv($bname, $browser, $bversion); // Compare user browser with latest
	
	$idec = "";
	$fdec = "";
	$cdec = "";
	$odec = "";
	$sdec = "";
	$message = "";
	

		
		if($bname == 'Internet Explorer')
			 {
				$idec = $mess;
				
			 } else if($bname == 'Mozilla Firefox')
			 {
				$fdec = $mess;
				
			 } else if($bname == 'Google Chrome')
			 {
				$cdec = $mess;
				
			 } else if($bname == 'Apple Safari')
			 {
				$sdec = $mess;
				
			 } else if($bname == 'Opera')
			 {
				$odec = $mess;
			 }
	
	function checkEmail($email, $dbc)
	{
		if (empty($email)) {
			
			$message = '<p class="bad2">'.'You Cant Forget your Email Address. Try Again'.'</p>';
		} else {
		
			if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$message = '<p class="success">' . 'Your email has successfully been submitted '. $email . '</p>';
				$query = "INSERT INTO emails (email) VALUES ('$email')";
				$data = mysqli_query($dbc, $query);
				
				if(!$data) {
					die("Database Add failed post: ".mysql_error());
				}
		
			} else {
				$message = '<p class="bad2">' . 'Dude! That was not a valid email address. Try Again'.'</p>';
    		} 
		}
		
		return $message;	
	}
	
	function removeEmail($email, $dbc)
	{
		if (empty($email)) {
			
			$message = '<p class="bad2">'.'You Cant Forget your Email Address. Try Again'.'</p>';
		} else {
		
			if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$message = '<p class="success">' . 'Your email has successfully been removed '. $email . '</p>';
				
				$q = "DELETE FROM emails WHERE email = '$email'";
				
				$data = mysqli_query($dbc, $q);
				if(!$data) {
					die("Database delete failed post: ".mysql_error());
				}
		
			} else {
				$message = '<p class="bad2">' . 'Dude! That was not a valid email address. Try Again'.'</p>';
    		} 
		}
		
		return $message;	
	}
	
	function getVersion()
	{
		$chrome = number_format(22.0, 1, '.', '');
		$safari = number_format(6.1, 1, '.', '');
		$firefox = number_format(16.0, 1, '.', '');
		$ie = number_format(9.0, 1, '.', '');
		$opera = number_format(12.02, 1, '.', '');
 
		return array(
						'chrome' => $chrome,
						'safari' => $safari,
						'firefox' => $firefox,
						'ie' => $ie,
						'opera' => $opera
					);	
	}
	
	function sendEmail($to, $message)
	{
		$subject = 'Browse Responsible with a Browser Update';
		$from = EMAIL; 
		
		// To send the HTML mail we need to set the Content-type header.
    		$headers = "From: " . $from . "\r\n";
		//	$headers .= "Reply-To: ". $from . "\r\n";
		//	$headers .= "CC: $from\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			mail($to, $subject, $message, $headers);	
	}
	
	// Function connects to the database
function connect($db_hostname, $db_username,$db_password, $db_database) {
	$dbc = mysqli_connect($db_hostname, $db_username,$db_password, $db_database);
	
	return $dbc;
}

// Function checks database failure
function checkdbc($dbc) {
	if(!$dbc) {
		die("Database connection failed: ".mysql_error());
	}// Fail statement
}

//Checks for failed query statement
function checkquery($data) { 
	if(!$data) {
		die("Database query failed: ".mysql_error());
	}	
}

?>