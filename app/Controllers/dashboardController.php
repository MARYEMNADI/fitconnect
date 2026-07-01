<?php

require_once __DIR__ . '/../Repositories/AdherentRepository.php';
require_once __DIR__ . '/../Repositories/AbonnementRepository.php';
require_once __DIR__ . '/../Repositories/SeanceRepository.php';

class DashboardController
{
    private $adherentRepository;
    private $abonnementRepository;
    private $seanceRepository;

    public function __construct()
    {
        $this->adherentRepository = new AdherentRepository();
        $this->abonnementRepository = new AbonnementRepository();
        $this->seanceRepository = new SeanceRepository();
    }

    public function index()
    {
        $totalAdherents = count($this->adherentRepository->findAll());
        $totalAbonnements = count($this->abonnementRepository->findAll());
        $totalSeances = count($this->seanceRepository->findAll());

        require_once __DIR__ . '/../../views/dashboard/index.php';
    }
}