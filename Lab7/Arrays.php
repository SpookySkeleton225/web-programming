<head>
    <title>Arrays.php</title>
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
    <?php

    $noKeyArray = [10, 20, 30, 40, 50];
    echo "<h3>No Key Array - var_dump</h3>";
    echo var_dump($noKeyArray);
    echo "<br>";

    echo "<h3>No Key Array - foreach</h3>";
    foreach ($noKeyArray as $key => $value) {
        echo "key: " . $key . ", value: " . $value . ", Key data type: " . gettype($key);
        echo "<br>";
    }

    $stringKeyArray = ["key1" => "item1", "key2" => "item2"];

    echo "<h3>String Key Array - var_dump</h3>";
    echo var_dump($stringKeyArray);
    echo "<br>";

    echo "<h3>String Key Array - foreach</h3>";
    foreach ($stringKeyArray as $key => $value) {
        echo "key: " . $key . ", value: " . $value . ", Key data type: " . gettype($key);
        echo "<br>";
    }

    $intKeyArray = [0 => "item1", 1 => "item2", 2 => "item2", 3 => "item3", 4 => "item4", 5 => "item5"];

    echo "<h3>Int Key Array - var_dump</h3>";
    echo var_dump($intKeyArray);
    echo "<br>";

    echo "<h3>Int Key Array - foreach</h3>";
    foreach ($intKeyArray as $key => $value) {
        echo "key: " . $key . ", value: " . $value . ", Key data type: " . gettype($key);
        echo "<br>";
    }

    $mixedKeyArray = [0 => 1, "one" => 2, 2 => 3, "three" => 4, 4 => 5];

    echo "<h3>Mixed Key Array - var_dump</h3>";
    echo var_dump($mixedKeyArray);
    echo "<br>";

    echo "<h3>Mixed Key Array - foreach</h3>";
    foreach ($mixedKeyArray as $key => $value) {
        echo "key: " . $key . ", value: " . $value . ", Key data type: " . gettype($key);
        echo "<br>";
    }

    $multiDimensionArray = array(
        array(0 => "Lettuce", 1 => "Cucumber", 2 => "Corn", 3 => "Beans", 4 => "Carrorts", 5 => "Onion"),
        array(0 => "Grapes", 1 => "Blueberries", 2 => "Lemons", 3 => "Cherries", 4 => "Blackberries", 5 => "Dragonfruit")
    );

    echo "<h3>Multi Dimensional Array - var_dump</h3>";
    echo var_dump($multiDimensionArray);
    echo "<br>";

    echo "<h3>Multi Dimensional Array - foreach</h3>";

    foreach ($multiDimensionArray as $key1 => $value1) {
        echo "Level 1 key: " . $key1;
        echo "<br>";
        foreach ($value1 as $key2 => $value2) {
            echo "Level 2 key: " . $key2 . ", value: " . $value2 . ", Key data type: " . gettype($key2);
            echo "<br>";
        }
    }
    ?>

</div>

<!-- FOOTER -->
<div id="footer">
    <?php include_once "Footer.php"; ?>
</div>