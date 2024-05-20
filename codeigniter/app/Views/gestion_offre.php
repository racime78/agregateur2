<!-- views/gestion_offre.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des offres d'emploi</title>
  <link rel="stylesheet" href="/agregateur2/dist/style.css" />
</head>
<body class="bg-gray-100">

<h2 class="text-2xl font-bold text-gray-800 mb-4">Gestion des offres d'emploi</h2>

<div class="overflow-x-auto">
  <table class="min-w-full border border-gray-200">
    <thead class="bg-gray-100">
      <tr>
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Entreprise</th>
        <th class="px-4 py-2">Titre</th>
        <th class="px-4 py-2">Date de l'offre</th>
        <th class="px-4 py-2">Contrat</th>
        <th class="px-4 py-2">Ville</th>
        <th class="px-4 py-2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        require('config.php');

        // Récupérer les offres d'emploi depuis la base de données
        $sql = "SELECT * FROM offre";
        $result = $conn->query($sql);

        // Afficher les offres d'emploi dans le tableau
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='border px-4 py-2'>" . $row["ID_O"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["Entreprise"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["Titre"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["Date_Offre"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["Contrat"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["Ville"] . "</td>";
            echo "<td class='border px-4 py-2 flex'>";
            echo "<a href='voir-offre.php?id=" . $row["ID_O"] . "' class='text-blue-500 hover:underline mr-2'>Voir</a>";
            echo "<a href='modifier-offre.php?id=" . $row["ID_O"] . "' class='text-yellow-500 hover:underline mr-2'>Modifier</a>";
            echo "<a href='supprimer-offre.php?id=" . $row["ID_O"] . "' class='text-red-500 hover:underline'>Supprimer</a>";
            echo "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='7' class='border px-4 py-2 text-center' colspan='7'>Aucune offre d'emploi trouvée.</td></tr>";
        }
        $conn->close();
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
