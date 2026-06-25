<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../Entities/Adherent.php';

class AdherentRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    /**
     * Récupérer tous les adhérents
     */
    public function findAll(): array
    {
        $sql = "SELECT * FROM adherent";
        $stmt = $this->db->query($sql);

        $adherents = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $adherent = new Adherent();

            $adherent->setId($row['id_adherent']);
            $adherent->setNom($row['nom']);
            $adherent->setPrenom($row['prenom']);
            $adherent->setEmail($row['email']);
            $adherent->setTelephone($row['telephone']);
            $adherent->setDateInscription($row['date_inscription']);
            $adherent->setSalleId($row['id_salle']);

            $adherents[] = $adherent;
        }

        return $adherents;
    }

    /**
     * Rechercher un adhérent par ID
     */
    public function findById(int $id): ?Adherent
    {
        $sql = "SELECT * FROM adherent WHERE id_adherent = :id";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            'id' => $id
        ]);

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
        $adherent->setDateInscription($row['date_inscription']);
        $adherent->setSalleId($row['id_salle']);

        return $adherent;
    }

    /**
     * Ajouter un adhérent
     */
    public function create(Adherent $adherent): bool
    {
        $sql = "INSERT INTO adherent
                (nom, prenom, email, telephone, date_inscription, id_salle)
                VALUES
                (:nom, :prenom, :email, :telephone, :date_inscription, :id_salle)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            'nom' => $adherent->getNom(),
            'prenom' => $adherent->getPrenom(),
            'email' => $adherent->getEmail(),
            'telephone' => $adherent->getTelephone(),
            'date_inscription' => $adherent->getDateInscription(),
            'id_salle' => $adherent->getSalleId()
        ]);
    }
}