<head>
<title>Calculator.php</title>
<link href="Lab7Styles.css" rel="stylesheet">
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
	<input id="n1" name="n1"/>
	<select id="op" name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="multiply">x</option>
		<option value="divided by">/</option>
		<option value="exponent">exp</option>
	</select>
	<input id="n2" name="n2"/>
	<button type="submit" id="submit">=</button>
    <?php
	$total = 0;
	$prime = null;
	$index = 0;
	if(isset($_POST["submit"])) {
		if(is_numeric($_POST["n1"]) && is_numeric($_POST["number2"])) {
			if($_POST["op"] == "plus") {
				$total = $_POST["n1"] + $_POST["n2"];
				echo $_POST["n1"]." plus ".$_POST["n2"]." equals ".$total;
				echo "<br>";
			} else if($_POST["op"] == "minus") {
				$total = $_POST["n1"] - $_POST["n2"];
				echo $_POST["n1"]." minus ".$_POST["n2"]." equals ".$total;
				echo "<br>";
			} else if($_POST["op"] == "multiply") {
				$total = $_POST["n1"] * $_POST["n2"];
				echo $_POST["n1"]." multiplied by ".$_POST["n2"]." equals ".$total;
				echo "<br>";
			} else if($_POST["op"] == "divided by") {
				$total = $_POST["n1"] / $_POST["n2"];
				echo $_POST["n1"]." divided by ".$_POST["n2"]." equals ".$total;
				echo "<br>";
			} else if($_POST["op"] == "exponent") {
				$total = pow($_POST["n1"], $_POST["n2"]);
				echo $_POST["n1"]." to the power of ".$_POST["n2"]." equals ".$total;
				echo "<br>";
			}

			$prime = true;
			$index = 2;
			while(($index * $index) <= $total && $prime == true) {
				if($total % $index == 0) {
					$prime = false;
				}
				$index++;
			}

			if($prime == false) {
				echo $total." is NOT a prime number";
			} else {
				echo $total." is a prime number";
			}

			if($total % 2 == 0) {
				echo $total." is even";
			} else {
				echo $total." is odd";
			}
		} else {
			echo "Numeric values are required";
		}
	}
	?>
</div>

<!-- FOOTER -->
<div id="footer">
    <?php include_once "Footer.php"; ?>
</div>