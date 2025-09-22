 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>

    <link rel="stylesheet" href="style/style.css">
 </head>
 <body>
        <div class="container">
            <div class="box form-box"></div>

         <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>Esse email já foi usado, tente outro porfavor!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Volte</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Um erro ocorreu");

            echo "<div class='message'>
                      <p>Conta registrada com sucesso!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Faça login agora</button>";
         }

         }else{

        ?>

                <header>Entrar com uma conta</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="username">Username</label>   
                        <input type="text" name="username" id="username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>   
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>   
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>   
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    
                    <div class="field">
                    
                        <input type="submit" name="submit" value="Register" required>
                    </div>
                    <div class="links">
                        Já é um membro? <a href="registrer.html">Entrar</a>
                    </div>
                </form>
                <?php } ?>
        </div>
    
 </body>
 </html>