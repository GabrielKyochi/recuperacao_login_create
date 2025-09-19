 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="style/style.css">
 </head>
 <body>
        <div class="container">
            <div class="box form-box"></div>
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>   
                        <input type="text" name="username" id="username" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>   
                        <input type="password" name="password" id="password" required>
                    </div>
                    
                    <div class="field">
                    
                        <input type="submit" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Você não tem uma conta? <a href="register.php">Criar uma conta agora</a>
                    </div>
                </form>
        </div>
    
 </body>
 </html>