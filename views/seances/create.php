<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter une séance</title>

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

<h2>Ajouter une séance</h2>

<form action="index.php?action=store-seance" method="POST">

    <label>Date de séance</label>
    <input
        type="datetime-local"
        name="date_seance"
        required
    >

    <label>Durée (minutes)</label>
    <input
        type="number"
        name="duree_minutes"
        required
    >

    <label>ID Adhérent</label>
    <input
        type="number"
        name="id_adherent"
        required
    >

    <label>ID Salle</label>
    <input
        type="number"
        name="id_salle"
        required
    >

    <label>ID Activité</label>
    <input
        type="number"
        name="id_activite"
        required
    >

    <label>ID Équipement</label>
    <input
        type="number"
        name="id_equipement"
    >

    <button type="submit">
        Enregistrer
    </button>

    <a href="index.php?action=seances">
        Annuler
    </a>

</form>

</body>
</html>