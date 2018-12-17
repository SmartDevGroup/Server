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
      socket['kitchen_socket_'+i] = $("#kitchen_socket_"+[i]).val();
    }
    socket.kitchen_light = $("#kitchen_light").val();
    socket.dimer = $("#dimer").val();

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_kitchen.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_on()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      $("#kitchen_socket_"+[i]).val(1);
      socket['kitchen_socket_'+i] = $("#kitchen_socket_"+[i]).val();
      $("#kitchen_socket_"+[i]).bootstrapToggle('on');
    }
    $("#kitchen_light").val(1);
    socket.kitchen_light = $("#kitchen_light").val();
    $('#kitchen_light').bootstrapToggle('on');

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_kitchen.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      $("#kitchen_socket_"+[i]).val(0);
      socket['kitchen_socket_'+i] = $("#kitchen_socket_"+[i]).val();
      $("#kitchen_socket_"+[i]).bootstrapToggle('off');
    }
    $("#kitchen_light").val(0);
    socket.kitchen_light = $("#kitchen_light").val();
    $('#kitchen_light').bootstrapToggle('off');
    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_kitchen.php',
    data: socket,
    success: function(){
    }
    });
}

$(document).ready(function(){
  $.ajax({
  url: 'status/kitchen_button.php',
  cache: false,
  success: function(json_button){
    var data = JSON.parse(json_button);

    for (var i = 1; i < 7; i++) {
      if(data['kitchen_socket_'+i] == 1){$("#kitchen_socket_"+[i]).val(1); $("#kitchen_socket_"+[i]).bootstrapToggle('on');}
    }
    if(data.kitchen_light == 1){$('#kitchen_light').bootstrapToggle('on'); $('#kitchen_light').val(1);}
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
  url: 'status/kitchen_status.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    for (var i = 1; i < 7; i++) {
      $("#k_temp_"+[i]).text(data['kitchen_socket_'+i]);
      $("#k_stan_"+[i]).html(data['k_s_'+i]);
      $("#k_conn_"+[i]).html(data['c_s_'+i]);
      if(data['s_'+i] == 1){if($("#kitchen_socket_"+[i]).val() == 0){$("#kitchen_socket_"+[i]).bootstrapToggle('on');}}
      if(data['s_'+i] == 0){if($("#kitchen_socket_"+[i]).val() == 1){$("#kitchen_socket_"+[i]).bootstrapToggle('off');}}

    }
    $('#k_stan_l').html(data.k_l);
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
          $('#k_temp_1').text(data.kitchen_socket_1);
          $('#k_temp_2').text(data.kitchen_socket_2);
          $('#k_temp_3').text(data.kitchen_socket_3);
          $('#k_temp_4').text(data.kitchen_socket_4);
          $('#k_temp_5').text(data.kitchen_socket_5);
          $('#k_temp_6').text(data.kitchen_socket_6);

          $('#k_stan_1').html(data.k_s_1);
          $('#k_stan_2').html(data.k_s_2);
          $('#k_stan_3').html(data.k_s_3);
          $('#k_stan_4').html(data.k_s_4);
          $('#k_stan_5').html(data.k_s_5);
          $('#k_stan_6').html(data.k_s_6);
          $('#k_stan_l').html(data.k_l);

          $('#k_conn_1').html(data.c_s_1);
          $('#k_conn_2').html(data.c_s_2);
          $('#k_conn_3').html(data.c_s_3);
          $('#k_conn_4').html(data.c_s_4);
          $('#k_conn_5').html(data.c_s_5);
          $('#k_conn_6').html(data.c_s_6);
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
xmlhttp.open("GET", 'status/kitchen_status.php', true);
xmlhttp.send();
}
*/
$(document).ready(function(){
    show();
    name();
    setInterval('show()',1500);
});

function name()
{
  $.ajax({
  url: 'status/kitchen_name.php',
  cache: false,
  success: function(json_n){
    var data = JSON.parse(json_n);
    for (var i = 1; i < 7; i++) {
      $("#name_kitchen_"+[i]).text(data['k_s_'+i]);
    }
  }
  });
}

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
