<?php

fscanf(STDIN, "%d", $road);
fscanf(STDIN, "%d", $gap);
fscanf(STDIN, "%d", $len);

$jumped = false;
$slowed = null;
while (true)
{
    fscanf(STDIN, "%d", $speed);
    fscanf(STDIN, "%d", $x);

    if ($jumped) {
        echo "SLOW\n";
        continue;
    }

    if ($speed <= $gap) {
        echo "SPEED\n";
        continue;
    }

    if ($road - $x < $speed) {
        echo "JUMP\n";
        $jumped = true;
    } else if ($speed > $gap+1) {
        echo "SLOW\n";
    } else {
        echo "WAIT\n";
    }
}
?>