<?php define ("TITLE", "Click Bait Headlines");

if (isset($_POST['fix_submit'])) {
    $clickBaith = strtolower($_POST['clickbait_headline']);

    //storing values in array
    $clickbait_words = array (
        "scientists".
        "doctors",
        "hate",
        "stupid",
        "weird",
        "simple",
        "tricked",
        "shocked me",
        "you'll never believe",
        "hack",
        "epic",
        "unbelievable"
    );
    //replacement array
    $replacement_words = array(
        "so-called scientists".
        "so-called doctors",
        "arent threatened by",
        "average",
        "completely normal",
        "ineffective",
        "method",
        "is no different from the others ",
        "you wont really be surprised by",
        "slightly improve",
        "boring ",
        "normal"
    );

    $honestWord = str_replace($clickbait_words, $replacement_words, $clickBaith);

}
?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php echo TITLE; ?> </title>
    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h1> <?php echo TITLE; ?>
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait hadline here" class="form-control input-lg" name="clickbait_headline"> </textarea>
                    <button type="submit" class="btn btn-primary btn-lg-pull-right" name="fix_submit"> Change ClickBait Headlines </button>
                </form>
            </div>
        <?php
            if (isset($_POST['fix_submit'])) {
                echo "<strong class='text-danger'>Original Headline</strong>
                <h4>".ucwords($clickBaith)."</h4> <hr>";

                echo "<strong class='text-success'>Honest Headline</strong>
                <h4>".ucwords($honestWord)."</h4> <hr>";


            }
        ?>


    </div>



</body>









</html>