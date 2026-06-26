<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des abonnements</title>

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

<h1>Liste des abonnements</h1>

<p>
    <a class="btn add" href="index.php?action=create-abonnement">
        Ajouter un abonnement
    </a>
</p>

<table>

    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Date début</th>
        <th>Date fin</th>
        <th>Prix</th>
        <th>Statut</th>
        <th>Adhérent</th>
        <th>Actions</th>
    </tr>

    <?php if (!empty($abonnements)): ?>

        <?php foreach ($abonnements as $abonnement): ?>

        <tr>

            <td><?= $abonnement->getId(); ?></td>

            <td><?= $abonnement->getType(); ?></td>

            <td><?= $abonnement->getDateDebut(); ?></td>

            <td><?= $abonnement->getDateFin(); ?></td>

            <td><?= $abonnement->getPrix(); ?> DH</td>

            <td><?= $abonnement->getStatut(); ?></td>

            <td><?= $abonnement->getAdherentId(); ?></td>

            <td>

                <a class="btn edit"
                   href="index.php?action=edit-abonnement&id=<?= $abonnement->getId(); ?>">
                    Modifier
                </a>

                <a class="btn delete"
                   href="index.php?action=delete-abonnement&id=<?= $abonnement->getId(); ?>"
                   onclick="return confirm('Voulez-vous supprimer cet abonnement ?');">
                    Supprimer
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    <?php else: ?>

        <tr>
            <td colspan="8">
                Aucun abonnement trouvé.
            </td>
        </tr>

    <?php endif; ?>

</table>

</body>
</html>