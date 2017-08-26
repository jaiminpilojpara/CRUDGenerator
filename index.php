<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
</head>
<body>
<div class="container">
<br>
	<form id="fieldsForm"><!--Form Start-->
	  	
	  	<div class="form-group row">
	  		<label class="col-sm-2 col-form-label" for="numberOfField">Enter No. of Field :</label>
			<div class="col-md-4">
		    <input type="number" class="form-control" id="numberOfField" placeholder="Enter Number Of Field" onkeyup="CreateTableStructure(this.value);">
		    </div>
	  	</div>

		<!-- Display Fields -->
		<div id="fields"></div>
		<!-- Display Fields -->

	</form>
	<script type="text/javascript">

	function CreateTableStructure(numberOfField) {
		$.ajax({
		type: "POST",
		url: "FieldGenerate.php",
		data:{numberOfField:numberOfField},
		success: function(data){
			$("#fields").html(data);
		}
		});
	}



	</script>

</body>
</html>