<?php
$get_key = $_GET['api'];
$link=mysqli_connect("localhost", "root", "", "server");

$res = mysqli_query($link, "SELECT * FROM temp WHERE api_key = $get_key AND date < NOW()");
$a = 1;
$b = 0;
while($row = mysqli_fetch_array($res))
{
  $j = 6;
  for ($i=1; $i < 7; $i++)
  {
    if($row["b_sock_$i"] == "" || $row["b_sock_$i"] == 0){$j--;}
  }
  $average = ($row['b_sock_1'] + $row['b_sock_2'] + $row['b_sock_3'] + $row['b_sock_4'] + $row['b_sock_5'] + $row['b_sock_6'])/$j;
  $temp["b_temp_$a"] = $average;
  $temp["date_$a"] = $row['date'];
  $a++;
  $b++;
}
//var_dump($temp);
$dataPoints = array();
for ($i=1; $i <= $b; $i++) {
  array_push($dataPoints, array("x" => strtotime($temp["date_$i"]) * 1000, "y" => $temp["b_temp_$i"]));
}
//var_dump($dataPoints);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Daily Temperature"
	},
	axisY: {
		title: "Average Temp",
		suffix: "C"
	},
	data: [{
		type: "spline",
		markerSize: 5,
		xValueFormatString: "YYYY-MM-DD hh:mm:ss",
		yValueFormatString: "#,##0.## C",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
