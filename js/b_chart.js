$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $(this).toggleClass('active');
    });
    myFunction();
});

var myVar;

function myFunction() {
    setTimeout(function() { showPage(); }, 2000);
}

function showPage() {
  document.getElementById("cat").style.display = 'none';
  document.getElementById("myDiv").style.display = 'block';
}

function date_time(id)
{
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
}

window.onload = function () {
date_time('date_time');
data();
var dataPoints1 = [];
var dataPoints2 = [];
var dataPoints3 = [];
var dataPoints4 = [];
var dataPoints5 = [];
var dataPoints6 = [];
var yValue1, yValue2, yValue3, yValue4, yValue5, yValue6;
var sum = 0;
function data()
{
$.ajax({
url: 'chart/chart_bedroom.php',
cache: false,
success: function(json_temp){
var data = JSON.parse(json_temp);
sum = data.sum;
if(sum == 1){
  yValue1 = parseInt(data.b_s_1);
  if(yValue1 == 0){yValue1 = "No Connection";}
  yValue2 = "Disabled";
  yValue3= "Disabled";
  yValue4 = "Disabled";
  yValue5 = "Disabled";
  yValue6 = "Disabled";
}
if(sum == 2){
  yValue1 = parseInt(data.b_s_1);
  if(yValue1 == 0){yValue1 = "No Connection";}
  yValue2 = parseInt(data.b_s_2);
  if(yValue2 == 0){yValue2 = "No Connection";}
  yValue3= "Disabled";
  yValue4 = "Disabled";
  yValue5 = "Disabled";
  yValue6 = "Disabled";
}
if(sum == 3){
  yValue1 = parseInt(data.b_s_1);
  if(yValue1 == 0){yValue1 = "No Connection";}
  yValue2 = parseInt(data.b_s_2);
  if(yValue2 == 0){yValue2 = "No Connection";}
  yValue3= parseInt(data.b_s_3);
  if(yValue3 == 0){yValue3 = "No Connection";}
  yValue4 = "Disabled";
  yValue5 = "Disabled";
  yValue6 = "Disabled";
}
if(sum == 4){
  yValue1 = parseInt(data.b_s_1);
  if(yValue1 == 0){yValue1 = "No Connection";}
  yValue2 = parseInt(data.b_s_2);
  if(yValue2 == 0){yValue2 = "No Connection";}
  yValue3= parseInt(data.b_s_3);
  if(yValue3 == 0){yValue3 = "No Connection";}
  yValue4 = parseInt(data.b_s_4);
  if(yValue4 == 0){yValue4 = "No Connection";}
  yValue5 = "Disabled";
  yValue6 = "Disabled";
}
if(sum == 5){
  yValue1 = parseInt(data.b_s_1);
  if(yValue1 == 0){yValue1 = "No Connection";}
  yValue2 = parseInt(data.b_s_2);
  if(yValue2 == 0){yValue2 = "No Connection";}
  yValue3= parseInt(data.b_s_3);
  if(yValue3 == 0){yValue3 = "No Connection";}
  yValue4 = parseInt(data.b_s_4);
  if(yValue4 == 0){yValue4 = "No Connection";}
  yValue5 = parseInt(data.b_s_5);
  if(yValue5 == 0){yValue5 = "No Connection";}
  yValue6 = "Disabled";
}
if(sum == 6){
  yValue1 = parseInt(data.b_s_1);
  if(yValue1 == 0){yValue1 = "No Connection";}
  yValue2 = parseInt(data.b_s_2);
  if(yValue2 == 0){yValue2 = "No Connection";}
  yValue3= parseInt(data.b_s_3);
  if(yValue3 == 0){yValue3 = "No Connection";}
  yValue4 = parseInt(data.b_s_4);
  if(yValue4 == 0){yValue4 = "No Connection";}
  yValue5 = parseInt(data.b_s_5);
  if(yValue5 == 0){yValue5 = "No Connection";}
  yValue6 = parseInt(data.b_s_6)
  if(yValue6 == 0){yValue6 = "No Connection";}
}

}
});
}

var chart = new CanvasJS.Chart("chartContainer", {
zoomEnabled: true,
axisY:{
suffix: " C°",
includeZero: true
},
toolTip: {
shared: true
},
data: [{
type: "line",
xValueType: "dateTime",
xValueFormatString: "hh:mm:ss TT",
showInLegend: true,
name: "Socket #1",
dataPoints: dataPoints1
},
{
  type: "line",
  xValueType: "dateTime",
  xValueFormatString: "hh:mm:ss TT",
  showInLegend: true,
  name: "Socket #2" ,
  dataPoints: dataPoints2
},
{
type: "line",
xValueType: "dateTime",
xValueFormatString: "hh:mm:ss TT",
showInLegend: true,
name: "Socket #3" ,
dataPoints: dataPoints3
},
{
type: "line",
xValueType: "dateTime",
xValueFormatString: "hh:mm:ss TT",
showInLegend: true,
name: "Socket #4" ,
dataPoints: dataPoints4
},
{
type: "line",
xValueType: "dateTime",
xValueFormatString: "hh:mm:ss TT",
showInLegend: true,
name: "Socket #5" ,
dataPoints: dataPoints5
},
{
type: "line",
xValueType: "dateTime",
xValueFormatString: "hh:mm:ss TT",
showInLegend: true,
name: "Socket #6" ,
dataPoints: dataPoints6
}]
});

function toggleDataSeries(e) {
if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
e.dataSeries.visible = false;
}
else {
e.dataSeries.visible = true;
}
chart.render();
}

var updateInterval = 4000;
// initial value

date = new Date;
year = date.getFullYear();
month = date.getMonth();
months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
d = date.getDate();
day = date.getDay();
days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
h = date.getHours();
if(h<10)
{
    h = "0"+h;
}
m = date.getMinutes();
if(m<10)
{
    m = "0"+m;
}
s = date.getSeconds();
if(s<10)
{
    s = "0"+s;
}

function updateChart() {
for (var i = 0; i < 1; i++) {
date.setTime(date.getTime()+ updateInterval);
// adding random value and rounding it to two digits.

// pushing the new values
dataPoints1.push({
x: date.getTime(),
y: yValue1
});
dataPoints2.push({
x: date.getTime(),
y: yValue2
});
dataPoints3.push({
x: date.getTime(),
y: yValue3
});
dataPoints4.push({
x: date.getTime(),
y: yValue4
});
dataPoints5.push({
x: date.getTime(),
y: yValue5
});
dataPoints6.push({
x: date.getTime(),
y: yValue6
});
}
chart.render();
}
// generates first set of dataPoints
updateChart(1000);
setInterval(function(){updateChart(), data()}, updateInterval);

}
