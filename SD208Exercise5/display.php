<?php include('calculateBMI.php'); ?>
<!DOCTYPE html>
<html lang="en">

<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate your BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
</header>

<body>
    <div class="container mt-3">
        <form method="POST" action="display.php">
            <div class="form-group mt-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10 align-right">
                    <center > 
                        <h1>Result</h1>                
                    <?php 
                    echo "</br>";  
                    echo $result;
                    echo "</br>";  
                    echo $bmi;
                    echo "</br>";  
                    echo "</br>";  
                    ?> 
                </center>
                   <br>
                   <a href="index.php"> <button type="submit" class="btn btn-primary btn-block" name="back"> Back to Calculate </button> </a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>