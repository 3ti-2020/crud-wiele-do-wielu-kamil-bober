<?php
    $conn = new mysqli("mysql-bogdannwj.alwaysdata.net", "bogdannwj", "qscftghJ1", "bogdannwj_dbt");
    $sql = "INSERT INTO `autorzy`(`id_autor`, `autor`) VALUES (NULL , '".$_POST['autor']."') ";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:index.php");
?>