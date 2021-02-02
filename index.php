<!doctype html>
<html lang="en">
<head>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
<!-- jQuery UI -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
 
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
  <h5 class="mt-4">Autocomplete Textbox Using PHP, MySQL and jQuery - <a href="https://www.cluemediator.com/" target="_blank">Clue Mediator</a></h5>
  <div class="row">
     <div class="col-md-4">
     <label>City:</label>
     <input type="text" name="city" id="search_city" placeholder="Type to search..." class="form-control">  
     </div>
  </div>
</div>

<script type="text/javascript">
  $(function() {
     $( "#search_city" ).autocomplete({
       source: 'ajax-city-search.php',
     });
  });
</script>

</body>
</html>