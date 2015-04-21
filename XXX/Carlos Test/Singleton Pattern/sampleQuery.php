<?php
		//on créé la connexion
       include 'Singleton_Database.class.php';
       $pDatabase = Database::getInstance();
       //On fait la query
       $query = "SELECT * FROM PEOPLE ORDER BY fname ASC";
       //On execute la query
       $result = $pDatabase->query($query);
       var_dump ($result);
       

       /*if ($result->num_rows > 0) {
          // output data of each row
        echo "<tr>";
        echo "<th>NOMBRE</th><th>ID</th><th>PRENOM</th><th>NOM</th><th>EMAIL</th><th>SEXE</th><th>NOM D'UTILISATEUR</th><th>MOT DE PASS</th>";
        echo "</tr>";
        $i = 1;
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td align='center'>$i</td><td align='center'>".$row["id_people"]."</td><td align='center'>" . $row["fname"]."</td><td align='center'>" . $row["lname"]."</td><td align='center'>" . $row["email"]."</td><td align='center'>" . $row["sex"]. "'/'></td><td align='center'>" . $row["username"]. "</td><td align='center'>" . $row["pass"]. "</td><td><a href='javascript:confirmar();'>Supprimer utilisateur</a></td>";
              $i++;
            echo "</tr>";
          }
      } else {
          echo "0 results";
      }

       //On ferme la connexion
       //$m_pInstance->close();

       /*Exemples de queries
       $query = "INSERT INTO PEOPLE (fname,lname,email,sex,username,pass) VALUES (:fname, :lname, :email, :sex, :username, :pass)";
       $query = "SELECT * FROM PEOPLE";
       */
?>