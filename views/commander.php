<?php include 'templates/header.php'; ?>

<main class="max-w-4xl mx-auto p-6 mt-10 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Formulaire de Commande</h1>

    <form action="index.php?page=commande" method="POST" class="space-y-6">
        <!-- Sélection du vélo -->
        <div class="flex flex-col">
            <label for="velo" class="text-sm font-medium text-gray-700">Choisissez un vélo:</label>
            <select name="velo" id="velo" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <?php if (isset($velos) && !empty($velos)): ?>
                    <?php foreach ($velos as $velo): ?>
                        <option value="<?php echo htmlspecialchars($velo['id_velo']); ?>">
                            <?php echo htmlspecialchars($velo['nom']); ?>
                        </option>
                    <?php endforeach; ?>
                <?php else: ?>
                    <option value="">Aucun vélo disponible</option>
                <?php endif; ?>
            </select>
        </div>

        <!-- Champ pour le nom -->
        <div class="flex flex-col">
            <label for="nom" class="text-sm font-medium text-gray-700">Nom:</label>
            <input type="text" name="nom" id="nom" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Champ pour le prénom -->
        <div class="flex flex-col">
            <label for="prenom" class="text-sm font-medium text-gray-700">Prénom:</label>
            <input type="text" name="prenom" id="prenom" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Champ pour l'email -->
        <div class="flex flex-col">
            <label for="email" class="text-sm font-medium text-gray-700">Email:</label>
            <input type="email" name="email" id="email" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Champ pour le message -->
        <div class="flex flex-col">
            <label for="message" class="text-sm font-medium text-gray-700">Message:</label>
            <textarea name="message" id="message" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <!-- Bouton de soumission -->
        <div class="text-center">
            <button type="submit" class="w-full px-6 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Envoyer
            </button>
        </div>
    </form>
</main>

<?php include 'templates/footer.php'; ?>
