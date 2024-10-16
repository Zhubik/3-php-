
    <?php
    $fruties = array("b" => "banana", "a" => "orange", "c" => "apple");
    ksort($fruties); // сортировка по ключам
    print_r($fruties);
    krsort($fruties); // сортировка по ключам в обратном порядке
    print_r($fruties);
    ?>
    