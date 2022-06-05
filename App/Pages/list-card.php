<body>
    <main>
        <div class="container">
            <div class="card-panel indigo darken-3 white-text">
                <div class="col s2 center">
                    <h4>
                        <img src="assets/icons/card-large.svg" alt="Card" class="img-icon">
                    </h4>
                </div>
                <div class="col s10 center">
                    <h4> Listagem dos seus Cartões </b> </h4>
                </div>
            </div>
            <div>
                <h5>Filtros</h5>
                <div class="divider"></div>
                <form method="post">
                    <div class="row">
                        <div class="col s12 m6 l4">
                            <p>Número do Cartão </p>
                            <input id="cardNumber" type="text" class="validate" name="cardNumber" maxlength="19" data-mask="#### #### #### ####">
                        </div>
                        <div class="col s12 m6 l4">
                            <p> Tipo </p>
                            <select required class="browser-default" name="cardType">
                                <option value="" selected disabled> Tipo do Cartão </option>
                                <option value="debit"> Débito </option>
                                <option value="credit"> Crédito </option>
                            </select>
                        </div>
                        <div class="col s12 m6 l4 pull-s1 pull-m4" style="text-align: right; margin-top: 50px;">
                            <button type="submit" class="waves-effect btn pi-btn-access indigo darken-3 white-text z-depth-0 right-align" name="btn-Save"> Filtrar </button>
                        </div>
                    </div>
                </form>
                <div class="divider"></div>
            </div>
            <table class="striped">
                <thead>
                    <tr>
                        <th>Número do Cartão</th>
                        <th>Tipo</th>
                        <th>Limite</th>
                        <th>Valor atual</th>
                        <th>Data de fechamento</th>
                        <th>Data de inserção</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($cards as $card)
                        echo '<tr>
                            <td data-mask="#### #### #### ####">' . $card->Number . '</td>
                            <td>' . ($card->Type == 0 ? 'Débito' : 'Crédito') . '</td>
                            <td> R$' . $card->LimitValue . '</td>
                            <td> R$' . $card->CurrentValue . '</td>
                            <td> Dia ' . $card->ClosedDate . '</td>
                            <td>' . $card->CreationDate . '</td>
                            <td>
                                <a href="edit-card.php?cardId=' . $card->CardId . '&toDelete=false">
                                    <i class="material-icons middle">create</i>
                                </a>
                                <a href="edit-card.php?cardId=' . $card->CardId . '&toDelete=true">
                                    <i class="material-icons middle">delete</i>
                                </a>
                            </td>
                        </tr>';
                    ?>
                </tbody>
            </table>
        </div>
    </main>