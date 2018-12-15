<?php
$data = json_decode(file_get_contents('php://input'), true);
$get_key = $data["user"];

for ($i=1; $i < 9; $i++) {
    $array["value_$i"] = $data["$i"]["value"];
    $array["room_$i"] = $data["$i"]["room"];
}
ob_start();
var_dump($array);
$output = ob_get_clean();
file_put_contents('/OSPanel/domains/log/log_mob.txt', $get_key." ".$output);

?>
