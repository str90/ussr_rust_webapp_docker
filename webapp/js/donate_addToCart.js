$(document).ready(function() {
  $("form").submit(function(e) {
    e.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
      type: "POST",
        url: "http://127.0.0.1/MarketWeapons/add_to_cart",
      data: form_data,
      success: function(data) {
        alert(data);
      },
      error:function(ts){
        alert(ts.responseText);
      }});
    });
  });
