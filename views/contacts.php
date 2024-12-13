<?php include 'templates/header.php'; ?>

<h1>Contactez-nous</h1>

<p>Vous avez des questions ? N'hésitez pas à nous contacter via le formulaire ci-dessous.</p>

<!-- Formulaire de contact -->
<form action="index.php?page=contact" method="POST">
    <div>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" required></textarea>
    </div>
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <h2>Merci pour votre message !</h2>
    <p>Nous vous répondrons dans les plus brefs délais.</p>
<?php endif; ?>

<?php include 'templates/footer.php'; ?>
