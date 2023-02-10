<?php

$colors = array("red", "blue", "green", "black", "yellow");

for ($i = 0; $i < 10; $i++) {
    $color = $colors[array_rand($colors)];
    echo "<p style='color: $color;'>Bonjour</p>";
}

?>
