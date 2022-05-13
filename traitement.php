<?php
session_start();
//method post recuper une valeur :
// var_dump($_POST);
// file
// var_dump($_FILES); // permet de recevoir la files si enctype est mis dans le form.
// var_dump($_FILES['file']['name']); // récupère le nom du fichier.
$pseudo = htmlspecialchars($_POST["pseudo"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$confirmPassword = htmlspecialchars($_POST["confirmPassword"]);
// var_dump($pseudo);
// var_dump($file);
// var_dump($email);
// var_dump($password);
// var_dump($confirmPassword);

$fileName = $_FILES['file']['name'];
$file = $_FILES['file'];

// tableau d'acceptation images :
$acceptImage = ["jpg","png","gif"];

if (empty($pseudo) || empty($email) || empty($password) || empty($confirmPassword)){
    echo "Le formulaire n'est pas bien remplit. <a href='index.php'> clicquez-ici <a>";
}

if (!empty($pseudo) && strlen($pseudo) < 5){
    echo "Le pseudo n'est pas bien remplit. <a href='index.php'> cliquez-ici <a>";
    die;
}
if (filter_var($email,FILTER_VALIDATE_EMAIL) == 0) {
        echo "L'email n'est pas correct' <a href='index.php'> cliquez-ici <a>";
        die;
    }
    if ($password !== $confirmPassword){
        echo "Le mot de passe n'est pas identique <a href='index.php'> cliquez-ici <a>";
        die;
    }

$param = explode(".", $fileName);
$extension = strtolower(end($param));

if (!in_array($extension,  $acceptImage)){
    echo "Pop pop pop..., le format n'est pas pris en charge. <a href='index.php'> cliquez-ici <a>";
} else {
    echo '<a href="profil.php">Voir mon profil</a>';
} 
$fileName = time() . bin2hex( random_bytes(15) ) . "." . $extension;
$move = move_uploaded_file($file["tmp_name"], "uploads/" . $fileName);

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $_SESSION['pseudo'] = $_POST["pseudo"];
    $_SESSION['email'] = $_POST["email"];
    $_SESSION['password'] = $_POST["password"];
    $_SESSION['image'] = $fileName;
}


?>

