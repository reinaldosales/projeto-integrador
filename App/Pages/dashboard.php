<body>
    <main>
        <?php

        $avatar = null;

        if ($user->Avatar != NULL)
            $avatar = "<img src='users/$user->Avatar' width='150' height='150' class='z-depth-2' style='border-radius: 50%;'>";

            $element = "
                <div class='col s12 m4 push-m4 l3 push-l4 center'>
                    <div class='card indigo darken-3'>
                        <div class='card-content white-text'>
                            $avatar
                        </div>
                    </div>
                </div>
            ";
        ?>

        <div class="row">
            <div class="col s12 m12">
                <div class="card indigo darken-3">
                    <div class="card-content white-text">
                        <h3>Seja bem-vindo ao Controle de Gastos.</h3>
                        <p>Sistema para gerenciamento de suas despesas!</p>
                    </div>
                </div>
            </div>
            <?php
                if($avatar != null)
                    echo $element;
            ?>
        </div>
    </main>