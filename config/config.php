<?php
// config file
$httpHost="http://old.swl.pp.ua/balckjack";
$title="Black-Jack the online game";
$metaDescription="Black-jack the online game. Powered by SWL.";
$metaKeywords="Black-Jack, black-jack, blackjack, online game, the online game, card game";
$metaAuthor="Scorpion";

$login="scorpion";
$password="fyybubkzwbz";
$server="localhost";
$db="blackjack";
// ����������� � �� (������ �����)
$connect=mysql_connect($server, $login, $password) or die("<br>�� ���� ����������� � MySQL! <font color='#f00'>SWL server</font><br>");
mysql_select_db($db, $connect) || die("�� ������� DB: ".$db.". Error if any was: ".mysql_error() );
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_general_ci'");
define( "CONNECT", $connect );
?>