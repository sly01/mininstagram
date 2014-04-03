<?php
require 'adminCheck.php';
?>
<?php

$directory = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

$allowedExts = array("gif", "jpeg", "jpg", "png");

foreach($_FILES['files']['name'] as $f => $name) {

  $temp = explode(".", $_FILES["files"]["name"][$f]);
  $extension = end($temp);

  if ((($_FILES["files"]["type"][$f] == "image/gif")
  || ($_FILES["files"]["type"][$f] == "image/jpeg")
  || ($_FILES["files"]["type"][$f] == "image/jpg")
  || ($_FILES["files"]["type"][$f] == "image/pjpeg")
  || ($_FILES["files"]["type"][$f] == "image/x-png")
  || ($_FILES["files"]["type"][$f] == "image/png"))
  && ($_FILES["files"]["size"][$f] < 2000000)
  && in_array($extension, $allowedExts)) {
  
    
    if ($_FILES["files"]["error"][$f] > 0) 
    {
      echo "Return Code: " . $_FILES["files"]["error"][$f] . "<br>";
    }
    else
    {
    echo "Upload: " . $_FILES["files"]["name"][$f] . "<br>";
    echo "Type: " . $_FILES["files"]["type"][$f] . "<br>";
    echo "Size: " . ($_FILES["files"]["size"][$f] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["files"]["tmp_name"][$f] . "<br>";

    if (file_exists($directory. $_FILES["files"]["name"][$f]))
      {
      echo $_FILES["files"]["name"][$f] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["files"]["tmp_name"][$f], $directory . $_FILES["files"]["name"][$f]);
      echo "Stored in: " . $directory . $_FILES["files"]["name"][$f];
      require "database.php";
      $sql = "INSERT INTO list (owner, filename)
            VALUES ('$owner','$filename')";

      mysql_query($sql, $conn);
 
      mysql_close($conn);

      echo "<br/>"."Basarili";
      }
    }
  


  }
  else
  {
    echo "Invalid file";
  }
}

?>
<br/>
 <a href="admin.php">Go Back</a>
