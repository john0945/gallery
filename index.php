<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Photobooth Gallery</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/buttons.css" rel="stylesheet">

  </head>
  <body>

		<div class="jumbotron page-header text-center">
		<h1>Photobooth Gallery</h1>
		<h2>Refresh the page for new images</h2>
		</div>

  <div class="container-fluid">

		<?php

$dir = getcwd() . "/photos";
$files1 = array_reverse(glob($dir . "/PB*.jpg"));


foreach($files1 as $phpfile)
{			
			echo '<div class="row">';
			echo '<div class = "col-xs-0 col-sm-1 col-md-2"> ';				
			echo '</div>';			
			echo '<div class = "col-xs-12 col-sm-10 col-md-8"> ';
            	echo str_replace("var/www/html/", "", "<img src='$phpfile' alt=''  width = '100%' >\n");
			echo '</div> ';
		
			echo '</div>';			
}
?>

        

	</div>
</div>



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
