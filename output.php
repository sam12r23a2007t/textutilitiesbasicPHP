<?php
$modify = $_GET['modify'];
$m = $_GET['type'];
$text = $_GET['text'];
$text = str_replace("'", "", $text);
if($modify==true && $m=='res'){
    $val = str_replace("    ", " ", $text);
}
elseif($modify==true && $m=='uc'){
    $val = strtoupper($text);
}
elseif($modify==true && $m=='lc'){
    $val = strtolower($text);
}
elseif($modify==true && $m=='noc'){
    $val = strlen($text);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>TextUtilitiesBasicPHP</title>
    <style>
    .ab {
        min-height: 90vh;
    }
    </style>
</head>

<body>
    <?php include "components/_header.php"; ?>
    <div class="container ab">
        <h1>Output is </h1>
        <p id='text'><?php echo $val?></p>
    </div>
    <?php include "components/_footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>