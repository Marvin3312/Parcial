<!-- Modal de Login --> 
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Inicio de Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p class="login-box-msg">Inicio de sesión</p>
                <form action="index.php" method="post">
                    <input type="hidden" name="form_login" value="form_login">
                    <div class="input-group mb-3">
                        <input type="email" name="usuario" class="form-control" placeholder="Email" required
                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" 
                        title="Ingrese un correo válido, por ejemplo: marvinhernandez@gmail.com">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_user" class="form-control" placeholder="Password" required
                        pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_]).{8,}$"
                        title="La contraseña debe tener al menos 8 caracteres, un número y un carácter especial (@$!%*?&)">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>