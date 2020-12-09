
<?php 
    $errors = array();

    if (isset($_POST['submit'])) {

        $firstname = isset($_POST['firstname']) ? $_POST['firstname']: null;
        $lastname = isset($_POST['lastname']) ? $_POST['lastname']: null;
        $email=  isset($_POST['email'])  ? $_POST['email']: null;
        $address = isset($_POST['address'])  ? $_POST['address']: null;

    
        //First Name
        if (empty($lastname)) {
            array_push($errors, "Required First Name");
        } else {
            if (strlen($firstname) > 25 || (strlen($firstname) ==1 )  ) {
                array_push($errors, " First Name must be at least 2 and maximum of 25 characters");
                }
        }

        //Lastname
        if (empty($lastname)) {
            array_push($errors, "Required Last Name");
        } else {
            if (strlen($lastname) > 25 || (strlen($lastname) ==1 )  ) {
                array_push($errors, " Last Name must be at least 2 and maximum of 25 characters");
                }
        }

        
        //Email
        if(empty($email)) {
            array_push($errors, "Email is require");
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Invalid format of Email Address");
                }
        
        }

        //Adress
        if(empty($address)) {
            array_push($errors, "Address is require");
        } 
        
        //No errors 
        if (count($errors)== 0) {
            echo ("\nWelcome! \n");
            echo ($firstname." ".$lastname);
            echo nl2br("\r\nEmail Address: $email \r\nAdress: ".$address);
        }

    
    }    
?>