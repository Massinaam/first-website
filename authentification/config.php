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

if(isset($_POST["ok"])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mdp = $_POST['pass'];
    $email = $_POST['email'];
    $campus = $_POST['campus'];

    //echo "extraction ok, ";

    $req = $bdd->prepare("SELECT * FROM users WHERE email = :email");
    $req->execute(array(
        'email' => $email
    ));

    $resultat = $req->fetch();

    if ($resultat) {
        echo "Cette adresse e-mail est déjà associée à un compte, veuillez vous connecter.";
    } else {
        $requete = $bdd->prepare("INSERT INTO users VALUES(0, :nom, :prenom, :mdp, :email, :campus)");
        //echo "requete ok, ";

        $requete -> execute(
            array(
                "nom"=> $nom,
                "prenom"=> $prenom,
                "mdp"=> $mdp,
                "email"=> $email,
                "campus" => $campus
            )
        );
        echo "execute ok ";
        header("Location:login.php");
    }
}
?>
