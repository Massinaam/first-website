<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>

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
    <form action="config.php" method="post">
    <div class="form-box">
        <!------------------- inscription form -------------------------->

        <div class="inscription-container" id="inscription">
            <div class="top">
                <span>Vous avez déjà un compte ? <a href="#" onclick="connexion()">Connexion</a></span>
                <header>Inscription</header>
                
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="nom" placeholder="Nom" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="prenom" placeholder="Prénom" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <select name="campus" id="campus" class="input-field" required>
                <option value="" disabled selected>Sélectionnez un campus</option>
                <option value="Brest">Brest</option>
                <option value="Nantes">Nantes</option>
                <option value="Rennes">Rennes</option>
                </select>
                <i class="bx bx-location-plus"></i>
            </div>


            <div class="input-box">
                <input type="email" class="input-field" name="email" placeholder="E-mail" required>
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="pass" placeholder="Mot de passe" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            
            <div class="input-box">
            <input type = "submit" value = "S'inscrire" name = "ok" class = "submit">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="inscription-check">
                    <label for="inscription-check"> Remember Me</label>
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
