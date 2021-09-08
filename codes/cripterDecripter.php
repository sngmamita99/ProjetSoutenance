<?php

if(!empty($_POST))
{
    $key = 'f5d4qfs64q96';
    $pass = $_POST['pass'];
    
    $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $pass, MCRYPT_MODE_CBC, md5(md5($key))));
    $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), '\0');
}

?>

<!DOCTYPE html> 
<html lang="fr"> 
<head>
<meta charset="UTF-8">
  <head>
  <title></title>
  </head>
  <body>
    
    <?php if(isset($pass)):?>
    <p>Le mot de passe crypté : <?php echo $encrypted;?></p>
  <p>Le mot de passe décrypté : <?php echo $decrypted;?></p>
    <?php endif;?>
    
      <form action="index.php" method="post">
        
        <p>Mot de passe:</p>
        <input type="password" name="pass">
            
        <p><input type="submit" value="Envoyer">
        
    </form>
  </body>
</html>