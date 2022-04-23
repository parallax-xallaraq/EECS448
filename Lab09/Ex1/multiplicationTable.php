<?php
echo "<p> Multiplication Table</p>";

echo "<table>";
  echo "<tr>";
    echo "<th> </th>";
    for($i = 1; $i <= 100; $i++)
    {
      echo "<th>" . $i . "</th>";
    }
  echo "</tr>";

  for($j = 1; $j <= 100; $j++)
  {
    echo "<tr>";
    echo "<td> <b>" . $j . "</b> </td>";
    for($k = 1; $k <= 100; $k++)
    {
    echo "<td>" . ($j * $k) . "</td>";
    }
    echo "</tr>";
  }


echo "</table>";

?>
