<?php

require_once '../config/Database.php';
require_once '../app/Entities/Adherent.php';
require_once '../app/Repositories/AdherentRepository.php';
require_once '../app/Controllers/AdherentController.php';

echo "<h1>FitConnect - Tests</h1>";

/*
|--------------------------------------------------------------------------
| 1. Test Connexion Base de données
|--------------------------------------------------------------------------
*/

echo "<h2>1. Test PDO</h2>";

try {

    $pdo = Database::getConnection();

    echo "✅ Connexion réussie à la base de données";

} catch (Exception $e) {

    echo "❌ Erreur : " . $e->getMessage();
}

echo "<hr>";

/*
|--------------------------------------------------------------------------
| 2. Test Entity Adherent
|--------------------------------------------------------------------------
*/

echo "<h2>2. Test Entity Adherent</h2>";

$adherent = new Adherent();

$adherent->setNom("Ahmed");
$adherent->setPrenom("Bennani");
$adherent->setEmail("ahmed@test.com");
$adherent->setTelephone("0612345678");
$adherent->setDateNaissance("1998-05-10");
$adherent->setDateInscription(date('Y-m-d'));
$adherent->setSalleId(1);

echo "Nom : " . $adherent->getNom() . "<br>";
echo "Prénom : " . $adherent->getPrenom() . "<br>";
echo "Email : " . $adherent->getEmail() . "<br>";
echo "Téléphone : " . $adherent->getTelephone() . "<br>";
echo "Date naissance : " . $adherent->getDateNaissance() . "<br>";
echo "Date inscription : " . $adherent->getDateInscription() . "<br>";
echo "Salle ID : " . $adherent->getSalleId() . "<br>";

echo "<hr>";

/*
|--------------------------------------------------------------------------
| 3. Test Repository
|--------------------------------------------------------------------------
*/

echo "<h2>3. Test AdherentRepository</h2>";

try {

    $repository = new AdherentRepository();

    $adherents = $repository->findAll();

    echo "<pre>";
    print_r($adherents);
    echo "</pre>";

    echo "✅ Repository fonctionne";

} catch (Exception $e) {

    echo "❌ Erreur Repository : " . $e->getMessage();
}

echo "<hr>";

/*
|--------------------------------------------------------------------------
| 4. Test Controller
|--------------------------------------------------------------------------
*/

echo "<h2>4. Test Controller</h2>";

try {

    $controller = new AdherentController();

    echo "✅ Controller chargé correctement";

} catch (Exception $e) {

    echo "❌ Erreur Controller : " . $e->getMessage();
}

echo "<hr>";

/*
|--------------------------------------------------------------------------
| Fin
|--------------------------------------------------------------------------
*/

echo "<h2>Tests terminés ✅</h2>";
echo "<h2>Test Repository</h2>";

$repository = new AdherentRepository();

$adherents = $repository->findAll();

foreach ($adherents as $adherent) {

    echo "ID : " . $adherent->getId() . "<br>";
    echo "Nom : " . $adherent->getNom() . "<br>";
    echo "Prénom : " . $adherent->getPrenom() . "<br>";
    echo "Email : " . $adherent->getEmail() . "<br>";
    echo "Date naissance : " . $adherent->getDateNaissance() . "<br>";
    echo "Date inscription : " . $adherent->getDateInscription() . "<br>";
    echo "Salle : " . $adherent->getSalleId() . "<br>";
    echo "<hr>";
}