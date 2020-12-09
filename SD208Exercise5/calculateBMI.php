
<?php

session_start();
$result="";
$bmi;


if (isset($_POST['calculate'])) {
    $weight = $_POST['weight'];
    $height = $_POST['height'];

   $bmiHeight = $height/100;
   $bmi = $weight/($bmiHeight*$bmiHeight);

  
      if($bmi <= 18.4){
      $result = "You are underweight";
      }
      if($bmi >= 18.5 && $bmi <= 24.9){
      $result= "You are Normal Weght";
      }
      if($bmi >= 25 && $bmi <= 29.9){
      $result = "You are Overweight";
      }
      if($bmi >= 30 && $bmi <= 39.9){
      $result = "You are Obese";
      }                       
            
  }   

if (isset($_POST['back'])){
header('location: index.php');

}

?>