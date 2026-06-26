<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des adhérents</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }

        th{
            background:#333;
            color:white;
        }

        a{
            text-decoration:none;
        }

        .btn{
            padding:8px 15px;
            border-radius:5px;
            color:white;
        }

        .add{
            background:green;
        }

        .edit{
            background:orange;
        }

        .delete{
            background:red;
        }
    </style>
</head>

<body>

<h1>Liste des adhérents</h1>

<p>
    <a class="btn add" href="index.php?action=create-adherent">
        Ajouter un adhérent
    </a>
</p>

<table>

    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Date naissance</th>
        <th>Date inscription</th>
        <th>Salle</th>
        <th>Actions</th>
    </tr>

    <?php if (!empty($adherents)): ?>

        <?php foreach ($adherents as $adherent): ?>

        <tr>

            <td><?= $adherent->getId(); ?></td>

            <td><?= $adherent->getNom(); ?></td>

            <td><?= $adherent->getPrenom(); ?></td>

            <td><?= $adherent->getEmail(); ?></td>

            <td><?= $adherent->getTelephone(); ?></td>

            <td><?= $adherent->getDateNaissance(); ?></td>

            <td><?= $adherent->getDateInscription(); ?></td>

            <td><?= $adherent->getSalleId(); ?></td>

            <td>

                <a class="btn edit"
                   href="index.php?action=edit-adherent&id=<?= $adherent->getId(); ?>">
                    Modifier
                </a>

                <a class="btn delete"
                   href="index.php?action=delete-adherent&id=<?= $adherent->getId(); ?>"
                   onclick="return confirm('Voulez-vous supprimer cet adhérent ?');">
                    Supprimer
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    <?php else: ?>

        <tr>
            <td colspan="9">
                Aucun adhérent trouvé.
            </td>
        </tr>

    <?php endif; ?>

</table>

</body>
</html>