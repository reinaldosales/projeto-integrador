<?php

$userName = $_SESSION['user_name'];

?>

<div class="row">
    <ul id="slide-out" class="side-nav fixed indigo darken-3 z-depth-0">
        <div class="row">
            <h2 class="center-align white-text">
                <a href="dashboard.php">
                    <img src="assets/images/cg-favicon-white-min.ico" alt="Logo Controle de Gastos">
                </a>
            </h2>
        </div>
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header white-text">
                    <i class="material-icons">attach_money</i> Despesas
                    <span class="badge">
                        <i class="material-icons bagde white-text">arrow_drop_down</i>
                    </span>
                </div>
                <div class="collapsible-body center indigo darken-4">
                    <a href="#" class="white-text">Gestão de Despesas</a>
                </div>
            </li>
            <li>
                <div class="collapsible-header white-text">
                    <i class="material-icons">credit_card</i> Cartões
                    <span class="badge">
                        <i class="material-icons bagde white-text">arrow_drop_down</i>
                    </span>
                </div>
                <div class="collapsible-body center indigo darken-4">
                    <a href="card.php" class="white-text"> Cadastrar Cartões </a>
                </div>
                <div class="collapsible-body center indigo darken-4">
                    <a href="list-card.php" class="white-text"> Listar Cartões </a>
                </div>
            </li>
            <li>
                <div class="collapsible-header white-text">
                    <i class="material-icons">group</i> Usuários
                    <span class="badge">
                        <i class="material-icons bagde white-text">arrow_drop_down</i>
                    </span>
                </div>
                <div class="collapsible-body center indigo darken-4">
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
                <div class="collapsible-body center indigo darken-4">
                    <a href="#" class="white-text">Configurar conta</a>
                </div>
            </li>
        </ul>
    </ul>
    <main>
        <nav class="indigo darken-3 z-depth-0">
            <div class="nav-wrapper right-align container">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                <span> <?php echo 'Olá, <b>' . $userName . '.</b>' ?> </span>

                <a class='dropdown-button btn indigo darken-3 z-depth-0' href='#' data-activates='dropdown1' data-beloworigin="true">
                    <img src="assets/icons/user.svg" alt="User" class="img-icon">
                </a>
                <ul id='dropdown1' class='dropdown-content indigo darken-3'>
                    <li><a href="index.php?logout=true"> Sair </a></li>
                    <li><a href="edit-user.php"> Editar conta </a></li>
                </ul>
            </div>
        </nav>
    </main>
</div>