<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un adhérent</title>
</head>
<body>

    <h1>Ajouter un adhérent</h1>

    <form action="index.php?action=store-adherent" method="POST">

        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom" required><br><br>

        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>

        <label>Téléphone :</label><br>
        <input type="text" name="telephone"><br><br>

        <label>Date de naissance :</label><br>
        <input type="date" name="date_naissance"><br><br>

        <label>Date d'inscription :</label><br>
        <input type="date" name="date_inscription" required><br><br>

        <label>ID Salle :</label><br>
        <input type="number" name="id_salle" min="1" required><br><br>

        <button type="submit">Ajouter</button>

        <a href="index.php?action=adherents">
            <button type="button">Annuler</button>
        </a>

    </form>

</body>
</html>