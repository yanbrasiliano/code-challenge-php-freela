<?php
function printCross()
{
  $gridSize = 5;
  for ($row = 0; $row < $gridSize - 1; $row++) {
    for ($column = 0; $column < $gridSize; $column++) {
      $outputChar = '.';
      if (($row == 1 && $column >= 1 && $column <= 3) || ($column == 2 && ($row == 0 || $row == 2 || $row == 3))) {
        $outputChar = '*';
      }
      echo $outputChar . ' ';
    }
    echo "\n";
  }
}
printCross();
