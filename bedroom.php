<?php
session_start();
$get_key = $_SESSION['api'];
$id = $_SESSION['user_id'];
$link=mysqli_connect("localhost", "root", "Rfdey123qw!", "server");
if($id == 1)
{
  mysqli_query($link, "UPDATE bedroom SET l_b_1 = l_b_1 + 1 WHERE api_key = '$get_key'");
}
elseif ($id == 2) {
  mysqli_query($link, "UPDATE bedroom SET l_b_2 = l_b_2 + 1 WHERE api_key = '$get_key'");
}
elseif ($id == 3) {
  mysqli_query($link, "UPDATE bedroom SET l_b_3 = l_b_3 + 1 WHERE api_key = '$get_key'");
}

//mysqli_query($link, "UPDATE bedroom SET l_b = l_b + 1 WHERE api_key = '$get_key'");
if($get_key == ""){header("Location: http://smartdevgroup.hopto.org/");}
  include 'status/bedroom_sum.php';
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
          <div class="col-12 bg">
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
                    <a class="text-center" href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
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
                        <h2 class=""><img src='images/bed.png'> Bedroom</h2>
                      </div>
                  </div>
                </nav>
                <div class="row ">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10 col-md-12 col-sm-12 col-12 text-center ">
                    <table class="table table-light text-center table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col"><i class="fas fa-thermometer-empty"></i>  C<sup>o</sup></th>
                            <th scope="col"><i class="fas fa-wifi"></i> Connection</th>
                            <th scope="col"><i class="fas fa-plug"></i> Status</th>
                            <th scope="col"><i class="fas fa-sticky-note"></i> Name</th>
                            <th scope="col"><i class="fas fa-power-off"></i> ON/OFF</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          for ($i=1; $i <= $Sum ; $i++) {
                            echo "<tr>
                              <th scope='row'>$i</th>
                              <td><h3 class='text-primary semitext' id='b_temp_$i'></h3></td>
                              <td><div class='semitext' id='b_conn_$i'></div></td>
                              <td><div class='semitext' id='b_stan_$i'></div></td>
                              <td><h4 id='name_bedroom_$i'></h4></td>
                              <td><div class='btn btn-block semibutt'><img src='images/socket.png'> <input type='checkbox' data-width='90%' class='text-center' data-toggle='toggle' data-on='ON' data-off='Off ' data-onstyle='success' data-offstyle='danger' name='status' id='bedroom_socket_$i' value='0'></div></td>
                            </tr>";
                          } ?>
                        </tbody>
                      </table>
                  </div>
                  <div class="col-lg-1"></div>
                  <div class="col-lg-1"></div>
                  <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                    <div class="card">
                      <div class="card-body ">
                        <form>
                          <button type="button" class="btn btn-outline-primary" onclick="send_all_on()" style="width: 40%;">All On</button>
                          <button type="button" class="btn btn-outline-danger" onclick="send_all_off()" style="width: 40%;">All OFF</button>
                        </form>
                        <br>
                        <button class="btn btn-outline-primary text-center" type="button" style="width: 80%;"  data-toggle="collapse" data-target="#chart" aria-expanded="false" aria-controls="chart" onclick="toBottom()">Show chart</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 col-sm-12 text-center">
                    <div class="card text-center">
                      <h5 class="card-title text-center"><img src='images/light.png'> Light</h5>
                      <div class="card-body text-center">
                      <h5 class="card-title"><div class="semitext" id='b_stan_l'></div></h5>
                      <div class="btn btn-block semibutt text-center"><input type='checkbox' data-width='60%' class='text-center' data-toggle='toggle' data-on='ON' data-off='Off ' data-onstyle='success' data-offstyle='danger' name='status' id='bedroom_light' value='0'>
                      </div>
                      <br>
                      <div class="slidecontainer"><input type="range" min="1" max="100" class="slider" id="dimer" style="width: 80%;"></div>
                      <p class="card-text" id="value_scroll"></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1"></div>
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
      <div class="modal fade" id="modal_alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal_title"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="modal_text"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="ignore_socket()">Close and ignore</button>
              <button type="button" class="btn btn-success" data-dismiss="modal"  onclick="modal_off()">Turn OFF</button>
            </div>
          </div>
        </div>
      </div>
    <script src="js/bedroom.js"></script>
    <script src="js/b_chart.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </body>
</html>
