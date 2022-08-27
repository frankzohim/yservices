
<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Search HTML Table Data by using JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">JSON Live Data Search using Ajax JQuery</h2>
   <h3 align="center">Employee Data</h3>
   <br /><br />
   <div align="center">
    <input type="text" name="search" id="search" placeholder="Search Employee Details" class="form-control" />
   </div>
   <ul class="list-group" id="result"></ul>
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp("^"+searchField, "i");
  $.getJSON('{{ asset('assets/js/data/laposte_hexasmal.json')}}', function(data) {
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
</script>

