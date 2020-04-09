<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<br />
<br />
<br />
<br />
<br />
<br />
<div align="center" style="height:500px; width:500px; margin-left:400px">
<fieldset >
<legend align="center" ><h1>Personal Details</h1></legend>
<?php
require("connect.php");
$q="select * from details order by first_name";
$res=mysqli_query($con,$q);
?>

<table width="500px" height="90%" class="table table-striped">
<tr> <th> ID </th><th>FIRST NAME</th><th>LAST NAME</th><th>EMAIL</th></tr>
<?php
while($row=mysqli_fetch_array($res))
{
	$id=$row[0];
$fname=$row[1];
$lname=$row[2];
$email=$row[3];

?>
<tr><td><?php echo $id ?></td>
<td><?php echo $fname ?></td>
<td><?php echo $lname ?></td>
<td><?php echo $email ?></td></tr>
<?php } ?>
</table>
<?php mysqli_close($con); ?>
</fieldset>
</div>
<body>
</body>
</html>