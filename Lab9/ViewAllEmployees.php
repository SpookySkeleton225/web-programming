<?php

require "ConnectionInfo.php";
$error = "";
session_start();
if(isset($_SESSION))
{
    if(
        $_SESSION['fName'] == "" 
        || $_SESSION['lName'] == "" 
        || $_SESSION['email'] == "" 
        || $_SESSION['phone'] == "" 
        || $_SESSION['sin'] == "" 
        || $_SESSION['pWord'] == "") 
    {
        header("Location: Login.php");
        session_unset();
        exit;
    }
}

?>

<html>
    <head>
        <title>Lab9: View All Employees</title>
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
                <div id="left">
                    <p><h1>Session State Data</h1></p><br>
                    <p>First Name: <?php if(isset($_SESSION['fName'])) echo $_SESSION['fName']?></p><br>
                    <p>Last Name: <?php if(isset($_SESSION['lName'])) echo $_SESSION['lName']?></p><br>
                    <p>Email: <?php if(isset($_SESSION['email'])) echo $_SESSION['email']?></p><br>
                    <p>Phone Number: <?php if(isset($_SESSION['phone'])) echo $_SESSION['phone']?></p><br>
                    <p>SIN: <?php if(isset($_SESSION['sin'])) echo $_SESSION['sin']?></p><br>
                    <p>Password: <?php if(isset($_SESSION['pWord'])) echo $_SESSION['pWord']?></p>
                </div>

                <div id="right">
                    <?php
                        try {
                            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                            
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
        
                            $sqlQuery = "SELECT * FROM Employee";	
                            
                            try {
                                $result = $pdo->query( $sqlQuery );
                                
                            }
                            catch(PDOException $e) {
                                echo "Employee Could not be found:  " . $e->getMessage();
                            }
                                                
                            $rowCount = $result->rowCount();
        
                            if($rowCount == 0)
                                echo "*** There are no rows to display from the Person table ***";
                            else
                            {
                                echo "<h1>Database Data</h1><br />";
                                
                                echo "<table width=80%><tr><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>Email Address</b></td><td><b>Phone Number</b></td><td><b>SIN</b></td><td><b>Password</b></td></tr>";
                                for($i=0; $i<$rowCount; ++$i)
                                {
                                    $row = $result->fetch();
        
                                    echo "<tr>";
                                    echo "<td>".$row[1]."</td>";					
                                    echo "<td>".$row[2]."</td>";
                                    echo "<td>".$row[3]."</td>";
                                    echo "<td>".$row[4]."</td>";
                                    echo "<td>".$row[5]."</td>";
                                    echo "<td>".$row[6]."</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } //end of else
                            
                            $pdo = null;
                        }
                        catch(PDOException $e) {
                            echo "Connection failed:  " . $e->getMessage();
                        }
                    ?>
                </div>

            </div>
        </div>
    </body>
</html>