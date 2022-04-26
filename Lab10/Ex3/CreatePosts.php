<?php

  $mysqli = new mysqli("mysql.eecs.ku.edu", "t905k768", "aixoo9La", "t905k768");

  /* check connection */
  if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  // get values
  $user = $_POST["user"];
  $post = $_POST["post"];

  // do not allow empty inputs
  if(empty($user)){
    echo "<p>ERROR: Username is empty.<br></p>";
    exit();
  }
  else if(empty($post)){
    echo "<p>ERROR: Post is empty.<br></p>";
    exit();
  }

  // output user_id
  echo "<p>Username: " . $user . "<br></p>";

  // build queries
  $query_checkUser = "SELECT * FROM Users;";
  $query_post = "INSERT INTO Posts (content, author_id) values ('" . $post . "', '" . $user . "');";

  // get list of users
  $result_users = $mysqli->query($query_checkUser);

  // check for valid user
  $validUser = FALSE;
  if ($result_users->num_rows > 0) {
    // check each row and see if user matches value
    while($row = $result_users->fetch_assoc()) {
      if($row["user_id"] === $user){
        $validUser = TRUE;
        break;
      }
    }
  }

  // make post if user is valid
  echo "<p>";
  if($validUser === TRUE){
    if ($mysqli->query($query_post) === TRUE) {
      echo "You posted: " . $post . "<br>";
    }
    else {
      echo "ERROR: Failed to create post.<br>";
    }
  }
  else{
    echo "ERROR: Cannot create post. User does not exist.<br>";
  }
  echo "<p>";


  /* close connection */
  $mysqli->close();

?>
