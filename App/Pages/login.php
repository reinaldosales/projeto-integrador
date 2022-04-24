<body class="container pi-body-login">
    
<div class="row">
    <div class="card-panel col l5 m6 s10 xl4 center push-l4 push-m3 push-s1 push-xl4">
        <h3> LOGO </h3>
        <i class="medium material-icons pi-person">person</i>
        <form method="POST">
            <!-- MÉTODO DE LOGIN --->
            <div class="row">
                <div class="input-field col s10 push-s1">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email" data-error="Email inválido" data-success="Tudo certo!">E-mail</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s10 push-s1">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Senha</label>
                </div>
            </div>

            <?php echo MESSAGE ?>

            <button type="submit" class="waves-effect btn pi-btn-access login green accent-2 z-depth-0" name="btn-Login"> Acessar </button>
            <div class="row">
                <p class="center"> Não tem conta? <span class="pi-link"> <a href="signin.php"> Cadastre-se </a> </span>
            </div>
        </form>
    </div>
</div>