<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/a1dbbb8f34.js" crossorigin="anonymous"></script>
    <title>Principal</title>
</head>

<body>
    <div class="fondo">
        <div class="container">
            <div class="titulo">
                <p>Login</p>
            </div>
            <div class="formulario">
                <form action="" method="post">
                    <div class="form-icon">
                        <i class="fa-regular fa-user"></i>
                        <div class="form-group">
                            <input id="user" class="form-control" type="text" name="" required>
                            <label for="user">User</label>
                        </div>
                    </div>
                    <div class="form-icon">
                        <i class="fa-solid fa-lock"></i>
                        <div class="form-group">
                            <input id="password" class="form-control" type="password" name="password" required>
                            <label for="password">Password </label>
                            <div class="ojos"><i class="fa-solid fa-eye" id="togglePassword"></i></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recordar">Recordar Contraseña</label>
                        <input type="checkbox" name="recordar" id="recordar">
                    </div>
                </form>
                <div class="container">
                    <button type="button" class="btn btn-success">Ingresar</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</html>