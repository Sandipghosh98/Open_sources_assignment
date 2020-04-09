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
<body style="margin-top:130px;">
<form method="post" name="form1" action="" style="border:30px;height:500px;width:184;left-margin:500px;top:margin:500px;" >
<center>
<h1> Personal Details</h1>
<table   cellspacing="10px"  style="margin-top:50px;" >

      
		
        <tr>
          <td> First Name : </td> </tr>
          <tr>
          <td> <input type="text" name="fname" required="required" pattern="[a-zA-Z ]{1,15}"  title="Username should only contain letters and no space is allowed. e.g. Sudip"/> </td>
        </tr>
		
        <tr>
          <td> Last Name </td> </tr>
          <tr>
          <td> <input type="text" name="lname" required="required" pattern="[a-zA-Z]{1,15}" title="Username should only contain letters and no space is allowed. e.g. Sudip"/> </td>
        </tr>
		
        <tr>
          <td>  Email </td> </tr>
          <tr>
          <td> <input type="email" name="email" required="required"/> </td>
        </tr>
      
       
		
        
</table>
<br />

          <input type="submit"  name="insert1" value="  Save     " class="btn btn-success" />
          
 </center> 
</form>
<?php
require("connect.php");
if(isset($_POST['insert1']))
{
  
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];

   

    $q="insert into details(first_name,last_name,email) values('".$fname."','".$lname."','".$email."')";
$n=mysqli_query($con,$q);
if(!$n){
echo '<script>alert("Record insertion failed")</script>';
}
else{
    echo '<script>alert("Record insertion sucessfull");window.location.href = "index.php";</script>';
    
}
mysqli_close($con);
    
}

?>

</body>
</html>