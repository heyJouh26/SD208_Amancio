<?php 

    require_once("server.php");
    $UserID = $_GET['GetID'];
    $query = " SELECT * FROM users WHERE user_id='".$UserID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['user_id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $address = $row['address'];
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css" />
    <title>Document</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-info text-white text-center py-3"> Update Form in PHP</h3>
                    </div>
                    <div class="card-body">

                        <form action="update.php?ID=<?php echo $UserID ?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder=" First Name" name="firstname"
                                value="<?php echo $firstname ?>">
                            <input type="text" class="form-control mb-2" placeholder=" Last Name " name="lastname"
                                value="<?php echo $lastname?>">
                            <input type="email" class="form-control mb-2" placeholder=" Email " name="email"
                                value="<?php echo $email ?>">
                            <input type="text" class="form-control mb-2" placeholder=" Address" name="address"
                                value="<?php echo $address ?>">
                            <button class="btn btn-success" name="update">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>