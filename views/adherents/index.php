<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<style>
h1{
    color:#1e3a8a;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    margin-top:20px;
    box-shadow:0 4px 12px rgba(0,0,0,.1);
}

th,td{
    padding:12px;
    border:1px solid #ddd;
    text-align:center;
}

th{
    background:#2563eb;
    color:white;
}

.btn{
    padding:8px 15px;
    border-radius:5px;
    color:white;
    text-decoration:none;
}

.add{
    background:#22c55e;
}

.edit{
    background:#3b82f6;
}

.delete{
    background:#ef4444;
}
</style>

<h1>Liste des Adhérents</h1>

<a class="btn add" href="index.php?action=create-adherent">
    Ajouter un adhérent
</a>

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
href="index.php?action=delete-adherent&id=<?= $adherent->getId(); ?>">
Supprimer
</a>

</td>

</tr>

<?php endforeach; ?>

<?php else: ?>

<tr>
<td colspan="9">Aucun adhérent trouvé.</td>
</tr>

<?php endif; ?>

</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>