// JavaScript Document
function populateArrests() {
   
    $.getJSON('/arrestCount.php', {query:$('#searchQuery').val()}, function(data) {

        $.each(data, function(index, array) {
            //build the HTML!!
            //options[options.length] = new Option(array['variety']);
        });

    });

}

$(document).ready(function() {
  $('#searchQuery').change(function() {
    if($('#searchQuery').val() != 0) {
      populateArrests();    
    }
  });	
});