<?php 

        require_once("server.php ");

        if(isset($_GET['delete']))
        {
            $UserID = $_GET['delete'];
            $query = " DELETE FROM users where User_ID = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view.php");
        }

?>