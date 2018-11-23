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

    socket.bedroom_socket_1 = $("#bedroom_socket_1").val();
    socket.bedroom_socket_2 = $("#bedroom_socket_2").val();
    socket.bedroom_socket_3 = $("#bedroom_socket_3").val();
    socket.bedroom_socket_4 = $("#bedroom_socket_4").val();
    socket.bedroom_socket_5 = $("#bedroom_socket_5").val();
    socket.bedroom_socket_6 = $("#bedroom_socket_6").val();
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
    $('#bedroom_socket_1').val(1);
    $('#bedroom_socket_2').val(1);
    $('#bedroom_socket_3').val(1);
    $('#bedroom_socket_4').val(1);
    $('#bedroom_socket_5').val(1);
    $('#bedroom_socket_6').val(1);
    $("#bedroom_light").val(1);
    socket.bedroom_socket_1 = $("#bedroom_socket_1").val();
    socket.bedroom_socket_2 = $("#bedroom_socket_2").val();
    socket.bedroom_socket_3 = $("#bedroom_socket_3").val();
    socket.bedroom_socket_4 = $("#bedroom_socket_4").val();
    socket.bedroom_socket_5 = $("#bedroom_socket_5").val();
    socket.bedroom_socket_6 = $("#bedroom_socket_6").val();
    socket.bedroom_light = $("#bedroom_light").val();

    $('#bedroom_socket_1').bootstrapToggle('on');
    $('#bedroom_socket_2').bootstrapToggle('on');
    $('#bedroom_socket_3').bootstrapToggle('on');
    $('#bedroom_socket_4').bootstrapToggle('on');
    $('#bedroom_socket_5').bootstrapToggle('on');
    $('#bedroom_socket_6').bootstrapToggle('on');
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
    $('#bedroom_socket_1').val(0);
    $('#bedroom_socket_2').val(0);
    $('#bedroom_socket_3').val(0);
    $('#bedroom_socket_4').val(0);
    $('#bedroom_socket_5').val(0);
    $('#bedroom_socket_6').val(0);
    $("#bedroom_light").val(0);
    socket.bedroom_socket_1 = $("#bedroom_socket_1").val();
    socket.bedroom_socket_2 = $("#bedroom_socket_2").val();
    socket.bedroom_socket_3 = $("#bedroom_socket_3").val();
    socket.bedroom_socket_4 = $("#bedroom_socket_4").val();
    socket.bedroom_socket_5 = $("#bedroom_socket_5").val();
    socket.bedroom_socket_6 = $("#bedroom_socket_6").val();
    socket.bedroom_light = $("#bedroom_light").val();

    $('#bedroom_socket_1').bootstrapToggle('off');
    $('#bedroom_socket_2').bootstrapToggle('off');
    $('#bedroom_socket_3').bootstrapToggle('off');
    $('#bedroom_socket_4').bootstrapToggle('off');
    $('#bedroom_socket_5').bootstrapToggle('off');
    $('#bedroom_socket_6').bootstrapToggle('off');
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

    if(data.bedroom_socket_1 == 1){$('#bedroom_socket_1').bootstrapToggle('on'); $('#bedroom_socket_1').val(1);}
    if(data.bedroom_socket_2 == 1){$('#bedroom_socket_2').bootstrapToggle('on'); $('#bedroom_socket_2').val(1);}
    if(data.bedroom_socket_3 == 1){$('#bedroom_socket_3').bootstrapToggle('on'); $('#bedroom_socket_3').val(1);}
    if(data.bedroom_socket_4 == 1){$('#bedroom_socket_4').bootstrapToggle('on'); $('#bedroom_socket_4').val(1);}
    if(data.bedroom_socket_5 == 1){$('#bedroom_socket_5').bootstrapToggle('on'); $('#bedroom_socket_5').val(1);}
    if(data.bedroom_socket_6 == 1){$('#bedroom_socket_6').bootstrapToggle('on'); $('#bedroom_socket_6').val(1);}
    if(data.bedroom_light == 1){$('#bedroom_light').bootstrapToggle('on'); $('#bedroom_light').val(1);}
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
  url: 'status/bedroom_status.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
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

  }
  });
}

function name()
{
  $.ajax({
  url: 'status/bedroom_name.php',
  cache: false,
  success: function(json_n){
    var data = JSON.parse(json_n);
    $('#name_bedroom_1').text(data.b_s_1);
    $('#name_bedroom_2').text(data.b_s_2);
    $('#name_bedroom_3').text(data.b_s_3);
    $('#name_bedroom_4').text(data.b_s_4);
    $('#name_bedroom_5').text(data.b_s_5);
    $('#name_bedroom_6').text(data.b_s_6);
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
