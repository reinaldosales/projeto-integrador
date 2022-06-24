<body>
    <main>
        <div class="container">
            <div class="card-panel indigo darken-3 white-text">
                <div class="col s2 center">
                    <h4>
                        <!-- <img src="assets/icons/revenue.svg" alt="Card" class="img-icon"> -->
                    </h4>
                </div>
                <div class="col s10 center">
                    <h4> Listagem das Receitas </b> </h4>
                </div>
            </div>
            <div>
                <div class="row">
                    <h5>Filtros</h5>
                    <div class="divider"></div>
                    <form method="post">
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <p> Valor </p>
                                <input id="value" type="text" class="validate" name="value" <?php if (isset($_POST['value'])) echo "value=" . $_POST["value"] . "" ?> >
                            </div>
                        </div>
                        <div class="row">
                            <div class="" style="text-align: right;">
                                <button type="submit" class="waves-effect btn indigo darken-3 white-text z-depth-0 right-align" name="btn-Filter"> Filtrar </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="divider"></div>
            </div>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Valor</th>
                        <th>Final do Cartão</th>
                        <th>Data de inserção</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($revenueList)) {

                        foreach ($revenueList as $revenue) {
                            echo '<tr>
                                <td>' . $revenue->Value . '</td>
                                <td>' . $revenue->CardId . '</td>
                                <td>' . $revenue->CreationDate . '</td>
                                <td>
                                    <a href="list-revenue.php?revenueId=' . $revenue->RevenueId . '&toDelete=true">
                                        <i class="material-icons middle">delete</i>
                                    </a>
                                </td>
                            </tr>';
                        }
                    } else {
                        foreach ($revenues as $revenue) {
                            echo '<tr>
                                <td>' . $revenue->Value . '</td>
                                <td>' . $revenue->CardId . '</td>
                                <td>' . $revenue->CreationDate . '</td>
                                <td>
                                    <a href="list-revenue.php?revenueId=' . $revenue->RevenueId . '&toDelete=true">
                                        <i class="material-icons middle">delete</i>
                                    </a>
                                </td>
                            </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>