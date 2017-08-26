<?php
include 'config.php';

	$numberOfField=$_POST["numberOfField"];
	
	// echo "Number : ".$numberOfField;

if($numberOfField > $maxNumberOfFields){
	echo '<div class="alert alert-danger">
  			<strong>Sorry!!</strong> Only '.$maxNumberOfFields.' Fileds allowed
		</div>';
	$numberOfField = $maxNumberOfFields;
}

	echo '<form id="fieldform">
			<div class="col-md-8">
			<table class="table table-hover">
				<thead class="thead-default">
					<tr>
						<th>#</th>
						<th>Field Name</th>
						<th>Field Type</th>
					</tr>
				</thead>
			<tbody>
  ';
	
	for($i = 1; $i <= $numberOfField; $i++){
		// echo '<div class="col-md-2"></div>
		// 	<div class="col-md-4"><input type="text" class="form-control" id="field'.$i.'Name" placeholder="Enter Field Name"></div>
		// 	<div class="col-md-4"><input type="text" class="form-control" id="field'.$i.'Type" placeholder="Enter Field Type"></div>
		// 	<div class="col-md-2"></div>';
		echo '<tr><th scope="row">'. $i .'</th>
					<td>
						<input type="text" class="form-control" id="field'.$i.'Name" placeholder="Enter Field Name">
					</td>
					<td>
						<input type="text" class="form-control" id="field'.$i.'Type" placeholder="Enter Field Type">
					</td>
				<tr>';

	}

	echo "</tbody></tabel></div></form>";
?>