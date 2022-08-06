
<head>
<title>Sample Design Pattern</title>
<link href="styles-template.css" rel="stylesheet">
</head>

<body>

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
$fName = "Spencer";
$mName = "John";
$lName = "LaBrie";
define("STUDENT_NUM", "041029720");
echo ($fName . "<br>" . $mName . "<br>" . $lName . "<br>");
echo (STUDENT_NUM . "<br>");
echo ("Hello World!! " . "This is the first time I am using PHP!!" . "<br>");
echo ("Today is ") . date("Y-m-d", strtotime("now")) . "<br>";
echo ("The current time is ") . date("h-i-s", strtotime("now")) . "<br>";
echo ("Tommorow is ") . date("Y-m-d", strtotime("tommorow")) . "<br>";
echo ("Next Monday is ") . date("Y-m-d", strtotime("next monday")) . "<br";

?>
				
			</div>

	<!-- FOOTER -->
	<div id="footer">			
				<?php include_once "Footer.php"; ?>				
			</div>

</body>

</html>