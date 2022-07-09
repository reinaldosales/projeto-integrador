<body>
    <main>
        <div class="container">
            <div class="card-panel indigo darken-3 white-text">
                <div class="col s2 center">
                    <h4>
                    <i class="material-icons">money_off</i>
                    </h4>
                </div>
                <div class="col s10 center">
                    <h4> Editar despesa </b> </h4>
                </div>
            </div>
            <div class="card-panel indigo darken-3">
                <form method="POST" class="center">
                    <div class="row center">
                        <div class="input-field col s8 push-s2 white-text">
                            <input id="value" type="text" class="validate" name="value" required maxlength="19" value="<?php echo $expense[0]->Value; ?>" data-mask="R$##.#">
                            <label for="value"> Valor da despesa </label>
                        </div>
                        <div class="input-field col s8 push-s2 white-text">
                            <input disabled id="cardId" type="text" class="validate" name="cardId" required value="<?php echo $expense[0]->CardId; ?>">
                            <label for="cardId"> Final do cartão </label>
                        </div>
                        <div class="input-field col s8 push-s2 white-text">
                            <input disabled id="type" type="text" class="validate" name="currentValue" value="<?php echo $expense[0]->Type; ?>">
                            <label for="type"> Tipo da despesa </label>
                        </div>
                    </div>
                    <button type="submit" class="waves-effect btn pi-btn-access white indigo-text z-depth-0 right-align" name="btn-Save"> Salvar </button>
                </form>
            </div>
        </div>
    </main>