<?php
  //Tanimlamalar Baslangic
  $db_adres ="localhost";
  $db_user  ="root";
  $db_pass  ="root";
  //Tanimlamalar Sonuc

  $conn=mysql_connect($db_adres,$db_user,$db_pass);
  if(!$conn){
  die("Baglanti Hatasi:".mysql_error());
  }

  mysql_select_db("ceng310", $conn);

$sql =mysql_query("SELECT * FROM list ") or die("SORGU HATASI");

while ($row = mysql_fetch_array($sql)) {
        $owner = $row['owner'];
        $filename = $row['filename'];
       
    echo '<tr>'."<td>"." ".$owner."</td>"."<td>"." ".$filename."</td>"."<br/>";
    
}

    mysql_close($conn);

?>