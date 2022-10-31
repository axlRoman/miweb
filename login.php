<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style login.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,300,0,0" />
</head> 
<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="imgs/Logo RomanTech.png" alt="alogo">
            </div>                            
            <div class="login-card-header">
                <h1>Iniciar sesión</h1>
                <div>Por favor inicie sesión para continuar</div>
            </div>
            <form class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" placeholder="Ingrese su email" required autofocus>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" placeholder="Ingrese su contraseña" required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox">
                        <label for="rememberMeCheckbox">Recuérdame</label>
                    </div>
                    <a href="">¿Olvidaste tu contraseña?</a>
                </div>
                <button type="submit">Iniciar sesión</button>
            </form>             
            <div class="login-card-footer">
                ¿Eres nuevo en RomanTech? <a href="sign-up.php">Crear tu cuenta de RomanTech</a>
            </div>
        </div>
    </div>
</body>
</html>