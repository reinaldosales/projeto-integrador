<?php

//Alter para uma pasta posteriormente
if (isset($_GET['success']))
    $userCreatedSuccess = "<p class='center-align green-text'> <i class='material-icons tiny'>done</i> Usuário adicionado com sucesso! </p>";

if (isset($_GET['logout'])){
    session_unset();
    session_destroy();
}

?>

<body class="container pi-body-login">

    <div class="row">
        <div class="card-panel col l5 m6 s10 xl4 center push-l4 push-m3 push-s1 push-xl4">
            <h3>
                <img src="assets/images/logo.svg" alt="Logo Controle de Gastos">
            </h3>
            <i class="medium material-icons pi-person">person</i>
            <form method="POST">
                <!-- MÉTODO DE LOGIN --->
                <div class="row">
                    <div class="input-field col s10 push-s1">
                        <input id="email" type="email" class="validate" name="email" required>
                        <label for="email" data-error="Email inválido" data-success="Tudo certo!">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 push-s1">
                        <input id="password" type="password" class="validate" name="password" required>
                        <label for="password">Senha</label>
                    </div>
                </div>

                <?php if(isset($userCreatedSuccess)) echo $userCreatedSuccess ?>

                <?php
                if (!empty($errors)) {
                    foreach ($errors as $error)
                        echo $error;
                }
                ?>

                <button type="submit" class="waves-effect btn pi-btn-access indigo darken-3 z-depth-0 login" name="btn-Login"> Acessar </button>
                <div class="row">
                    <p class="center"> Não tem conta? <span> <a href="signin.php" class="pi-link"> Cadastre-se </a> </span>
                </div>
            </form>
        </div>
    </div>