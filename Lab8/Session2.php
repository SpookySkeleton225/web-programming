<?php
    session_start();
?>

<head>
    <title>Arrays.php</title>
    <link href="lab8.css" rel="stylesheet">
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
    if(isset($_SESSION['eName'])||isset($_SESSION['eId'])||isset($_SESSION['ePhone'])||isset($_SESSION['eMail'])||isset($_SESSION['position'])||isset($_SESSION['project'])) {
        echo "<p>Employee Name: ".$_SESSION['name']."</p><br>";
                echo "<p>Employee ID: ".$_SESSION['id']."</p><br>";
                echo "<p>Telephone Number: ".$_SESSION['phone']."</p><br>";
                echo "<p>Email Adress: ".$_SESSION['mail']."</p><br>";
                echo "<p>Employee Position: ".$_SESSION['position']."</p><br>";
                echo "<p>Employee Project: ".$_SESSION['project']."</p><br>";
    }
    ?>
</div>