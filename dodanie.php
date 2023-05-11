<?php

    $conn = mysqli_connect("localhost","root","","ee09");

    
$k = $_POST['karetka'];
$i1 = $_POST['imie1'];
$i2 = $_POST['imie2'];
$i3 = $_POST['imie3'];


    $sql = "INSERT INTO ratownicy(nrKaretki,ratownik1,ratownik2,ratownik3)
    VALUES('$k','$i1','$i2','$i3')";

    $result = mysqli_query($conn,$sql);

echo "Do bazy zostało wysłane zapytanie: " . "INSERT INTO ratownicy(nrKaretki,ratownik1,ratownik2,ratownik3)
VALUES('$k','$i1','$i2','$i3')";

    mysqli_close($conn);
?>