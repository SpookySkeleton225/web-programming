<head>
<title>Pattern.php</title>
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

function pattern()
{
    $i = 0;
    $j = 0;
    $row = 5;
    $column = 5;

    for ($i = 1; $i <= $row; $i ++) {
        for ($j = 1; $j <= $column; $j ++) {
            if ($i == 1 || $i == $row || $j == 1 || $j == $column)
                echo ("*");
            else
                echo ("-");
        }
        echo ("<br>");
    }
}

pattern();
?>

<!-- FOOTER -->
	<div id="footer">			
				<?php include_once "Footer.php"; ?>				
			</div>

</div>