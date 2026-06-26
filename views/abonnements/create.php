<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un abonnement</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            width: 600px;
            margin: 40px auto;
        }

        h1{
            text-align: center;
        }

        label{
            display:block;
            margin-top:15px;
            font-weight:bold;
        }

        input, select{
            width:100%;
            padding:10px;
            margin-top:5px;
        }

        button{
            margin-top:20px;
            padding:10px 20px;
            background:green;
            color:white;
            border:none;
            cursor:pointer;
        }

        a{
            text-decoration:none;
            color:white;
            background:#555;
            padding:10px 20px;
            margin-left:10px;
        }
    </style>

</head>

<body>

<h1>Ajouter un abonnement</h1>

<form action="index.php?action=store-abonnement" method="POST">

    <label>Type</label>
    <select name="type" required>
        <option value="">-- Choisir --</option>
        <option value="mensuel">Mensuel</option>
        <option value="trimestriel">Trimestriel</option>
        <option value="annuel">Annuel</option>
    </select>

    <label>Date début</label>
    <input type="date" name="date_debut" required>

    <label>Date fin</label>
    <input type="date" name="date_fin" required>

    <label>Prix</label>
    <input type="number" step="0.01" name="prix" required>

    <label>Statut</label>
    <select name="statut" required>
        <option value="actif">Actif</option>
        <option value="expire">Expiré</option>
        <option value="annule">Annulé</option>
    </select>

    <label>ID Adhérent</label>
    <input type="number" name="id_adherent" required>

    <br><br>

    <button type="submit">
        Enregistrer
    </button>

    <a href="index.php?action=abonnements">
        Retour
    </a>

</form>

</body>
</html>