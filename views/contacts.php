<?php include 'templates/header.php'; ?>

<main class="max-w-4xl mx-auto p-6 mt-10 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Contactez-nous</h1>

    <p class="text-center text-lg mb-8">Vous avez des questions ? N'hésitez pas à nous contacter via le formulaire ci-dessous.</p>

    <!-- Formulaire de contact -->
    <form action="index.php?page=contact" method="POST" class="space-y-6">
        <div class="flex flex-col">
            <label for="nom" class="text-sm font-medium text-gray-700">Nom</label>
            <input type="text" id="nom" name="nom" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="flex flex-col">
            <label for="prenom" class="text-sm font-medium text-gray-700">Prénom</label>
            <input type="text" id="prenom" name="prenom" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="flex flex-col">
            <label for="email" class="text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        
        <div class="flex flex-col">
            <label for="message" class="text-sm font-medium text-gray-700">Message</label>
            <textarea id="message" name="message" rows="4" required class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="w-full px-6 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Envoyer
            </button>
        </div>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2 class="text-2xl font-semibold text-center text-green-600 mt-8">Merci pour votre message !</h2>
        <p class="text-center text-lg text-gray-600 mt-2">Nous vous répondrons dans les plus brefs délais.</p>
    <?php endif; ?>
</main>

<?php include 'templates/footer.php'; ?>
