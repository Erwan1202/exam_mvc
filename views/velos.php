<?php include 'templates/header.php'; ?>

<main class="max-w-6xl mx-auto p-6 mt-10 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Nos Vélos</h1>

    <?php if (!empty($velos)): ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($velos as $velo): ?>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4"><?php echo htmlspecialchars($velo['nom']); ?></h2>
                    <p class="text-gray-700 mb-4"><?php echo htmlspecialchars($velo['description']); ?></p>
                    <p class="text-lg font-medium text-blue-600">Prix : <?php echo number_format($velo['prix'], 2); ?> €</p>
                    
                    <div class="mt-4">
                        <img src="images/<?php echo htmlspecialchars($velo['image_url']); ?>" alt="Image du vélo" class="w-full h-48 object-cover rounded-lg mb-4">
                    </div>

                    <div class="flex justify-between mt-6">
                        <a href="index.php?page=commander&velo=<?php echo $velo['id_velo']; ?>" class="text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg shadow-md transition duration-200">Commander</a>
                        <a href="index.php?page=commander&velo=<?php echo $velo['id_velo']; ?>" class="text-blue-600 hover:text-blue-700 py-2 px-4 rounded-lg border border-blue-600 hover:bg-blue-100 transition duration-200">Plus d'infos</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-700">Aucun vélo disponible pour le moment.</p>
    <?php endif; ?>
</main>

<?php include 'templates/footer.php'; ?>
