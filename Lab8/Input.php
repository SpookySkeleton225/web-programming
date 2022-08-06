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
    <div id="left">
        <form method="post">
            <label for="eName">Employee Name:</label><br>
            <input type="text" id="eName" name="eName"><br>
            <label for="eId">Employee ID:</label><br>
            <input type="text" id="eId" name="eId"><br>
            <label for="ePhone">Telephone Number:</label><br>
            <input type="text" id="ePhone" name="ePhone"><br>
            <label for="eMail">Email Adress:</label><br>
            <input type="text" id="eMail" name="eMail"><br>

            <br>
            <br>

            <label for="position">Position:</label>
            <select name="position" size="1" value="">
                <option value=""></option>
                <option value="Manager">Manager</option>
                <option value="Team Lead">Team Lead</option>
                <option value="IT Developer">IT Developer</option>
                <option value="IT Analyst">IT Analyst</option>
            </select>

            <br>
            <br>

            <label for="project">Project:</label>
            <select name="project" size="1" value="">
                <option value=""></option>
                <option value="Project A">Project A</option>
                <option value="Project B">Project B</option>
                <option value="Project C">Project C</option>
                <option value="Project D">Project D</option>
            </select>
            <br>
            <br>
            <input type="submit">
        </form>
    </div>

    <div id="right">
        <?php
            if(isset($_POST['eName'])||isset($_POST['eId'])||isset($_POST['ePhone'])||isset($_POST['eMail'])||isset($_POST['position'])||isset($_POST['project'])) {
                echo "<p>Employee Name: ".$_POST['eName']."</p><br>";
                echo "<p>Employee ID: ".$_POST['eId']."</p><br>";
                echo "<p>Telephone Number: ".$_POST['ePhone']."</p><br>";
                echo "<p>Email Adress: ".$_POST['eMail']."</p><br>";
                echo "<p>Employee Position: ".$_POST['position']."</p><br>";
                echo "<p>Employee Project: ".$_POST['project']."</p><br>";
            }
        ?>
    </div>
</div>

<!-- FOOTER -->
<div id="footer">
    <?php include_once "Footer.php"; ?>
</div>