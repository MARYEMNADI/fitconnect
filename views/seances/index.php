<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des séances</title>
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background:#f4f7fb;
    color:#333;
    padding:40px;
}

h1{
    color:#1e3a8a;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
    background:#fff;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 4px 12px rgba(0,0,0,.12);
}

th,
td{
    padding:14px;
    text-align:center;
    border-bottom:1px solid #e5e7eb;
}

th{
    background:#2563eb;
    color:white;
    font-size:15px;
}

tr:nth-child(even){
    background:#f8fafc;
}

tr:hover{
    background:#e0f2fe;
}

a{
    text-decoration:none;
}

.btn{
    display:inline-block;
    padding:8px 16px;
    border-radius:6px;
    color:white;
    font-size:14px;
    font-weight:bold;
    transition:0.3s;
}

.add{
    background:#22c55e;
}

.add:hover{
    background:#16a34a;
}

.edit{
    background:#3b82f6;
}

.edit:hover{
    background:#2563eb;
}

.delete{
    background:#ef4444;
}

.delete:hover{
    background:#dc2626;
}

</style>

</head>

<body>

<h2>Liste des séances</h2>

<p>
    <a class="add" href="index.php?action=create-seance">
        Ajouter une séance
    </a>
</p>

<table>

    <thead>

    <tr>
        <th>ID</th>
        <th>Date séance</th>
        <th>Durée (min)</th>
        <th>Adhérent</th>
        <th>Salle</th>
        <th>Activité</th>
        <th>Équipement</th>
        <th>Actions</th>
    </tr>

    </thead>

    <tbody>

    <?php foreach($seances as $seance): ?>

        <tr>

            <td><?= $seance->getId(); ?></td>

            <td><?= $seance->getDateSeance(); ?></td>

            <td><?= $seance->getDureeMinutes(); ?></td>

            <td><?= $seance->getAdherentId(); ?></td>

            <td><?= $seance->getSalleId(); ?></td>

            <td><?= $seance->getActiviteId(); ?></td>

            <td><?= $seance->getEquipementId(); ?></td>

            <td>

                <a class="edit"
                   href="index.php?action=edit-seance&id=<?= $seance->getId(); ?>">
                    Modifier
                </a>

                <a class="delete"
                   href="index.php?action=delete-seance&id=<?= $seance->getId(); ?>"
                   onclick="return confirm('Voulez-vous supprimer cette séance ?');">
                    Supprimer
                </a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

</body>
</html>