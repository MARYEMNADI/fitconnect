<?php

require_once __DIR__ . '/../app/Controllers/AdherentController.php';
require_once __DIR__ . '/../app/Controllers/AbonnementController.php';

$action = $_GET['action'] ?? 'adherents';

$adherentController = new AdherentController();
$abonnementController = new AbonnementController();

switch ($action) {

    // Adhérents
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

    // Abonnements
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

    default:
        echo "<h2>404 - Page introuvable</h2>";
        break;
}