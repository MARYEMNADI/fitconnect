<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="container">

    <div class="form-card">

        <h2>Ajouter un adhérent</h2>

        <form action="index.php?action=store-adherent" method="POST">

            <div class="form-group">
                <label>Nom</label>
                <input type="text" name="nom" required>
            </div>

            <div class="form-group">
                <label>Prénom</label>
                <input type="text" name="prenom" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>Téléphone</label>
                <input type="text" name="telephone">
            </div>

            <div class="form-group">
                <label>Date de naissance</label>
                <input type="date" name="date_naissance">
            </div>

            <div class="form-group">
                <label>Date d'inscription</label>
                <input type="date" name="date_inscription" required>
            </div>

            <div class="form-group">
                <label>ID Salle</label>
                <input type="number" name="id_salle" min="1" required>
            </div>

            <div class="actions">

                <button class="btn btn-save" type="submit">
                    Ajouter
                </button>

                <a class="btn btn-cancel"
                   href="index.php?action=adherents">
                    Annuler
                </a>

            </div>

        </form>

    </div>

</div>

<style>

.container{
    width:90%;
    margin:40px auto;
}

.form-card{
    max-width:650px;
    margin:auto;
    background:#fff;
    padding:35px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.form-card h2{
    text-align:center;
    color:#2c3e50;
    margin-bottom:25px;
}

.form-group{
    margin-bottom:18px;
}

.form-group label{
    display:block;
    font-weight:bold;
    margin-bottom:8px;
}

.form-group input{
    width:100%;
    padding:10px;
    border:1px solid #ccc;
    border-radius:6px;
    font-size:15px;
}

.actions{
    margin-top:25px;
}

.btn{
    display:inline-block;
    padding:10px 18px;
    border-radius:6px;
    text-decoration:none;
    color:#fff;
    font-weight:bold;
    border:none;
    cursor:pointer;
}

.btn-save{
    background:#27ae60;
}

.btn-save:hover{
    background:#219150;
}

.btn-cancel{
    background:#e74c3c;
    margin-left:10px;
}

.btn-cancel:hover{
    background:#c0392b;
}

</style>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>