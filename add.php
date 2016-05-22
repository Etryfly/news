<?php
require "config.php";

$DB = mysql_connect($host, $user, $pass);
mysql_select_db($db_name, $DB);



echo '<form action="" method="post">';
echo '<input type="text" name="title">';
echo '<br><br><textarea cols="40" rows="20" name="text"></textarea>';
echo '<input type="submit">';

$query = mysql_query('SELECT max(id) FROM blog');
$max = mysql_fetch_array($query)[0];

if (isset($_POST['text']))
{
    $query = mysql_query("INSERT INTO `blog`(`block`, `id`, `title`) VALUES ( '".$_POST['text']."' , ".($max + 1).", '".$_POST['title']."' )");
    //$query = mysql_query('INSERT INTO `blog`(`block`, `id`) VALUES ( 123 , '.($max + 1).' )');
    if ($query) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}


?>