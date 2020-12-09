<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FizzBuzz</title>
</head>

<body>

    <h1> FizzBuzz </h1>
    <?php
function fBuzz()
{
    for ( $num=1; $num<=100; $num++)
    {
        if ($num %5 ==0 and $num %3 ==0){
            echo "FizzBuzz";
            echo "<br>";
        } elseif ($num %3 ==0) {
            echo "Fizz";
            echo "<br>";
        } elseif ($num %5 ==0) {
            echo "Buzz";
            echo "<br>";
        } else {
            echo "$num";
            echo "<br>";
        }
    }
}
fBuzz();


?>

</body>

</html>