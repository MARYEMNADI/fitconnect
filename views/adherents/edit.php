<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<style>
.form-card{
    width:600px;
    margin:30px auto;
    background:#fff;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
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

<div class="form-card">

    <h2>Modifier un adhérent</h2>

    <form action="index.php?action=update-adherent" method="POST">

        <input type="hidden" name="id" value="<?= $adherent->getId(); ?>">

        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" value="<?= $adherent->getNom(); ?>" required>
        </div>

        <div class="form-group">
            <label>Prénom</label>
            <input type="text" name="prenom" value="<?= $adherent->getPrenom(); ?>" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?= $adherent->getEmail(); ?>" required>
        </div>

        <div class="form-group">
            <label>Téléphone</label>
            <input type="text" name="telephone" value="<?= $adherent->getTelephone(); ?>">
        </div>

        <div class="form-group">
            <label>Date de naissance</label>
            <input type="date" name="date_naissance" value="<?= $adherent->getDateNaissance(); ?>">
        </div>

        <div class="form-group">
            <label>Date d'inscription</label>
            <input type="date" name="date_inscription" value="<?= $adherent->getDateInscription(); ?>" required>
        </div>

        <div class="form-group">
            <label>ID Salle</label>
            <input type="number" name="id_salle" value="<?= $adherent->getSalleId(); ?>" required>
        </div>

        <div class="actions">
            <button type="submit" class="btn btn-save">
                Modifier
            </button>

            <a href="index.php?action=adherents" class="btn btn-cancel">
                Annuler
            </a>
        </div>

    </form>

</div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>