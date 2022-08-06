<head>
<title>Prime.php</title>
<link href="Lab6Styles.css" rel="stylesheet">
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

		<form>
			<label for="range1">Range: 1</label><br> <input type="number"
				id="range1" name="range1"><br> <label for="range2">Range: 2</label><br>
			<input type="number" id="range2" name="range2"><br> <input
				type="submit" value="submit ">

		</form>
	
<?php

function isPrime($n)
{
    if ($n == 1)
        return 0;
    for ($i = 2; $i <= $n / 2; $i ++) {
        if ($n % $i == 0) {
            return 0;
        }
    }
    return 1;
}

if(!(empty($_GET["range1"])||empty($_GET["range2"]))){
$n1 = $_GET["range1"];
$n2 = $_GET["range2"];
$n3 = 0;

for ($n1; $n1 < $n2; $n1 ++) {
    $n3 = isPrime($n1);
    if ($n3 == 1) {
        echo $n1 . " is a prime number<br>";
    }
}

}
?>

<!-- FOOTER -->
		<div id="footer">			
				<?php include_once "Footer.php"; ?>				
			</div>
	</div>

</body>