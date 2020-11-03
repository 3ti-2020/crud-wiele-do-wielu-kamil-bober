<?php
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373173", "k9GUvMpjAd", "sql7373173");
    $sql = "INSERT INTO `tytuly`(`id_tytul`, `tytul`) VALUES (NULL, '".$_POST['tytul']."')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
?>