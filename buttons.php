<?php
$text = $_GET['text'];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>TextUtilitiesBasicPHP</title>
    <style>
    .ab {
        min-height: 83.3vh;
    }
    .asd{
        margin: 20px 30px;
        text-align: center;
        align-items: center;
    }
    </style>
</head>

<body>
    <?php include "components/_header.php"; ?>
    <div class="container ab">
        <div class="mt-4 asd">
        <button type='submit' class='btn btn-primary'><a
                href="output.php?text='<?php echo $text ?>'&modify=true&type=res" class="text-dark asd">Remove Extra
                spaces</a></button><br></br>
        <button type='submit' class='btn btn-primary'><a
                href="output.php?text='<?php echo $text ?>'&modify=true&type=uc" class="text-dark asd">To
                Uppercase</a></button><br></br>
        <button type='submit' class='btn btn-primary'><a
                href="output.php?text='<?php echo $text ?>'&modify=true&type=lc" class="text-dark asd">To
                Lowercase</a></button><br></br>
        <button type='submit' class='btn btn-primary'><a
                href="output.php?text='<?php echo $text ?>'&modify=true&type=noc" class="text-dark asd">no of
                characters</a></button><br></br>
    </div>
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