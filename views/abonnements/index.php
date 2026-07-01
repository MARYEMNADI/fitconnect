<?php require_once __DIR__ . '/../layouts/header.php'; ?>

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
    background:#eef4ff;
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
    transition:.3s;
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

<h1>Liste des abonnements</h1>

<p>
    <a class="btn add" href="index.php?action=create-abonnement">
        + Ajouter un abonnement
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

<?php if(!empty($abonnements)): ?>

<?php foreach($abonnements as $abonnement): ?>

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

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>