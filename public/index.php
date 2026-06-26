<?php

require_once __DIR__ . '/../app/Controllers/AdherentController.php';

$action = $_GET['action'] ?? 'adherents';

$controller = new AdherentController();

switch ($action) {

    case 'adherents':
        $controller->index();
        break;

    case 'create-adherent':
        $controller->create();
        break;

    case 'store-adherent':
        $controller->store();
        break;

    case 'edit-adherent':
        $controller->edit();
        break;

    case 'update-adherent':
        $controller->update();
        break;

    case 'delete-adherent':
        $controller->delete();
        break;

    default:
        echo "<h2>404 - Page introuvable</h2>";
        break;
}