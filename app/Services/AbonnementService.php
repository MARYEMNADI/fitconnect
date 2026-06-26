<?php

require_once __DIR__ . '/../Repositories/AbonnementRepository.php';
require_once __DIR__ . '/../Entities/Abonnement.php';

class AbonnementService
{
    private $abonnementRepository;

    public function __construct()
    {
        $this->abonnementRepository = new AbonnementRepository();
    }

    // Récupérer tous les abonnements
    public function getAll()
    {
        return $this->abonnementRepository->findAll();
    }

    // Récupérer un abonnement par son id
    public function getById($id)
    {
        return $this->abonnementRepository->findById($id);
    }

    // Ajouter un abonnement
    public function create(Abonnement $abonnement)
    {
        return $this->abonnementRepository->create($abonnement);
    }

    // Modifier un abonnement
    public function update(Abonnement $abonnement)
    {
        return $this->abonnementRepository->update($abonnement);
    }

    // Supprimer un abonnement
    public function delete($id)
    {
        return $this->abonnementRepository->delete($id);
    }
}