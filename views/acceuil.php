<?php
// views/accueil.php
include __DIR__ . '/templates/header.php';
?>

<h1>Bienvenue sur Smartbike</h1>

<!-- Affichage du dernier vélo ajouté -->
<h2>Dernier vélo ajouté</h2>

<?php if (isset($dernierVelo) && $dernierVelo): ?>
    <h3><?php echo htmlspecialchars($dernierVelo['nom']); ?></h3>
    <p><?php echo htmlspecialchars($dernierVelo['description']); ?></p>
    <p>Prix : <?php echo number_format($dernierVelo['prix'], 2); ?> €</p>
    <?php if (!empty($dernierVelo['image_url'])): ?>
        <img src="<?php echo htmlspecialchars($dernierVelo['image_url']); ?>" alt="Image du vélo" />
    <?php endif; ?>
<?php else: ?>
    <p>Aucun vélo disponible pour le moment.</p>
<?php endif; ?>

<?php include __DIR__ . '/templates/footer.php'; ?>
