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
                    <h4> Listagem das despesa </b> </h4>
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
            <table class="striped sortable">
                <thead>
                    <tr>
                        <th>Valor</th>
                        <th>Final do Cartão</th>
                        <th>Tipo de despesa</th>
                        <th>Data de inserção</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($expenses)) {

                        foreach ($expenses as $expense) {
                            echo '<tr>
                                <td>' . $expense->Value . '</td>
                                <td>' . $expense->CardId . '</td>
                                <td>' . $expense->Type . '</td>
                                <td>' . $expense->CreationDate . '</td>
                                <td>
                                    <a href="list-expense.php?expenseId=' . $expense->ExpenseId . '&toDelete=true">
                                        <i class="material-icons middle">delete</i>
                                    </a>
                                </td>
                            </tr>';
                        }
                    } else {
                      foreach ($expenses as $expense) {
                        echo '<tr>
                            <td>' . $expense->Value . '</td>
                            <td>' . $expense->CardId . '</td>
                            <td>' . $expense->Type . '</td>
                            <td>' . $expense->CreationDate . '</td>
                            <td>
                                <a href="list-expense.php?expenseId=' . $expense->ExpenseId . '&toDelete=true">
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