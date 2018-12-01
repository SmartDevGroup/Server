<?php
session_start();
$get_key = $_SESSION['api'];

if($get_key == ""){header("Location: http://smartdevgroup.hopto.org/");}

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
          <div class="col-12 bg-prof">
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
                              <a href="#"><i class="fas fa-bed"></i> Bedroom</a>
                          </li>
                          <li>
                              <a href="kitchen.php"><i class="fas fa-utensils"></i>  Kitchen</a>
                          </li>
                          <li>
                              <a href="bathroom.php"><i class="fas fa-shower"></i> Bathroom</a>
                          </li>
                          <li>
                              <a href="hall.php"><i class="fas fa-door-open"></i> Living room</a>
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
                <nav class="navbar navbar-transparent">
                  <div class="container-fluid ">

                      <button type="button" id="sidebarCollapse" class="navbar-btn active">
                          <span></span>
                          <span></span>
                          <span></span>
                      </button>

                      <div class="col text-center">
                        <h1 class=" "id="date_time"> </h1>
                        <h2 class=""><i class="fas fa-chart-line"></i> Statistics</h2>
                      </div>
                  </div>
                </nav>
                <div class="row ">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <button class="btn btn-outline-primary text-center" type="button" style="width: 80%;"  data-toggle="collapse" data-target="#chart" aria-expanded="false" aria-controls="chart" onclick="rend();">Show chart</button>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <br>
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

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
            myFunction();
            //alert(window.screen.availHeight);
            //alert(window.screen.availWidth);
            date_time('date_time');
        });

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
    <script>
    function rend()
    {
      $.ajax({
      url: 'chart/chart.php',
      cache: false,
      success: function(json){
        var data = JSON.parse(json);
        var chart = new CanvasJS.Chart("chartContainer", {
          zoomEnabled: true,
        	animationEnabled: true,
        	title:{
        		text: "Daily Temperature in Bedroom"
        	},
        	axisY: {
        		title: "Average Temp",
        		suffix: "C"
        	},
        	data: [{
        		type: "spline",
        		markerSize: 5,
        		xValueFormatString: "YYYY-MM-DD hh:mm:ss TT",
        		yValueFormatString: "#,##0.## C",
        		xValueType: "dateTime",
        		dataPoints: data
        	}]
        });
        chart.render();
      }
      });
    }
    </script>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>
