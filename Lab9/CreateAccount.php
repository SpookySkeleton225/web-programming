<?php

require "ConnectionInfo.php";

$error = "";


if (
    !isset($_POST['fName'])
    || !isset($_POST['lName'])
    || !isset($_POST['email'])
    || !isset($_POST['phone'])
    || !isset($_POST['sin'])
    || !isset($_POST['pWord'])
) {
    $error = "Please enter all details.";
} else {
    if ($_POST['fName'] != "" && $_POST['lName'] != "" && $_POST['email'] != "" && $_POST['phone'] != "" && $_POST['sin'] != "" && $_POST['pWord'] != "") {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "</br>";

            $sqlQuery = "INSERT INTO Employee (FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) VALUES('" . $_POST['fName'] . "', '" . $_POST['lName'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "', '" . $_POST['sin'] . "', '" . $_POST['pWord'] . "')";
            try {
                $result = $pdo->query($sqlQuery);
                echo "Employee Created" . "<br>";
            } catch (PDOException $e) {
                echo "Employee could not be created: " . $e->getMessage();
            }

            session_start();
            $_SESSION['fName'] = $_POST['fName'];
            $_SESSION['lName'] = $_POST['lName'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['sin'] = $_POST['sin'];
            $_SESSION['pWord'] = $_POST['pWord'];

            header("Location: ViewAllEmployees.php");

            $_POST['fName'] = "";
            $_POST['lName'] = "";
            $_POST['email'] = "";
            $_POST['phone'] = "";
            $_POST['sin'] = "";
            $_POST['pWord'] = "";

            $pdo = null;
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    } else
        $error = "Please enter all details.";
}
?>

<html>

<head>
    <title>Lab9: Create Account</title>
    <link href="Lab9Styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div id="main">
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

            <p>
            <h2>Create your new account</h2>
            </p><br>
            <p>Please fill in all information.</p>
            <form method="post">

                <label for="fName">First Name:</label><br>
                <input type="text" id="fName" name="fName"><br>

                <label for="lName">Last Name:</label><br>
                <input type="text" id="lName" name="lName"><br>

                <label for="email">Email Adress:</label><br>
                <input type="text" id="email" name="email"><br>

                <label for="phone">Telephone Number:</label><br>
                <input type="text" id="phone" name="phone"><br>

                <label for="sin">Social Insurance Number:</label><br>
                <input type="text" id="sin" name="sin"><br>

                <label for="pWord">Password:</label><br>
                <input type="text" id="pWord" name="pWord"><br>

                <input type="submit" value="submit">
            </form>
            <?php
            echo $error;
            ?>
        </div>

        <!-- FOOTER -->
        <div id="footer">
            <?php include_once "Footer.php"; ?>
        </div>
    </div>
</body>

</html>