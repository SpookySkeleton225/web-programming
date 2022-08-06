<head>
<title>EvenOdd.php</title>
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

function evenOdd()
{
    define("LINE_4", " bottles of beer can serve ONLY ONE guest<br>");
    define("LINE_5", " bottles of beer can serve even number of guests<br>");
    define("LINE_6", " bottles of beer can serve odd number of guests<br>");

    $bottles = 0;
    for ($bottles = 99; $bottles > 0; $bottles --) {
        if ($bottles == 1) {
            echo $bottles . LINE_4;
        } else if ($bottles % 2 == 0) {
            echo $bottles . LINE_5;
        } else {
            echo $bottles . LINE_6;
        }
    }
}

evenOdd();
?>

<!-- FOOTER -->
	<div id="footer">			
				<?php include_once "Footer.php"; ?>				
			</div>

</div>