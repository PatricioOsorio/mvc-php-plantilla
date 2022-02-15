<?php require_once RUTA_APP . "/views/includes/header.php" ?>

<h1><?php echo $data['title']; ?></h1>
<ul>
  <?php foreach ($data['vehicles'] as $vehicle) { ?>
    <li><?php echo "Marca: " . $vehicle->marca ?></li>
  <?php } ?>
</ul>

<?php require_once RUTA_APP . "/views/includes/footer.php" ?>