<?php
		//on créé la connexion
       include 'Singleton_Database.class.php';

       
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de 
//crear nuevas instancias, lo que ahorra consumo de recursos
$newSingleton = SingletonPattern::singleton();
//accedemos al método usuarios y los mostramos
$res = "SELECT * FROM people";
$usuario = $newSingleton->query($res);

echo "On montre tous les utilisateurs <br/>";

foreach ($usuario as $row):
  echo "<tr>";
  echo "<td align='center'>".$row["id_people"]."</td><td align='center'>" . $row["fname"]."</td><td align='center'>" . $row["lname"]."</td><td align='center'>" . $row["email"]."</td><td align='center'>" . $row["sex"]. "</td><td align='center'>" . $row["username"]. "</td><td align='center'>" . $row["pass"]. "</td><td><a href='javascript:confirmar();'>Supprimer utilisateur</a></td>";
  echo "</tr>";
  echo "<br/>";
endforeach;
?>