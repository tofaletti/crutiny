<aside class="sidebar">
    <div class="contenedor-sidebar">
        <h2>Crutiny</h2>

        <div class="cerrar-menu">
            <img id="cerrar-menu" src="build/img/cerrar.svg" alt="imagen cerrar menu">
        </div>
    </div>
    

    <nav class="sidebar-nav">
        <a class="<?php echo ($titulo === 'Escrutinio Provincial') ? 'activo' : ''; ?>" href="/provincial">Provincial</a>
        <a class="<?php echo ($titulo === 'Escrutinio Nacional') ? 'activo' : ''; ?>" href="/nacional">Nacional</a>
        <a class="<?php echo ($titulo === 'Dashboard') ? 'activo' : ''; ?>" href="/metricas">Dashboard</a>
    </nav>

    <div class="cerrar-sesion-mobile">
        <a href="/logout" class="cerrar-sesion">Cerrar Sesión</a>
    </div>
</aside>