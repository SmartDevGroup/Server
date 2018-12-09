$(function() {
    $('input[type="checkbox"]').change(function()
    {
      $(this).val($(this).prop('checked')?1:0);
      send();
    })
})

function send()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      socket['home_socket_'+i] = $("#home_socket_"+[i]).val();
    }
    socket.home_light = $("#home_light").val();
    socket.dimer = $("#dimer").val();

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_home.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_on()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      $("#home_socket_"+[i]).val(1);
      socket['home_socket_'+i] = $("#home_socket_"+[i]).val();
      $("#home_socket_"+[i]).bootstrapToggle('on');
    }
    $("#home_light").val(1);
    socket.home_light = $("#home_light").val();
    $('#home_light').bootstrapToggle('on');

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_home.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      $("#home_socket_"+[i]).val(0);
      socket['home_socket_'+i] = $("#home_socket_"+[i]).val();
      $("#home_socket_"+[i]).bootstrapToggle('off');
    }
    $("#home_light").val(0);
    socket.home_light = $("#home_light").val();
    $('#home_light').bootstrapToggle('off');

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_home.php',
    data: socket,
    success: function(){
    }
    });
}

$(document).ready(function(){
  $.ajax({
  url: 'status/home_button.php',
  cache: false,
  success: function(json_button){
    var data = JSON.parse(json_button);

    for (var i = 1; i < 7; i++) {
      if(data['home_socket_'+i] == 1){$("#home_socket_"+[i]).val(1); $("#home_socket_"+[i]).bootstrapToggle('on');}
    }

    if(data.home_light == 1){$('#home_light').bootstrapToggle('on'); $('#home_light').val(1);}
    document.getElementById("dimer").value = data.dimer;

    var slider = document.getElementById("dimer");
    var output = document.getElementById("value_scroll");
    output.innerHTML = slider.value;

    slider.oninput = function()
    {
      output.innerHTML = this.value;
    }
    slider.onchange = function ()
    {
      setTimeout("send()", 500);
    }
  }
  });
});


function show()
{
  $.ajax({
  url: 'status/home_status.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    for (var i = 1; i < 7; i++) {
      $("#h_temp_"+[i]).text(data['home_socket_'+i]);
      $("#h_stan_"+[i]).html(data['h_s_'+i]);
      $("#h_conn_"+[i]).html(data['c_s_'+i]);
    }
    $('#h_stan_l').html(data.h_l);
  }
  });
}
/*
function pol()
{
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.status === 200) {
        try {
          var data = JSON.parse(this.responseText);
          $('#h_temp_1').text(data.home_socket_1);
          $('#h_temp_2').text(data.home_socket_2);
          $('#h_temp_3').text(data.home_socket_3);
          $('#h_temp_4').text(data.home_socket_4);
          $('#h_temp_5').text(data.home_socket_5);
          $('#h_temp_6').text(data.home_socket_6);
          $('#h_stan_1').html(data.h_s_1);
          $('#h_stan_2').html(data.h_s_2);
          $('#h_stan_3').html(data.h_s_3);
          $('#h_stan_4').html(data.h_s_4);
          $('#h_stan_5').html(data.h_s_5);
          $('#h_stan_6').html(data.h_s_6);
          $('#h_stan_l').html(data.h_l);

          $('#h_conn_1').html(data.c_s_1);
          $('#h_conn_2').html(data.c_s_2);
          $('#h_conn_3').html(data.c_s_3);
          $('#h_conn_4').html(data.c_s_4);
          $('#h_conn_5').html(data.c_s_5);
          $('#h_conn_6').html(data.c_s_6);
        } catch{
          pol();
          return;
        }
        pol();
      }
      else {
        pol();
      }
    }
};
xmlhttp.open("GET", 'status/home_status.php', true);
xmlhttp.send();
}
*/
function name()
{
  $.ajax({
  url: 'status/home_name.php',
  cache: false,
  success: function(json_n){
    var data = JSON.parse(json_n);
    for (var i = 1; i < 7; i++) {
      $("#name_home_"+[i]).text(data['h_s_'+i]);
    }
  }
  });
}

$(document).ready(function(){
    show();
    name();
    setInterval('show()',1000);
});

var scroll = 0;
function toBottom()
{
  if(scroll == 0)
  {
    setTimeout('window.scrollTo(0, document.body.scrollHeight)',1000);
    scroll = 1;
  }
  else {
    scroll = 0;
  }
}

function close_colapse()
{
  scroll = 0;
  $('#chart').collapse('hide');
}
