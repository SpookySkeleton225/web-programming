<html>
<head>
    <title>Employee</title>
    <link href="Lab10Styles.css" type="text/css" rel="stylesheet">
    <script>
        function showUser(str) {
            if(str == "") {
                document.getElementById("txtHint").innerHTML="";
                return;
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XTMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseTest;
                }
            };
            xmlhttp.open("GET", "GetEmployee.php?q="+str, true);
            xmlhttp.send();
        }
    </script>
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
            <form>
                <select name="Employees" onchange="showUser(this.value)">
                    <option value="">Select a Person:</option>
                    <option value="1">Spencer LaBrie</option>
                    <option value="2">Arhim Greens</option>
                    <option value="3">Doom Guy</option>
                    <option value="4">Andrew Greenglass</option>
                    <option value="5">Jar-Jar Binks</option>
                </select>
            </form>
            <br>
            <div id="txtHint"><b>Employee Info Here: </b></div>
        </div>

        <!-- FOOTER -->
        <div id="footer">
            <?php include_once "Footer.php"; ?>
        </div>
    </div>
</body>
</html>