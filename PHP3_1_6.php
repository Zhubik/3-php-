
    <?php
    $A1 = array(1, 2, 3);
    $A2 = array(4, 5, 6);
    $A3 = array_merge($A1, $A2);
    foreach ($A3 as $key => $value) {
        echo "$key => $value <br>";
    }
    ?>
    