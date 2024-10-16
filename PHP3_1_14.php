
    <?php
    $input = array(1, 2, 3, 4, 5);
    $output = array_slice($input, 0, 3);
    print_r($output); // 1, 2, 3
    $output = array_slice($input, 2);
    print_r($output); // 3, 4, 5
    $output = array_slice($input, -2, 1);
    print_r($output); // 4
    ?>
    