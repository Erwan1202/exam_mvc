<?php include 'views/templates/header.php'; ?>

<h1>Bienvenue sur Smartbike</h1>
<h2>Dernier vélo ajouté</h2>

<?php if ($dernierVelo): ?>
    <h3><?php echo htmlspecialchars($dernierVelo['nom']); ?></h3>
    <p><?php echo htmlspecialchars($dernierVelo['description']); ?></p>
    <p>Prix : <?php echo number_format($dernierVelo['prix'], 2); ?> €</p>
<?php else: ?>
    <p>Aucun vélo disponible pour le moment.</p>
<?php endif; ?>

<?php include 'views/templates/footer.php'; ?>