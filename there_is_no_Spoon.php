<?php
fscanf(STDIN, "%d", $width);
fscanf(STDIN, "%d", $height);

$grid = [];
for ($i = 0; $i < $height; $i++) {
    $line = stream_get_line(STDIN, $width + 1, "\n"); 
    $grid[] = $line; 
}

function findRightNeighbor($x, $y, $width, $grid) {
    for ($i = $x + 1; $i < $width; $i++) {
        if ($grid[$y][$i] == '0') {
            return [$i, $y];
        }
    }
    return [-1, -1];
}

function findBottomNeighbor($x, $y, $height, $grid) {
    for ($j = $y + 1; $j < $height; $j++) {
        if ($grid[$j][$x] == '0') {
            return [$x, $j];
        }
    }
    return [-1, -1];
}

for ($y = 0; $y < $height; $y++) {
    for ($x = 0; $x < $width; $x++) {
        if ($grid[$y][$x] == '0') {
            list($rightX, $rightY) = findRightNeighbor($x, $y, $width, $grid);
            list($bottomX, $bottomY) = findBottomNeighbor($x, $y, $height, $grid);
            echo "$x $y $rightX $rightY $bottomX $bottomY\n";
        }
    }
}
?>