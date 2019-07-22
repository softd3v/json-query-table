
$(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      var res = value.split("|");

      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(res[0]) > -1)
        console.log(res);
      });
    })
  });