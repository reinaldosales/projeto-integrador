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
                    <h4> Editar Cartão </b> </h4>
                </div>
            </div>
            <div class="card-panel indigo darken-3">
                <form method="POST" class="center">
                    <div class="row center">
                        <div class="input-field col s8 push-s2 white-text">
                            <input id="cardNumber" type="text" class="validate" name="cardNumber" required maxlength="19" value="<?php echo $card[0]->Number ?>" data-mask="#### #### #### ####">
                            <label for="cardNumber"> Número do Cartão </label>
                        </div>
                        <div class="text container s4">
                            <select required class="browser-default" name="cardType">
                                <option value="" selected disabled> Tipo do Cartão </option>
                                <option value="debit"> Débito </option>
                                <option value="credit"> Crédito </option>
                            </select>
                        </div>
                        <div class="input-field col s8 push-s2 white-text">
                            <input id="cardLimit" type="text" class="validate" name="cardLimit" required value="<?php echo $card[0]->LimitValue ?>" data-mask="R$##.#">
                            <label for="cardLimit"> Limite do Cartão </label>
                        </div>
                        <div class="input-field col s8 push-s2 white-text">
                            <input id="currentValue" type="text" class="validate" name="currentValue" value="<?php echo $card[0]->CurrentValue ?>" required data-mask="R$##.#">
                            <label for="currentValue"> Valor atual </label>
                        </div>
                        <div class="input-field col s8 push-s2 white-text">
                            <p> Dia do fechamento </p>
                            <input type="text" name="date" id="date" value="<?php echo $card[0]->ClosedDate ?>" data-mask="00">
                        </div>

                    </div>
                    <button type="submit" class="waves-effect btn pi-btn-access white indigo-text z-depth-0 right-align" name="btn-Save"> Salvar </button>
                </form>
            </div>
        </div>
    </main>