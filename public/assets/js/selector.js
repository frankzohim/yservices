
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp("^"+searchField, "i");
  $.getJSON("{{'asset('assets/js/data/laposte_hexasmal.json')}}", function(data) {
   $.each(data, function(key, value){
    if (value.fields.nom_de_la_commune.search(expression) != -1 || value.fields.code_postal.search(expression) != -1)
    {
        return new Promise(resolve => {
            setTimeout(function() {
                $('#result').append('<li class="list-group-item link-class"> '+value.fields.nom_de_la_commune+' | <span class="text-muted">'+value.fields.code_postal+'</span></li>');
            }, 10);
          });

    }
   });
  });
 });

 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[1]));
  $("#result").html('');
 });
});


