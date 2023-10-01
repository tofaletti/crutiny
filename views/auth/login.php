<div class="contenedor login">
    <?php include_once __DIR__ .'/../templates/site-name.php'; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <?php include_once __DIR__ .'/../templates/alerts.php'; ?>

        <form class="formulario" method="POST" action="/" novalidate>
            <div class="campo">
                <label for="usuario">Usuario</label>
                <input 
                    type="text"
                    id="name"
                    placeholder="Tu Usuario"
                    name="name"
                />
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>
                <input 
                    type="password"
                    id="password"
                    placeholder="Tu Contraseña"
                    name="password"
                />
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/capacitacion">¿Aún no sabes como funciona? Capacitate aquí</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>