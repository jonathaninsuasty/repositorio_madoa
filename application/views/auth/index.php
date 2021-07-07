<!DOCTYPE html>
<html>
<head>
	<title>Repositorio OVAs</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="<?php echo base_url() ?>res/css/login.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <input type="hidden" value="<?php echo base_url(); ?>" id="url">
	<div class="container">
        <div class="row">
            <div class="col-md-5 banner">
				<img src="<?php echo base_url(); ?>res/img/logo_udenar.png" alt="" width="500">
			</div>
            <div class="col-md-7 login-form-2">
                <h3>INICIAR SESIÓN EN EL REPOSITORIO</h3><br>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Tu correo *" id="email" required="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Tu contraseña *" id="password" required="" />
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="INGRESAR" id="boton" />
                    </div>
                    <div class="form-group">
                        <a href="#" class="ForgetPwd" value="Iniciar sesión">Olvidó su contraseña?</a><br>
                        <a href="/repositorio/auth/registrar" class="ForgetPwd" value="Iniciar sesión">Registrar nuevo usuario</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $('#boton').click(function(e) {
        e.preventDefault();
        $.ajax({
          method: "POST",
          url: $('#url').val() + "auth/login",
          data: { email: $('#email').val(), password: $('#password').val() }
        })
        .done(function( result ) {
            if (result == 1) {
                window.location.href = $('#url').val() + "admin";
            } else {
                alert("Datos incorrectos");
            }
        });
    });
</script>
