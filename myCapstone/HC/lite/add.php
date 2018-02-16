<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['sick_name'] = $_POST['sick_name'];
$_SESSION['sick_description'] = $_POST['sick_description'];
$_SESSION['sick_cause'] = $_POST['sick_cause'];
$_SESSION['sick_effect'] = $_POST['sick_effect'];
$_SESSION['sick_countermeasures'] = $_POST['sick_countermeasures'];


// Escape all $_POST variables to protect against SQL injections
$sick_name = $mysqli->escape_string($_POST['sick_name']);
$sick_description = $mysqli->escape_string($_POST['sick_description']);
$sick_cause = $mysqli->escape_string($_POST['sick_cause']);
$sick_effect = $mysqli->escape_string($_POST['sick_effect']);
$sick_countermeasures = $mysqli->escape_string($_POST['sick_countermeasures']);
      
// Check if user with that email already exists
// $result = $mysqli->query("SELECT * FROM tb_diseases WHERE sick_id='$sick_id'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
// if ( $result->num_rows > 0 ) {
    
//     $_SESSION['message'] = 'User with this email already exists!';
//     header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (sick_name, sick_description, sick_cause, sick_effect, sick_countermeasures) " 
            . "VALUES ('$sick_name','$sick_description','$sick_cause','$sick_effect', '$sick_countermeasures')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

       $_SESSION['sick_name'] = $_POST['sick_name'];
        $_SESSION['sick_description'] = $_POST['sick_description'];
        $_SESSION['sick_cause'] = $_POST['sick_cause'];
        $_SESSION['sick_effect'] = $_POST['sick_effect'];
        $_SESSION['sick_countermeasures'] = $_POST['sick_countermeasures'];
                
                 // "Confirmation link has been sent to $email, please verify
                 // your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
       
    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}