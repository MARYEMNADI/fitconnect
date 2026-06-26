<?php

require_once __DIR__ . '/../Repositories/AdherentRepository.php';
require_once __DIR__ . '/../Entities/Adherent.php';

class AdherentController
{
    private $adherentRepository;

    public function __construct()
    {
        $this->adherentRepository = new AdherentRepository();
    }

    public function index()
    {
        $adherents = $this->adherentRepository->findAll();
        require_once __DIR__ . '/../../views/adherents/index.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../../views/adherents/create.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $adherent = new Adherent();

            $adherent->setNom($_POST['nom']);
            $adherent->setPrenom($_POST['prenom']);
            $adherent->setEmail($_POST['email']);
            $adherent->setTelephone($_POST['telephone']);
            $adherent->setDateNaissance($_POST['date_naissance']);
            $adherent->setDateInscription($_POST['date_inscription']);
            $adherent->setSalleId($_POST['id_salle']);

            $this->adherentRepository->create($adherent);

            header('Location: index.php?action=adherents');
            exit;
        }
    }

    public function edit()
    {
        $id = $_GET['id'];

        $adherent = $this->adherentRepository->findById($id);

        require_once __DIR__ . '/../../views/adherents/edit.php';
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $adherent = new Adherent();

            $adherent->setId($_POST['id']);
            $adherent->setNom($_POST['nom']);
            $adherent->setPrenom($_POST['prenom']);
            $adherent->setEmail($_POST['email']);
            $adherent->setTelephone($_POST['telephone']);
            $adherent->setDateNaissance($_POST['date_naissance']);
            $adherent->setDateInscription($_POST['date_inscription']);
            $adherent->setSalleId($_POST['id_salle']);

            $this->adherentRepository->update($adherent);

            header('Location: index.php?action=adherents');
            exit;
        }
    }

    public function delete()
    {
        $id = $_GET['id'];

        $this->adherentRepository->delete($id);

        header('Location: index.php?action=adherents');
        exit;
    }
}