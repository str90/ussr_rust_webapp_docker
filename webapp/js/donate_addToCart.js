$(document).ready(function() {
  $("form").submit(function(e) {
    e.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
      type: "POST",
        url: "http://192.168.57.181/MarketWeapons/add_to_cart",
      data: form_data,
      success: function(data) {
        alert(data);
      },
      error:function(ts){
        alert(ts.responseText);
      }});
    });
  });
