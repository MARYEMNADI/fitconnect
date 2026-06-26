<?php

class Abonnement
{
    private $id;
    private $type;
    private $dateDebut;
    private $dateFin;
    private $prix;
    private $statut;
    private $adherentId;

    // Getters

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function getAdherentId()
    {
        return $this->adherentId;
    }

    // Setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    public function setAdherentId($adherentId)
    {
        $this->adherentId = $adherentId;
    }
}