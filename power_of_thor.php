<?php

fscanf(STDIN, "%d %d %d %d", $lightX, $lightY, $initialTx, $initialTy);

while (TRUE) {
    fscanf(STDIN, "%d", $remainingTurns);

    $direction = "";

    if ($initialTy > $lightY) {
        $direction .= "N";  
        $initialTy--;       
    } elseif ($initialTy < $lightY) {
        $direction .= "S";  
        $initialTy++;       
    }

    if ($initialTx > $lightX) {
        $direction .= "W";  
        $initialTx--;      
    } elseif ($initialTx < $lightX) {
        $direction .= "E";  
        $initialTx++;      
    }

    echo($direction . "\n");
}
