<?php
include 'admin_header.php';
?>
<html>
<head><center><br><br>
<h1>FEEDBACK</h1><br>
</head>
<form name="view_service.php" action="#" method="post" >
<body>

<table width=75% align "center">
<tr><th>Id</th>
<th>REG_ID</th>
<th>DATE</th>
<th>FEEDBACK</th>
</tr>
<?php
include 'dbconnect.php';
$results=mysqli_query($con,"select * from `tbl_feedback`");
$i=1;
while($row=mysqli_fetch_array($results))
{
	$kid=$row['Feed_id'];
	
echo "<tr><td>$i</td>
<td>$row[Reg_id]</td>
	<td>$row[Date]</td>
	<td>$row[Feed_msg]</td>";	
	$i++;
}

?>
</table>
<br>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>