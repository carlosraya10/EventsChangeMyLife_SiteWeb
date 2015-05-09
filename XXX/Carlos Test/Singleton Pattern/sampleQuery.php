<?php
		//On créé la connexion
       include 'Singleton_Database.class.php';

//On accede à la méthode singleton qui va créer une instance de notre classe
$newSingleton = SingletonPattern::singleton();
//on accede au méthode "query"
$res = "SELECT * FROM people";
$usuario = $newSingleton->query($res);

//On montre tous les utilisateurs
echo "On montre tous les utilisateurs <br/>";

foreach ($usuario as $row):
  echo "<tr>";
  echo "<td align='center'>".$row["id_people"]."</td><td align='center'>" . $row["fname"]."</td><td align='center'>" . $row["lname"]."</td><td align='center'>" . $row["email"]."</td><td align='center'>" . $row["sex"]. "</td><td align='center'>" . $row["username"]. "</td><td align='center'>" . $row["pass"]. "</td>";
  echo "</tr>";
  echo "<br/>";
endforeach;
?>