<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t905k768", "aixoo9La", "t905k768");

  /* check connection */
  if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  // title
  echo "<h2> Users </h2>";

  // get list of users
  $query = "SELECT * FROM Users;";
  $result_users = $mysqli->query($query);

  // output a table
  if ($result_users->num_rows > 0) {
    echo "<table> <tr>  <th> user_id </th> </tr>";
    // check each row and see if user matches value
    while($row = $result_users->fetch_assoc()) {
      echo "<tr><td> " . $row["user_id"] . "</td></tr>";
    }
    echo "</table>";
  }
  else {
    echo "ERROR: There are no users.";
  }

  /* close connection */
  $mysqli->close();
?>
