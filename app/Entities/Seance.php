<?php

class Seance
{
    private $id;
    private $dateSeance;
    private $dureeMinutes;
    private $adherentId;
    private $salleId;
    private $activiteId;
    private $equipementId;

    // Getters

    public function getId()
    {
        return $this->id;
    }

    public function getDateSeance()
    {
        return $this->dateSeance;
    }

    public function getDureeMinutes()
    {
        return $this->dureeMinutes;
    }

    public function getAdherentId()
    {
        return $this->adherentId;
    }

    public function getSalleId()
    {
        return $this->salleId;
    }

    public function getActiviteId()
    {
        return $this->activiteId;
    }

    public function getEquipementId()
    {
        return $this->equipementId;
    }

    // Setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDateSeance($dateSeance)
    {
        $this->dateSeance = $dateSeance;
    }

    public function setDureeMinutes($dureeMinutes)
    {
        $this->dureeMinutes = $dureeMinutes;
    }

    public function setAdherentId($adherentId)
    {
        $this->adherentId = $adherentId;
    }

    public function setSalleId($salleId)
    {
        $this->salleId = $salleId;
    }

    public function setActiviteId($activiteId)
    {
        $this->activiteId = $activiteId;
    }

    public function setEquipementId($equipementId)
    {
        $this->equipementId = $equipementId;
    }
}