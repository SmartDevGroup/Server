function bedroom_save()
{
  var array = {};

  array.numb_of_sockets = $('#bedroom_socket option:selected').val();
  array.id_1 = $('#id_b_1').val();
  array.id_2 = $('#id_b_2').val();
  array.id_3 = $('#id_b_3').val();
  array.id_4 = $('#id_b_4').val();
  array.id_5 = $('#id_b_5').val();
  array.id_6 = $('#id_b_6').val();
  array.name_b_1 = $('#name_b_1').val();
  array.name_b_2 = $('#name_b_2').val();
  array.name_b_3 = $('#name_b_3').val();
  array.name_b_4 = $('#name_b_4').val();
  array.name_b_5 = $('#name_b_5').val();
  array.name_b_6 = $('#name_b_6').val();


  if(array.id_1 == ""){array.id_1 = 0;}
  if(array.id_2 == ""){array.id_2 = 0;}
  if(array.id_3 == ""){array.id_3 = 0;}
  if(array.id_4 == ""){array.id_4 = 0;}
  if(array.id_5 == ""){array.id_5 = 0;}
  if(array.id_6 == ""){array.id_6 = 0;}
  $.ajax({
  type: 'POST',
  url: 'settings/db_bedroom_settings.php',
  data: array,
  success: function(){
  }
  });
  $('#bedroom_btn').text("Saved");
  setTimeout(function() { location.reload(); }, 500);

}

function id_bedroom()
{
  $.ajax({
  url: 'settings/id_bedroom.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#id_b_1').val(data.id_b_1);
    $('#id_b_2').val(data.id_b_2);
    $('#id_b_3').val(data.id_b_3);
    $('#id_b_4').val(data.id_b_4);
    $('#id_b_5').val(data.id_b_5);
    $('#id_b_6').val(data.id_b_6);
    $('#name_b_1').val(data.name_b_1);
    $('#name_b_2').val(data.name_b_2);
    $('#name_b_3').val(data.name_b_3);
    $('#name_b_4').val(data.name_b_4);
    $('#name_b_5').val(data.name_b_5);
    $('#name_b_6').val(data.name_b_6);
    status_bedroom();
  }
  });
}
function status_bedroom()
{
  $.ajax({
  url: 'settings/status_bedroom.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#bed_stat_1').html(data.bed_stat_1);
    $('#bed_stat_2').html(data.bed_stat_2);
    $('#bed_stat_3').html(data.bed_stat_3);
    $('#bed_stat_4').html(data.bed_stat_4);
    $('#bed_stat_5').html(data.bed_stat_5);
    $('#bed_stat_6').html(data.bed_stat_6);
    }
  });
}

//KITCHEN//

function kitchen_save()
{
  var array = {};

  array.numb_of_sockets = $('#kitchen_socket option:selected').val();
  array.id_1 = $('#id_k_1').val();
  array.id_2 = $('#id_k_2').val();
  array.id_3 = $('#id_k_3').val();
  array.id_4 = $('#id_k_4').val();
  array.id_5 = $('#id_k_5').val();
  array.id_6 = $('#id_k_6').val();

  if(array.id_1 == ""){array.id_1 = 0;}
  if(array.id_2 == ""){array.id_2 = 0;}
  if(array.id_3 == ""){array.id_3 = 0;}
  if(array.id_4 == ""){array.id_4 = 0;}
  if(array.id_5 == ""){array.id_5 = 0;}
  if(array.id_6 == ""){array.id_6 = 0;}
  $.ajax({
  type: 'POST',
  url: 'settings/db_kitchen_settings.php',
  data: array,
  success: function(){
  }
  });
  $('#kitchen_btn').text("Saved");
  setTimeout(function() { location.reload(); }, 500);

}

function id_kitchen()
{
  $.ajax({
  url: 'settings/id_kitchen.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#id_k_1').val(data.id_k_1);
    $('#id_k_2').val(data.id_k_2);
    $('#id_k_3').val(data.id_k_3);
    $('#id_k_4').val(data.id_k_4);
    $('#id_k_5').val(data.id_k_5);
    $('#id_k_6').val(data.id_k_6);
    status_kitchen();
  }
  });
}
function status_kitchen()
{
  $.ajax({
  url: 'settings/status_kitchen.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#kit_stat_1').html(data.kit_stat_1);
    $('#kit_stat_2').html(data.kit_stat_2);
    $('#kit_stat_3').html(data.kit_stat_3);
    $('#kit_stat_4').html(data.kit_stat_4);
    $('#kit_stat_5').html(data.kit_stat_5);
    $('#kit_stat_6').html(data.kit_stat_6);
    }
  });
}

