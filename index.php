<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$text = $_POST['text'];
	header('location: buttons.php?text='. $text .'');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>TextUtilitiesBasicPHP</title>
    <style type="text/css">
    	.ab{
    		min-height: 90vh;
    	}
    </style>
  </head>
  <body>
  	<?php include "components/_header.php"; ?>
  	<div class='ab'>
  		<form method="POST" action="/textutilsPHP/index.php">
  			<div class='container'>
  			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Enter Text</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" name='text' rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 246px;"></textarea>
			</div>
				<button type="submit" class='btn btn-primary'>Next</button>
			
	  		</div>
  		</form>
  	</div>
  	<?php include "components/_footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>