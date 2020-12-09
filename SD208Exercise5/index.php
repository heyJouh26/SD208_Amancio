<?php include('calculateBMI.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculate your BMI</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
  <header class="mt-3 text-center row">
    <div class="col-sm-10 align-right">
      <h1 class="text-secondary">Calculate Body Mass Index</h1>
    </div>
  </header>
  
  <div class="container mt-3">
    <form method="POST" action="display.php">
            <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="weight" style="color:black">Weight in kg.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter your weight in kilograms.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="height" style="color:black" >Height in cm.</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="height" name="height" placeholder="Enter your height in centimeters.">
        </div>
      </div>
      <div class="form-group mt-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10 align-right">
          <button type="calculate" class="btn btn-primary btn-block" name="calculate">Compute BMI</button>
          
        </div>
      </div>
    </form>
  </div> 
</body>
</html>