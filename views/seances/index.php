<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial,sans-serif;
    background:#f4f7fb;
    color:#333;
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
    color:#fff;
}

tr:nth-child(even){
    background:#f8fafc;
}

tr:hover{
    background:#eef4ff;
}

a{
    text-decoration:none;
}

.btn{
    display:inline-block;
    padding:8px 16px;
    border-radius:6px;
    color:#fff;
    font-weight:bold;
}

.add{
    background:#22c55e;
}

.edit{
    background:#3b82f6;
    padding:6px 12px;
    border-radius:5px;
    color:white;
}

.delete{
    background:#ef4444;
    padding:6px 12px;
    border-radius:5px;
    color:white;
}
</style>

<h1>Gestion des Séances</h1>

<a class="btn add" href="index.php?action=create-seance">
    + Ajouter une séance
</a>

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

<?php if(!empty($seances)): ?>

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

<?php else: ?>

<tr>
    <td colspan="8">Aucune séance trouvée.</td>
</tr>

<?php endif; ?>

</tbody>

</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>