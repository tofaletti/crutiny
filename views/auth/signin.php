<div class="contenedor crear">
    <?php include_once __DIR__ .'/../templates/site-name.php'; ?>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crear cuentas en Crutiny</p>

        <?php include_once __DIR__ .'/../templates/alerts.php'; ?>

        <form class="formulario" method="POST" action="/crear-cuenta">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input 
                    type="text"
                    id="name"
                    placeholder="Nombre de Usuario"
                    name="name"
                    value="<?php echo $usuario->name; ?>"
                />
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>
                <input 
                    type="password"
                    id="password"
                    placeholder="Establecer Contraseña"
                    name="password"
                />
            </div>

            <div class="campo">
                <label for="password2">Repetir Contraseña</label>
                <input 
                    type="password"
                    id="password2"
                    placeholder="Repetir la Contraseña"
                    name="password2"
                />
            </div>

            <input type="submit" class="boton" value="Crear Cuenta">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tiene cuenta? Iniciar Sesión</a>
        </div>
    </div> <!--.contenedor-sm -->
</div>