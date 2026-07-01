<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un abonnement</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        header{
            background:#2c3e50;
            color:#fff;
            padding:20px;
            text-align:center;
        }

        nav{
            background:#34495e;
            padding:15px;
            text-align:center;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin:0 15px;
            font-weight:bold;
        }

        nav a:hover{
            color:#3498db;
        }

        .container{
            width:60%;
            margin:40px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.1);
        }

        h2{
            text-align:center;
            color:#2c3e50;
            margin-bottom:25px;
        }

        label{
            display:block;
            margin-top:15px;
            margin-bottom:5px;
            font-weight:bold;
        }

        input,
        select{
            width:100%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        .buttons{
            margin-top:25px;
            display:flex;
            justify-content:space-between;
        }

        .btn{
            padding:10px 25px;
            text-decoration:none;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        .btn-success{
            background:#27ae60;
            color:white;
        }

        .btn-success:hover{
            background:#229954;
        }

        .btn-secondary{
            background:#7f8c8d;
            color:white;
        }

        .btn-secondary:hover{
            background:#636e72;
        }

        footer{
            margin-top:50px;
            background:#2c3e50;
            color:white;
            text-align:center;
            padding:20px;
        }
    </style>

</head>
<body>

<header>
    <h1>FitConnect</h1>
    <p>Gestion des abonnements</p>
</header>

<nav>
    <a href="index.php?action=dashboard">Dashboard</a>
    <a href="index.php?action=adherents">Adhérents</a>
    <a href="index.php?action=abonnements">Abonnements</a>
    <a href="index.php?action=seances">Séances</a>
</nav>

<div class="container">

    <h2>Ajouter un abonnement</h2>

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

        <div class="buttons">

            <button type="submit" class="btn btn-success">
                Enregistrer
            </button>

            <a href="index.php?action=abonnements" class="btn btn-secondary">
                Retour
            </a>

        </div>

    </form>

</div>

<footer>
    <p>&copy; 2026 FitConnect | Tous droits réservés</p>
</footer>

</body>
</html>