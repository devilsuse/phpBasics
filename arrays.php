<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Arrays</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            $strArr = "This string is an array";
            echo "First character of $strArr is $strArr[0]";

            $friends = array("krishna", "Sudama", "Gopis", true, 3);
            echo $friends;
            echo "<br>";
            echo $friends[0];
            echo "<br>";
            echo $friends[1];
            echo "<br>";
            echo $friends[2];
            echo "<br>";
            echo $friends[3];
            echo "<br>";
            echo $friends[4];
            echo "<br>";
            $friends[0] = "Rama";
            echo $friends[0];
            echo "<br>";
            $friends[10] = "Hrishikesh";
            echo "<br>";
            echo $friends[10];
            echo "<br>";
            echo $friends[9]; //Warning: Undefined array key 9 in \arrays.php on line 43
            echo "<br>";
            echo count($friends);
        ?>
        <script src="" async defer></script>
    </body>
</html>