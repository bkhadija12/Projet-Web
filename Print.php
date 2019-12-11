<?php
// including database connection
require 'configg.php';
?>

<html>
<head><title>Base De Donneès!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<style></style>
</head>
<body body onload="window.print()">
	<center>
<?php
                $sqli = mysqli_query($link,"SELECT * FROM `commandes` ORDER BY IDCommande");
                           echo "<table border='1' width='100%' class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>IDCommande</th>";
                            echo "<th>Prix</th>";
                            echo "<th>Description   </th>";
                            echo "<th>Date </th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while($row = mysqli_fetch_array($sqli)){
                            echo "<tr>";
                            echo "<td>" . $row['IDCommande'] . "</td>";
                            echo "<td>" . $row['prixTotal'] . "</td>";
                            echo "<td>" . $row['etat'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
?>
</center>
</body>
</html>