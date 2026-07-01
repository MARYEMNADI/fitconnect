<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="container">

    <div class="form-container">

        <h2>✏️ Modifier un abonnement</h2>

        <form action="index.php?action=update-abonnement" method="POST">

            <input
                type="hidden"
                name="id"
                value="<?= $abonnement->getId(); ?>"
            >

            <label>Type</label>

            <select name="type" required>

                <option value="mensuel"
                    <?= $abonnement->getType() == 'mensuel' ? 'selected' : ''; ?>>
                    Mensuel
                </option>

                <option value="trimestriel"
                    <?= $abonnement->getType() == 'trimestriel' ? 'selected' : ''; ?>>
                    Trimestriel
                </option>

                <option value="annuel"
                    <?= $abonnement->getType() == 'annuel' ? 'selected' : ''; ?>>
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

            <label>Prix (DH)</label>

            <input
                type="number"
                step="0.01"
                name="prix"
                value="<?= $abonnement->getPrix(); ?>"
                required
            >

            <label>Statut</label>

            <select name="statut">

                <option value="actif"
                    <?= $abonnement->getStatut() == 'actif' ? 'selected' : ''; ?>>
                    Actif
                </option>

                <option value="expire"
                    <?= $abonnement->getStatut() == 'expire' ? 'selected' : ''; ?>>
                    Expiré
                </option>

                <option value="annule"
                    <?= $abonnement->getStatut() == 'annule' ? 'selected' : ''; ?>>
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

            <div class="buttons">

                <button class="btn save" type="submit">
                    💾 Modifier
                </button>

                <a class="btn cancel"
                   href="index.php?action=abonnements">
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
    background:white;
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
}

input,
select{
    width:100%;
    padding:12px;
    border:1px solid #ccc;
    border-radius:6px;
    font-size:15px;
}

input:focus,
select:focus{
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
    padding:12px 22px;
    border:none;
    border-radius:6px;
    color:white;
    font-weight:bold;
    cursor:pointer;
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