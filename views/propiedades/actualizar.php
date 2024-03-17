<main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <a href="/admin" class="btn btn-verde"><< Volver</a>

    <form class="formulario" method="POST" action="" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php' ?>
        <input type="submit" value="Actualizar Propiedad" class="btn btn-verde">
    </form>
</main>