<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="frmserver.php" method="post">


 <table id="emptbl">
        
        <tr style="background: #03c04a; color: white;">
            <th>Cow ID</th>
            <th>Lactation</th>
            <th>Feed Type (AM)</th>
            <th>Feed Qty (AM)</th>
            <th>Milk Qty (AM)</th>
            <th>Feed Type (PM)</th>
            <th>Feed Qty (PM)</th>
            <th>Milk Qty (PM,)</th>
            <th>Total milk (L)</th>
            <th>Infection</th>
            <th>Vert Chem</th>
            <th>Date</th>
        </tr>
        <tr>
            <td id="col0"><input type="text"  name="cow"></td>
            <td id="col1"><input type="text"  name="lac"></td>
            <td id="col2"><input type="text"  name="ftyp"></td>
            <td id="col3"><input type="text"  name="fqty"></td>
            <td id="col4"><input type="text"  name="mlk"></td>
            <td id="col5"><input type="text"  name="feedtyp"></td>
            <td id="col6"><input type="text"  name="feedqty"></td>
            <td id="col7"><input type="text"  name="mlkqty"></td>
            <td id="col8"><input type="text"  name="tot"></td>
            <td id="col9"><input type="text"  name="inf"></td>
            <td id="col10"><input type="text"  name="trt"></td>
            <td id="col11"><input type="text"  name="date"></td>
        </tr>
        
    </table>

     
    <input type="submit" value="Submit">
</form>
</body>
</html>