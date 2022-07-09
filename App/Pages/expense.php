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
                    <h4> Cadastre suas Despesas aqui </b> </h4>
                </div>
            </div>
            <div class="card-panel indigo darken-3">
                <form method="POST" class="center">
                    <div class="row center">
                        <div class="input-field col s8 push-s2 white-text">
                            <input id="value" type="text" class="validate" name="value" required data-mask="R$##.#">
                            <label for="value"> Valor da Despesa </label>
                        </div>
                        <div class="text container s4">
                            <select required class="browser-default" name="cardId">
                                <option value="" selected disabled> Cartão </option>

                                <?php
                                foreach ($cards as $card) {
                                        echo '
                                            <option value="'. $card->CardId .'"> Final ' . substr($card->Number, -4)  .'</option>
                                                
                                            ';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="text container s4">
                            <select required class="browser-default" name="type">
                                <option value="" selected disabled> Tipo</option>
                                <option value="0"> Crédito </option>
                                <option value="1"> Débito </option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="waves-effect btn pi-btn-access white indigo-text z-depth-0 right-align" name="btn-Save"> Salvar </button>
                </form>
            </div>
        </div>
    </main>