<?php

if (!$_SESSION['loged'])
    header('Location: index.php');

?>

<body>
    <div class="row">
        <ul id="slide-out" class="side-nav fixed teal lighten-2 green accent-2 z-depth-0">
            <div class="row">
                <h2 class="center-align white-text">
                    <img src="assets/images/cg-favicon-white-min.ico" alt="Logo Controle de Gastos">
                </h2>
            </div>
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header white-text">
                        <i class="material-icons">credit_card</i> Cartões
                        <span class="badge">
                            <i class="material-icons bagde white-text">arrow_drop_down</i>
                        </span>
                    </div>
                    <div class="collapsible-body center teal green lighten-1">
                        <a href="#" class="white-text">Gestão de Cartões</a>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header white-text">
                        <i class="material-icons">group</i> Usuários
                        <span class="badge">
                            <i class="material-icons bagde white-text">arrow_drop_down</i>
                        </span>
                    </div>
                    <div class="collapsible-body center teal green lighten-1">
                        <a href="#" class="white-text">Gestão de Usuários</a>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header white-text">
                        <i class="material-icons">settings</i> Opções
                        <span class="badge">
                            <i class="material-icons bagde white-text">arrow_drop_down</i>
                        </span>
                    </div>
                    <div class="collapsible-body center teal green lighten-1">
                        <a href="#" class="white-text">Configurar conta</a>
                    </div>
                    <div class="collapsible-body center teal green lighten-1">
                        <a href="index.php?logout=true" class="white-text">Sair</a>
                    </div>
                </li>
            </ul>
        </ul>
        <main>
            <nav class="teal lighten-2 z-depth-0 green accent-2">
                <div class="nav-wrapper right-align container">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                    <span> <b> <?php echo 'Olá, ' . $_SESSION['user_name'] . '.' ?> </b> </span>
                </div>
            </nav>
        </main>
    </div>