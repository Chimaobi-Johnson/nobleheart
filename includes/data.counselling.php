<?php session_start();
 if (isset($_POST['submitcounselling'])) {
    if(isset($_SESSION['form_submitted'])) {
        echo '<script type="text/javascript">alert("you have already submitted form, suscribe to sustained verson more counselling sessions")</script>';
    }
    else {
    // attempt connection to MySQL database
    $mysqli = new mysqli("us133.siteground.us", "noblehe6", "martins255", "noblehe6_nobleheart_db");
    if ($mysqli === false) {
    die("ERROR: Could not connect please try again later " . mysqli_connect_error());
    }
    // open message block
    echo '<div id="messagecounselling">';
    // retrieve and check input values
    $inputError = false;
    if (empty($_POST['name'])) {
    echo 'ERROR: Please enter a valid name';
    $inputError = true;
    } else {
    $fullname = $mysqli->escape_string($_POST['name']);
    }
    if ($inputError != true && empty($_POST['email'])) {
    echo 'ERROR: Please Enter Your Email';
    $inputError = true;
    } else {
    $email = $mysqli->escape_string($_POST['email']);
    }
    if (empty($_POST['description'])){
      echo "Please write your message";
      $inputError = true;
    }
    else {
      $description = $mysqli->escape_string($_POST['description']);
    }
    $location = $mysqli->escape_string($_POST['location']);
    $state = $mysqli->escape_string($_POST['state']);
    $social = $mysqli->escape_string($_POST['social']);
    $occupation = $mysqli->escape_string($_POST['occupation']);
    $history = $mysqli->escape_string($_POST['history']);
    // add values to database using INSERT query
    if ($inputError != true) {
    $sql = "INSERT INTO nobleheart_counselling (fullname, location, state, email, social_contacts, occupation, counselling_descr, brief_history)
    VALUES ('$fullname', '$location', '$state', '$email', '$social', '$occupation', '$description', '$history')";
    if ($mysqli->query($sql) === true) {
    echo '<script type="text/javascript">alert("Message Submitted Succesfully, You will get a reply as soon as possible to your email")</script>';
    } else {
    echo "ERROR: Could not submit message, Please try again later: $sql. " . $mysqli->error;
    }
    }
    // close message block
    echo '</div>';
    // close connection
    $mysqli->close();
$_SESSION['form_submitted'] = true;
}
    }
?>