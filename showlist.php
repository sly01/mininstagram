<?php
 require "database.php";

$sql =mysql_query("SELECT * FROM List") or die("SORGU HATASI");

while ($row = mysql_fetch_array($sql)) {
        $owner = $row['owner'];
        $filename = $row['filename'];
      
    echo '<tr>'."<td>"." ".$owner."</td>"."<td>"." ".$filename."</td>"."<br/>";
    
}

    mysql_close($conn);

?>

<a href="admin.php">Admin Panel</a>