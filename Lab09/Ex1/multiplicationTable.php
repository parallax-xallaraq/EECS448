<?php

function mult($x, $y){
  $z = $x * $y;
  return $z;
}

function tableLine($row){

  echo "<tr>";
  echo "<td> " . $row . "</td>";

  // calculate for each table cell
  for($i=1; $i <= 100; $i = $1 + 1){
  {
    echo "<td> " . mult($row, $i) . "</td>";
  }

  echo "</tr>"
}

function table(){
  echo "<table>";

  // table columns
  echo "<tr> <td> </td>";
  for($i=1; $i <= 100; $i = $1 + 1){
    echo "<td>". $i ." </td>";
  }
  echo "</tr>";

  // populate rows
  for($i=1; $i <= 100; $i = $1 + 1){
    tableLine($i);
  }
  echo "</table>";
}

// run
table();

?>
