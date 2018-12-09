function rend()
{
  var date = {};
  date1 = $("#from").val();
  date2 = $("#to").val();
  date.from = date1;
  date.to = date2;
  $.ajax({
  type: 'POST',
  url: 'chart/chart.php',
  data: date,
  success: function(json){
    var data = JSON.parse(json);
    var data1 = data;

    var chart = new CanvasJS.Chart("chartContainer1", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Bedroom"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart.render();

    var chart2 = new CanvasJS.Chart("chartContainer2", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Kitchen"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        color: "red",
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart2.render();

    var chart3 = new CanvasJS.Chart("chartContainer3", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Bathroom"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        color: "green",
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart3.render();

    var chart4 = new CanvasJS.Chart("chartContainer4", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Living room"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        color: "blue",
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart4.render();
  }
  });
}
/*
function rend()
{
  var dates = {};
  dates.from = $("#from").val();
  dates.to = $("#to").val();

  $.ajax({
  type: 'POST',
  url: 'chart/chart.php',
  data: date,
  success: function(json){
    var data = JSON.parse(json);
    var data1 = data;

    var chart = new CanvasJS.Chart("chartContainer1", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Bedroom"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart.render();

    var chart2 = new CanvasJS.Chart("chartContainer2", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Kitchen"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        color: "red",
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart2.render();

    var chart3 = new CanvasJS.Chart("chartContainer3", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Bathroom"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        color: "green",
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart3.render();

    var chart4 = new CanvasJS.Chart("chartContainer4", {
      animationEnabled: true,
      title:{
        text: "Daily Temperature in Living room"
      },
      axisY: {
        title: "Average Temp",
        suffix: "C"
      },
      data: [{
        type: "area",
        markerSize: 5,
        color: "blue",
        xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        yValueFormatString: "#,##0.## C",
        xValueType: "dateTime",
        dataPoints: data
      }]
    });
    chart4.render();
  }
  });
}
*/
