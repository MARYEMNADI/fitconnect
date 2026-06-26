<?php

require_once __DIR__ . '/../Repositories/SeanceRepository.php';
require_once __DIR__ . '/../Entities/Seance.php';

class SeanceController
{
    private $seanceRepository;

    public function __construct()
    {
        $this->seanceRepository = new SeanceRepository();
    }

    // ==========================
    // Afficher toutes les séances
    // ==========================
    public function index()
    {
        $seances = $this->seanceRepository->findAll();

        require_once __DIR__ . '/../../views/seances/index.php';
    }

    // ==========================
    // Formulaire d'ajout
    // ==========================
    public function create()
    {
        require_once __DIR__ . '/../../views/seances/create.php';
    }

    // ==========================
    // Enregistrer une séance
    // ==========================
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $seance = new Seance();

            $seance->setDateSeance($_POST['date_seance']);
            $seance->setDureeMinutes($_POST['duree_minutes']);
            $seance->setAdherentId($_POST['id_adherent']);
            $seance->setSalleId($_POST['id_salle']);
            $seance->setActiviteId($_POST['id_activite']);
            $seance->setEquipementId($_POST['id_equipement']);

            $this->seanceRepository->create($seance);

            header('Location: index.php?action=seances');
            exit;
        }
    }

    // ==========================
    // Formulaire de modification
    // ==========================
    public function edit()
    {
        $id = $_GET['id'];

        $seance = $this->seanceRepository->findById($id);

        require_once __DIR__ . '/../../views/seances/edit.php';
    }

    // ==========================
    // Modifier
    // ==========================
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $seance = new Seance();

            $seance->setId($_POST['id_seance']);
            $seance->setDateSeance($_POST['date_seance']);
            $seance->setDureeMinutes($_POST['duree_minutes']);
            $seance->setAdherentId($_POST['id_adherent']);
            $seance->setSalleId($_POST['id_salle']);
            $seance->setActiviteId($_POST['id_activite']);
            $seance->setEquipementId($_POST['id_equipement']);

            $this->seanceRepository->update($seance);

            header('Location: index.php?action=seances');
            exit;
        }
    }

    // ==========================
    // Supprimer
    // ==========================
    public function delete()
    {
        if (isset($_GET['id'])) {

            $this->seanceRepository->delete($_GET['id']);

            header('Location: index.php?action=seances');
            exit;
        }
    }
}