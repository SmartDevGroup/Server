<?php
session_write_close();
ignore_user_abort(false);
set_time_limit(40);


$api_key = $_GET['api'];

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

while (true) {
  $select_data_bedroom = mysqli_query($link,"SELECT * FROM bedroom WHERE api_key = '$api_key'");
  $select_data_b = mysqli_fetch_assoc($select_data_bedroom);
  $select_user_data = mysqli_query($link,"SELECT * FROM users WHERE api_key = '$api_key'");
  $select_user = mysqli_fetch_assoc($select_user_data);
  //$result = mysqli_query($link, "SELECT * FROM bedroom INNER JOIN users ud ON ud.output < bedroom.output_b WHERE ud.api_key = '$api_key'");
  //$result_k = mysqli_query($link, "SELECT * FROM kitchen INNER JOIN users ud ON ud.output < kitchen.output_k WHERE ud.api_key = '$api_key'");

  if ($select_data_b['output_b'] > $select_user['output']) {
    echo "string";

    $output = [];
    $lastId = 0;

    echo $lastId = $select_data_b['output_b'];

    mysqli_query($link, "UPDATE users SET output = $lastId WHERE api_key = '$api_key'");
    //mysqli_query($link, "UPDATE kitchen SET output_k = $lastId WHERE api_key = '$api_key'");
    exit;
  }
  /*
  //kitchen
  if ($result_k && $result_k -> num_rows) {
    echo "string";

    $output = [];
    $lastId = 0;

    foreach ($result_k as $row) {
      $output[] = [
        'content_k' => $row['kitchen_socket_1'],
        'content_k_2' => $row['kitchen_socket_2']];

        $lastId = $row['output_k'];
    }

    mysqli_query($link, "UPDATE users SET output = $lastId WHERE api_key = '$api_key'");
    mysqli_query($link, "UPDATE bedroom SET output_b = $lastId WHERE api_key = '$api_key'");

    echo json_encode([
      'status' => true,
      'data' => $output
    ]);

    exit;
  }
  //
  */
  sleep(2);
}
 ?>
