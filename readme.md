# 🏋️ FitConnect

## Description

FitConnect est une application web de gestion d'une salle de sport développée en PHP selon l'architecture MVC.

Elle permet de gérer les adhérents, les abonnements et les séances d'entraînement.

---

## Fonctionnalités

### Gestion des adhérents
- Ajouter un adhérent
- Modifier un adhérent
- Supprimer un adhérent
- Afficher la liste des adhérents

### Gestion des abonnements
- Ajouter un abonnement
- Modifier un abonnement
- Supprimer un abonnement
- Afficher la liste des abonnements

### Gestion des séances
- Ajouter une séance
- Modifier une séance
- Supprimer une séance
- Afficher la liste des séances

### Dashboard
- Nombre total des adhérents
- Nombre total des abonnements
- Nombre total des séances

---

## Technologies utilisées

- PHP 8
- MySQL
- HTML5
- CSS3
- Architecture MVC
- PDO

---

## Structure du projet

```
fitconnect/
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Repositories/
│   ├── Services/
│   └── Config/
│
├── public/
│   └── index.php
│
├── views/
│   ├── adherents/
│   ├── abonnements/
│   ├── seances/
│   ├── dashboard/
│   └── layouts/
│
├── database/
│   └── fitconnect.sql
│
└── README.md
```

---

## Installation

1. Cloner le projet

```bash
git clone https://github.com/votre-compte/fitconnect.git
```

2. Copier le projet dans :

```
C:\xampp\htdocs\
```

3. Démarrer Apache et MySQL avec XAMPP.

4. Importer la base de données :

```
database/fitconnect.sql
```

5. Configurer la connexion à la base de données dans :

```
app/Config/database.php
```

6. Ouvrir le projet :

```
http://localhost/fitconnect/public/
```

---

## Base de données

Nom :

```
fitconnect
```

---

## Architecture

Le projet suit l'architecture MVC :

- Model
- Repository
- Service
- Controller
- View

---

## Auteur

**Maryem nadi**

Formation Développement Web

2026