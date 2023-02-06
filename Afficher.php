<?php
mysql_connect('localhost','root','');
mysql_select_db('élève');
mysql_select_db('bd2');
if (($_POST['StudentId']=="")||($_POST['Name']=="")||($_POST['NC']=="")||($_POST['NS']==""))
{echo('veuiller remplir les champs vides');
    require("Liste des Moyennes.html");
}
else
{$query="insert into eleve(StudentId,Name,NC,NS)
    VALUE('$_POST[StudentId]','$_POST[Name]','$_POST[NC]','$_POST[NS]')";
    mysql_query($query);
    echo('<b>Félicitation,inscription avec succé<b>');
}
foreach ($eleves as $eleve) {
    $moyenne = (($_POST['NS'] * 2) + $_POST['NC']) / 2;
}
mysql_close();
?>