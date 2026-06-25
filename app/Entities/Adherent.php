<?php

class Adherent
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $dateNaissance;
    private $dateInscription;
    private $salleId;

    // ===== ID =====

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    // ===== NOM =====

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    // ===== PRENOM =====

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    // ===== EMAIL =====

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    // ===== TELEPHONE =====

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    // ===== DATE NAISSANCE =====

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    // ===== DATE INSCRIPTION =====

    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;
    }

    // ===== SALLE ID =====

    public function getSalleId()
    {
        return $this->salleId;
    }

    public function setSalleId($salleId)
    {
        $this->salleId = $salleId;
    }
}