<?php
session_start();
$get_key = $_SESSION['api'];
if($get_key == ""){header("Location: http://smartdevgroup.hopto.org/");}
  include 'status/home_sum.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sweet Home</title>

    <link rel="shortcut icon" type="image/x-icon" href="http://individual.icons-land.com/IconsPreview/GISGPSMAP/PNG/Places/256x256/House1.png" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/bg.css">
    <link rel="stylesheet" href="css/slider.css">
    </head>

  <body>
        <div class="box" id="cat">
        <div class="cat">
          <div class="cat__body"></div>
          <div class="cat__body"></div>
          <div class="cat__tail"></div>
          <div class="cat__head"></div>
        </div>
      </div>
      <div class="container-fluid" style="display:none;" id="myDiv">
        <div class="row">
          <div class="col-12 bg-l">
            <div class="wrapper semi">

              <nav id="sidebar" class="active">
                <div class="sidebar-header">
                  <h3 class=" text-center"> Smart Home </h3>
                </div>
                <ul class="list-unstyled components">
                  <p class="text-center">Smart Dev Group</p>
                  <li>
                    <a class="text-center" href="panel.php"><i class="fas fa-bars"></i> Menu</a>
                  </li>
                  <li class="active">
                      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-center"><i class="fas fa-home"></i> Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                          <li>
                              <a href="bedroom.php"><i class="fas fa-bed"></i> Bedroom</a>
                          </li>
                          <li>
                              <a href="kitchen.php"><i class="fas fa-utensils"></i>  Kitchen</a>
                          </li>
                          <li>
                              <a href="bathroom.php"><i class="fas fa-shower"></i> Bathroom</a>
                          </li>
                          <li>
                              <a href="#"><i class="fas fa-door-open"></i> Living room</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                    <a class="text-center" href="settings.php"><i class="fas fa-cog"></i> Settings</a>
                  </li>
                </ul>
                <ul class="list-unstyled CTAs">
                    <li>
                        <a href="#" class="download">Download Mobile App</a>
                    </li>
                    <li>
                        <a href="#" class="article">Download PC App</a>
                    </li>
                </ul>
              </nav>

              <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">

                      <button type="button" id="sidebarCollapse" class="navbar-btn active">
                          <span></span>
                          <span></span>
                          <span></span>
                      </button>


                      <div class="col text-center">
                        <h1 class=""id="date_time"> </h1>
                        <h2 class=""><img src='images/living.png'> Living room</h2>
                      </div>
                  </div>
                </nav>
                <div class="row">
                  <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                    <table class="table table-light text-center">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="fas fa-thermometer-empty"></i>  C<sup>o</sup></th>
                            <th scope="col"><i class="fas fa-plug"></i> Status</th>
                            <th scope="col" class="w-25"> Name</th>
                            <th scope="col"><i class="fas fa-power-off"></i> ON/OFF</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          for ($i=1; $i <= $Sum ; $i++) {
                            echo "<tr>
                              <th scope='row'>$i</th>
                              <td><h3 class='text-primary' id='h_temp_$i'></h3></td>
                              <td><div class='semitext' id='h_stan_$i'></div></td>
                              <td><h4 id='name_home_$i'></h4></td>
                              <td><div class='btn btn-block semibutt'><img src='images/socket.png'> <input type='checkbox' data-width='60%' class='text-center' data-toggle='toggle' data-on='ON' data-off='Off ' data-onstyle='success' data-offstyle='danger' name='status' id='home_socket_$i' value='0'></div></td>
                            </tr>";
                          } ?>
                          <th scope='row'><i class="fas fa-lightbulb"></i></th>
                          <td><h3 class='text-primary'>-</h3></td>
                          <td><div class='semitext' id='h_stan_l'></div></td>
                          <td></td>
                          <td><div class="btn btn-block semibutt"><img src='images/light.png'> <input type='checkbox' data-width='60%' class='text-center' data-toggle='toggle' data-on='ON' data-off='Off ' data-onstyle='success' data-offstyle='danger' name='status' id='home_light' value='0'></div></td>
                        </tbody>
                      </table>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <div class="card">
                      <div class="card-body ">
                        <form>
                          <button type="button" class="btn btn-outline-primary" onclick="send_all_on()" style="width: 40%;">All On</button>
                          <button type="button" class="btn btn-outline-danger" onclick="send_all_off()" style="width: 40%;">All OFF</button>
                        </form>
                        <br>
                        <button class="btn btn-outline-primary text-center" type="button" style="width: 80%;"  data-toggle="collapse" data-target="#chart" aria-expanded="false" aria-controls="chart" onclick="toBottom()">Show chart</button>
                        <br>
                        <br>
                        <div class="card text-center">
                          <h5 class="card-title">Light</h5>
                          <div class="card-body">
                          <div class="slidecontainer"><input type="range" min="1" max="100" class="slider" id="dimer" style="width: 80%;"></div>
                          <p class="card-text" id="value_scroll"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="collapse" id="chart">
                      <div class="card text-dark bg-light">
                        <div class="card-body">
                          <h5 class="card-title text-center ">Real Time Temperature (C°)</h5>
                          <div id="chartContainer" style=" height: 480px; weight:100%;"></div>
                          <button class="btn btn-outline-primary" type="button" style="width: 20%;" onclick="close_colapse()">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

    <script type="text/javascript">
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
    </script>
    <script type="text/javascript">
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

    function data()
    {
      $.ajax({
      url: 'chart/chart_home.php',
      cache: false,
      success: function(json_temp){
        var data = JSON.parse(json_temp);
        sum = data.sum;
        if(sum == 1){yValue1 = parseInt(data.h_s_1); yValue2 = "Disabled";  yValue3= "Disabled"; yValue4 = "Disabled"; yValue5 = "Disabled"; yValue6 = "Disabled";}
        if(sum == 2){yValue1 = parseInt(data.h_s_1); yValue2 = parseInt(data.h_s_2); yValue3= "Disabled"; yValue4 = "Disabled"; yValue5 = "Disabled"; yValue6 = "Disabled";}
        if(sum == 3){yValue1 = parseInt(data.h_s_1); yValue2 = parseInt(data.h_s_2);  yValue3= parseInt(data.h_s_3); yValue4 = "Disabled"; yValue5 = "Disabled"; yValue6 = "Disabled";}
        if(sum == 4){yValue1 = parseInt(data.h_s_1); yValue2 = parseInt(data.h_s_2);  yValue3= parseInt(data.h_s_3); yValue4 = parseInt(data.h_s_4); yValue5 = "Disabled"; yValue6 = "Disabled";}
        if(sum == 5){yValue1 = parseInt(data.h_s_1); yValue2 = parseInt(data.h_s_2);  yValue3= parseInt(data.h_s_3); yValue4 = parseInt(data.h_s_4); yValue5 = parseInt(data.h_s_5); yValue6 = "Disabled";}
        if(sum == 6){yValue1 = parseInt(data.h_s_1); yValue2 = parseInt(data.h_s_2);  yValue3= parseInt(data.h_s_3); yValue4 = parseInt(data.h_s_4); yValue5 = parseInt(data.h_s_5); yValue6 = parseInt(data.h_s_6)}

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

    var updateInterval = 2000;
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
    </script>
    <script src="js/home.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>
