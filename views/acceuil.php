<?php

include __DIR__ . '/templates/header.php';
?>

<main class="max-w-6xl mx-auto p-6 mt-10 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Bienvenue sur Smartbike</h1>


    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Dernier vélo ajouté</h2>

    <?php if (isset($dernierVelo) && $dernierVelo): ?>
        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold text-gray-800 mb-4"><?php echo htmlspecialchars($dernierVelo['nom']); ?></h3>
            <p class="text-gray-700 mb-4"><?php echo htmlspecialchars($dernierVelo['description']); ?></p>
            <p class="text-lg font-medium text-blue-600">Prix : <?php echo number_format($dernierVelo['prix'], 2); ?> €</p>

            <?php if (!empty($dernierVelo['image_url'])): ?>
                <img src="<?php echo htmlspecialchars($dernierVelo['image_url']); ?>" alt="Image du vélo" class="w-full h-48 object-cover rounded-lg mt-4">
            <?php endif; ?>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-700 mt-4">Aucun vélo disponible pour le moment.</p>
    <?php endif; ?>
</main>

<?php include __DIR__ . '/templates/footer.php'; ?>
