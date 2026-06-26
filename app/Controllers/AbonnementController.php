<?php

require_once __DIR__ . '/../Repositories/AbonnementRepository.php';
require_once __DIR__ . '/../Entities/Abonnement.php';

class AbonnementController
{
    private $abonnementRepository;

    public function __construct()
    {
        $this->abonnementRepository = new AbonnementRepository();
    }

    // Afficher la liste
    public function index()
    {
        $abonnements = $this->abonnementRepository->findAll();

        require_once __DIR__ . '/../../views/abonnements/index.php';
    }

    // Afficher le formulaire d'ajout
    public function create()
    {
        require_once __DIR__ . '/../../views/abonnements/create.php';
    }

    // Enregistrer un abonnement
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $abonnement = new Abonnement();

            $abonnement->setType($_POST['type']);
            $abonnement->setDateDebut($_POST['date_debut']);
            $abonnement->setDateFin($_POST['date_fin']);
            $abonnement->setPrix($_POST['prix']);
            $abonnement->setStatut($_POST['statut']);
            $abonnement->setAdherentId($_POST['id_adherent']);

            $this->abonnementRepository->create($abonnement);

            header('Location: index.php?action=abonnements');
            exit;
        }
    }

    // Afficher le formulaire de modification
    public function edit()
    {
        $id = $_GET['id'];

        $abonnement = $this->abonnementRepository->findById($id);

        require_once __DIR__ . '/../../views/abonnements/edit.php';
    }

    // Modifier
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $abonnement = new Abonnement();

            $abonnement->setId($_POST['id']);
            $abonnement->setType($_POST['type']);
            $abonnement->setDateDebut($_POST['date_debut']);
            $abonnement->setDateFin($_POST['date_fin']);
            $abonnement->setPrix($_POST['prix']);
            $abonnement->setStatut($_POST['statut']);
            $abonnement->setAdherentId($_POST['id_adherent']);

            $this->abonnementRepository->update($abonnement);

            header('Location: index.php?action=abonnements');
            exit;
        }
    }

    // Supprimer
    public function delete()
    {
        $id = $_GET['id'];

        $this->abonnementRepository->delete($id);

        header('Location: index.php?action=abonnements');
        exit;
    }
}