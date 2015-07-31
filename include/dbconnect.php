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


$sql = "SELECT id, name, subject, date, notice, recep FROM notice";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
	 
	      date('m-d-Y', strtotime($row['date']));
         echo "<div id=\"idlist\">ID: <b>#". $row["id"]. "</b>
		 <span class=\"padd\"> Name: <b>". $row["name"]. "</span></b>
		 <span class=\"padd\"> Date: <b>". date('d-m-Y', strtotime($row["date"])). "</span></b>
		 <span class=\"padd\">Subject: <b>". $row["subject"]. "</b></span></b>
		 <span class=\"padd\"> For the attention of: <b>". $row["recep"]. "</b></span></div>
		 <div id=\"noticeblock\"><b>Notice:</b> " . $row["notice"] . "</div><p></p>";

	  
		
	}
} else {
     echo "Currently no notices at this time! <p></p>";
}



$conn->close();


?>