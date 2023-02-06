<?php
mysql_connect('localhost', 'root',''); 
mysql_select_db('élève');
$M=$_POST['StudentId'];
if ($M=="")
{
echo ('<b> Taper un matricule</b>'); 
require ('Supprimer.html');
}
else
{
$query1="select * from eleve where matricule=$M";
$result1-mysql_query($query); 
$rowl-mysql_fetch_row($result1); 
//if (mysql_num_rows($result)==0) 
if (!(isset($row[0])))
{
echo ('ID n existe pas'); 
require ('Supprimer.html');
}
else
{
$query2="Delete * FROM eleve WHERE matricule=$M";
$result2=mysql_query($query2);
echo ('<font size="5" color="#FF0000"> Eléve supprimé');
}
}
mysql_close();
?>