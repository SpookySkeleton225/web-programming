<head>
<title>All.php</title>
<link href="Lab6Styles.css" rel="stylesheet">
</head>

<!-- HEADER -->
<div id="header">
				<?php include_once "Header.php"; ?>
			</div>

<!-- Menu -->
<div id="menu">
				<?php include_once "Menu.php"; ?>
			</div>

<!-- CONTENT -->
<div id="content">
	
<?php

function BeerBottles()
{
    $bottles = 99;
    $end = false;
    define("LINE_1", " bottles of beer on the wall");
    define("LINE_2", " bottles of beer.");
    define("LINE_3", "Take one down and pass it around, ");
    while (! $end) {

        echo $bottles . LINE_1 . ", " . $bottles . LINE_2 . "<br>";
        echo LINE_3 . "<br>";
        $bottles -= 1;

        if ($bottles == - 1 || $bottles == 0) {
            echo "No more bottles of beer on the wall.<br>";
            echo "No more bottles of beer on the wall, no more bottles of beer.<br>";
            echo "Go to the store and buy some more, 99 bottles of beer on the wall.";
            $end = true;
        } else {
            echo $bottles . LINE_1 . ". <br>";
        }
    }
}

BeerBottles();
?>

<!-- FOOTER -->
	<div id="footer">			
				<?php include_once "Footer.php"; ?>				
			</div>

</div>