<?php
$x = 75;
$y = 25;
$z = 0;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;