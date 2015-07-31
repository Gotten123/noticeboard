<!DOCTYPE html>
<html>
<head>
<meta http-equiv="" content="30";URL=index.php" /> 
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="logo">
<img src="images/anand.png"> </div>
<h1>Welcome to Anand International Ltd Notice board</h1>
<h2><p>Fill in the form at the bottom to create stock updates</p></h2>

<?php

include 'include/dbconnect.php';

?>

<form name="form1" action="insert.php" method="post" enctype="multipart/form-data">
Name: <input type="text" name="name"><p></p>
Subject: <input type="text" name="subject"><p></p>
Date: <input type="date" name="date"><p></p>
Notice: <input type="text" name="notice" maxlength="100" size="100"><p></p>

For the Attention of: <select name="recep" style="padding-left:47px; float:right;"><p></p>
<option value="IT Dept.">IT Dept.</option>
<option value="Sales Dept">Sales Dept.</option>
<option value="Accounts Dept">Accounts Dept.</option>
<option value="Vic">Vic</option>
<option value="Jay">Jay</option>
<option value="Warehouse">Warehouse</option>








</select><p></p>
  
  
  
    <input type="submit" value="Submit" name="submit">
</form>

<p></p>





</body>
</html>