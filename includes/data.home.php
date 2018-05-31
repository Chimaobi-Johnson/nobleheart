<?php

 // 86400 = 1 day
// if form submitted
// process form input
if (isset($_POST['submitmodalemail'])) {
// attempt connection to MySQL database
$mysqli = new mysqli("us133.siteground.us", "noblehe6", "martins255", "noblehe6_nobleheart_db");
if ($mysqli === false) {
die('<script type="text/javascript">alert("Cannot connect to database Please try again later")</script>');
}
// open message block
// retrieve and check input values
$inputError = false;
if (empty($_POST['modalemail'])) {
echo '<script type="text/javascript">alert("ERROR: Input valid email")</script>';
$inputError = true;
} else {
$modal_email = $mysqli->escape_string($_POST['modalemail']);
}

// add values to database using INSERT query
if ($inputError != true) {
$sql = "INSERT INTO nobleheart_emails (email)
VALUES ('$modal_email')";
if ($mysqli->query($sql) === true) {
echo '<script type="text/javascript">alert("Email Submitted")</script>';
} else {
echo '<script type="text/javascript">alert("ERROR: Could not connect, try again later")</script>';
}
}
// close message block
// close connection
$mysqli->close();
}


	// if form submitted
	// process form input
	if (isset($_POST['submitemail'])) {
	// attempt connection to MySQL database
	$mysqli = new mysqli("us133.siteground.us", "noblehe6", "martins255", "noblehe6_nobleheart_db");
	if ($mysqli === false) {
	die("ERROR: Could not connect to database. Please try again later");
	}
	// open message block
	echo '<div id="messageemail">';
	// retrieve and check input values
	$inputError = false;
	if (empty($_POST['sus_email'])) {
	echo 'ERROR: Please enter a valid email';
	$inputError = true;
	} else {
	$susemail = $mysqli->escape_string($_POST['sus_email']);
	}

	// add values to database using INSERT query
	if ($inputError != true) {
	$sql = "INSERT INTO nobleheart_emails (email)
	VALUES ('$susemail')";
	if ($mysqli->query($sql) === true) {
	echo '<script type="text/javascript">alert("Thanks for Suscribing to NobleHeart Devotionals")</script>';
	} else {
	echo '<script type="text/javascript">alert("ERROR: Could not connect, Please try again later")</script>';
	}
	}
	// close message block
	echo '</div>';
	// close connection
	$mysqli->close();
	}



//for contact form
    // if form submitted
    // process form input
    if (isset($_POST['submitcontact'])) {
    // attempt connection to MySQL database
    $mysqli = new mysqli("us133.siteground.us", "noblehe6", "martins255", "noblehe6_nobleheart_db");
    if ($mysqli === false) {
    die("ERROR: Could not connect please try again later " . mysqli_connect_error());
    }
    // open message block
    echo '<div id="message">';
    // retrieve and check input values
    $inputError = false;
    if (empty($_POST['firstname'])) {
    echo 'ERROR: Please enter a valid name';
    $inputError = true;
    } else {
    $firstname = $mysqli->escape_string($_POST['firstname']);
    }
    if ($inputError != true && empty($_POST['email'])) {
    echo 'ERROR: Please Enter Your Email';
    $inputError = true;
    } else {
    $email = $mysqli->escape_string($_POST['email']);
    }
    if (empty($_POST['message'])){
      echo "Please write your message";
      $inputError = true;
    }
    else {
      $message = $mysqli->escape_string($_POST['message']);
    }
    // add values to database using INSERT query
    if ($inputError != true) {
    $sql = "INSERT INTO nobleheart_messages (fullname, email, message)
    VALUES ('$firstname', '$email', '$message')";
    if ($mysqli->query($sql) === true) {
    echo '<script type="text/javascript">alert("Message Submitted Succesfully, You will get a reply shortly to your email")</script>';
    } else {
    echo "ERROR: Could not submit message, Please try again later: $sql. " . $mysqli->error;
    }
    }
    // close message block
    echo '</div>';
    // close connection
    $mysqli->close();
    }

?>