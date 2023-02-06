<?php
	  mysql_connect('localhost','root','');
	  mysql_select_db('élève');
	  if (($_POST['StudentId']=="")||($_POST['Name']=="")||($_POST['NC']=="")||($_POST['NS']==""))
	  {echo('veuiller remplir les champs vides');
	  require("Ajouter.html");
	  }
	  else
	  {$query="insert into eleve(StudentId,Name,NC,NS)
	  VALUE('$_POST[StudentId]','$_POST[Name]','$_POST[NC]','$_POST[NS]')";
	  mysql_query($query);
	  echo('<b>Félicitation,inscription avec succé<b>');
	  }
	  mysql_close();
      ?>