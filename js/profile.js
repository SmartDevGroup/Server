function addZero(num) {
  var str = num.toString();
  return str.length == 1? "0" + str : str;
}

function rend()
{
  $("#chart").collapse('show');
  var date = {};
  date1 = $("#from").val();
  date2 = $("#to").val();
  date.from = date1;
  date.to = date2;
  if(date2 == "dd-mm-yy" || date2 == "")
  {
    date_t = new Date;
    today = addZero(date_t.getDate())+"-"+(date_t.getMonth()+1)+"-"+date_t.getFullYear();
    $("#to").val(today);
  }


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
        text: "Bedroom"
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
        text: "Kitchen"
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
        text: "Bathroom"
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
        text: "Living room"
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
