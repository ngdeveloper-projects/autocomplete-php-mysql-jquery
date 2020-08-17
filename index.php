<!doctype html>
<html lang="en">
<head>
<title>Autocomplete Demo - Javadomain.in</title>
  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.0/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/redmond/jquery-ui.css" type="text/css" /> 
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" type="text/css" />
<script type="text/javascript">
$(function() {
    $("#dynSearchTxt").autocomplete({
        source: "AutoComplete.php",
        minLength: 1
    });       
});
</script>
  
</head>
<body>
<div class="container">
  <div class="row">
    <div class="span12">
      <div class="head">
        <div class="row-fluid">
            <div class="span12">
                <div class="span6">
                    <h1 class="muted"><a href="www.javadomain.in">Autocomplete using jQuery, PHP and MySQL Demo</a></h1>
                </div>
            </div>
        </div>
		
		
        </div>
      </div>
    </div>
	
	
	<div class="jumbotron">
  <div class="container">
        <p>Enter the company names (Eg: Flipkart) <br/><input type='text' name='companyTxt' value='' id='dynSearchTxt' class='dynSearchTxt'></p>
	
  </div>
</div>


  </div>
</div>
</body>
</html>