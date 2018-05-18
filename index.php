    <?php
    $tituloPagina = "Inicio Marketpro";
    $pagina = "Inicio";
     include ("inc/header.php"); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido a ZonaTresek</h1>
        <p>Podras encontar de todo para ser un gran muralista o simplemente un Grafitero.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver Mas &raquo;</a></p>
      </div>
    </div>
      <!-- Productos destacados -->
    <div class="container">
      <div class="row">

         <?php foreach ($ofertas as $oferta) { ?>
        <div class="col-md-3">
           <h2><?php echo $oferta['nombre'];?></h2>
            <img src=<?php echo $oferta['imagen'];?> alt = "<?php echo $oferta['nombre'];?>" class="img-rounded">
            <p><?php echo $oferta['introDescripcion'];?></p>
            <p><?php echo $oferta['descripcion'];?></p>
            <p><?php echo $oferta['precio'];?></p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      <!-- Para poder mesclar php con html --> 
      <?php } ?>
       </div>
     
      <!-- Productos destacados -->
    
    <?php   include ("inc/footer.php"); ?>      
