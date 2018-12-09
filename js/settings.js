function bedroom_save()
{
  var array = {};
  alert("asdas")
  array.numb_of_sockets = $('#bedroom_socket option:selected').val();
  for (var i = 1; i < 7; i++) {
    array['id_'+i] = $("#id_b_"+[i]).val();
    array['name_b_'+i] = $("#name_b_"+[i]).val();
    if(array['id_'+i] == ""){array['id_'+i] = 0;}
  }

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
    for (var i = 1; i < 7; i++) {
      $("#id_b_"+[i]).val(data['id_b_'+i]);
      $("#name_b_"+[i]).val(data['name_b_'+i]);
    }
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
    for (var i = 1; i < 7; i++) {
      $("#bed_stat_"+[i]).html(data['bed_stat_'+i]);
    }
    }
  });
}

//KITCHEN//

function kitchen_save()
{
  var array = {};

  array.numb_of_sockets = $('#kitchen_socket option:selected').val();
  for (var i = 1; i < 7; i++) {
    array['id_'+i] = $("#id_k_"+[i]).val();
    array['name_k_'+i] = $("#name_k_"+[i]).val();
    if(array['id_'+i] == ""){array['id_'+i] = 0;}
  }

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
    for (var i = 1; i < 7; i++) {
      $("#id_k_"+[i]).val(data['id_k_'+i]);
      $("#name_k_"+[i]).val(data['name_k_'+i]);
    }
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
    for (var i = 1; i < 7; i++) {
      $("#kit_stat_"+[i]).html(data['kit_stat_'+i]);
    }
    }
  });
}

function bathroom_save()
{
  var array = {};

  array.numb_of_sockets = $('#bathroom_socket option:selected').val();
  for (var i = 1; i < 7; i++) {
    array['id_'+i] = $("#id_ba_"+[i]).val();
    array['name_ba_'+i] = $("#name_ba_"+[i]).val();
    if(array['id_'+i] == ""){array['id_'+i] = 0;}
  }

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
    for (var i = 1; i < 7; i++) {
      $("#id_ba_"+[i]).val(data['id_ba_'+i]);
      $("#name_ba_"+[i]).val(data['name_ba_'+i]);
    }
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
    for (var i = 1; i < 7; i++) {
      $("#ba_stat_"+[i]).html(data['ba_stat_'+i]);
    }
    }
  });
}

function living_save()
{
  var array = {};

  array.numb_of_sockets = $('#living_socket option:selected').val();
  for (var i = 1; i < 7; i++) {
    array['id_'+i] = $("#id_l_"+[i]).val();
    array['name_l_'+i] = $("#name_l_"+[i]).val();
    if(array['id_'+i] == ""){array['id_'+i] = 0;}
  }

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
    for (var i = 1; i < 7; i++) {
      $("#id_l_"+[i]).val(data['id_l_'+i]);
      $("#name_l_"+[i]).val(data['name_l_'+i]);
    }
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
    for (var i = 1; i < 7; i++) {
      $("#l_stat_"+[i]).html(data['l_stat_'+i]);
    }
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
