<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "t905k768", "aixoo9La", "t905k768");

  /* check connection */
  if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $user = $_POST["user"];
  echo "<p>Username: " . $user . "<br></p>";

  if(empty($user)){
    echo "<p>Status: Failed to create new user. You must enter a username! <br></p>";
    exit();
  }

  $query = "INSERT INTO Users (user_id) VALUES ('" . $user . "');";


  echo "<p>Status: ";
    if ($mysqli->query($query) === TRUE) {
      echo "New user created successfully.";
    }
    else {
      echo "Failed to create new user. Username is taken!";
    }
  echo "<p>";

  /* close connection */
  $mysqli->close();

?>
