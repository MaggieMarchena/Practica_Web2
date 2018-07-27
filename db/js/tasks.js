$(document).ready (function () {

  $.ajax({
    url: "http://localhost/Projects/Practica_Web2/db/tasks",
    success: function(result){
        $("#tasks").html(result);
    }
  });

});
