<?php
require '../router/string.php';
if(!empty($_POST['login_email']) && !empty($_POST['login_password'])){
    if(filter_var($_POST['login_email'], FILTER_VALIDATE_EMAIL)){
        $verif_valide_email = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_POST['login_email']).'"');
        if($verif_valide_email->rowCount() == 1){
            $verif_password = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_POST['login_email']).'" AND password = "'.sha1($_POST['login_password']).'"');
            if($verif_password->rowCount() == 1){
                $info = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_POST['login_email']).'"');
                $info = $info->fetch();
                $token = $site->bdd->query('SELECT * FROM token_access WHERE token = "'.$info['token'].'"');
                if($token->rowCount() == 1){
                    $token = $token->fetch();
                    if($token['active'] == '1'){
                        $information = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_POST['login_email']).'"');
                        $information = $information->fetch();
                        if($information['access'] <= 3){
                            if($site->get_config('maintenance') == '0'){
                                $_SESSION['connect']    = '1';
                                $_SESSION['email']      = $site->security($_POST['login_email']);
                                $phrase = array(
                                    'Arrivage de Licorne en cours.',
                                    'Changement d\'axe Orbital de la Terre.',
                                    'Lancement de l\'anneau dans la montagne du Destin.',
                                    'Chargement de 1.000.1.00.1.0.1 Pi...',
                                    'Sé nou mem ki ka fey sa !'
                                );
                                // Generateur de phrase ramdom sur le panel de connexion
                                $random = rand(0, count($phrase) -1);
                                $error  = $phrase[$random];
                                $type   = 'success';
                            } else {
                                $query = $site->bdd->query('SELECT * FROM maintenance WHERE id = 1');
                                $fetch = $query->fetch();

                                $error  = 'Le site est en maintenance ( Estimation <strong>'.$fetch['estimation'].'</strong> ).<br><br>'.$fetch['reason'];
                                $type   = 'maintenance';
                            }
                        } else {
                            $_SESSION['connect']    = '1';
                            $_SESSION['email']      = $site->security($_POST['login_email']);
                            $phrase = array(
                                'Arrivage de Licorne en cours.',
                                'Changement d\'axe Orbital de la Terre.',
                                'Lancement de l\'anneau dans la montagne du Destin.',
                                'Chargement de 1.000.1.00.1.0.1 Pi...',
                                'Sé nou mem ki ka fey sa !'
                            );
                            // Generateur de phrase ramdom sur le panel de connexion
                            $random = rand(0, count($phrase) -1);
                            $error  = $phrase[$random];
                            $type   = 'success';
                        }
                    }else{
                        $error  = "Votre compte à été desactiver du systême.";
                        $type   = 'danger';
                    }
                }else{
                    $error  = "Une erreur est survenue.";
                    $type   = 'danger';
                }
            }else{
                $error  = "Votre mot de passe est incorrect.";
                $type   = 'danger';
            }
        }else{
            $error  = "Cette adresse e-mail n'existe pas.";
            $type   = 'danger';
        }
    }else{
        $error  = "Le format de votre e-mail est incorrect.";
        $type   = 'danger';
    }
}else{
    $error  = "Veuillez remplir tous les champs.";
    $type   = 'danger';
}
die(json_encode(array('type' => $type, 'error' => $error)));
