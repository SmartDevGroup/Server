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


    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/bg.css">
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
          <div class="col-12 bg-s">

            <div class="wrapper">

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
                              <a href="hall.php"><i class="fas fa-door-open"></i> Living room</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a class="text-center" href="profile.php"><i class="fas fa-user"></i> Profile</a>
                      <a class="text-center" href="#"><i class="fas fa-cog"></i> Settings</a>
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
                  <div class="container-fluid">

                      <button type="button" id="sidebarCollapse" class="navbar-btn active">
                          <span></span>
                          <span></span>
                          <span></span>
                      </button>

                      <div class="col text-center">
                        <h1 class="" id="date_time"> </h1>
                        <h2 class="text-light nosemi">Settings</h2>
                      </div>

                  </div>
                </nav>
                <div class="row">
                  <div class="col-12">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="bedroom-tab" data-toggle="tab" href="#bedroom" role="tab" aria-controls="home" aria-selected="true">Beedroom</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="kitchen-tab" data-toggle="tab" href="#kitchen" role="tab" aria-controls="profile" aria-selected="false">Kitchen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="bathroom-tab" data-toggle="tab" href="#bathroom" role="tab" aria-controls="contact" aria-selected="false">Bathroom</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="livingroom-tab" data-toggle="tab" href="#livingroom" role="tab" aria-controls="contact" aria-selected="false">Livingroom</a>
                      </li>
                    </ul>
                    <div class="tab-content  semi" id="myTabContent">
                      <div class="tab-pane fade show active semitextset" id="bedroom" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">Bedroom Socket</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="bedroom_socket" text-center></label>
                                        <select class="form-control text-center" id="bedroom_socket">
                                          <option value="" disabled selected>Choose number of socket</option>
                                          <option value="1">One Socket</option>
                                          <option value="2">Two Sockets</option>
                                          <option value="3">Three  Sockets</option>
                                          <option value="4">Four Sockets</option>
                                          <option value="5">Five  Sockets</option>
                                          <option value="6">Six  Sockets</option>
                                        </select>
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                            </table>
                            <button type="button" id="bedroom_btn" class="btn btn-lg btn-success btn-block" onclick="bedroom_save()">Save data</button>
                            <br>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal">Add Control Device</button>
                            <br>
                            <form class="" action="bedroom.php">
                              <button type="submit" class="btn btn-lg btn-primary btn-block ">Go To Bedroom</button>
                            </form>
                          </div>

                          <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col" class="w-25">ID</th>
                                  <th scope="col" class="w-25">Name</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php for ($i=1; $i <= 6 ; $i++) {
                                  echo "<tr>
                                    <th scope='row'>$i</th>
                                    <td><input type='text' class='form-control text-center ' id='id_b_$i' placeholder='ID'></td>
                                    <td><input type='text' class='form-control text-center ' id='name_b_$i' placeholder='Name'></td>
                                    <td><div class='' id='bed_stat_$i'> </div></td>
                                  </tr>";
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>

                      </div>
                      <div class="tab-pane fade" id="kitchen" role="tabpanel" aria-labelledby="kitchen">
                        <div class="row">
                          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">Kitchen Socket</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="bedroom_socket" text-center></label>
                                        <select class="form-control text-center" id="kitchen_socket">
                                          <option value="" disabled selected>Choose number of socket</option>
                                          <option value="1">One Socket</option>
                                          <option value="2">Two Sockets</option>
                                          <option value="3">Three  Sockets</option>
                                          <option value="4">Four Sockets</option>
                                          <option value="5">Five  Sockets</option>
                                          <option value="6">Six  Sockets</option>
                                        </select>
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                            </table>
                            <button type="button" id="kitchen_btn" class="btn btn-lg btn-success btn-block" onclick="kitchen_save()">Save data</button>
                            <br>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal">Add Control Device</button>
                            <br>
                            <form class="" action="kitchen.php">
                              <button type="submit" class="btn btn-lg btn-primary btn-block">Go To Kitchen</button>
                            </form>
                          </div>

                          <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col" class="w-25">ID</th>
                                  <th scope="col" class="w-25">Name</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php for ($i=1; $i <= 6 ; $i++) {
                                  echo "<tr>
                                    <th scope='row'>$i</th>
                                    <td><input type='text' class='form-control text-center' id='id_k_$i' placeholder='ID'></td>
                                    <td><input type='text' class='form-control text-center ' id='name_k_$i' placeholder='Name'></td>
                                    <td><div class='' id='kit_stat_$i'> </div></td>
                                  </tr>";
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="bathroom" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                          <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">Bathroom Socket</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="bedroom_socket" text-center></label>
                                        <select class="form-control text-center" id="bathroom_socket">
                                          <option value="" disabled selected>Choose number of socket</option>
                                          <option value="1">One Socket</option>
                                          <option value="2">Two Sockets</option>
                                          <option value="3">Three  Sockets</option>
                                          <option value="4">Four Sockets</option>
                                          <option value="5">Five  Sockets</option>
                                          <option value="6">Six  Sockets</option>
                                        </select>
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                            </table>
                            <button type="button" id="bathroom_btn" class="btn btn-lg btn-success btn-block" onclick="bathroom_save()">Save data</button>
                            <br>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal">Add Control Device</button>
                            <br>
                            <form class="" action="bathroom.php">
                              <button type="submit" class="btn btn-lg btn-primary btn-block ">Go To Bathroom</button>
                            </form>
                          </div>

                          <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col" class="w-25">ID</th>
                                  <th scope="col" class="w-25">Name</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php for ($i=1; $i <= 6 ; $i++) {
                                  echo "<tr>
                                    <th scope='row'>$i</th>
                                    <td><input type='text' class='form-control text-center ' id='id_ba_$i' placeholder='ID'></td>
                                    <td><input type='text' class='form-control text-center ' id='name_ba_$i' placeholder='Name'></td>
                                    <td><div class='' id='ba_stat_$i'> </div></td>
                                  </tr>";
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="livingroom" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                          <div class="col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">Bathroom Socket</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="lving_socket" text-center></label>
                                        <select class="form-control text-center" id="living_socket">
                                          <option value="" disabled selected>Choose number of socket</option>
                                          <option value="1">One Socket</option>
                                          <option value="2">Two Sockets</option>
                                          <option value="3">Three  Sockets</option>
                                          <option value="4">Four Sockets</option>
                                          <option value="5">Five  Sockets</option>
                                          <option value="6">Six  Sockets</option>
                                        </select>
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                            </table>
                            <button type="button" id="living_btn" class="btn btn-lg btn-success btn-block" onclick="living_save()">Save data</button>
                            <br>
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal">Add Control Device</button>
                            <br>
                            <form class="" action="hall.php">
                              <button type="submit" class="btn btn-lg btn-primary btn-block ">Go To livingroom</button>
                            </form>
                          </div>

                          <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <br>
                            <table class="table table-light text-center">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">ID</th>
                                  <th scope="col" class="w-25">ID</th>
                                  <th scope="col" class="w-25">Name</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php for ($i=1; $i <= 6 ; $i++) {
                                  echo "<tr>
                                    <th scope='row'>$i</th>
                                    <td><input type='text' class='form-control text-center ' id='id_l_$i' placeholder='ID'></td>
                                    <td><input type='text' class='form-control text-center ' id='name_l_$i' placeholder='Name'></td>
                                    <td><div class='' id='l_stat_$i'> </div></td>
                                  </tr>";
                                } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>

            </div>

          </div>
          <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title text-center" id="exampleModalLabel">Add Control Device</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input class="form-control form-control-lg text-center" type="text" placeholder="serial number" id="serial">
                    <small class="form-text text-muted">Check serial and press "Save"</small>
                  <br>
                  <div class="" id="message" style="display: none;">adfsd</div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary float-left" id="check" onclick="check()">Chek serial</button>
                  <button type="button" class="btn btn-success" id="save_but" onclick="add_brain()">Save</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            document.getElementById("save_but").disabled = true;

            myFunction();
        });

        function check()
        {
          var chek_serial = $.trim($("#serial").val());
          if(chek_serial.length == 11)
          {
            document.getElementById("save_but").disabled = false;
            $('#message').fadeIn();
            $('#message').html("<h3 class='on text-success'>Serial lenght - correct</h3>");
            setTimeout(close, 10000);
          }
          else {
            $('#message').fadeIn();
            $('#message').html("<h3 class='off text-danger'>Serial lenght - incorrect</h3>");
            setTimeout(close, 1500);
          }

        }

        function close()
        {
          document.getElementById("message").style.display = "none";
        }

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
      <script src="js/settings.js"></script>
    <script type="text/javascript">window.onload = date_time('date_time');</script>

  </body>
</html>
