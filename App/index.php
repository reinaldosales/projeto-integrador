<?php



require __DIR__ .'/vendor/autoload.php';

//Alter para uma pasta posteriormente
if(isset($_GET['userCreated']))
    define('MESSAGE', "<p class='center-align green-text'> <i class='material-icons tiny'>done</i> Usuário adicionado com sucesso! </p>"); 
else
    define('MESSAGE', '');

include __DIR__ .'/includes/header.php';

include __DIR__ .'/pages/login.php';

include __DIR__ .'/includes/footer.php';

?>