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

    socket.kitchen_socket_1 = $("#kitchen_socket_1").val();
    socket.kitchen_socket_2 = $("#kitchen_socket_2").val();
    socket.kitchen_socket_3 = $("#kitchen_socket_3").val();
    socket.kitchen_socket_4 = $("#kitchen_socket_4").val();
    socket.kitchen_socket_5 = $("#kitchen_socket_5").val();
    socket.kitchen_socket_6 = $("#kitchen_socket_6").val();
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
    $('#kitchen_socket_1').val(1);
    $('#kitchen_socket_2').val(1);
    $('#kitchen_socket_3').val(1);
    $('#kitchen_socket_4').val(1);
    $('#kitchen_socket_5').val(1);
    $('#kitchen_socket_6').val(1);
    $("#kitchen_light").val(1);
    socket.kitchen_socket_1 = $("#kitchen_socket_1").val();
    socket.kitchen_socket_2 = $("#kitchen_socket_2").val();
    socket.kitchen_socket_3 = $("#kitchen_socket_3").val();
    socket.kitchen_socket_4 = $("#kitchen_socket_4").val();
    socket.kitchen_socket_5 = $("#kitchen_socket_5").val();
    socket.kitchen_socket_6 = $("#kitchen_socket_6").val();
    socket.kitchen_light = $("#kitchen_light").val();

    $('#kitchen_socket_1').bootstrapToggle('on');
    $('#kitchen_socket_2').bootstrapToggle('on');
    $('#kitchen_socket_3').bootstrapToggle('on');
    $('#kitchen_socket_4').bootstrapToggle('on');
    $('#kitchen_socket_5').bootstrapToggle('on');
    $('#kitchen_socket_6').bootstrapToggle('on');
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
    $('#kitchen_socket_1').val(0);
    $('#kitchen_socket_2').val(0);
    $('#kitchen_socket_3').val(0);
    $('#kitchen_socket_4').val(0);
    $('#kitchen_socket_5').val(0);
    $('#kitchen_socket_6').val(0);
    $("#kitchen_light").val(0);
    socket.kitchen_socket_1 = $("#kitchen_socket_1").val();
    socket.kitchen_socket_2 = $("#kitchen_socket_2").val();
    socket.kitchen_socket_3 = $("#kitchen_socket_3").val();
    socket.kitchen_socket_4 = $("#kitchen_socket_4").val();
    socket.kitchen_socket_5 = $("#kitchen_socket_5").val();
    socket.kitchen_socket_6 = $("#kitchen_socket_6").val();
    socket.kitchen_light = $("#kitchen_light").val();

    $('#kitchen_socket_1').bootstrapToggle('off');
    $('#kitchen_socket_2').bootstrapToggle('off');
    $('#kitchen_socket_3').bootstrapToggle('off');
    $('#kitchen_socket_4').bootstrapToggle('off');
    $('#kitchen_socket_5').bootstrapToggle('off');
    $('#kitchen_socket_6').bootstrapToggle('off');
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

    if(data.kitchen_socket_1 == 1){$('#kitchen_socket_1').bootstrapToggle('on'); $('#kitchen_socket_1').val(1);}
    if(data.kitchen_socket_2 == 1){$('#kitchen_socket_2').bootstrapToggle('on'); $('#kitchen_socket_2').val(1);}
    if(data.kitchen_socket_3 == 1){$('#kitchen_socket_3').bootstrapToggle('on'); $('#kitchen_socket_3').val(1);}
    if(data.kitchen_socket_4 == 1){$('#kitchen_socket_4').bootstrapToggle('on'); $('#kitchen_socket_4').val(1);}
    if(data.kitchen_socket_5 == 1){$('#kitchen_socket_5').bootstrapToggle('on'); $('#kitchen_socket_5').val(1);}
    if(data.kitchen_socket_6 == 1){$('#kitchen_socket_6').bootstrapToggle('on'); $('#kitchen_socket_6').val(1);}
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

  }
  });
}

$(document).ready(function(){
    show();
    name();
    setInterval('show()',1000);
});

function name()
{
  $.ajax({
  url: 'status/kitchen_name.php',
  cache: false,
  success: function(json_n){
    var data = JSON.parse(json_n);
    $('#name_kitchen_1').text(data.k_s_1);
    $('#name_kitchen_2').text(data.k_s_2);
    $('#name_kitchen_3').text(data.k_s_3);
    $('#name_kitchen_4').text(data.k_s_4);
    $('#name_kitchen_5').text(data.k_s_5);
    $('#name_kitchen_6').text(data.k_s_6);
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
  //setTimeout('$(window).scrollTop(40)', 500);
  $('#chart').collapse('hide');
}
