<html>
<?php

require "ConnectionInfo.php";
$error = "";

if (isset($_POST['email']) && isset($_POST['pWord'])) {
    if ($_POST['email'] != "" && $_POST['pWord'] != "") {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlQuery = "SELECT * FROM Employee";

            try {
                $result = $pdo->query($sqlQuery);
            } catch (PDOException $e) {
                echo "Login Error: " . $e->getMessage();
            }

            $rowCount = $result->rowCount();

            if ($rowCount == 0) {
                $error = "No users exist";
            } else {
                for ($i = 0; $i < $rowCount; ++$i) {
                    $row = $result->fetch();
                    if ($_POST["email"] == $row[3] && $_POST['pWord'] == $row[6]) {
                        session_start();
                        $_SESSION['fName'] = $row[1];
                        $_SESSION['lName'] = $row[2];
                        $_SESSION['email'] = $row[3];
                        $_SESSION['phone'] = $row[4];
                        $_SESSION['sin'] = $row[5];
                        $_SESSION['pWord'] = $row[6];

                        header("Location: ViewAllEmployees.php");

                        $pdo = null;
                    }
                }
            }
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }
    }
}
?>

<head>
    <title>Lab9: Employee Login</title>
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
            <h2>Login</h2>
            </p><br>
            <form method="post">

                <label for="email">Email Adress:</label><br>
                <input type="text" id="email" name="email"><br>

                <label for="pWord">Password:</label><br>
                <input type="text" id="pWord" name="pWord"><br>

                <input type="submit" value="Login">
            </form>

            <!-- FOOTER -->
            <div id="footer">
                <?php include_once "Footer.php"; ?>
            </div>
        </div>
    </div>
</body>

</html>