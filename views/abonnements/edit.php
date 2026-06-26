<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un abonnement</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:40px;
        }

        form{
            width:500px;
        }

        label{
            display:block;
            margin-top:15px;
            font-weight:bold;
        }

        input, select{
            width:100%;
            padding:8px;
            margin-top:5px;
        }

        button{
            margin-top:20px;
            padding:10px 20px;
            background:orange;
            color:white;
            border:none;
            cursor:pointer;
        }

        a{
            margin-left:10px;
            text-decoration:none;
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