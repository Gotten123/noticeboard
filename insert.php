<html>
<header>
<meta http-equiv="refresh" content="1;URL=index.php" /> 
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>
 
 

 
 <?php


 
 
 
 
 

$servername = "localhost";
$username = "peter";
$password = "abc123";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
mysql_select_db("my_db");

$name= str_replace("'","",$_POST['name']);
$sub= str_replace("'","",$_POST['subject']);
$date= str_replace("'","",$_POST['date']);
$notice= str_replace("'","", $_POST['notice']);
$recep= str_replace("'","", $_POST['recep']);





//inserting data order

$order = "INSERT INTO notice (name, subject, date, notice, recep)
         VALUES ('$name', '$sub', '$date', '$notice', '$recep')";
      if(mysqli_query($conn, $order)){
    echo "Records added successfully. " ;


} else{
    echo "ERROR: Could not able to execute $order. " . mysqli_error($conn);
}



mysqli_close($conn)
?>






</body>
</html>