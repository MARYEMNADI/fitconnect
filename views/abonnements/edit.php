<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un abonnement</title>

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

<h1>Modifier un abonnement</h1>

<form action="index.php?action=update-abonnement&id=<?= $abonnement->getId(); ?>" method="POST">

    <label>Type</label>
    <select name="type" required>
        <option value="mensuel" <?= $abonnement->getType() == 'mensuel' ? 'selected' : ''; ?>>
            Mensuel
        </option>

        <option value="trimestriel" <?= $abonnement->getType() == 'trimestriel' ? 'selected' : ''; ?>>
            Trimestriel
        </option>

        <option value="annuel" <?= $abonnement->getType() == 'annuel' ? 'selected' : ''; ?>>
            Annuel
        </option>
    </select>

    <label>Date début</label>
    <input
        type="date"
        name="date_debut"
        value="<?= $abonnement->getDateDebut(); ?>"
        required
    >

    <label>Date fin</label>
    <input
        type="date"
        name="date_fin"
        value="<?= $abonnement->getDateFin(); ?>"
        required
    >

    <label>Prix</label>
    <input
        type="number"
        step="0.01"
        name="prix"
        value="<?= $abonnement->getPrix(); ?>"
        required
    >

    <label>Statut</label>
    <select name="statut">

        <option value="actif" <?= $abonnement->getStatut() == 'actif' ? 'selected' : ''; ?>>
            Actif
        </option>

        <option value="expire" <?= $abonnement->getStatut() == 'expire' ? 'selected' : ''; ?>>
            Expiré
        </option>

        <option value="annule" <?= $abonnement->getStatut() == 'annule' ? 'selected' : ''; ?>>
            Annulé
        </option>

    </select>

    <label>ID Adhérent</label>
    <input
        type="number"
        name="id_adherent"
        value="<?= $abonnement->getAdherentId(); ?>"
        required
    >

    <button type="submit">
        Modifier
    </button>

    <a href="index.php?action=abonnements">
        Annuler
    </a>

</form>

</body>
</html>