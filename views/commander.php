<?php include 'templates/header.php'; ?>

<h1>Formulaire de Commande</h1>

<!-- Le formulaire d'envoi de commande -->
<form action="index.php?page=commande" method="POST">
    <!-- Sélection du vélo -->
    <label for="velo">Choisissez un vélo:</label>
    <select name="velo" id="velo" required>
        <!-- Vérification si la variable $velos est définie et contient des données -->
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
    
    <!-- Champ pour le nom -->
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" required>

    <!-- Champ pour le prénom -->
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom" required>

    <!-- Champ pour l'email -->
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <!-- Champ pour le message -->
    <label for="message">Message:</label>
    <textarea name="message" id="message" required></textarea>

    <!-- Bouton de soumission -->
    <button type="submit">Envoyer</button>
</form>

<?php include 'templates/footer.php'; ?>
