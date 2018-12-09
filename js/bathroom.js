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
      socket['bathroom_socket_'+i] = $("#bathroom_socket_"+[i]).val();
    }
    socket.bathroom_light = $("#bathroom_light").val();
    socket.dimer = $("#dimer").val();

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bathroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_on()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      $("#bathroom_socket_"+[i]).val(1);
      socket['bathroom_socket_'+i] = $("#bathroom_socket_"+[i]).val();
      $("#bathroom_socket_"+[i]).bootstrapToggle('on');
    }
    $("#bathroom_light").val(1);
    socket.bathroom_light = $("#bathroom_light").val();
    $('#bathroom_light').bootstrapToggle('on');

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bathroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      $("#bathroom_socket_"+[i]).val(0);
      socket['bathroo_socket_'+i] = $("#bathroom_socket_"+[i]).val();
      $("#bathroom_socket_"+[i]).bootstrapToggle('off');
    }
    $("#bathroom_light").val(0);
    socket.bathroom_light = $("#bathroom_light").val();
    $('#bathroom_light').bootstrapToggle('off');
    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bathroom.php',
    data: socket,
    success: function(){
    }
    });
}

$(document).ready(function(){
  $.ajax({
  url: 'status/bathroom_button.php',
  cache: false,
  success: function(json_button){
    var data = JSON.parse(json_button);

    for (var i = 1; i < 7; i++) {
      if(data['bathroom_socket_'+i] == 1){$("#bathroom_socket_"+[i]).val(1); $("#bathroom_socket_"+[i]).bootstrapToggle('on');}
    }
    if(data.bathroom_light == 1){$('#bathroom_light').bootstrapToggle('on'); $('#bathroom_light').val(1);}
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
  url: 'status/bathroom_status.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    for (var i = 1; i < 7; i++) {
      $("#ba_temp_"+[i]).text(data['bathroom_socket_'+i]);
      $("#ba_stan_"+[i]).html(data['ba_s_'+i]);
      $("#ba_conn_"+[i]).html(data['c_s_'+i]);
    }
    $('#ba_stan_l').html(data.ba_l);

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
          $('#ba_temp_1').text(data.bathroom_socket_1);
          $('#ba_temp_2').text(data.bathroom_socket_2);
          $('#ba_temp_3').text(data.bathroom_socket_3);
          $('#ba_temp_4').text(data.bathroom_socket_4);
          $('#ba_temp_5').text(data.bathroom_socket_5);
          $('#ba_temp_6').text(data.bathroom_socket_6);
          $('#ba_stan_1').html(data.ba_s_1);
          $('#ba_stan_2').html(data.ba_s_2);
          $('#ba_stan_3').html(data.ba_s_3);
          $('#ba_stan_4').html(data.ba_s_4);
          $('#ba_stan_5').html(data.ba_s_5);
          $('#ba_stan_6').html(data.ba_s_6);
          $('#ba_stan_l').html(data.ba_l);

          $('#ba_conn_1').html(data.c_s_1);
          $('#ba_conn_2').html(data.c_s_2);
          $('#ba_conn_3').html(data.c_s_3);
          $('#ba_conn_4').html(data.c_s_4);
          $('#ba_conn_5').html(data.c_s_5);
          $('#ba_conn_6').html(data.c_s_6);
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
xmlhttp.open("GET", 'status/bathroom_status.php', true);
xmlhttp.send();
}
*/
function name()
{
  $.ajax({
  url: 'status/bathroom_name.php',
  cache: false,
  success: function(json_n){
    var data = JSON.parse(json_n);
    for (var i = 1; i < 7; i++) {
      $("#name_bathroom_"+[i]).text(data['ba_s_'+i]);
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
