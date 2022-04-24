<body class="container pi-body-login">

    <div class="row">
        <div class="card-panel col l5 m6 s10 xl4 center push-l4 push-m3 push-s1 push-xl4">
            <h3> LOGO </h3>
            <i class="medium material-icons pi-person">person_add</i>
            <form method="POST">
                <div class="row">
                    <div class="input-field col s10 push-s1">
                        <input id="name" type="text" class="validate" name="name" <?php if(isset($_POST['name'])) echo "value=".$_POST["name"]."" ?> required>
                        <label for="name"> Nome </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 push-s1">
                        <input id="email" type="email" class="validate" name="email" <?php if(isset($_POST['email'])) echo "value=".$_POST["email"]."" ?> required>
                        <label for="email" data-error="Email inválido" data-success="Tudo certo!">E-mail</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 push-s1">
                        <input id="password" type="password" class="validate" name="password" required>
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s10 push-s1">
                        <input id="confirm-password" type="password" class="validate" name="confirm-password" required>
                        <label for="confirm-password">Confirmar Senha</label>
                    </div>
                </div>
                
                    <?php
                        if (!empty($errors)) :
                            foreach ($errors as $error);
                                echo $error;
                        endif;
                    ?>

                <button type="submit" class="waves-effect btn pi-btn-access login green accent-2 z-depth-0" name="btn-Login"> Cadastrar </button>
                <div class="row">
                    <p class="center"> Já tem conta? <span class="pi-link"> <a href="index.php"> Entre agora </a> </span>
                </div>
            </form>
        </div>
    </div>