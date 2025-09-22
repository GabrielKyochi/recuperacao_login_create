<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Editar perfil</title>
</head>
<body>
     <div class="nav">
        <div class="logo">
            <p><a href="home.php"> Logo</a></p>
        </div>

        <div class="right-links">
            <a href='#'>Trocar perfil</a>";
            <a href="php/logout.php"> <button class="btn">Sair</button> </a>
        </div>
    </div>
    <div class="container">
    <div class="box form-box"></div>
     <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Perfil Atualizado!</p>
                </div> <br>";
              echo "<a href='home.php'><button class='btn'>Vá para a aba home!</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                }
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
                    
                        <input type="submit" name="submit" value="Login" required>
                    </div>
                    <div class="links">
                        Já é um membro? <a href="index.php">Entrar</a>
                    </div>
                </form>
        </div>
        <?php } ?> 
    </div>
</body>
</html>