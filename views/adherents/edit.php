<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un adhérent</title>
</head>

<body>

    <h2>Modifier un adhérent</h2>

    <form action="index.php?action=update-adherent" method="POST">

        <input type="hidden" name="id" value="<?= $adherent->getId(); ?>">

        <label>Nom :</label><br>
        <input type="text" name="nom" value="<?= $adherent->getNom(); ?>" required><br><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom" value="<?= $adherent->getPrenom(); ?>" required><br><br>

        <label>Email :</label><br>
        <input type="email" name="email" value="<?= $adherent->getEmail(); ?>" required><br><br>

        <label>Téléphone :</label><br>
        <input type="text" name="telephone" value="<?= $adherent->getTelephone(); ?>"><br><br>

        <label>Date de naissance :</label><br>
        <input type="date" name="date_naissance" value="<?= $adherent->getDateNaissance(); ?>"><br><br>

        <label>Date d'inscription :</label><br>
        <input type="date" name="date_inscription" value="<?= $adherent->getDateInscription(); ?>" required><br><br>

        <label>ID Salle :</label><br>
        <input type="number" name="id_salle" value="<?= $adherent->getSalleId(); ?>" required><br><br>

        <button type="submit">Modifier</button>
        <a href="index.php?action=adherents">Annuler</a>

    </form>

</body>

</html>