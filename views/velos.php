<?php
// views/velo.php
include __DIR__ . '/templates/header.php';
?>

<h1>Nos vélos disponibles</h1>

<?php if (isset($velos) && count($velos) > 0): ?>
    <ul>
        <?php foreach ($velos as $velo): ?>
            <li>
                <h3><?php echo htmlspecialchars($velo['nom']); ?></h3>
                <p><?php echo htmlspecialchars($velo['description']); ?></p>
                <p>Prix : <?php echo number_format($velo['prix'], 2); ?> €</p>
                <?php if (!empty($velo['image_url'])): ?>
                    <img src="<?php echo htmlspecialchars($velo['image_url']); ?>" alt="Image du vélo" />
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun vélo disponible pour le moment.</p>
<?php endif; ?>

<?php include __DIR__ . '/templates/footer.php'; ?>
