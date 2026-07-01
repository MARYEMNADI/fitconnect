<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="container">

    <div class="form-container">

        <h2>✏️ Modifier une séance</h2>

        <form action="index.php?action=update-seance" method="POST">

            <input
                type="hidden"
                name="id_seance"
                value="<?= $seance->getId(); ?>"
            >

            <label>Date de séance</label>

            <input
                type="datetime-local"
                name="date_seance"
                value="<?= $seance->getDateSeance(); ?>"
                required
            >

            <label>Durée (minutes)</label>

            <input
                type="number"
                name="duree_minutes"
                value="<?= $seance->getDureeMinutes(); ?>"
                required
            >

            <label>ID Adhérent</label>

            <input
                type="number"
                name="id_adherent"
                value="<?= $seance->getAdherentId(); ?>"
                required
            >

            <label>ID Salle</label>

            <input
                type="number"
                name="id_salle"
                value="<?= $seance->getSalleId(); ?>"
                required
            >

            <label>ID Activité</label>

            <input
                type="number"
                name="id_activite"
                value="<?= $seance->getActiviteId(); ?>"
                required
            >

            <label>ID Équipement</label>

            <input
                type="number"
                name="id_equipement"
                value="<?= $seance->getEquipementId(); ?>"
            >

            <div class="buttons">

                <button class="btn save" type="submit">
                    💾 Modifier
                </button>

                <a class="btn cancel"
                   href="index.php?action=seances">
                    Retour
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

.form-container{
    max-width:650px;
    margin:auto;
    background:#fff;
    padding:35px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,.12);
}

.form-container h2{
    text-align:center;
    color:#2563eb;
    margin-bottom:25px;
}

label{
    display:block;
    margin-top:15px;
    margin-bottom:8px;
    font-weight:bold;
    color:#374151;
}

input{
    width:100%;
    padding:12px;
    border:1px solid #d1d5db;
    border-radius:6px;
    font-size:15px;
}

input:focus{
    outline:none;
    border-color:#2563eb;
}

.buttons{
    margin-top:30px;
    display:flex;
    gap:15px;
}

.btn{
    text-decoration:none;
    border:none;
    padding:12px 22px;
    border-radius:6px;
    color:#fff;
    font-weight:bold;
    cursor:pointer;
    transition:.3s;
}

.save{
    background:#2563eb;
}

.save:hover{
    background:#1d4ed8;
}

.cancel{
    background:#6b7280;
}

.cancel:hover{
    background:#4b5563;
}

</style>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>