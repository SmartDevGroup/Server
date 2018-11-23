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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/sidebar.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


  </head>
  <body>


      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="wrapper">

              <nav id="sidebar">
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
                              <a href="hall.php"><i class="fas fa-door-open"></i> Living room</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a class="text-center" href="#"><i class="fas fa-user"></i> Profile</a>
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

                      <button type="button" id="sidebarCollapse" class="navbar-btn">
                          <span></span>
                          <span></span>
                          <span></span>
                      </button>

                      <div class="col text-center">
                        <h1 class="bg-white text-info"id="date_time"> </h1>
                        <h2 class="text-primary">Profile</h2>
                      </div>

                  </div>
                </nav>
                <div class="row">
                  <div class="col">

                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });

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
    <script type="text/javascript">window.onload = date_time('date_time');</script>
  </body>
</html>
