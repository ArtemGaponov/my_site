<?php
session_start();


mysql_connect('localhost', 'root', '201288') or die ('нихуя не подключилось');
mysql_select_db('artemka');
$q = mysql_query('select * from q');
while ($res = mysql_fetch_assoc($q)) {
    var_dump($res);
}







