<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Entities/Adherent.php';

class AdherentRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    // Afficher tous les adhérents
    public function findAll()
    {
        $sql = "SELECT * FROM adherent";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $adherents = [];

        foreach ($rows as $row) {
            $adherent = new Adherent();

            $adherent->setId($row['id_adherent']);
            $adherent->setNom($row['nom']);
            $adherent->setPrenom($row['prenom']);
            $adherent->setEmail($row['email']);
            $adherent->setTelephone($row['telephone']);
            $adherent->setDateNaissance($row['date_naissance']);
            $adherent->setDateInscription($row['date_inscription']);
            $adherent->setSalleId($row['id_salle']);

            $adherents[] = $adherent;
        }

        return $adherents;
    }

    // Ajouter un adhérent
    public function create(Adherent $adherent)
    {
        $sql = "INSERT INTO adherent
                (nom, prenom, email, telephone, date_naissance, date_inscription, id_salle)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $adherent->getNom(),
            $adherent->getPrenom(),
            $adherent->getEmail(),
            $adherent->getTelephone(),
            $adherent->getDateNaissance(),
            $adherent->getDateInscription(),
            $adherent->getSalleId()
        ]);
    }

    // Trouver un adhérent par ID
    public function findById($id)
    {
        $sql = "SELECT * FROM adherent WHERE id_adherent = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        $adherent = new Adherent();

        $adherent->setId($row['id_adherent']);
        $adherent->setNom($row['nom']);
        $adherent->setPrenom($row['prenom']);
        $adherent->setEmail($row['email']);
        $adherent->setTelephone($row['telephone']);
        $adherent->setDateNaissance($row['date_naissance']);
        $adherent->setDateInscription($row['date_inscription']);
        $adherent->setSalleId($row['id_salle']);

        return $adherent;
    }

    // Modifier un adhérent
    public function update(Adherent $adherent)
    {
        $sql = "UPDATE adherent SET
                nom = ?,
                prenom = ?,
                email = ?,
                telephone = ?,
                date_naissance = ?,
                date_inscription = ?,
                id_salle = ?
                WHERE id_adherent = ?";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            $adherent->getNom(),
            $adherent->getPrenom(),
            $adherent->getEmail(),
            $adherent->getTelephone(),
            $adherent->getDateNaissance(),
            $adherent->getDateInscription(),
            $adherent->getSalleId(),
            $adherent->getId()
        ]);
    }

    // Supprimer un adhérent
    public function delete($id)
    {
        $sql = "DELETE FROM adherent WHERE id_adherent = ?";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([$id]);
    }
}