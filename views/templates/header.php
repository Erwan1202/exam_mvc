<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartbike - Vélos Électriques</title>
    <!-- Lien vers le fichier CSS de Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

<header class="bg-green-500 text-white p-4 shadow-lg">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="/exam_mvc/images/image.png" alt="logo" class="h-12">
            <h1 class="text-3xl font-bold">SMARTBIKE</h1>
        </div>
        
        <!-- Navigation -->
        <nav>
            <ul class="flex space-x-6 text-lg">
                <li><a href="/views/acceuil.php" class="hover:text-gray-200">Accueil</a></li>
                <li><a href="/exam_mvc/views/velos.php" class="hover:text-gray-200">Nos Vélos</a></li>
                <li><a href="/exam_mvc/views/commander.php" class="hover:text-gray-200">Commander</a></li>
                <li><a href="/exam_mvc/views/contacts.php" class="hover:text-gray-200">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>