<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Formulaire</title>
</head>
<body>
        <div class="formulaire">
            <form action="traitement.php" method="post" enctype="multipart/form-data">
                <label for="pseudo">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo" value="lololo" require>
    
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="loloetlala@hotmail.fr" require>
    
                <label for="password">Mots de passe :</label>
                <input type="password" name="password" id="password" value="123456789" require>
    
                <label for="confirmPassword">Confirmer votre mots de passe :</label>
                <input type="password" name="confirmPassword" id="confirmPassword" value="123456789" require>
    
                <label for="files">Télétransfèrer un fichier</label>
                <input type="file" name="file" id="file" require>
    
                <button type="submit" id="submit">Envoie</button>
            </form>
        </div>
</body>
</html>