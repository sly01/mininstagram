
<?php
  /*
  //Tanimlamalar Baslangic
  $db_adres ="localhost";
  $db_user  ="root";
  $db_pass  ="root";
  //Tanimlamalar Sonuc

  $owner = $_SESSION["user"];
  $filename = $_FILES["files"]["name"][$f];
  

  $conn=mysql_connect($db_adres,$db_user,$db_pass);
  if(!$conn){
  die("Baglanti Hatasi:".mysql_error());
  }

  mysql_select_db("ceng310", $conn);

 $sql = "INSERT INTO list (owner, filename)
            VALUES ('$owner','$filename')";

    mysql_query($sql, $conn);
 
    mysql_close($conn);

    echo "basarili";
    */
mysql_connect('localhost','root','root')or die("Sorgu hatasi:");
mysql_select_db('ceng310')or die("Veritabanı hatasi: ");

?>