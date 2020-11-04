// Asynchronous Javascript and XML (AJAX)

$(function(){
  // Listen for a change event from state select menu
  $('#state').change(function(){
    var stateid = $(this).val();
    var queryString = 'stateid='+stateid;

    // AJAX
    $.ajax({
      type: 'POST',
      url: 'assets/inc/lga.php',
      data: queryString,
      cache: false,
      success: function(response) {
        $('#lga').html(response);
      }
    });
  });
});
