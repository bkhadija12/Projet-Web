<?php
require "../entities/Client.php";

$Client = new Client();
$result = $Client->afficher();
//$criminel->closeConnection();
?>
<h1>La Liste des Criminels</h1>
<table style="border:double">
  <thead>
    <tr>
      <th>CIN</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Date de naissance</th>
      <th>nombre de crimes</th>
      <th>modifier</th>
    </tr>
  </thead>
  <tbody>


<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       
        ?>
            <tr>
                <td><?php echo $row["cin"] ?></td>
                <td><?php echo $row["nom"] ?></td>
                <td><?php echo $row["prenom"] ?></td>
                <td><?php echo $row["datenaissance"] ?></td>
                <td><?php echo $row["nbcrimes"] ?></td>
                <td><a href="update.php?<?php echo 'cin=' . $row["cin"] . '&nom=' . $row["nom"] . '&prenom=' . $row["prenom"] . '&datenaissance=' . $row["datenaissance"] . '&nbcrimes=' . $row["nbcrimes"]  ?>">modifier</a></td>
                
        </tr>

        <?php

    }
} else {
    echo "0 results";
}
$Client->closeConnection();
?>
  </tbody>
</table>