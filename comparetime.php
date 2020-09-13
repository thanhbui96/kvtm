

<!DOCTYPE html>
<html>
<body>

<h2>JavaScript getTime()</h2>

<p>The internal clock in JavaScript counts from midnight January 1, 1970.</p>
<p>The getTime() function returns the number of milliseconds since then:</p>







<?php  

 $servername = "localhost:3306";        //example = localhost or 192.168.0.0
    $username = "root";     //example = root
    $password = "admin";    
    $dbname = "smartgarden";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    };


    $query ="SELECT * from humidity1";                    // Select all data in table "status"
    $result = $conn->query($query);
    
        while($row = $result->fetch_assoc()) 
        {  
    		 $date=$row["date"];
    		


    }
   echo $date; 
   echo '<br>';
   echo strtotime($date);
      echo '<br>';
    $date=strtotime($date);
    echo $date;
  date_default_timezone_set('Asia/Jakarta');
    $x = date("2020-06-09 20:33:33");
    echo $x;
    echo '<br>';

   echo '<br>';
   $x=strtotime($x);
   echo $x;
       $x1=$x-$date+18000;
   echo '<br>';
 echo $x1;
?>


</body>
</html> 
