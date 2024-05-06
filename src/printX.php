<?php
function printX()
{
  $gridSize = 5;
  for ($row = 0; $row < $gridSize; $row++) {
    for ($column = 0; $column < $gridSize; $column++) {
      $outputChar = '.';
      if ($row == $column || $row + $column == $gridSize - 1) {
        $outputChar = '*';
      }
      echo $outputChar . ' ';
    }
    echo "\n";
  }
}
printX();
