<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t905k768", "aixoo9La", "t905k768");

  /* check connection */
  if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  echo "<h2>Deleted Posts</h2>";

  // setup database query
  $query = "SELECT * FROM Posts;";
  $result = $mysqli->query($query);

  // loop through all users and check if the it is checked
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $checkbox = $_POST[$row["post_id"]];
      // delete if checked
      if(isset($checkbox)){
        echo "Post ID: " . $row["post_id"] .
          ". Content: " . $row["content"] .
          ". Author ID: " . $row["author_id"] . ". <br>";
        $query_del = "DELETE FROM Posts WHERE post_id='" . $row["post_id"] . "';";
        $mysqli->query($query_del);
      }
    }
  }

  /* close connection */
  $mysqli->close();
?>
