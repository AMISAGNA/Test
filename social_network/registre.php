

<?php 
session_start();

require('config/database.php');
require('include/function.php');
require('include/constant.php');

// test mail



mail($to, $subject, $message, $headers);

// Si le formulaire a ete soumis

if(isset($_POST['register'])){
    
    //Si tous les champs ont ete remplis
    if(!empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])){
        
        
        $errors = [];
        
        
        extract($_POST);
        
        if(mb_strlen($pseudo) <3){
            $errors[]= "Pseudo trop court (Minimum 3 caractères)";
            
        }
        
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[]= "Adresse email invalide!";
        }
        
        if(mb_strlen($password) <6){
            $errors[]= "Mot de passe trop court (Minimum 6 caractères)";
            
        }else{
            if($password != $password_confirm){
                $errors[]= "Les deux mots de passe ne concordent pas!";
            }
        }
        
        if(is_already_in_use('pseudo', $pseudo , 'users')){
            $errors[]= "Pseudo déjà utilisé!";
        }
        if(is_already_in_use('email', $email , 'users')){
            $errors[] = "Adresse E-mail déjà utilisé!";
        }
        
        if(count($errors) == 0){
            // Envoi d'un mail d'activation
            $to      = $email;
            $subject = WEBSITE_NAME. "- ACTIVATION DE COMPTE";
            $token = sha1($pseudo.$email.$password);
            
            ob_start();
            require('templates/emails/activation.tmpl.php');
            $content = ob_get_clean();
            
            
            $headers = 'MIME-VERSION: 1.0' . "\r\n";
            
            $headers ='Content-type: text/html; charset=iso-8859-1'. "\r\n";
            
            
            mail($to, $subject, $content, $headers);
            
            // Informer l'utilisateur pour qu'il verifie sa boite de reception
            set_flash("Mail d'activation envoye!", 'success');
            
            $q = $db->prepare('INSERT INTO users(name,pseudo,email,password)VALUE(:name, :pseudo, :email, :password');
            $q->execute([
                'name'=>$name,
                'pseudo'=>$pseudo,
                'email'=>$email,
                'passeword'=>sha1($password)
            ]);
            redirect('index.php');
            exit;
        }else{
            save_input_data();
        }
        
        
    } else{
        $errors[] = "Veuillez SVP remplir tous les champs!";
        save_input_data();
    }
    
}else{
    clear_input_data();
}



?>




<?php require('view/registre.view.php'); ?>

