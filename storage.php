<?php
  if (isset($_POST['save_multiple'])) {
    $user_id = '1';
    $artist = $_POST['artist'];

    foreach ($artist as $val) {
      echo $val;
      $sql = "INSERT INTO `artist` (`artist_name`, `user_id`) VALUES ('$val', '1')";

    }
  }

 ?>
