<link rel = "stylesheet" href="styles.css">
<link type = "image/x-icon" rel="icon" href="favicon.ico">
<img src = "favicon.ico" style="width:100px;">
<body class="background">
<?php
	
	session_start(); //Initialises session ID again (you have to invoke this every PHP file that uses sessions)
	$_SESSION['request_count']++; //doesn't work right now stupid bug will be fixed soon
	$imageFileType = strtolower(pathinfo($_FILES["upload"]["name"],PATHINFO_EXTENSION));
	if($imageFileType === "php"){ // Detects if filetype is php and if it is it gets blocked because that's a MAJOR security risk
		exit;
	}
	$uploadOk = 1; //Sets if upload is ok
	$DONT_UPLOAD = "n"; //says if you can or can't upload
	if(isset($_SESSION['not_a_bot'])){

	
	if($_SESSION['request_count'] > 6){ //Detects if request_count is bigger than six which ratelimits it except it doesn't work right now
		echo '<br></br>'; 
		echo '<img src="Media/sad-anime.gif">';
		echo '<h1>YOU HAVE BEEN RATELIMITED (CONSIDER USING .ZIP/.XZ INSTEAD)!</h1>'; 
		$DONT_UPLOAD = "y";
        }
	$FILE_LOCATION = basename($_FILES["upload"]["name"]);
	if($_FILES['upload']['size'] > 103886080){ //Checks if file is above 100MB if so it gets denied (you can change this like any other setting here) 
		echo '<br></br>';
		echo '<img src="Media/sad-anime.gif">';
		echo '<h1>File too large! (limit is 80MB)</h1>';
		echo "<title>Bromine - Upload Failed</title>";
		$DONT_UPLOAD = "y";
	}
	if(file_exists($FILE_LOCATION)){ //Checks if a file of the same filename exists before writing
		$uploadOk = 0;
		echo '<br></br>';
		echo '<img src="Media/sad-anime.gif">';
		echo '<h1>That file name already exists!</h1>';
		echo "<title>Bromine - Upload Failed</title>";
		$DONT_UPLOAD = "y";
	}
	if($DONT_UPLOAD === "n"){

	if(move_uploaded_file($_FILES["upload"]["tmp_name"],$FILE_LOCATION)){ //The file is now moved over to the server 
		
		$uploadOk = 1;
		echo '<br></br>';
		echo '<img src="Media/shigure-ui.gif">';
		
		echo '<h1>Your file is uploaded you can find it by adding /myfile.png to the end of the url but before you do this you must remove the "upload-handler.php" part from the url!</h1>';	
		echo "<title>Bromine - Upload Complete</title>";
	}
	}
	else{
		echo "<title>Invalid Request</title>";
	}
	}

	
	
else{
	echo '<h1>You have not been verified!</h1>'; //This would only display if the if statement before with "not_a_bot" failed and if sso then it would display "You have not been verified" in h1 tags

}
?>


