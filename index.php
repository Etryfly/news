<html>
<head>

    <title>Чудо-новости</title>

<style>
    body {
        width:500px;
        margin:0 auto;
        font-family:Georgia;
    }
    .header, .footer {
        background:#900;
        color:#FFF;
        padding:10px;
    }
    .header .logo a {font-size:35px; font-weight:bold; color:#FFF; text-decoration:none;}
    .header .slogan {color:#EEE;}

    .news_list .news_item {margin:35px 0;}
    .date {
        margin:5px 0;
        color:#999;
    }

</style>
</head>

<body>
<div class="header">
    <div class="logo"><a href="/files/01.13/stazher/example.php">Чудо-новости.рф</a></div>
    <div class="slogan">только достоверные новости!</div>
</div>

<!--<div class="news_list">-->
<!--    <h1>Последние новости</h1>-->
<!--    <div class="news_item">-->
<!--        <div class="title"><a href="?news_id=6">Томас Бити-беременный мужчина покинул жену: фото и подробности</a></div>-->
<!--        <div class="anounce">  Наконец разродился первый в мире беременный мужчина, Томас Бити.     29 июня в госпитале штата Оре</div>-->
<!--    </div>-->
<div class="news_list">
<h1>Последние новости</h1>

<?php
require "config.php";

$DB = mysql_connect($host, $user, $pass);
mysql_select_db($db_name, $DB);

mysql_query('SET NAMES  uft8');
mysql_query('SET CHARACTER SET  uft8');
mysql_query("SET character_set_results = utf8");
mysql_query('SET COLLATION_CONNECTION="utf8_general_ci"');


$query = mysql_query('SELECT max(id) FROM blog');
$max = mysql_fetch_array($query)[0];
$query = mysql_query('SELECT * FROM blog');

//echo '<a href="add.php">ADD</a><br><br>';
for ($i = 0; $i < $max; $i++) {
    $row = mysql_fetch_array($query);

    echo '<div class="news_item">';
    echo '<div class="title"><a href="?news_id='.$row['id'].'">'. $row['title'].'</a></div>';

    echo "<hr>";

    echo '<div class="anounce">'.substr($row['text'],0,170).'...</div></div>';

}










?>

</div>
</body>
</html>
