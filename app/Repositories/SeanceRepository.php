<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Entities/Seance.php';

class SeanceRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    // ==========================
    // Lire toutes les séances
    // ==========================
    public function findAll()
    {
        $sql = "SELECT * FROM seance ORDER BY date_seance DESC";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $seances = [];

        foreach ($rows as $row) {

            $seance = new Seance();

            $seance->setId($row['id_seance']);
            $seance->setDateSeance($row['date_seance']);
            $seance->setDureeMinutes($row['duree_minutes']);
            $seance->setAdherentId($row['id_adherent']);
            $seance->setSalleId($row['id_salle']);
            $seance->setActiviteId($row['id_activite']);
            $seance->setEquipementId($row['id_equipement']);

            $seances[] = $seance;
        }

        return $seances;
    }

    // ==========================
    // Trouver une séance par ID
    // ==========================
    public function findById($id)
    {
        $sql = "SELECT * FROM seance WHERE id_seance = ?";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        $seance = new Seance();

        $seance->setId($row['id_seance']);
        $seance->setDateSeance($row['date_seance']);
        $seance->setDureeMinutes($row['duree_minutes']);
        $seance->setAdherentId($row['id_adherent']);
        $seance->setSalleId($row['id_salle']);
        $seance->setActiviteId($row['id_activite']);
        $seance->setEquipementId($row['id_equipement']);

        return $seance;
    }

    // ==========================
    // Ajouter une séance
    // ==========================
    public function create(Seance $seance)
    {
        $sql = "INSERT INTO seance
                (date_seance, duree_minutes, id_adherent, id_salle, id_activite, id_equipement)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $seance->getDateSeance(),
            $seance->getDureeMinutes(),
            $seance->getAdherentId(),
            $seance->getSalleId(),
            $seance->getActiviteId(),
            $seance->getEquipementId()
        ]);
    }

    // ==========================
    // Modifier une séance
    // ==========================
    public function update(Seance $seance)
    {
        $sql = "UPDATE seance
                SET
                    date_seance = ?,
                    duree_minutes = ?,
                    id_adherent = ?,
                    id_salle = ?,
                    id_activite = ?,
                    id_equipement = ?
                WHERE id_seance = ?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $seance->getDateSeance(),
            $seance->getDureeMinutes(),
            $seance->getAdherentId(),
            $seance->getSalleId(),
            $seance->getActiviteId(),
            $seance->getEquipementId(),
            $seance->getId()
        ]);
    }

    // ==========================
    // Supprimer une séance
    // ==========================
    public function delete($id)
    {
        $sql = "DELETE FROM seance WHERE id_seance = ?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([$id]);
    }
}