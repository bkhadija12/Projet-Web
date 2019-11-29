<?php
require "../entities/Services.php";

$Services = new Services();
$result = $Services->afficher();

?>
<h1>La Liste des Services</h1>
<table style="border:double">
  <thead>
    <tr>
      <th>IDservice</th>
      <th>Nom</th>
      <th>description</th>
      <th>prix</th>
      <th>promotion</th>
      <th>modifier</th>
      <th>supprimer</th>
    </tr>
  </thead>
  <tbody>


<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       
        ?>
            <tr>
                <td><?php echo $row["IDservice"] ?></td>
                <td><?php echo $row["nom"] ?></td>
                <td><?php echo $row["description"] ?></td>
                <td><?php echo $row["prix"] ?></td>
                <td><?php echo $row["promotion"] ?></td>
                <td><a href="updateService.php?<?php echo 'IDservice=' . $row["IDservice"] . '&nom=' . $row["nom"] . '&description=' . $row["description"] . '&prix=' . $row["prix"] . '&promotion=' . $row["promotion"]  ?>">modifier</a></td>
                <td><a href="supprimerService.php?<?php echo 'IDservice=' . $row["IDservice"]  ?>">supprimer</a></td>
                
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