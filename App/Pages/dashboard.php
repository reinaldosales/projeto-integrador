<?php

if(!$_SESSION['loged'])
    header('Location: index.php');

?>

<body class="container">
    
<div class="row">
    <a href="index.php?logout=true">Sair</a>
</div>