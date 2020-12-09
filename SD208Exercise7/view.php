<?php 

    require_once("server.php");
    $query = " SELECT * FROM users ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css" />
    <title> Display Users </title>
</head>

<body class="bg-secondary text-white">
    <div class="container pt-5">
        <h1 class="text-center">List of Registered People</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-2 text-white text-center py-3  ">
                    <table class="table table-dark table-striped">
                        <tr>
                            <td> User ID </td>
                            <td> First Name </td>
                            <td> Last Name </td>
                            <td> Email </td>
                            <td> Address </td>
                            <td> Update </td>
                            <td> Delete </td>
                        </tr>

                        <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['user_id'];
                                        $firstname = $row['firstname'];
                                        $lastname = $row['lastname'];
                                        $email = $row['email'];
                                        $address = $row['address'];
                            ?>
                        <tr>
                            <td><?php echo $UserID ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $lastname ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $address ?></td>
                            <td><button type="button" class="btn btn-success"><a
                                        href="edit.php?GetID=<?php echo $UserID ?>">Update</a></td>
                            <td><button type="button" class="btn btn-danger"><a
                                        href="delete.php?delete=<?php echo $UserID ?>">Delete</a></td> </button>
                        </tr>
                        <?php 
                                    }  
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>