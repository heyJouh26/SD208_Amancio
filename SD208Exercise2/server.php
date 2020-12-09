<?php 
    session_start();

    $firstname ="";
    $emailadd ="";
    $addressname ="";
    $emailadd2 ="";
    $errors = array();


    //connect to the database
    $mysqli = new mysqli("localhost","root","","registrationform");

    //if the register button is clicked
    if (isset($_POST['register'])) {

        $firstname = $mysqli -> real_escape_string($_POST['firstname']);
        $lastname = $mysqli -> real_escape_string($_POST['lastname']);
        $addressname = $mysqli -> real_escape_string($_POST['addressname']);
        $emailadd = $mysqli -> real_escape_string($_POST['emailadd']);
        $emailadd2 = $mysqli -> real_escape_string($_POST['emailadd2']);

        if ($emailadd != $emailadd2 )    {
            array_push($errors, " Your Email Address do not much! Please try again. ");

        }
        //if there is no errors, save user to database
        if (count($errors) == 0){
            $sql="INSERT INTO users (firstname, lastname, addressname, emailadd ) VALUES ('$firstname','$lastname','$addressname','$emailadd')";
            if (!$mysqli -> query($sql)) {
                printf("%d Row inserted.\n", $mysqli->affected_rows);
              }
              
              $mysqli -> close();

              $_SESSION['firstname'] = $firstname;
              header('location: login.php');
        }
}
    if(isset($_POST['login'])) {
        if (empty($emailadd)) {
            array_push($errors, "Email Address is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

            $_SESSION['firstname'] = $firstname;
            header('location: http://mantalongonnhs.weebly.com/');
        }
    

?>