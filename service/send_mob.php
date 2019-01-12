<?php
$data = json_decode(file_get_contents('php://input'), true);
$get_key = $data["user"];

for ($i=1; $i < 9; $i++) {
    $array["value_$i"] = $data["$i"]["value"];
    $array["room_$i"] = $data["$i"]["room"];
}

for ($i=1; $i < 9; $i++) {
  if($array["room_$i"] == "bedroom")
  {
    if($array["value_$i"] == "Enable")
    {
      $bedroom["socket_$i"] = 1;
    }
    else {
      $bedroom["socket_$i"] = 0;
    }
  }
}
//LOG SAVE
$log = "../log/";
if (!is_dir($log))
{
  mkdir($log);
}
else {
  ob_start();
  $name = date("G-i-s j-n-Y");
  $user_dir = "../log/$get_key/";
  if (!is_dir($user_dir)){
    mkdir($user_dir);
  }
  $dir_save = $user_dir."mob/";
  $count = count(scandir($dir_save));
  $file = "(".$count.") ".$name.".txt";
  if (!is_dir($dir_save))
  {
    mkdir($dir_save);
    var_dump($array);
    $output = ob_get_clean();
    file_put_contents($dir_save.$file, $output);
  }
  else {
    var_dump($array);
    $output = ob_get_clean();
    file_put_contents($dir_save.$file, $output);
  }

  if($count > 20)
  {
    foreach (new DirectoryIterator($dir_save) as $fileInfo) {
      if(!$fileInfo->isDot()) {
          unlink($fileInfo->getPathname());
      }
    }
    exit;
  }
}
//!LOG SAVE

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
$update_bedroom = mysqli_query($link, "UPDATE bedroom SET bedroom_socket_1 = $bedroom[socket_1], date= NOW() WHERE api_key='$get_key'");
?>
