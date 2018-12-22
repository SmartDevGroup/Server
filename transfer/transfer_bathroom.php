<?php
session_start();

$get_key = $_SESSION['api'];

for($i = 1; $i < 7; $i++)
{
  $bathroom["bathroom_socket_$i"] = $_POST["bathroom_socket_$i"];
}
$bathroom["bathroom_light"] = $_POST['bathroom_light'];
$bathroom["dimer"] = $_POST['dimer'];

for ($i=1; $i < 7; $i++) {
  if($bathroom["bathroom_socket_$i"] == "")
  {
    $bathroom["bathroom_socket_$i"] = 0;
  }
}

if($bathroom["bathroom_light"] == "")
{
  $bathroom["bathroom_light"] = 0;
}

$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");

if($bathroom["dimer"] == "")
{
  $update_bathroom = mysqli_query($link, "UPDATE bathroom SET bathroom_socket_1=$bathroom[bathroom_socket_1], bathroom_socket_2=$bathroom[bathroom_socket_2], bathroom_socket_3=$bathroom[bathroom_socket_3], bathroom_socket_4=$bathroom[bathroom_socket_4], bathroom_socket_5=$bathroom[bathroom_socket_5], bathroom_socket_6=$bathroom[bathroom_socket_6], bathroom_light=$bathroom[bathroom_light], output_ba = output_ba + 1, l_ba = l_ba + 1,  date= NOW() WHERE api_key='$get_key'");
}
else {
  $update_bathroom = mysqli_query($link, "UPDATE bathroom SET bathroom_socket_1=$bathroom[bathroom_socket_1], bathroom_socket_2=$bathroom[bathroom_socket_2], bathroom_socket_3=$bathroom[bathroom_socket_3], bathroom_socket_4=$bathroom[bathroom_socket_4], bathroom_socket_5=$bathroom[bathroom_socket_5], bathroom_socket_6=$bathroom[bathroom_socket_6], bathroom_light=$bathroom[bathroom_light], dimer = $bathroom[dimer],
    output_ba = output_ba + 1, l_ba = l_ba + 1, date= NOW() WHERE api_key='$get_key'");
}
?>
