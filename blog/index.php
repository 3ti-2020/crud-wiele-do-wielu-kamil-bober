<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="cont">
        <div class="head">
            <h1>Blog</h1>
        </div>
        <div class="side">
            <form action="wyszukiwanie.php" method="post" class='form_tag'>
                <p>Wyszukaj tag:</p>
                <p>#<input type='text' name='wyszukaj' class='szukaj'></p>
                <input type="submit" class='szukaj' value='Wyszukaj'>
            </form>
        </div>
        <div class="main">
            <?php
            $conn = new mysqli("mysql-bogdannwj.alwaysdata.net", "bogdannwj", "qscftghJ1", "bogdannwj_dbt");

            $result1 = $conn->query("SELECT * FROM post");
            while($row1 = $result1->fetch_assoc() ){
                echo("<article class='post'>");
                echo("<h2 class='tytul'>".$row1['tytul']."</h2>");
                echo("<img src='".$row1['zdj']."' class='zdj'>");
                echo("<p class='tresc'>");
                echo($row1['tresc']);
                echo("</p>");
                echo("<div class='tagi'>");
                echo("<h3 class='tag'>");
                    }
                echo("</h3>");
                echo("</div>");
                echo("</article>");
            }


        ?> 
        </div>
    </div>
    
</body>
</html>
