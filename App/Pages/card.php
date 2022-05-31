<?php

if (!$_SESSION['logged'])
    header('Location: index.php');

?>

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
                    <h4> Cadastre seus Cartões aqui </b> </h4>
                </div>
            </div>
            <div class="card-panel indigo darken-3">
                <form method="POST" class="center">
                    <div class="row center">
                        <div class="input-field col s8 push-s2 white-text">
                            <input id="cardNumber" type="number" class="validate" name="cardNumber" required>
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
                            <input id="cardLimit" type="number" class="validate" name="cardLimit" required>
                            <label for="cardLimit"> Limite do Cartão </label>
                        </div>
                        <div class="input-field col s8 push-s2 white-text">
                            <input id="currentValue" type="number" class="validate" name="currentValue" required>
                            <label for="currentValue"> Valor atual </label>

                            <input type="date" name="date" id="date">
                        </div>
                    </div>
                    <button type="submit" class="waves-effect btn pi-btn-access white indigo-text z-depth-0 right-align" name="btn-Save"> Salvar </button>
                </form>
            </div>
        </div>
    </main>