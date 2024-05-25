$(document).ready(function(){
  $("#service").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
    var service_id = $(this).val(); /* GET THE VALUE OF THE SELECTED DATA */
    var dataString = "service_id="+service_id; /* STORE THAT TO A DATA STRING */

    $.ajax({ /* THEN THE AJAX CALL */
      type: "POST", /* TYPE OF METHOD TO USE TO PASS THE DATA */
      url: "get-data.php", /* PAGE WHERE WE WILL PASS THE DATA */
      data: dataString, /* THE DATA WE WILL BE PASSING */
      success: function(result){ /* GET THE TO BE RETURNED DATA */
        $("#show").html(result); /* THE RETURNED DATA WILL BE SHOWN IN THIS DIV */
      }
    });

  });
})