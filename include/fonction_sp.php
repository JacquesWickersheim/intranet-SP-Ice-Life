<?php
    $erreur = '';
    $db = new PDO('mysql:host=localhost;dbname=secours;charset=utf8', 'root', '');
    
    $nom = $_POST['nom']??'';
    $prenom = $_POST['prenom']??'';
    $date_v = $_POST['date']??'';
    $sexe = $_POST['sexe']??'';
    $adresse = $_POST['adresse_victime']??'';
    $accompagnee = $_POST['accompagnee']??'';
    $date_inter = $_POST['date_inter']??'';
    $num_bilan = $_POST['numero_bilan']??'';
    $heure_inter = $_POST['heure']??'';
    $dvitale = $_POST['dvitale']??'';
    $mode_arrivee = $_POST['mode_arrivee']??'';
    $bilan_neuro = $_POST['bilan_neuro']??'';
    $bilan_circu = $_POST['bilan_circu']??'';
    $bilan_vent = $_POST['bilan_vent']??'';
    $gestes = $_POST['gestes']??'';
    $bilan_lesion = $_POST['bilan_lesion']??'';
    $plaintes = $_POST['plaintes']??'';
    $maladies = $_POST['maladies']??'';
    $observation = $_POST['observation']??'';
    $mode_sortie = $_POST['mode_sortie']??'';
    $destination = $_POST['destination']??'';
    $horaire_sortie = $_POST['horaire_sortie']??'';
    $equipage = $_POST['equipage']??'';
    
    if(    empty($_POST['nom'])
        && empty($_POST['prenom'])
        && empty($_POST['date'])
        && empty($_POST['sexe'])
        && empty($_POST['adresse_victime'])
        && empty($_POST['accompagnee'])
        && empty($_POST['date_inter'])
        && empty($_POST['numero_bilan'])
        && empty($_POST['heure'])
        && empty($_POST['dvitale'])
        && empty($_POST['mode_arrivee'])
        && empty($_POST['bilan_neuro'])
        && empty($_POST['bilan_circu'])
        && empty($_POST['bilan_vent'])
        && empty($_POST['gestes'])
        && empty($_POST['bilan_lesion'])
        && empty($_POST['plaintes'])
        && empty($_POST['maladies'])
        && empty($_POST['observation'])
        && empty($_POST['mode_sortie'])
        && empty($_POST['destination'])
        && empty($_POST['horaire_sortie']) 
        && empty($_POST['equipage'])){
            $erreur = 'Le Formulaire n\'est pas rempli correctement';
        }else{
            $requete = $db->exec('INSERT INTO bilan(
            nom, 
            prenom, 
            date, 
            sexe, 
            adresse_victime, 
            accompagnee, 
            date_inter, 
            numero_bilan, 
            heure,
            dvitale, 
            mode_arrivee, 
            bilan_neuro,
            bilan_circu,
            bilan_vent, 
            gestes, 
            bilan_lesion,
            plaintes,
            maladies, 
            observation,
            mode_sortie, 
            destination, 
            horaire_sortie, 
            equipage) VALUES 
                ("'.$nom.'", 
                "'.$prenom.'", 
                "'.$date_v.'", 
                "'.$sexe.'", 
                "'.$adresse.'",
                "'.$accompagnee.'", 
                "'.$date_inter.'",
                "'.$num_bilan.'", 
                "'.$heure_inter.'",
                "'.$dvitale.'", 
                "'.$mode_arrivee.'", 
                "'.$bilan_neuro.'",
                "'.$bilan_circu.'", 
                "'.$bilan_vent.'", 
                "'.$gestes.'", 
                "'.$bilan_lesion.'",
                "'.$plaintes.'", 
                "'.$maladies.'", 
                "'.$observation.'", 
                "'.$mode_sortie.'",
                "'.$destination.'", 
                "'.$horaire_sortie.'", 
                "'.$equipage.'")');
                }
?>