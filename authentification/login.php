<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try{
        $bdd = new PDO("mysql:host=$servername;dbname=eleves", $username, $password);
        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connexion ok, ";
    }
    
    catch(PDOException $e){
        echo "Erreur : ".$e->getMEssage();
    }

    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email= $_POST["email"];
        $mdp= $_POST["password"];
        $error = "";

        $requete = $bdd -> prepare("SELECT * FROM users WHERE email = :email AND mdp = :mdp");
        
        $requete -> execute(['email' => $email, 'mdp' => $mdp]);
        
        $num_ligne = $requete -> rowCount();
        if(($num_ligne) > 0){
            header("Location:accueil.php");
        }
        else{
            $error = "Email et/ou mot de passe incorrects";
            
        }  

    }
?>


    <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="https://www.imt-atlantique.fr/sites/default/files/Images/Ecole/charte-graphique/IMT_Atlantique_logo_RVB_Baseline_400x272.jpg" alt="Logo" style="width: 50%;">
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Accueil</a></li>
                <li><a href="#" class="link">Prendre rendez-vous</a></li>
                <li><a href="#" class="link">Encadrantes</a></li>
                <li><a href="#" class="link">À propos</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="connexionBtn" onclick="connexion()">Connexion</button>
            <button class="btn" id="registerBtn" onclick="register()">Inscription</button>
        </div>

        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>
    <form action="" method="POST">
    <div class="form-box">
        <!------------------- connexion form -------------------------->

        <div class="connexion-container" id="connexion">
            <div class="top">
                <header>Connexion</header>
                <span>Vous n'avez pas encore de compte ? <a href="#" onclick="inscription()">Inscription</a></span>
            </div>
            <?php
                if(isset($error)){
                    echo $error;
                }
            ?>
            <div class="input-box">
                <input type="email" class="input-field" name="email" placeholder="E-mail" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" id="password" name="password" placeholder="Mot de passe" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            
            <div class="input-box">
            <input type = "submit" value = "Se connecter" class = "submit" name = "ok">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="connexion-check">
                    <label for="connexion-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>

    <script>
        function myMenuFunction() {
            var i = document.getElementById("navMenu");

            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }
    </script>

    <script>
        var a = document.getElementById("connexionBtn");
        var b = document.getElementById("inscriptionBtn");
        var x = document.getElementById("connexion");
        var y = document.getElementById("inscription");

        function connexion() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }

        function inscription() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }
    </script>

</body>
</html>
