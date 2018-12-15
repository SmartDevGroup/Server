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
      socket['bedroom_socket_'+i] = $("#bedroom_socket_"+[i]).val();
    }
    socket.bedroom_light = $("#bedroom_light").val();
    socket.dimer = $("#dimer").val();

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bedroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_on()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      $("#bedroom_socket_"+[i]).val(1);
      socket['bedroom_socket_'+i] = $("#bedroom_socket_"+[i]).val();
      $("#bedroom_socket_"+[i]).bootstrapToggle('on');
    }
    $("#bedroom_light").val(1);
    socket.bedroom_light = $("#bedroom_light").val();
    $('#bedroom_light').bootstrapToggle('on');

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bedroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off()
{
  var socket = {};
  for (var i = 1; i < 7; i++) {
    $("#bedroom_socket_"+[i]).val(0);
    socket['bedroom_socket_'+i] = $("#bedroom_socket_"+[i]).val();
    $("#bedroom_socket_"+[i]).bootstrapToggle('off');
  }
  $("#bedroom_light").val(0);
  socket.bedroom_light = $("#bedroom_light").val();
  $('#bedroom_light').bootstrapToggle('off');

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bedroom.php',
    data: socket,
    success: function(){
    }
    });
}

$(document).ready(function(){
  $.ajax({
  url: 'status/bedroom_button.php',
  cache: false,
  success: function(json_button){
    var data = JSON.parse(json_button);

    for (var i = 1; i < 7; i++) {
      if(data['bedroom_socket_'+i] == 1){$("#bedroom_socket_"+[i]).val(1); $("#bedroom_socket_"+[i]).bootstrapToggle('on');}
    }
    if(data.bedroom_light == 1){$('#bedroom_light').bootstrapToggle('on'); $('#bedroom_light').val(1);}
    $('#dimer').val(data.dimer);

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
  url: 'status/bedroom_status.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    for (var i = 1; i < 7; i++) {
      $("#b_temp_"+[i]).text(data['bedroom_socket_'+i]);
      $("#b_stan_"+[i]).html(data['b_s_'+i]);
      $("#b_conn_"+[i]).html(data['c_s_'+i]);
      if(data['s_'+i] == 1){if($("#bedroom_socket_"+[i]).val() == 0){$("#bedroom_socket_"+[i]).bootstrapToggle('on');}}
      if(data['s_'+i] == 0){if($("#bedroom_socket_"+[i]).val() == 1){$("#bedroom_socket_"+[i]).bootstrapToggle('off');}}

    }
    $('#b_stan_l').html(data.b_l);
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
          $('#b_temp_1').text(data.bedroom_socket_1);
          $('#b_temp_2').text(data.bedroom_socket_2);
          $('#b_temp_3').text(data.bedroom_socket_3);
          $('#b_temp_4').text(data.bedroom_socket_4);
          $('#b_temp_5').text(data.bedroom_socket_5);
          $('#b_temp_6').text(data.bedroom_socket_6);
          $('#b_stan_1').html(data.b_s_1);
          $('#b_stan_2').html(data.b_s_2);
          $('#b_stan_3').html(data.b_s_3);
          $('#b_stan_4').html(data.b_s_4);
          $('#b_stan_5').html(data.b_s_5);
          $('#b_stan_6').html(data.b_s_6);
          $('#b_stan_l').html(data.b_l);

          $('#b_conn_1').html(data.c_s_1);
          $('#b_conn_2').html(data.c_s_2);
          $('#b_conn_3').html(data.c_s_3);
          $('#b_conn_4').html(data.c_s_4);
          $('#b_conn_5').html(data.c_s_5);
          $('#b_conn_6').html(data.c_s_6);
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
xmlhttp.open("GET", 'status/bedroom_status.php', true);
xmlhttp.send();
}
*/
function name()
{
  $.ajax({
  url: 'status/bedroom_name.php',
  cache: false,
  success: function(json_n){
    var data = JSON.parse(json_n);
    for (var i = 1; i < 7; i++) {
      $("#name_bedroom_"+[i]).text(data['b_s_'+i]);
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
