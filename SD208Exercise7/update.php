<?php 

    require_once("server.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        
        $query = " UPDATE users set firstname = '".$firstname."', lastname='".$lastname."',email='".$email."', address='".$address."'  WHERE user_id='".$UserID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo 'Invalid Query. Please Check and Try Again.';
        }
    }
    else
    {
        header("location:view.php");
    }


?>