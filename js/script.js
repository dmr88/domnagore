$(document).ready(function(){
   
  var timepicker = $('#timepicker');

  // Properties for End time
  timepicker.timepicker({
    'timeFormat': 'H:i',
    'minTime': '8:00am',
    'maxTime': '8:00pm',
    'defaultTime': '11',
    'step': 30,
    'showDuration': false
  });

  $("#service").change(function(){
    var service_id = $(this).val();

    var day = $('#datetime').val();
    var time = $('#timepicker').val();
    var cDtime = day + ' ' + time + ':00';

    $.ajax({
      type: "POST",
      url: "get-data.php",
      data: {service:service_id, datetime:cDtime},
      success: function(result){
        $("#show").html(result);
      }
    });
  });

  // $("#timepicker").change(function(){
  //   var time = $(this).val();
  //   var day = $('#datetime').val();
  //   var cDtime = day + ' ' + time + ':00';
  //   var dataString = "datetime=" + cDtime;

  //   $.ajax({
  //     type: "POST",
  //     url: "get-time.php",
  //     data: dataString,
  //     success: function(result){
  //       $("#dateResult").html(result);
  //     }
  //   });
  // });


})