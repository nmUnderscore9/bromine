<?php
	session_start(); //Intialises the session
	exec("python3 view_counter.py"); //Executes the python script "view_counter.py" which counts the current views of your site which can be accessed by adding /view_count.txt to the end of the URL
	$one = random_int(0,9); //generates random number 0-9
	$two = random_int(0,9); //generates random number 0-9
	$three = random_int(0,9); //generates random number 0-9
	$four = random_int(0,9); //genrates random number 0-9
	$five = random_int(0,9); //generates random number 0-9
	$six  = random_int(0,9); //generates random number 0-9
	$_SESSION['not_a_bot'] = $one + $two + $three + $four + $five + $six; //Assigns not_a_bot session ID
	sleep(5); //Sleeps for 5 seconds
	header("Location:home.html"); //Redirects to home.html when the time is up

?>
