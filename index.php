<?php 
   session_start();
?>
<!DOCTYPE html>
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
            
            <?php 
              include("php/config.php");
              if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);

                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Selecionar Erro");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                      <p>Nome ou senha errados</p>
                       </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Volte</button>";
         
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
              }else{

            
            ?>
            
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>   
                        <input type="text" name="email" id="email" required>
                    </div>

                    <div class="field input">
                        <label for="password">Senha</label>   
                        <input type="password" name="password" id="password" required>
                    </div>
                    
                    <div class="field">
                    
                        <input type="submit" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Você não tem uma conta? <a href="register.php">Criar uma conta agora</a>
                    </div>
                </form>
            <?php } ?>
        </div>
    
 </body>
 </html>