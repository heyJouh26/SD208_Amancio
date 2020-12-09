<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Counting Words </title>
</head>

<body>
    <?php 
function countWords($str) {
    $str = strtolower($str);
    $words = explode(' ', $str);
    $counts = array_count_values(preg_replace('/[^a-zA-z0-9_\.]/','',$words));
    $array_name = array();
    foreach ($counts as $key => $value) {
        $array_name[$key] = $value;
    }
    print_r($array_name);

}

countWords ("This new educational system, a new online set up class brought many students to fell uneasy also anxious and stressed.")
    ?>
</body>

</html>