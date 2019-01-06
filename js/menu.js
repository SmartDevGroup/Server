$(document).ready(function(){
    setInterval('temp()',2000);
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
    stan();
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
    sockets();
  }
  });
}

function sockets()
{
  $.ajax({
  url: 'menu/data.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    for (var i = 1; i < 7; i++) {
      $("#b_name_"+[i]).html(data['b_name_'+i]);
      $("#b_stan_"+[i]).html(data['b_stan_'+i]);
      $("#b_con_"+[i]).html(data['b_con_'+i]);
      $("#k_name_"+[i]).html(data['k_name_'+i]);
      $("#k_stan_"+[i]).html(data['k_stan_'+i]);
      $("#k_con_"+[i]).html(data['k_con_'+i]);
      $("#ba_name_"+[i]).html(data['ba_name_'+i]);
      $("#ba_stan_"+[i]).html(data['ba_stan_'+i]);
      $("#ba_con_"+[i]).html(data['ba_con_'+i]);
    }
  }
  });
}

function send_all_on_bedroom()
{
    var socket = {};
    for (var i = 1; i < 7; i++) {
      socket['bedroom_socket_'+i] = 1;
    }
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
    for (var i = 1; i < 7; i++) {
      socket['bedroom_socket_'+i] = 0;
    }
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
    for (var i = 1; i < 7; i++) {
      socket['kitchen_socket_'+i] = 1;
    }
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
    for (var i = 1; i < 7; i++) {
      socket['kitchen_socket_'+i] = 0;
    }
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
    for (var i = 1; i < 7; i++) {
      socket['bathroom_socket_'+i] = 1;
    }
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
    for (var i = 1; i < 7; i++) {
      socket['bathroom_socket_'+i] = 0;
    }
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
    for (var i = 1; i < 7; i++) {
      socket['home_socket_'+i] = 1;
    }
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
    for (var i = 1; i < 7; i++) {
      socket['home_socket_'+i] = 0;
    }
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
var active = false;
function caro_bed()
{
  if(active !=true){$("#1").addClass("active");$('.carousel').carousel(0);active=true;}
  else {$('.carousel').carousel(0);}
}

function caro_kit()
{
  if(active !=true){$("#2").addClass("active");$('.carousel').carousel(1);active=true;}
  else {$('.carousel').carousel(1);}
}

function caro_ba()
{
  if(active !=true){$("#3").addClass("active");$('.carousel').carousel(2);active=true;}
  else {$('.carousel').carousel(2);}
}

function caro_liv()
{
  if(active !=true){$("#4").addClass("active");$('.carousel').carousel(3);active=true;}
  else {$('.carousel').carousel(3);}
}
