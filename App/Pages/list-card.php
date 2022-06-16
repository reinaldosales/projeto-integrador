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
                <div class="row">
                    <h5>Filtros</h5>
                    <div class="divider"></div>
                    <form method="post">
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <p>Número do Cartão </p>
                                <input id="cardNumber" type="text" class="validate" name="cardNumber" maxlength="19" data-mask="#### #### #### ####">
                            </div>
                            <div class="col s12 m6 l4">
                                <p> Dia do Fechamento </p>
                                <input id="date" type="text" class="validate" name="date" maxlength="2" data-mask="##">
                            </div>
                            <div class="col s12 m6 l4">
                                <p> Limite do Cartão </p>
                                <input id="cardLimit" type="text" class="validate" name="cardLimit" data-mask="R$##.#">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <p> Tipo </p>
                                <select class="browser-default" name="cardType">
                                    <option value="" selected disabled> Tipo do Cartão </option>
                                    <option value="debit"> Débito </option>
                                    <option value="credit"> Crédito </option>
                                </select>
                            </div>
                            <div class="col s12 m6 l4">
                                <p> Bandeira </p>
                                <select class="browser-default" name="cardBrand">
                                    <option value="" selected disabled> Tipo da Bandeira </option>
                                    <option value="0"> Cielo </option>
                                    <option value="1"> Visa </option>
                                    <option value="2"> Hipercard </option>
                                    <option value="3"> Mastercard </option>
                                </select>
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
                        <th>Número do Cartão</th>
                        <th>Tipo</th>
                        <th>Bandeira</th>
                        <th>Limite</th>
                        <th>Valor atual</th>
                        <th>Data de fechamento</th>
                        <th>Data de inserção</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($cardList)) {

                        foreach ($cardList as $card){
                            echo '<tr>
                                <td data-mask="#### #### #### ####">' . $card->Number . '</td>
                                <td>' . (CardType::from($card->Type)->description()) . '</td>
                                <td>' . (CardBrand::from($card->Brand)->description()) . '</td>
                                <td data-mask="R$##.#"> R$' . $card->LimitValue . '</td>
                                <td data-mask="R$##.#"> R$' . $card->CurrentValue . '</td>
                                <td> Dia ' . $card->ClosedDate . '</td>
                                <td>' . $card->CreationDate . '</td>
                                <td>
                                    <a href="edit-card.php?cardId=' . $card->CardId . '">
                                        <i class="material-icons middle">create</i>
                                    </a>
                                    <a href="list-card.php?cardId=' . $card->CardId . '&toDelete=true">
                                        <i class="material-icons middle">delete</i>
                                    </a>
                                </td>
                            </tr>';
                        }
                    } else {
                        foreach ($cards as $card){
                            echo '<tr>
                                <td data-mask="#### #### #### ####">' . $card->Number . '</td>
                                <td>' . (CardType::from($card->Type)->description()) . '</td>
                                <td>' . (CardBrand::from($card->Brand)->description()) . '</td>
                                <td data-mask="R$##.#"> R$' . $card->LimitValue . '</td>
                                <td data-mask="R$##.#"> R$' . $card->CurrentValue . '</td>
                                <td> Dia ' . $card->ClosedDate . '</td>
                                <td>' . $card->CreationDate . '</td>
                                <td>
                                    <a href="edit-card.php?cardId=' . $card->CardId . '">
                                        <i class="material-icons middle">create</i>
                                    </a>
                                    <a href="list-card.php?cardId=' . $card->CardId . '&toDelete=true">
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