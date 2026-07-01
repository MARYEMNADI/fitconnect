<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<style>

.hero{
    text-align:center;
    margin:40px 0;
}

.hero h2{
    color:#2c3e50;
    font-size:36px;
}

.hero p{
    color:#666;
    margin-top:10px;
    font-size:18px;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
    margin:40px;
}

.card{
    background:#fff;
    border-radius:12px;
    padding:30px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card h3{
    color:#3498db;
    margin-bottom:15px;
    font-size:24px;
}

.card .count{
    font-size:50px;
    font-weight:bold;
    color:#2c3e50;
    margin:20px 0;
}

.card p{
    color:#666;
    margin-bottom:20px;
}

.btn{
    display:inline-block;
    background:#3498db;
    color:#fff;
    text-decoration:none;
    padding:12px 25px;
    border-radius:6px;
}

.btn:hover{
    background:#2980b9;
}

</style>

<div class="hero">
    <h2>Bienvenue sur FitConnect</h2>
    <p>Système de gestion d'une salle de sport</p>
</div>

<div class="cards">

    <div class="card">
        <h3>👤 Adhérents</h3>

        <div class="count">
            <?= $totalAdherents ?>
        </div>

        <p>Nombre total des adhérents</p>

        <a class="btn" href="index.php?action=adherents">
            Ouvrir
        </a>
    </div>

    <div class="card">
        <h3>💳 Abonnements</h3>

        <div class="count">
            <?= $totalAbonnements ?>
        </div>

        <p>Nombre total des abonnements</p>

        <a class="btn" href="index.php?action=abonnements">
            Ouvrir
        </a>
    </div>

    <div class="card">
        <h3>🏃 Séances</h3>

        <div class="count">
            <?= $totalSeances ?>
        </div>

        <p>Nombre total des séances</p>

        <a class="btn" href="index.php?action=seances">
            Ouvrir
        </a>
    </div>

</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>