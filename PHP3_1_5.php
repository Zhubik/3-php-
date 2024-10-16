
    <?php
    $Server = array("host" => "localhost", "user" => "root", "password" => "");
    $DB = array("dbname" => "test", "table" => "example");
    $DBINFO = $Server + $DB;
    foreach ($DBINFO as $key => $value) {
        echo "$key => $value <br>";
    }
    ?>
    