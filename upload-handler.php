<link rel = "stylesheet" href="styles.css">
<link type = "image/x-icon" rel="icon" href="favicon.ico">
<img src = "favicon.ico" style="width:100px;">
<body class="background">
<?php
	
	session_start(); //Initialises session ID again (you have to invoke this every PHP file that uses sessions)
	if(!isset($_SESSION['request_count'])){
		$_SESSION['request_count'] = 0;
	}
	print("rc:" . $_SESSION['request_count']);
	$_SESSION['request_count']++; //increments value by one each time a upload is made
	$imageFileType = strtolower(pathinfo($_FILES["upload"]["name"],PATHINFO_EXTENSION));
	if($imageFileType === "php"){ // Detects if filetype is php and if it is it gets blocked because that's a MAJOR security risk that is to allow it
		exit;
	}
	$uploadOk = 1; //Sets if upload is ok
	$DONT_UPLOAD = "n"; //says if you can or can't upload
	if(isset($_SESSION['request_count'])){

	
		if($_SESSION['request_count'] > 10){ //Detects if request_count is bigger than six which ratelimits it except it doesn't work right now
		echo '<title>Bromine - Rate Limited</title>';
		echo '<br></br>'; 
		echo '<img style="margin-left:auto;margin-right:auto;display:block;width:100px;" src="Media/failure.png">';
		echo '<h1 style="text-align:center;" class="Roboto-Regular">YOU HAVE BEEN RATELIMITED!</h1>'; 
		$DONT_UPLOAD = "y";
        }
	$FILE_LOCATION = basename($_FILES["upload"]["name"]);
	if($_FILES['upload']['size'] > 103886080){ //Checks if file is above 100MB if so it gets denied (you can change this like any other setting here) 
		echo '<br></br>';
		echo '<img style="margin-left:auto;margin-right:auto;display:block;width:100px;" src="Media/failure.png">';
		echo '<h1 style="text-align:center;" class="Roboto-Regular">File too large! (limit is 80MB)</h1>';
		echo "<title>Bromine - Upload Failed</title>";
		$DONT_UPLOAD = "y";
	}
	if(file_exists($FILE_LOCATION)){ //Checks if a file of the same filename exists before writing
		$uploadOk = 0;
		echo '<br></br>';
		echo '<img style="margin-left:auto;margin-right:auto;display:block;width:100px;" src="Media/failure.png">';
		echo '<h1 style="text-align:center;" class="Roboto-Regular">Sorry there is already a file on our server with this name please rename it and upload it again!</h1>';
		echo "<title>Bromine - Upload Failed</title>";
		$DONT_UPLOAD = "y";
	}
	if($DONT_UPLOAD === "n"){

	if(move_uploaded_file($_FILES["upload"]["tmp_name"],$FILE_LOCATION)){ //The file is now moved over to the server 
		
		$uploadOk = 1;
		echo '<br></br>';
		echo '<img style="margin-left:auto;margin-right:auto;display:block;width:100px;" src="Media/success.png">';
		
		echo '<h1 style="text-align:center;" class="Roboto-Regular">Your file has successfully been uploaded to our servers with no errors in order to access it remove "upload-handler.php" from the url and replace it with the filename that you uploaded! </h1>';	
		echo "<title>Bromine - Upload Complete</title>";
	}
	}
	}

	
else{
	echo '<img style="margin-left:auto;margin-right:auto;display:block;width:100px;" src="Media/failure.png">';
	echo '<h1>You have not been verified!</h1>'; //This would only display if the if statement before with "not_a_bot" failed and if sso then it would display "You have not been verified" in h1 tags

}
?>

