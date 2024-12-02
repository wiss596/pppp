<?php
// Recherche dynamique via formulaire
if (isset($_POST['nom'])) {
    $nomRecherche = $_POST['nom'];
    $trouve = false;

    foreach ($employes as $employe) {
        if (strtolower($employe['nom']) === strtolower($nomRecherche)) {
            echo "Employé trouvé : " . implode(", ", $employe);
            $trouve = true;
            break;
        }
    }

    if (!$trouve) {
        echo "Aucun employé trouvé avec ce nom.";
    }
}
?>

<form method="post">
    <input type="text" name="nom" placeholder="Nom de l'employé" required>
    <button type="submit">Rechercher</button>
</form>
