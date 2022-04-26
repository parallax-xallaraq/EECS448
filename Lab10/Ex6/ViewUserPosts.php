<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t905k768", "aixoo9La", "t905k768");

  /* check connection */
  if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  // get user
  $user = $_POST["user"];
  echo "<h2>Post by " . $user . "</h2>";

  $query = "SELECT * FROM Posts WHERE author_id='" . $user . "';";
  $result = $mysqli->query($query);

  // generate table 
  if ($result->num_rows > 0) {
    echo "<table> <tr>
            <th> post_id </th>
            <th> content </th>
          </tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
        echo "<td> " . $row["post_id"]  . "</td>";
        echo "<td> " . $row["content"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
  else {
    echo "This user has no posts.";
  }

  /* close connection */
  $mysqli->close();
?>
