<?php 
	include("func/checkBv.php");
	include("func/functions.php");
	
	session_start();
	require_once('func/dblogin.php'); //Inserts Database login
	$dbc = connect(HOSTNAME,USER,PASS,DATABASE);
	//$dbc = connect($db_hostname, $db_username,$db_password, $db_database);
	checkdbc($dbc);
?>

<?php
		$query1 = "SELECT * FROM emails";
		$data1 = mysqli_query($dbc, $query1);
		if(!$data1) {
			die("Database edit failed post: ".mysql_error());
		}
	
		if(isset($_POST['sub'])) {
		
		$message = $_POST['message'];
		
		while($row1 = mysqli_fetch_array($data1)) {
			
			$to = $row1[1];
			sendEmail($to, $message);		
		}
		
		 echo "Message has been sent....!"; 
		
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

</head>

<body>

<?php
	while($row1 = mysqli_fetch_array($data1)) {
			echo $row1[1]."<br />";
		}
?>

<br />
	<form id='myform' method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div>
			<label><span>Enter your email address below to be removed from future emails.</span></label><br /><br /><br />
			<textarea name="message" id="message" cols="100" rows="30"></textarea>
                    
			<input type="submit" name="sub" value="Send" class="button" />
			</div>
	</form>
</body>
<!-- TinyMCE -->
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

</html>