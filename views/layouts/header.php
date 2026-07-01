<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FitConnect</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        html,
        body{
            height:100%;
        }

        body{
            display:flex;
            flex-direction:column;
            min-height:100vh;
            background:#f4f6f9;
            color:#333;
        }

        /* ================= HEADER ================= */

        header{
            background:#2c3e50;
            color:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 60px;
            box-shadow:0 2px 8px rgba(0,0,0,.15);
        }

        .logo h1{
            color:white;
            font-size:30px;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-left:25px;
            font-size:17px;
            font-weight:bold;
            transition:.3s;
        }

        nav a:hover{
            color:#3498db;
        }

        /* ================= CONTENU ================= */

        .container{
            flex:1;
            width:90%;
            margin:30px auto;
        }

        h1{
            color:#2c3e50;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            margin-top:20px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }

        th,
        td{
            padding:14px;
            border:1px solid #ddd;
            text-align:center;
        }

        th{
            background:#3498db;
            color:white;
        }

        tr:nth-child(even){
            background:#f8f9fa;
        }

        tr:hover{
            background:#eef5ff;
        }

        .btn{
            display:inline-block;
            padding:8px 16px;
            border-radius:6px;
            color:white;
            text-decoration:none;
            font-weight:bold;
        }

        .add{
            background:#27ae60;
        }

        .edit{
            background:#3498db;
        }

        .delete{
            background:#e74c3c;
        }

        .add:hover{
            background:#1e8449;
        }

        .edit:hover{
            background:#2980b9;
        }

        .delete:hover{
            background:#c0392b;
        }

        input,
        select{
            width:100%;
            padding:10px;
            margin:8px 0 18px;
            border:1px solid #ccc;
            border-radius:6px;
        }

        label{
            font-weight:bold;
        }

        button{
            background:#3498db;
            color:white;
            border:none;
            padding:12px 25px;
            border-radius:6px;
            cursor:pointer;
        }

        button:hover{
            background:#2980b9;
        }

    </style>

</head>

<body>

<header>

    <div class="logo">
        <h1>🏋️ FitConnect</h1>
    </div>

    <nav>

        <a href="index.php?action=dashboard">Dashboard</a>

        <a href="index.php?action=adherents">Adhérents</a>

        <a href="index.php?action=abonnements">Abonnements</a>

        <a href="index.php?action=seances">Séances</a>

    </nav>

</header>

<div class="container">