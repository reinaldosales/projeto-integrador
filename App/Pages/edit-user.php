<body>
    <main>
        <div class="container">

            <div class="card-panel indigo darken-3 white-text">
                <div class="col s2 center">
                    <h4>
                        <img src="assets/icons/user-large.svg" alt="User" class="img-icon">
                    </h4>
                </div>
                <div class="col s10 center">
                    <h4> Edição do usuário <b> <?php echo $userName ?> </b> </h4>
                </div>
            </div>

            <div class="card-panel indigo darken-3 white-text">
                <form method="POST" class="center">
                    <div class="row">
                        <div class="input-field col s10 push-s1">
                            <input id="name" type="text" class="validate" name="name" required value="<?php echo $user->Name ?>">
                            <label for="name"> Nome </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s10 push-s1">
                            <input disabled id="email" type="email" class="validate" name="email" required value="<?php echo $user->Mail ?>">
                            <label for="email" data-error="Email inválido" data-success="Tudo certo!"> E-mail </label>
                        </div>
                    </div>
                    <button type="submit" class="waves-effect btn pi-btn-access white indigo-text z-depth-0 right-align" name="btn-Login"> Editar </button>
                </form>
            </div>
        </div>
    </main>