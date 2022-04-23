<style><?php include "style.css"; ?></style>

<?php

$real_quantity = $_POST["realspider"];
$costume_quantity = $_POST["costume"];
$spiderman_quantity = $_POST["plush"];
$shipping = $_POST["shipping"];

$shipping_cost = 0;
if($shipping == "7 day"){
  $shipping_cost = 0;
}
elseif ($shipping == "3 day") {
  $shipping_cost = 5;
}
elseif ($shipping == "Express") {
  $shipping_cost = 50;
}
else {
  $shipping_cost = 999;
}

$total =    ($real_quantity * 10)
          + ($costume_quantity * 40)
          + ($spiderman_quantity * 15)
          + $shipping_cost;

echo "<body>";
echo "<h2> Reciept </h2>";
echo "<p>";
echo "<table>";
  echo "<tr>";
    echo "<th> </td>";
    echo "<th> Quantity </th>";
    echo "<th> Item Cost </th>";
    echo "<th> Sub Total </th>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><b>Real Spider</b></td>";
    echo "<td>" . $real_quantity . "</td>";
    echo "<td> $10 </td>";
    echo "<td> $" . ($real_quantity * 10) . "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><b>Spider Costume</b></td>";
    echo "<td>" . $costume_quantity . "<t/d>";
    echo "<td> $40 </td>";
    echo "<td> $" . ($costume_quantity * 40) . "</td>";
  echo "</tr>";

  echo "<tr>";echo "<p>";
    echo "<td><b>Spider-Man Plush</b></td>";
    echo "<td>" . $spiderman_quantity . "</td>";
    echo "<td> $15 </td>";
    echo "<td> $" . ($spiderman_quantity * 15) . "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><b>Shipping</b></td>";
    echo "<td>" . $shipping . "</td>";
    echo "<td> $" . $shipping_cost . "</td>";
    echo "<td> $" . $shipping_cost . "</td>";
  echo "</tr>";

  echo "<tr>";
    echo "<td><b>Total </b></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td><b> $" . $total . "</b></td>";
  echo "</tr>";
echo "</table>";
echo "</p>";

$email = $_POST["email"];
$email_ext = $_POST["email_ext"];
$pass = $_POST["pwd"];

echo "<h2> Account </h2>";

echo "Email: " . $email."@".$email_ext.".com" . "<br>";
echo "Password: " . $pass . "<br>";

echo "<h3>Thank you for shopping at the Web Store!</h3>";
echo "</body>";

?>
