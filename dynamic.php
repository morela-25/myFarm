<html>
<head>
<title>Onclick increase Table Rows</title>
<script type="text/javascript">
function addRows(){ 
	var table = document.getElementById('emptbl');
	var rowCount = table.rows.length;
	var cellCount = table.rows[0].cells.length; 
	var row = table.insertRow(rowCount);
	for(var i =0; i <= cellCount; i++){
		var cell = 'cell'+i;
		cell = row.insertCell(i);
		var copycel = document.getElementById('col'+i).innerHTML;
		cell.innerHTML=copycel;
	
	}
}
function deleteRows(){
	var table = document.getElementById('emptbl');
	var rowCount = table.rows.length;
	if(rowCount > '2'){
		var row = table.deleteRow(rowCount-1);
		rowCount--;
	}
	else{
		alert('There should be atleast one row');
	}
}
</script>
</head>
<body>
<form action="#" method="post">    
	<table id="emptbl">
		<tr>
			<th>Employee Name</th>
			<th>Phone</th>
			<th>Department</th> 
		</tr> 
		<tr> 
			<td id="col0"><input type="text" name="empname[]" value="" /></td> 


			<td id="col1"><input type="text" name="phone[]" value="" /></td> 
			

			<td id="col2"> 
			<select name="department[]" id="dept"> 
			<option value="0">Select Department</option> 
			<option value="1">Sales</option>
			<option value="2">IT</option>
			<option value="3">Warehouse</option>
			</select> 
		        </td> 



		</tr>  
	</table> 
	<table> 
		<tr> 
			<td><input type="button" value="Add Row" onclick="addRows()" /></td> 
			<td><input type="button" value="Delete Row" onclick="deleteRows()" /></td> 
			<td><input type="submit" value="Submit" /></td> 
		</tr>  
	</table> 
 </form> 
</body> 
</html>