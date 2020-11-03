<?php
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373173", "k9GUvMpjAd", "sql7373173");
    $sql = "INSERT INTO `autorzy`(`id_autor`, `autor`) VALUES (NULL , '".$_POST['autor']."') ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
?>