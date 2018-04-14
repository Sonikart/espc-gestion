<?php
// Verification que l'utilisateur est connecté avant de procédé au manipulation
if(isset($_SESSION['connect']) && $_SESSION['connect']) {
// Edition d'utilisateur depuis un parametre POST
    if (isset($_POST['update_user'])){
        if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
            if(!empty($_POST['password'])){
                if(!empty($_POST['password']) && !empty($_POST['re-password'])){
                    if($_POST['password'] == $_POST['re-password']){
                        $update = $site->bdd->query('UPDATE utilisateurs SET password = "'.sha1($_POST['re-password']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                        $update = $site->bdd->query('UPDATE utilisateurs SET nom = "'.$site->security($_POST['nom']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                        $update = $site->bdd->query('UPDATE utilisateurs SET prenom = "'.$site->security($_POST['prenom']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                        $update = $site->bdd->query('UPDATE utilisateurs SET email = "'.$site->security($_POST['email']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                        $update = $site->bdd->query('UPDATE utilisateurs SET company = "'.$site->security($_POST['company']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                        $error  = "Les modifications ont bien été prise en compte.";
                        $type   = 'success';
                    } else {
                        $error  = "Modification de mot de passe : Les mots de passe ne correspondent pas.";
                        $type   = 'danger';
                    }
                } else {
                    $error  = "Veuillez remplir tous les champs, pour changer le mot de passe.";
                    $type   = 'danger';
                }
            } else {
                $update = $site->bdd->query('UPDATE utilisateurs SET nom = "'.$site->security($_POST['nom']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                $update = $site->bdd->query('UPDATE utilisateurs SET prenom = "'.$site->security($_POST['prenom']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                $update = $site->bdd->query('UPDATE utilisateurs SET email = "'.$site->security($_POST['email']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                $update = $site->bdd->query('UPDATE utilisateurs SET company = "'.$site->security($_POST['company']).'" WHERE id_membre = "'.$site->security($_GET['edit']).'"');
                $error  = "Les modifications ont bien été prise en compte.";
                $type   = 'success';
            }
        } else {
            $error  = "Verifiez que les champs (Nom, Prenom, Email) soit correctement remplis.";
            $type   = 'danger';
        }
    }
// Ouverture de la fiche de moficiation en recuperant les parametre url
    if (isset($_GET['edit'])) {
        if (!empty($_GET['edit'])) {
            $verification_valid_id = $site->bdd->query('SELECT * FROM utilisateurs WHERE id_membre = "' . $site->security($_GET['edit']) . '"');
            if ($verification_valid_id->rowCount() == 1) {
                $edit__step = $site->bdd->query('SELECT * FROM utilisateurs WHERE id_membre = "' . $site->security($_GET['edit']) . '"');
                $edit__step = $edit__step->fetch();
                $check_token = $site->bdd->query('SELECT id, active FROM token_access WHERE token = "'.$edit__step['token'].'"');
                $check_token = $check_token->fetch();
            } else {
                header('Location: users.php');
            }
        } else {
            header('Location: users.php');
        }
    }
// Desactivation de la clef d'access
    if (isset($_GET['disabled']) && !empty($_GET['disabled'])) {
        $verification = $site->bdd->query('SELECT * FROM token_access WHERE id = "' . $site->security($_GET['disabled']) . '"');
        if ($verification->rowCount() == 1) {
            $update = $site->bdd->query('UPDATE token_access SET active = 0 WHERE id = "' . $site->security($_GET['disabled']) . '"');
            if(isset($_GET['edit']) && !empty($_GET['edit'])){
                $idmembre = $_GET['edit'];
                header('Location: users.php?edit='.$idmembre);
            } else {
                header('Location: users.php');
            }
        } else {
            header('Location: users.php');
        }
    }
// Activation de la clef d'access
    if (isset($_GET['actived']) && !empty($_GET['actived'])) {
        $verification = $site->bdd->query('SELECT * FROM token_access WHERE id = "' . $site->security($_GET['actived']) . '"');
        if ($verification->rowCount() == 1) {
            $update = $site->bdd->query('UPDATE token_access SET active = 1 WHERE id = "' . $site->security($_GET['actived']) . '"');
            if(isset($_GET['edit']) && !empty($_GET['edit'])){
                $idmembre = $_GET['edit'];
                header('Location: users.php?edit='.$idmembre);
            } else {
                header('Location: users.php');
            }
        } else {
            header('Location: users.php');
        }
    }
// Suppression de l'utilisateur, mais garde la clef en mémoire.
    if (isset($_GET['delete_user']) && !empty($_GET['delete_user'])) {
        $verification = $site->bdd->query('SELECT * FROM utilisateurs WHERE id_membre = "' . $site->security($_GET['delete_user']) . '"');
        if ($verification->rowCount() == 1) {
            $query = $site->bdd->query('SELECT * FROM utilisateurs WHERE id_membre = "'.$site->security($_GET['delete_user']).'"');
            $fetch = $query->fetch();
            $delete = $site->bdd->query('DELETE FROM utilisateurs WHERE id_membre = "' . $site->security($_GET['delete_user']) . '"');
            $delete_token = $site->bdd->query('DELETE FROM token_access WHERE token = "'.$fetch['token'].'"');
            header('Location: users.php');
        } else {
            header('Location: users.php');
        }
    }
} else {
    header('Location: login.php');
}

