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
                <form method="POST" class="center" enctype="multipart/form-data">
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
                    <div class="row">
                        <div class="file-field input-field col s10 push-s1">
                            <div class="btn">
                                <span>Avatar</span>
                                <input name="avatar" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Selecione sua foto de perfil. Tamanho recomendado: 150x150">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="waves-effect btn pi-btn-access white indigo-text z-depth-0 right-align" name="btn-Login"> Editar </button>
                    </div>
                    <div class="row">
                        <a href="#modal1" class="waves-effect btn modal-trigger pi-btn-access red white-text z-depth-0 right-align"> Excluir conta </a>
                    </div>

                    <div id="modal1" class="modal">
                        <div class="modal-content white darken-3">
                            <h4 style="font-weight: bold;" class="indigo-text">Tem certeza de deseja apagar a conta?</h4>
                            <p class="black-text">Ao apagar sua conta, perderá todos seus dados já cadastrados, bem como acesso ao portal.</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" >Não</a>
                            <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" name="btn-DeleteUser">Confirmar, apagar conta.</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </main>