<?php

require_once __DIR__ . '/../app/Controllers/DashboardController.php';
require_once __DIR__ . '/../app/Controllers/AdherentController.php';
require_once __DIR__ . '/../app/Controllers/AbonnementController.php';
require_once __DIR__ . '/../app/Controllers/SeanceController.php';

// Action par défaut
$action = $_GET['action'] ?? 'dashboard';

// Instanciation des contrôleurs
$dashboardController   = new DashboardController();
$adherentController    = new AdherentController();
$abonnementController  = new AbonnementController();
$seanceController      = new SeanceController();

switch ($action) {

    // ==========================
    // Dashboard
    // ==========================
    case 'dashboard':
        $dashboardController->index();
        break;

    // ==========================
    // Adhérents
    // ==========================
    case 'adherents':
        $adherentController->index();
        break;

    case 'create-adherent':
        $adherentController->create();
        break;

    case 'store-adherent':
        $adherentController->store();
        break;

    case 'edit-adherent':
        $adherentController->edit();
        break;

    case 'update-adherent':
        $adherentController->update();
        break;

    case 'delete-adherent':
        $adherentController->delete();
        break;

    // ==========================
    // Abonnements
    // ==========================
    case 'abonnements':
        $abonnementController->index();
        break;

    case 'create-abonnement':
        $abonnementController->create();
        break;

    case 'store-abonnement':
        $abonnementController->store();
        break;

    case 'edit-abonnement':
        $abonnementController->edit();
        break;

    case 'update-abonnement':
        $abonnementController->update();
        break;

    case 'delete-abonnement':
        $abonnementController->delete();
        break;

    // ==========================
    // Séances
    // ==========================
    case 'seances':
        $seanceController->index();
        break;

    case 'create-seance':
        $seanceController->create();
        break;

    case 'store-seance':
        $seanceController->store();
        break;

    case 'edit-seance':
        $seanceController->edit();
        break;

    case 'update-seance':
        $seanceController->update();
        break;

    case 'delete-seance':
        $seanceController->delete();
        break;

    // ==========================
    // 404
    // ==========================
    default:
        echo "<h1>404 - Page introuvable</h1>";
        break;
}