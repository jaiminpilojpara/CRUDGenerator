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
						<th>Name</th>
						<th>Type</th>
						<th>Length</th>
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
						<input type="text" class="form-control" id="field'.$i.'Name" name="field'.$i.'Name" placeholder="Enter Field Name">
					</td>';
					// <td>
					// 	<input type="text" class="form-control" id="field'.$i.'Type" placeholder="Enter Field Type">
					// </td>
		echo '<td>
			<select class="form-control" name="field'.$i.'Type" id="field'.$i.'Type">
				<option title="A 4-byte integer, signed range is -2,147,483,648 to 2,147,483,647, unsigned range is 0 to 4,294,967,295" value="INT">INT</option>
				<option title="A variable-length (0-65,535) string, the effective maximum length is subject to the maximum row size" value="VARCHAR">VARCHAR</option>
				<option title="A TEXT column with a maximum length of 65,535 (2^16 - 1) characters, stored with a two-byte prefix indicating the length of the value in bytes" value="TEXT">TEXT</option>
				<option title="A date, supported range is 1000-01-01 to 9999-12-31" value="DATE">DATE</option>
				<optgroup label="Numeric">
					<option title="A 1-byte integer, signed range is -128 to 127, unsigned range is 0 to 255" value="TINYINT">TINYINT</option>
					<option title="A 2-byte integer, signed range is -32,768 to 32,767, unsigned range is 0 to 65,535" value="SMALLINT">SMALLINT</option>
					<option title="A 3-byte integer, signed range is -8,388,608 to 8,388,607, unsigned range is 0 to 16,777,215" value="MEDIUMINT">MEDIUMINT</option>
					<option title="A 4-byte integer, signed range is -2,147,483,648 to 2,147,483,647, unsigned range is 0 to 4,294,967,295" value="INT">INT</option>
					<option title="An 8-byte integer, signed range is -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807, unsigned range is 0 to 18,446,744,073,709,551,615" value="BIGINT">BIGINT</option>
					<option disabled="disabled">-</option>
					<option title="A fixed-point number (M, D) - the maximum number of digits (M) is 65 (default 10), the maximum number of decimals (D) is 30 (default 0)" value="DECIMAL">DECIMAL</option>
					<option title="A small floating-point number, allowable values are -3.402823466E+38 to -1.175494351E-38, 0, and 1.175494351E-38 to 3.402823466E+38" value="FLOAT">FLOAT</option>
					<option title="A double-precision floating-point number, allowable values are -1.7976931348623157E+308 to -2.2250738585072014E-308, 0, and 2.2250738585072014E-308 to 1.7976931348623157E+308" value="DOUBLE">DOUBLE</option>
					<option title="Synonym for DOUBLE (exception: in REAL_AS_FLOAT SQL mode it is a synonym for FLOAT)" value="REAL">REAL</option>
					<option disabled="disabled">-</option>
					<option title="A bit-field type (M), storing M of bits per value (default is 1, maximum is 64)" value="BIT">BIT</option>
					<option title="A synonym for TINYINT(1), a value of zero is considered false, nonzero values are considered true" value="BOOLEAN">BOOLEAN</option>
					<option title="An alias for BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE" value="SERIAL">SERIAL</option>
				</optgroup>
				<optgroup label="Date and time">
					<option title="A date, supported range is 1000-01-01 to 9999-12-31" value="DATE">DATE</option>
					<option title="A date and time combination, supported range is 1000-01-01 00:00:00 to 9999-12-31 23:59:59" value="DATETIME">DATETIME</option>
					<option title="A timestamp, range is 1970-01-01 00:00:01 UTC to 2038-01-09 03:14:07 UTC, stored as the number of seconds since the epoch (1970-01-01 00:00:00 UTC)" value="TIMESTAMP">TIMESTAMP</option>
					<option title="A time, range is -838:59:59 to 838:59:59" value="TIME">TIME</option>
					<option title="A year in four-digit (4, default) or two-digit (2) format, the allowable values are 70 (1970) to 69 (2069) or 1901 to 2155 and 0000" value="YEAR">YEAR</option>
				</optgroup>
				<optgroup label="String">
					<option title="A fixed-length (0-255, default 1) string that is always right-padded with spaces to the specified length when stored" value="CHAR">CHAR</option>
					<option title="A variable-length (0-65,535) string, the effective maximum length is subject to the maximum row size" value="VARCHAR">VARCHAR</option>
					<option disabled="disabled">-</option>
					<option title="A TEXT column with a maximum length of 255 (2^8 - 1) characters, stored with a one-byte prefix indicating the length of the value in bytes" value="TINYTEXT">TINYTEXT</option>
					<option title="A TEXT column with a maximum length of 65,535 (2^16 - 1) characters, stored with a two-byte prefix indicating the length of the value in bytes" value="TEXT">TEXT</option>
					<option title="A TEXT column with a maximum length of 16,777,215 (2^24 - 1) characters, stored with a three-byte prefix indicating the length of the value in bytes" value="MEDIUMTEXT">MEDIUMTEXT</option>
					<option title="A TEXT column with a maximum length of 4,294,967,295 or 4GiB (2^32 - 1) characters, stored with a four-byte prefix indicating the length of the value in bytes" value="LONGTEXT">LONGTEXT</option>
					<option disabled="disabled">-</option>
					<option title="Similar to the CHAR type, but stores binary byte strings rather than non-binary character strings" value="BINARY">BINARY</option>
					<option title="Similar to the VARCHAR type, but stores binary byte strings rather than non-binary character strings" value="VARBINARY">VARBINARY</option>
					<option disabled="disabled">-</option>
					<option title="A BLOB column with a maximum length of 255 (2^8 - 1) bytes, stored with a one-byte prefix indicating the length of the value" value="TINYBLOB">TINYBLOB</option>
					<option title="A BLOB column with a maximum length of 16,777,215 (2^24 - 1) bytes, stored with a three-byte prefix indicating the length of the value" value="MEDIUMBLOB">MEDIUMBLOB</option>
					<option title="A BLOB column with a maximum length of 65,535 (2^16 - 1) bytes, stored with a two-byte prefix indicating the length of the value" value="BLOB">BLOB</option>
					<option title="A BLOB column with a maximum length of 4,294,967,295 or 4GiB (2^32 - 1) bytes, stored with a four-byte prefix indicating the length of the value" value="LONGBLOB">LONGBLOB</option>
					<option disabled="disabled">-</option>
					<option title="An enumeration, chosen from the list of up to 65,535 values or the special error value" value="ENUM">ENUM</option>
					<option title="A single value chosen from a set of up to 64 members" value="SET">SET</option>
				</optgroup>
				<optgroup label="Spatial">
					<option title="A type that can store a geometry of any type" value="GEOMETRY">GEOMETRY</option>
					<option title="A point in 2-dimensional space" value="POINT">POINT</option>
					<option title="A curve with linear interpolation between points" value="LINESTRING">LINESTRING</option>
					<option title="A polygon" value="POLYGON">POLYGON</option>
					<option title="A collection of points" value="MULTIPOINT">MULTIPOINT</option>
					<option title="A collection of curves with linear interpolation between points" value="MULTILINESTRING">MULTILINESTRING</option>
					<option title="A collection of polygons" value="MULTIPOLYGON">MULTIPOLYGON</option>
					<option title="A collection of geometry objects of any type" value="GEOMETRYCOLLECTION">GEOMETRYCOLLECTION</option>
				</optgroup>
				<optgroup label="JSON">
					<option title="Stores and enables efficient access to data in JSON (JavaScript Object Notation) documents" value="JSON">JSON</option>
				</optgroup>
			</select>
		</td>';
		echo'<td>
				<input type="number" class="form-control" id="field'.$i.'Length" placeholder="Enter Field Length">
			</td>
			<tr>';

	}

	echo "</tbody></tabel></div></form>";
?>