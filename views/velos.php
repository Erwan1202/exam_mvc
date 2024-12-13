<?php include 'views/templates/header.php'; ?>

<h1>Nos Vélos</h1>

<?php foreach ($velos as $velo): ?>
    <div class="velo">
        <h2><?php echo htmlspecialchars($velo['nom']); ?></h2>
        <p><?php echo htmlspecialchars($velo['description']); ?></p>
        <p>Prix : <?php echo number_format($velo['prix'], 2); ?> €</p>
        <img src="<?php echo htmlspecialchars($velo['image_url']); ?>" alt="Image du vélo">
        <a href="index.php?page=commander&velo=<?php echo $velo['id_velo']; ?>">Commander</a>
        <a href="index.php?page=commander&velo=<?php echo $velo['id_velo']; ?>">Plus d'infos</a>
    </div>
<?php endforeach; ?>

<?php include 'views/templates/footer.php'; ?>