function bathroom_save()
{
  var array = {};

  array.numb_of_sockets = $('#bathroom_socket option:selected').val();
  array.id_1 = $('#id_ba_1').val();
  array.id_2 = $('#id_ba_2').val();
  array.id_3 = $('#id_ba_3').val();
  array.id_4 = $('#id_ba_4').val();
  array.id_5 = $('#id_ba_5').val();
  array.id_6 = $('#id_ba_6').val();

  if(array.id_1 == ""){array.id_1 = 0;}
  if(array.id_2 == ""){array.id_2 = 0;}
  if(array.id_3 == ""){array.id_3 = 0;}
  if(array.id_4 == ""){array.id_4 = 0;}
  if(array.id_5 == ""){array.id_5 = 0;}
  if(array.id_6 == ""){array.id_6 = 0;}
  $.ajax({
  type: 'POST',
  url: 'settings/db_bathroom_settings.php',
  data: array,
  success: function(){
  }
  });
  $('#bathroom_btn').text("Saved");
  setTimeout(function() { location.reload(); }, 500);

}

function id_bathroom()
{
  $.ajax({
  url: 'settings/id_bathroom.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#id_ba_1').val(data.id_ba_1);
    $('#id_ba_2').val(data.id_ba_2);
    $('#id_ba_3').val(data.id_ba_3);
    $('#id_ba_4').val(data.id_ba_4);
    $('#id_ba_5').val(data.id_ba_5);
    $('#id_ba_6').val(data.id_ba_6);
    status_bathroom();
  }
  });
}
function status_bathroom()
{
  $.ajax({
  url: 'settings/status_bathroom.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#ba_stat_1').html(data.ba_stat_1);
    $('#ba_stat_2').html(data.ba_stat_2);
    $('#ba_stat_3').html(data.ba_stat_3);
    $('#ba_stat_4').html(data.ba_stat_4);
    $('#ba_stat_5').html(data.ba_stat_5);
    $('#ba_stat_6').html(data.ba_stat_6);
    }
  });
}

function living_save()
{
  var array = {};

  array.numb_of_sockets = $('#living_socket option:selected').val();
  array.id_1 = $('#id_l_1').val();
  array.id_2 = $('#id_l_2').val();
  array.id_3 = $('#id_l_3').val();
  array.id_4 = $('#id_l_4').val();
  array.id_5 = $('#id_l_5').val();
  array.id_6 = $('#id_l_6').val();

  if(array.id_1 == ""){array.id_1 = 0;}
  if(array.id_2 == ""){array.id_2 = 0;}
  if(array.id_3 == ""){array.id_3 = 0;}
  if(array.id_4 == ""){array.id_4 = 0;}
  if(array.id_5 == ""){array.id_5 = 0;}
  if(array.id_6 == ""){array.id_6 = 0;}
  $.ajax({
  type: 'POST',
  url: 'settings/db_living_settings.php',
  data: array,
  success: function(){
  }
  });
  $('#living_btn').text("Saved");
  setTimeout(function() { location.reload(); }, 500);

}

function id_living()
{
  $.ajax({
  url: 'settings/id_living.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#id_l_1').val(data.id_l_1);
    $('#id_l_2').val("12");
    $('#id_l_3').val(data.id_l_3);
    $('#id_l_4').val(data.id_l_4);
    $('#id_l_5').val(data.id_l_5);
    $('#id_l_6').val(data.id_l_6);
  }
  });
  status_living();
}
function status_living()
{
  $.ajax({
  url: 'settings/status_living.php',
  cache: false,
  success: function(json){
    var data = JSON.parse(json);
    $('#l_stat_1').html(data.l_stat_1);
    $('#l_stat_2').html(data.l_stat_2);
    $('#l_stat_3').html(data.l_stat_3);
    $('#l_stat_4').html(data.l_stat_4);
    $('#l_stat_5').html(data.l_stat_5);
    $('#l_stat_6').html(data.l_stat_6);
    }
  });
}

$(document).ready(function(){
  id_bedroom();
  id_kitchen();
  id_bathroom();
  id_living();
});

function add_brain()
{

  var array = {};
  array.serial = $.trim($("#serial").val());
  $.ajax({
  type: 'POST',
  url: 'settings/serial_add.php',
  data: array,
  success: function(message){
    $('#message').fadeIn();
    $('#message').html(message);
    setTimeout(close, 10000);
    document.getElementById("save_but").disabled = true;
    }
  });
}
