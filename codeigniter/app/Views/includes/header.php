<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive navbar</title>
    <link rel="stylesheet" href="<?php echo base_url('dist/style.css'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body id="top">

<header class="bg-white z-50 fixed top-0 w-full shadow">
    <nav id="main-nav" class="bg-white max-w-6xl mx-auto font-poppins p-6 flex items-center justify-between">
        <a href="<?php echo base_url(); ?>" class="flex" aria-label="Page d'accueil du site">
            <img src="<?php echo base_url('images/logo3i.png'); ?>" width="300px" height="300px" class="hidden md:w-7 md:inline md:mr-4" alt="Logo">
            <span aria-hidden="true "text-lg lg:text-xl>3i School</span>
        </a>

        <button aria-label="toggle button" aria-expanded="false" id="menu-btn" class="cursor-pointer w-7 md:hidden">
            <img src="<?php echo base_url('images/menu.svg'); ?>" alt="Menu">
        </button>

        <div>
            <a href="" class="font-bold py-2 px-4">Offre</a>
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Contact</a>
            <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Inscription</a>
            <a href="#" class="btn-blue-border font-bold py-2 px-4 rounded">Connexion</a>
        </div>
    </nav>
</header>
