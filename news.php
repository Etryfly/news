
<html>
<head>
    <title>Чудо-новости</title>
    <style type="text/css">
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
    <script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/C04EF8FF-8190-2B44-9AAB-8748CDE3CB06/main.js" charset="UTF-8"></script>
</head>
<div class="header">
    <div class="logo"><a href="/files/01.13/stazher/example.php">Чудо-новости.рф</a></div>
    <div class="slogan">только достоверные новости!</div>
</div>


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
$query = mysql_query('SELECT * FROM blog where id='.$_GET['news_id']);
$row = mysql_fetch_array($query);
echo "<h1>".$row[0]."</h1>";
echo '<div class="text"><p>'.$row[1].'</p></div>';
?>



<div class="footer">Все права защищены, 2005-2016</div>
</body>
</html>

