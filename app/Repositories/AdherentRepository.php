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
            $adherent->setDateInscription($row['date_inscription']);
            $adherent->setSalleId($row['id_salle']);

            $adherents[] = $adherent;
        }

        return $adherents;
    }
}