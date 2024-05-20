<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'offre d'emploi</title>
    <link rel="stylesheet" href="<?php echo base_url('agregateur2/dist/style.css'); ?>" />
</head>
<body>
<div class="max-w-md mx-auto">
            <h2 class="text-2xl font-bold mb-4">Modifier l'offre d'emploi</h2>
            <form action="modifier-offre-processus.php" method="POST" class="space-y-4">
                <input type="hidden" name="offre_id" value="<?php echo $row['ID_O']; ?>">
                
                <div>
                    <label for="entreprise" class="block mb-1">Entreprise:</label>
                    <input type="text" id="entreprise" name="entreprise" value="<?php echo $row['Entreprise']; ?>" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                
                <div>
                    <label for="titre" class="block mb-1">Titre:</label>
                    <input type="text" id="titre" name="titre" value="<?php echo $row['Titre']; ?>" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                
                <div>
                    <label for="contrat" class="block mb-1">Type de contrat:</label>
                    <select id="contrat" name="contrat" class="w-full border border-gray-300 rounded px-3 py-2">
                        <option value="CDI" <?php if($row['Contrat'] == 'CDI') echo 'selected'; ?>>CDI</option>
                        <option value="CDD" <?php if($row['Contrat'] == 'CDD') echo 'selected'; ?>>CDD</option>
                        <option value="Stage" <?php if($row['Contrat'] == 'Stage') echo 'selected'; ?>>Stage</option>
                        <option value="Apprentissage" <?php if($row['Contrat'] == 'Apprentissage') echo 'selected'; ?>>Apprentissage</option>
                    </select>
                </div>
                
                <div>
                    <label for="ville" class="block mb-1">Ville:</label>
                    <input type="text" id="ville" name="ville" value="<?php echo $row['Ville']; ?>" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>

                <div>
                    <label for="description_offre" class="block mb-1">Description (1000 caractères):</label>
                    <input type="text" id="description_offre" name="description_offre" value="<?php echo $row['Description_offre']; ?>" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>
                
                <div>
                    <input type="submit" value="Enregistrer" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                </div>
            </form>
        </div></body>
</html>
