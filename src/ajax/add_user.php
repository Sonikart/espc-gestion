<?php
// Add-User
require '../router/string.php';

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['re-password'])){
    $verification = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_POST['email']).'"');
    if($verification->rowCount() == 0){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            if($_POST['password'] == $_POST['re-password']){
                $token = base_convert(hash('sha256', time() . mt_rand()), 16, 36);
                $uniqid = uniqid();
                $avatar = "https://www.gravatar.com/avatar/".md5(strtolower(trim($site->security($_POST['email']))));
                $insert = $site->bdd->prepare('INSERT INTO utilisateurs (id_membre, token, nom, prenom, email, company, password, created_at, last_login, role, avatar, locked, online, access) VALUES (:id_membre, :token, :nom, :prenom, :email, :company, :password, :created_at, :last_login, :role, :avatar, :locked, :online, :access)');
                $insert->execute(array(
                    'id_membre'     => $uniqid,
                    'token'         => $token,
                    'nom'           => $site->security($_POST['nom']),
                    'prenom'        => $site->security($_POST['prenom']),
                    'email'         => $site->security($_POST['email']),
                    'company'       => $site->security($_POST['company']) ?? null,
                    'password'      => sha1($_POST['password']),
                    'created_at'    => time(),
                    'last_login'    => '0',
                    'role'          => 'Utilisateur',
                    'avatar'        => $avatar,
                    'locked'        => '0',
                    'online'        => '0',
                    'access'        => '1'
                ));

                $add_token = $site->bdd->prepare('INSERT INTO token_access (attribute, token, active) VALUES (:attribute, :token, :active)');
                $add_token->execute(array(
                    'attribute' => $uniqid,
                    'token'     => $token,
                    'active'    => 1 // Activer par defaut!
                ));

                $error      = "L'utilisateur à maintenant un compte de crée sur ES-PC Gestion";
                $type       = 'success';

                $query_id = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_POST['email']).'"');
                $fetch_id = $query_id->fetch();

                $id         = $fetch_id['id'];
                $nom        = $site->security($_POST['nom']);
                $prenom     = $site->security($_POST['prenom']);
                $company    = $site->security($_POST['company']);
                $email      = $site->security($_POST['email']);
                $role       = 1;

                die(json_encode(array(
                    'id'            => $id,
                    'nom'           => $nom,
                    'prenom'        => $prenom,
                    'company'       => $company,
                    'email'         => $email,
                    'role'          => $role,
                    'error'         => $error,
                    'type'          => $type
                )));
            }else{
                $error  = "Les mots de passe ne correspondent pas.";
                $type   = 'danger';
            }
        }else{
            $error  = "L'email n'est pas au bon format. (exemple<b>@exemple.fr</b>)";
            $type   = 'danger';
        }
    }else{
        $error  = "L'email est déjà enregistrer sur un compte ES-PC";
        $type   = 'danger';
    }
}else{
    $error  = "Tous les champs ne sont pas remplis.";
    $type   = 'danger';
}
die(json_encode(array('error' => $error, 'type' => $type)));
