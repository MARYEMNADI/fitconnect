<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Entities/Abonnement.php';

class AbonnementRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    // Afficher tous les abonnements
    public function findAll()
    {
        $sql = "SELECT * FROM abonnement";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $abonnements = [];

        foreach ($rows as $row) {

            $abonnement = new Abonnement();

            $abonnement->setId($row['id_abonnement']);
            $abonnement->setType($row['type']);
            $abonnement->setDateDebut($row['date_debut']);
            $abonnement->setDateFin($row['date_fin']);
            $abonnement->setPrix($row['prix']);
            $abonnement->setStatut($row['statut']);
            $abonnement->setAdherentId($row['id_adherent']);

            $abonnements[] = $abonnement;
        }

        return $abonnements;
    }

    // Ajouter un abonnement
    public function create(Abonnement $abonnement)
    {
        $sql = "INSERT INTO abonnement
                (type, date_debut, date_fin, prix, statut, id_adherent)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $abonnement->getType(),
            $abonnement->getDateDebut(),
            $abonnement->getDateFin(),
            $abonnement->getPrix(),
            $abonnement->getStatut(),
            $abonnement->getAdherentId()
        ]);
    }

    // Chercher un abonnement par ID
    public function findById($id)
    {
        $sql = "SELECT * FROM abonnement WHERE id_abonnement = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        $abonnement = new Abonnement();

        $abonnement->setId($row['id_abonnement']);
        $abonnement->setType($row['type']);
        $abonnement->setDateDebut($row['date_debut']);
        $abonnement->setDateFin($row['date_fin']);
        $abonnement->setPrix($row['prix']);
        $abonnement->setStatut($row['statut']);
        $abonnement->setAdherentId($row['id_adherent']);

        return $abonnement;
    }

    // Modifier un abonnement
    public function update(Abonnement $abonnement)
    {
        $sql = "UPDATE abonnement
                SET type = ?,
                    date_debut = ?,
                    date_fin = ?,
                    prix = ?,
                    statut = ?,
                    id_adherent = ?
                WHERE id_abonnement = ?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $abonnement->getType(),
            $abonnement->getDateDebut(),
            $abonnement->getDateFin(),
            $abonnement->getPrix(),
            $abonnement->getStatut(),
            $abonnement->getAdherentId(),
            $abonnement->getId()
        ]);
    }

    // Supprimer un abonnement
    public function delete($id)
    {
        $sql = "DELETE FROM abonnement WHERE id_abonnement = ?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([$id]);
    }
}