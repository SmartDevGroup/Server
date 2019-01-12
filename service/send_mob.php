<?php
$data = json_decode(file_get_contents('php://input'), true);
$get_key = $data["user"];

for ($i=1; $i < 9; $i++) {
    $array["value_$i"] = $data["$i"]["value"];
    $array["room_$i"] = $data["$i"]["room"];
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
  $file = $count."_".$name.".txt";
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

?>
