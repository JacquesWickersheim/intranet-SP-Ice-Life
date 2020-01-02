<?php
    $erreur_msg  = '';
    $db = new PDO('mysql:host=intranetcg2805.mysql.db;dbname=intranetcg2805;charset=utf8', 'intranetcg2805', 'Tango2267');
    
    $motDePasse = 'R88hbqMB4';
    $motdepasse = $_POST['pass'] ?? '';
    
    if($motdepasse == $motDePasse){
        header("Location: https://sapeurs-pompiers.intranet-ice-life.fr");
    }else{
        $erreur_msg = 'Mot de Passe incorrect, vous n\'est pas habilit&eacute; &agrave; acceder &agrave; l\'intranet';
    }
?>