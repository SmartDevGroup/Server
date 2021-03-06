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
    socket.bedroom_light = $("#bedroom_light").val();
    for (var i = 1; i < 7; i++) {
      socket['bedroom_socket_'+i] = $("#bedroom_socket_"+[i]).val();
    }

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
      //$("#bedroom_socket_"+[i]).val(1);
      $("#bedroom_socket_"+[i]).bootstrapToggle('on');
      socket['bedroom_socket_'+i] = $("#bedroom_socket_"+[i]).val();

    }
    //$("#bedroom_light").val(1);
    $('#bedroom_light').bootstrapToggle('on');
    socket.bedroom_light = $("#bedroom_light").val();


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

/*
function show()
{
  $.ajax({
  url: 'status/bedroom_light.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#b_stan_l').html(data.b_l);
    $('#dimer').val(data.dimer);
    $('#value_scroll').text(data.dimer);
    if(data['s_l'] == 1){if($("#bedroom_light").val() == 0){$("#bedroom_light").bootstrapToggle('on');}}
    if(data['s_l'] == 0){if($("#bedroom_light").val() == 1){$("#bedroom_light").bootstrapToggle('off');}}

  }
  });
}
*/

function pol()
{
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.status === 200) {
        try {
          var data = JSON.parse(this.responseText);
          for (var i = 1; i < 7; i++) {
            $("#b_temp_"+[i]).text(data['bedroom_socket_'+i]);
            if(data['bedroom_socket_'+i] >= 30)
            {
              modal(i);
            }
            $("#b_stan_"+[i]).html(data['b_s_'+i]);
            $("#b_conn_"+[i]).html(data['c_s_'+i]);
            if(data['s_'+i] == 1){if($("#bedroom_socket_"+[i]).val() == 0){$("#bedroom_socket_"+[i]).bootstrapToggle('on');}}
            if(data['s_'+i] == 0){if($("#bedroom_socket_"+[i]).val() == 1){$("#bedroom_socket_"+[i]).bootstrapToggle('off');}}
          }
          $('#b_stan_l').html(data.b_l);
          $('#dimer').val(data.dimer);
          $('#value_scroll').text(data.dimer);
          if(data['s_l'] == 1){if($("#bedroom_light").val() == 0){$("#bedroom_light").bootstrapToggle('on');}}
          if(data['s_l'] == 0){if($("#bedroom_light").val() == 1){$("#bedroom_light").bootstrapToggle('off');}}
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

var so = {};
var sock_id;
function modal(id)
{
  sock_id = id;
  if(so['s_'+id] != false)
  {
    $("#modal_title").text('Socket № ' + id + " is too hot");
    $("#modal_text").text("The temperature near the socket is high. Turn off the socket power");
    $("#modal_alert").modal('show');
  }
}

function modal_off() {
  so['s_'+sock_id] = false;
  $("#bedroom_socket_"+sock_id).bootstrapToggle('off');
}

function ignore_socket()
{
  so['s_'+sock_id] = false;
}

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

function status()
{
  $.ajax({
  url: 'service/user_status.php',
  cache: false,
  success: function(){}
});
}

$(document).ready(function(){
    //show();
    pol();
    name();
    setTimeout('status();', 2000);
    setInterval('status()',20000);

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
