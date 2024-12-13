<!-- views/commande.php -->
<?php include 'templates/header.php'; ?>

<h1>Formulaire de Commande</h1>

<form action="index.php?page=commande" method="POST">
    <label for="velo">Choisissez un vélo:</label>
    <select name="velo" id="velo">
        <?php if (isset($velos) && !empty($velos)): ?>
            <?php foreach ($velos as $velo): ?>
                <option value="<?php echo $velo['id_velo']; ?>">
                    <?php echo htmlspecialchars($velo['nom']); ?>
                </option>
            <?php endforeach; ?>
        <?php else: ?>
            <option value="">Aucun vélo disponible</option>
        <?php endif; ?>
    </select>
    
    <label for="nom">Nom:</label>
    <input type="text" name="nom" required>

    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="message">Message:</label>
    <textarea name="message" required></textarea>

    <button type="submit">Envoyer</button>
</form>

<?php include 'templates/footer.php'; ?>
