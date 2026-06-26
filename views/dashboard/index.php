<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - FitConnect</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        header{
            background:#2c3e50;
            color:white;
            padding:20px;
            text-align:center;
        }

        .container{
            width:90%;
            margin:30px auto;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:10px;
            text-align:center;
            box-shadow:0 0 10px rgba(0,0,0,.1);
        }

        .card h2{
            color:#3498db;
            margin-bottom:10px;
        }

        .card p{
            color:#666;
            margin-bottom:20px;
        }

        .card a{
            text-decoration:none;
            background:#3498db;
            color:white;
            padding:10px 20px;
            border-radius:5px;
        }

        .card a:hover{
            background:#2980b9;
        }
    </style>

</head>

<body>

<header>
    <h1>FitConnect Dashboard</h1>
</header>

<div class="container">

    <div class="cards">

        <div class="card">
            <h2>Adhérents</h2>
            <p>Gestion des adhérents</p>
            <a href="index.php?action=adherents">
                Ouvrir
            </a>
        </div>

        <div class="card">
            <h2>Abonnements</h2>
            <p>Gestion des abonnements</p>
            <a href="index.php?action=abonnements">
                Ouvrir
            </a>
        </div>

        <div class="card">
            <h2>Séances</h2>
            <p>Gestion des séances</p>
            <a href="index.php?action=seances">
                Ouvrir
            </a>
        </div>

        <div class="card">
            <h2>Activités</h2>
            <p>Gestion des activités</p>
            <a href="index.php?action=activites">
                Ouvrir
            </a>
        </div>

        <div class="card">
            <h2>Salles</h2>
            <p>Gestion des salles</p>
            <a href="index.php?action=salles">
                Ouvrir
            </a>
        </div>

        <div class="card">
            <h2>Équipements</h2>
            <p>Gestion des équipements</p>
            <a href="index.php?action=equipements">
                Ouvrir
            </a>
        </div>

    </div>

</div>

</body>
</html>