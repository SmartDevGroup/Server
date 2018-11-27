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

    socket.bathroom_socket_1 = $("#bathroom_socket_1").val();
    socket.bathroom_socket_2 = $("#bathroom_socket_2").val();
    socket.bathroom_socket_3 = $("#bathroom_socket_3").val();
    socket.bathroom_socket_4 = $("#bathroom_socket_4").val();
    socket.bathroom_socket_5 = $("#bathroom_socket_5").val();
    socket.bathroom_socket_6 = $("#bathroom_socket_6").val();
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
    $('#bathroom_socket_1').val(1);
    $('#bathroom_socket_2').val(1);
    $('#bathroom_socket_3').val(1);
    $('#bathroom_socket_4').val(1);
    $('#bathroom_socket_5').val(1);
    $('#bathroom_socket_6').val(1);
    $("#bathroom_light").val(1);
    socket.bathroom_socket_1 = $("#bathroom_socket_1").val();
    socket.bathroom_socket_2 = $("#bathroom_socket_2").val();
    socket.bathroom_socket_3 = $("#bathroom_socket_3").val();
    socket.bathroom_socket_4 = $("#bathroom_socket_4").val();
    socket.bathroom_socket_5 = $("#bathroom_socket_5").val();
    socket.bathroom_socket_6 = $("#bathroom_socket_6").val();
    socket.bathroom_light = $("#bathroom_light").val();

    $('#bathroom_socket_1').bootstrapToggle('on');
    $('#bathroom_socket_2').bootstrapToggle('on');
    $('#bathroom_socket_3').bootstrapToggle('on');
    $('#bathroom_socket_4').bootstrapToggle('on');
    $('#bathroom_socket_5').bootstrapToggle('on');
    $('#bathroom_socket_6').bootstrapToggle('on');
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
    $('#bathroom_socket_1').val(0);
    $('#bathroom_socket_2').val(0);
    $('#bathroom_socket_3').val(0);
    $('#bathroom_socket_4').val(0);
    $('#bathroom_socket_5').val(0);
    $('#bathroom_socket_6').val(0);
    $("#bathroom_light").val(0);
    socket.bathroom_socket_1 = $("#bathroom_socket_1").val();
    socket.bathroom_socket_2 = $("#bathroom_socket_2").val();
    socket.bathroom_socket_3 = $("#bathroom_socket_3").val();
    socket.bathroom_socket_4 = $("#bathroom_socket_4").val();
    socket.bathroom_socket_5 = $("#bathroom_socket_5").val();
    socket.bathroom_socket_6 = $("#bathroom_socket_6").val();
    socket.bathroom_light = $("#bathroom_light").val();

    $('#bathroom_socket_1').bootstrapToggle('off');
    $('#bathroom_socket_2').bootstrapToggle('off');
    $('#bathroom_socket_3').bootstrapToggle('off');
    $('#bathroom_socket_4').bootstrapToggle('off');
    $('#bathroom_socket_5').bootstrapToggle('off');
    $('#bathroom_socket_6').bootstrapToggle('off');
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

    if(data.bathroom_socket_1 == 1){$('#bathroom_socket_1').bootstrapToggle('on'); $('#bathroom_socket_1').val(1);}
    if(data.bathroom_socket_2 == 1){$('#bathroom_socket_2').bootstrapToggle('on'); $('#bathroom_socket_2').val(1);}
    if(data.bathroom_socket_3 == 1){$('#bathroom_socket_3').bootstrapToggle('on'); $('#bathroom_socket_3').val(1);}
    if(data.bathroom_socket_4 == 1){$('#bathroom_socket_4').bootstrapToggle('on'); $('#bathroom_socket_4').val(1);}
    if(data.bathroom_socket_5 == 1){$('#bathroom_socket_5').bootstrapToggle('on'); $('#bathroom_socket_5').val(1);}
    if(data.bathroom_socket_6 == 1){$('#bathroom_socket_6').bootstrapToggle('on'); $('#bathroom_socket_6').val(1);}
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
  }
  });
}

function name()
{
  $.ajax({
  url: 'status/bathroom_name.php',
  cache: false,
  success: function(json_n){
    var data = JSON.parse(json_n);
    $('#name_bathroom_1').text(data.b_s_1);
    $('#name_bathroom_2').text(data.b_s_2);
    $('#name_bathroom_3').text(data.b_s_3);
    $('#name_bathroom_4').text(data.b_s_4);
    $('#name_bathroom_5').text(data.b_s_5);
    $('#name_bathroom_6').text(data.b_s_6);
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
  //setTimeout('$(window).scrollTop(40)', 500);
  $('#chart').collapse('hide');
}
