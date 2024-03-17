<main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Seción</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="formulario" action="/login">
            <fieldset>
                <legend>E-mail y Password</legend>

                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="Tu Email" id="mail" require>

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Tu Password" id="password" require>
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="btn btn-verde">
        </form>
    </main>