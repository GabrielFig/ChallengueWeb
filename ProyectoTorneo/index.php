<app-navbar></app-navbar>
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <b>LOGIN</b>
        </div>
        <div class="card-body p-4">

                <form action="php/registro_usuario_be.php" method="POST" class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text"  placeholder="Ingrese un Usuario" name="usuario">
                    <input type="password"  placeholder="Ingrese una Contraseña" name="contra">
                    <button>Registrarse</button>

                </form>

                <form action="php/login_usuario_be.php" method="POST" class="formulario_sesion">
                <h2>loggear</h2>
                    <label style="float: left;">Usuario</label>
                    <input class="form-control m-2" type="users" placeholder="Ingrese un Usuario" name="usuario">

                    <label style="float: left;">Contraseña</label>
                    <input class="form-control m-2" type="password" placeholder="Ingrese una Contraseña" name="contra">

                    <button class="btn btn-primary btn-block m-2">Ingresar</button>
                 </form>
        </div>
    </div>

</div>