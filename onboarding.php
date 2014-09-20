<?php

while (true)
{
    $closest = '';
    $cdist = -1;
    fscanf(STDIN, "%d", $count);
    for ($i = 0; $i < $count; $i++) {
        fscanf(STDIN, "%s %d", $enemy, $dist);
        if ($cdist === -1 || $dist < $cdist) {
            $closest = $enemy;
            $cdist = $dist;
        }
    }

    echo $closest . PHP_EOL;
}
?>