<html>
<head>
</head>
<body>
<?php
$z=mysql_connect('localhost','root','111111');
if(!$z){
die ('Connection fail:'.mysql_error());
}
mysql_select_db('opentutorials');
mysql_query("set session character_set_connection=uft8;");
mysql_query("set session character_set_result=utf8;");
mysql_query("set session character_set_client=utf8;");

//ok
?>

<?php
$a="SELECT id,title FROM topic;";
//a wea an doi...
?>
</body>
</html>
