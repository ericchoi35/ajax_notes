<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js'></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('submit', 'form', function(){
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function(data){
					$("#body").html(data)
				}
			); 
			$('#title').val('');	
			return false;
		});

		$(document).on('change', '.update', function(){
			console.log($(this).serialize());
			$.post(
				$(this).attr('action'),
				$(this).serialize(),
				function(data){
					$("#body").html(data)
				}
			);
			return false;
		});

		$('form').submit();

	});
</script>
<body>
<div class="container">
	<h1>Ajax Notes</h1>
	<div id="body">

	</div>
	<form id='add_note' role='form' action='/notes/create' method='post'>
		<input id='title' type='text' class='form-control' name='title' placeholder='Insert note title here'>
		</br>
		<input type='submit' class='btn btn-primary pull-right' value='Add Note'>
	</form>
</div>
</body>
</html>