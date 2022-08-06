<?php
require "ConnectionInfo.php";

$q = intval($_GET['q']);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Succsesfully" . "</br>";

    $sqlQuery = "SELECT * FROM Employee WHERE EmployeeId = '" . $q . "'";

    try {
        $result = $pdo->query($sqlQuery);
        echo "Employee Succsesfully Found" . "<br>";
    } catch (PDOException $e) {
        echo "Employee Not Found: " . $e->getMessage();
    }


    echo "<table>
    <tr>
    <th>FirstName</th>
    <th>LastName</th>
    <th>EmailAdress</th>
    <th>TelephoneNumber</th>
    <th>SocialInsuranceNumber</th>
    <th>Password</th>
    </tr>";

    while ($row = $result->fetch()) {
        echo "<tr>";
        echo "<td>" . $row['FirstName'] . "</td>";
        echo "<td>" . $row['LastName'] . "</td>";
        echo "<td>" . $row['EmailAdress'] . "</td>";
        echo "<td>" . $row['TelephoneNumber'] . "</td>";
        echo "<td>" . $row['SocialInsuranceNumber'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    $pdo = null;
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
