<?php

$conn = mysqli_connect("localhost","root","123","mydb",3306);

if (!$conn)  {
    echo"Bağlantı Başarısız...";
}

?>