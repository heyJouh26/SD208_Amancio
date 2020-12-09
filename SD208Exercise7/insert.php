<?php

    require_once("server.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['password']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $password = $_POST['password'];

            $query = " INSERT INTO users (firstname, lastname, email, address, password) values(' $firstname','$lastname','$email','$address','$password')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>