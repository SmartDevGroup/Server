$(document).ready(function(){
    setInterval('temp(), stan()',2000);
    setInterval('status()',30000);
});

function temp()
{
  $.ajax({
  url: 'menu/temp.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);

    $('#bedroom_temp').text(data.bed_temp);
    $('#kitchen_temp').text(data.kit_temp);
    $('#bathroom_temp').text(data.ba_temp);
    $('#livingroom_temp').text(data.l_temp);
  }
  });
}
function stan()
{
  $.ajax({
  url: 'menu/stan.php',
  cache: false,
  success: function(jsonn){
    var data = JSON.parse(jsonn);
    $('#stan_bedroom').html(data.b_stan);
    $('#stan_kitchen').html(data.k_stan);
    $('#stan_bathroom').html(data.ba_stan);
    $('#stan_livinroom').html(data.l_stan);
  }
  });
}

function send_all_on_bedroom()
{
    var socket = {};
    socket.bedroom_socket_1 = 1;
    socket.bedroom_socket_2 = 1;
    socket.bedroom_socket_3 = 1;
    socket.bedroom_socket_4 = 1;
    socket.bedroom_socket_5 = 1;
    socket.bedroom_socket_6 = 1;
    socket.bedroom_light = 1;

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bedroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off_bedroom()
{
    var socket = {};
    socket.bedroom_socket_1 = 0;
    socket.bedroom_socket_2 = 0;
    socket.bedroom_socket_3 = 0;
    socket.bedroom_socket_4 = 0;
    socket.bedroom_socket_5 = 0;
    socket.bedroom_socket_6 = 0;
    socket.bedroom_light = 0;

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bedroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_on_kitchen()
{
    var socket = {};
    socket.kitchen_socket_1 = 1;
    socket.kitchen_socket_2 = 1;
    socket.kitchen_socket_3 = 1;
    socket.kitchen_socket_4 = 1;
    socket.kitchen_socket_5 = 1;
    socket.kitchen_socket_6 = 1;
    socket.kitchen_light = 1;


    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_kitchen.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off_kitchen()
{
    var socket = {};
    socket.kitchen_socket_1 = 0;
    socket.kitchen_socket_2 = 0;
    socket.kitchen_socket_3 = 0;
    socket.kitchen_socket_4 = 0;
    socket.kitchen_socket_5 = 0;
    socket.kitchen_socket_6 = 0;
    socket.kitchen_light = 0;

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_kitchen.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_on_bathroom()
{
    var socket = {};
    socket.bathroom_socket_1 = 1;
    socket.bathroom_socket_2 = 1;
    socket.bathroom_socket_3 = 1;
    socket.bathroom_socket_4 = 1;
    socket.bathroom_socket_5 = 1;
    socket.bathroom_socket_6 = 1;
    socket.bathroom_light = 1;

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bathroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off_bathroom()
{
    var socket = {};
    socket.bathroom_socket_1 = 0;
    socket.bathroom_socket_2 = 0;
    socket.bathroom_socket_3 = 0;
    socket.bathroom_socket_4 = 0;
    socket.bathroom_socket_5 = 0;
    socket.bathroom_socket_6 = 0;
    socket.bathroom_light = 0;

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_bathroom.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_on_living()
{
    var socket = {};
    socket.home_socket_1 = 1;
    socket.home_socket_2 = 1;
    socket.home_socket_3 = 1;
    socket.home_socket_4 = 1;
    socket.home_socket_5 = 1;
    socket.home_socket_6 = 1;
    socket.home_light = 1;

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_home.php',
    data: socket,
    success: function(){
    }
    });
}

function send_all_off_living()
{
    var socket = {};
    socket.home_socket_1 = 0;
    socket.home_socket_2 = 0;
    socket.home_socket_3 = 0;
    socket.home_socket_4 = 0;
    socket.home_socket_5 = 0;
    socket.home_socket_6 = 0;
    socket.home_light = 0;

    $.ajax({
    type: 'POST',
    url: 'transfer/transfer_home.php',
    data: socket,
    success: function(){
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
