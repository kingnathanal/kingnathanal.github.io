<?php

	function checkBv($bname, $browser, $bversion)
	{
		
		
		if($bname == 'Internet Explorer')
	 {
		 if($bversion < $browser['ie'])
		 {
			$image = '<img src="images/bad3.png" title="Hurry and Update!" />';
			$idec = $image.'<br /><p class="bad">Your version is out-of-date hurry and get the latest!</p>'; 
		 } else if($bversion >= $browser['ie'])
		 {
			$image = '<img src="images/good2.png" title="Updated and Ready!" />';
			$idec = $image.'<br /><p class="green">Your version is Updated and Ready to rock!</p>'; 
		 } 
		
		return $idec;
	 }

	  if($bname == 'Mozilla Firefox')
	 {
		 if($bversion < $browser['firefox'])
		 {
			$image = '<img src="images/bad3.png" title="Hurry and Update!" />';
			$fdec = $image.'<br /><p class="bad">Your version is out-of-date hurry and get the latest!</p>';  
		 } else if($bversion >= $browser['firefox'])
		 {
			$image = '<img src="images/good2.png" title="Updated and Ready!" />';
			$fdec = $image.'<br /><p class="green">Your version is Updated and Ready to rock!</p>';
		 }
		
		return $fdec;
	 }

	 if($bname == 'Google Chrome')
	 {
		 if($bversion < $browser['chrome'])
		 {
			$image = '<img src="images/bad3.png" title="Hurry and Update!" />';
			$cdec = $image.'<br /><p class="bad">Your version is out-of-date hurry and get the latest!</p>'; 
		 } else if($bversion >= $browser['chrome'])
		 {
			$image = '<img src="images/good2.png" title="Updated and Ready!" />';
			$cdec = $image.'<br /><p class="green">Your version is Updated and Ready to rock!</p>';
		 }
		
		return $cdec;
	 }

	 if($bname == 'Apple Safari')
	 {
		 if($bversion < $browser['safari'])
		 {
			$image = '<img src="images/bad3.png" title="Hurry and Update!" />';
			$sdec = $image.'<br /><p class="bad">Your version is out-of-date hurry and get the latest!</p>'; 
		 } else if($bversion >= $browser['safari'])
		 {
			$image = '<img src="images/good2.png" title="Updated and Ready!" />';
			$sdec = $image.'<br /><p class="green">Your version is Updated and Ready to rock!</p>';
		 }
		
		return $sdec;
	 }

	 if($bname == 'Opera')
	 {
		 if($bversion < $browser['opera'])
		 {
			$image = '<img src="images/bad3.png" title="Hurry and Update!" />';
			$odec = $image.'<br /><p class="bad">Your version is out-of-date hurry and get the latest!</p>';  
		 } else if($bversion >= $browser['opera'])
		 {
			$image = '<img src="images/good2.png" title="Updated and Ready!" />';
			$odec = $image.'<br /><p class="green">Your version is Updated and Ready to rock!</p>';
		 }
		
		return $odec;
	 }
	}

?>