<?php
  $xml = simplexml_load_file('restaurante.xml'); // Carga el archivo XML
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Restaurante Pollo Feliz</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Restaurante Pollo Feliz Chino</h1>
  </header>

  <section>
  <?php foreach($xml->categoria as $categoria): ?>
    <div class="categoria">
      <h2><?= $categoria['nombre'] ?></h2>
      <?php foreach($categoria->plato as $plato): ?>
        <div class="plato">
          <h3><?= $plato->nombre ?></h3>
          <p class="descripcion"><?= $plato->descripcion ?></p>
          <p class="precio"><?= $plato->precio ?> €</p>
          <?php if ($plato->sub != null): ?>
            <?php foreach($plato->caracteristicas->sub as $sub): ?>
              <p class="sub"><?= $sub ?></p>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
</section>


  <footer>
    <p>no es un kfc</p>
  </footer>
</body>
</html>

