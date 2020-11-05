<?php
    $conn = new mysqli("mysql-bogdannwj.alwaysdata.net", "bogdannwj", "qscftghJ1", "bogdannwj_dbt");
    $sql = "INSERT INTO `tytuly`(`id_tytul`, `tytul`) VALUES (NULL, '".$_POST['tytul']."')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
?>