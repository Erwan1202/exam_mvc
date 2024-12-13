<?php include 'templates/header.php'; ?>

<h1>Nos Vélos</h1>

<?php if (!empty($velos)): ?>
    <?php foreach ($velos as $velo): ?>
        <div class="velo">
            <h2><?php echo htmlspecialchars($velo['nom']); ?></h2>
            <p><?php echo htmlspecialchars($velo['description']); ?></p>
            <p>Prix : <?php echo number_format($velo['prix'], 2); ?> €</p>
            <img src="images/<?php echo htmlspecialchars($velo['image_url']); ?>" alt="Image du vélo">
            <a href="index.php?page=commander&velo=<?php echo $velo['id_velo']; ?>">Commander</a>
            <a href="index.php?page=commander&velo=<?php echo $velo['id_velo']; ?>">Plus d'infos</a>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun vélo disponible pour le moment.</p>
<?php endif; ?>

<?php include 'templates/footer.php'; ?>
