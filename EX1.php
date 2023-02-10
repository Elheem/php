<?php

function generate_random_binary() {
    return rand(0, 1);
}

$result = array(0, 0, 1, 1, 0);
$tirages = 0;
$generated = array();

while ($generated != $result) {
    array_push($generated, generate_random_binary());
    $tirages++;
    if (count($generated) > count($result)) {
        $generated = array();
    }
}

echo "Nombre de tirages : $tirages\n";

?>
