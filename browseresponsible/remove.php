<?php 
	include("func/checkBv.php");
	include("func/functions.php");
	
	session_start();
	require_once('func/dblogin.php'); //Inserts Database login
	$dbc = connect(HOSTNAME,USER,PASS,DATABASE);
	//$dbc = connect($db_hostname, $db_username,$db_password, $db_database);
	checkdbc($dbc);
?>

<?php // Delete
	
	if(isset($_POST['sub'])) {
		
		$email = $_POST['email'];
		$message = removeEmail($email, $dbc);
	}
?>

<!DOCTYPE html>

<html lang="en">

<!-- Welcome to Browse Resposible code backend-->

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="description" content="Keep up with the latest in browsers with Browse Responsible." />
<meta name="author" content="Egotistik.com" />

<title>Browse Responsible: Safe. Secure. Fast. Browsing!</title>

<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!--[if lt IE 8]>
<link rel="stylesheet" href="ie.css" type="text/css" media="screen" />
<![endif]-->

<!--[if lt IE 7]>
<link rel="stylesheet" href="ie2.css" type="text/css" media="screen" />
<![endif]-->
</head>
 
<body>
<div id="header">
	<p><?php echo $yourbrowser ?></p>
   <h1><span>Browse</span> Responsible</h1>
	<h2>Safe. Secure. Fast. <span>Browsing For The World!</span></h2>
</div>
 </header>
 
	<article>
	<div id="content">
	    <div class="container">

				<?php 
						echo $message; 
				?>
	<form id='myform' method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div>
			<label><span>Enter your email address below to be removed from future emails.</span></label><br /><br /><br />
			<input id="email" name="email" type="text" autocomplete="off" placeholder="Enter your email address" value="Enter your email address" 
            		onfocus="if(this.value=='Enter your email address'){this.value=''}"  onBlur="if(this.value==''){this.value='Enter your email address'}" />
                    
			<input type="submit" name="sub" value="Remove" class="button" />
			</div>
	</form>
</div>
</div>
<footer>
<div id="footer">
    <div class="fcontainer">
		<div class="para">
		<p>Browse <span>Responsible!</span><br /><br />We all have more important things in our lives to do then to keep up with browsers.
			But now a superhero comes not afraid to keep up with them for you. All your favorite
			browsers in one place so you don't have to make another click or two.<br /><br />
			Having the latest browsers insures that you are viewing secure, and the information you are
			passing is protected and private. Most of all you get to enjoy all the beauty the web has to offer.<br /><br />
			</p>
        <p>We hate spam just as much as you, we promise not to sell your information to absolutely no one!</p><br />
        <p class="company">Powered by: Universal Mindz & <a href="http://www.egotistik.com">Egotistik.com</a> on <?php  print $myDate; ?></p>
		</div>
		
        
		</div>
    </div>

</div>
 </footer>
</body>
</html>