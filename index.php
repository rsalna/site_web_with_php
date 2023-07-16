<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a1dbbb8f34.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Principal</title>
</head>

<body>

    <div class="">
        <div class=" fondo d-flex justify-content-center align-items-center">
            <!-- <div class="row"> -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-3 col-xxl-3">
                <div class="contenedor">
                    <div class="titulo">
                        <p>Login</p>
                    </div>
                    <div class="formulario">
                        <form id="login">
                            <div class="form-icon">
                                <i class="fa-regular fa-user"></i>
                                <div class="form-g">
                                    <input id="user" class="" type="text" name="user" required>
                                    <label for="user">User</label>
                                </div>
                            </div>
                            <div class="form-icon">
                                <i class="fa-solid fa-lock"></i>
                                <div class="form-g">
                                    <input id="password" class="" type="password" name="password" required>
                                    <label for="password">Password</label>
                                    <div class="ojos"><i class="fa-solid fa-eye" id="togglePassword"></i></div>
                                </div>
                            </div>
                            <div class="form-g">
                                <label for="recordar">Recordar Contraseña</label>
                                <input type="checkbox" name="recordar" id="recordar">
                            </div>
                        </form> 
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <button type="button" class="btn-acceso" id="acceso">Acceso</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>
<script src="assets/js/main.js"></script>

</html>