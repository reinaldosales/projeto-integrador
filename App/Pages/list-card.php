<body>
    <main>
        <div class="container">
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
                            <td> R$'. $card->LimitValue .'</td>
                            <td> R$'. $card->CurrentValue .'</td>
                            <td> Dia '. $card->ClosedDate .'</td>
                            <td>'. $card->CreationDate .'</td>
                            <td>
                                <a href="edit-card.php?cardId='. $card->CardId .'&toDelete=false">
                                    <i class="material-icons middle">create</i>
                                </a>
                                <a href="edit-card.php?cardId='. $card->CardId .'&toDelete=true">
                                    <i class="material-icons middle">delete</i>
                                </a>
                            </td>
                        </tr>';
                    ?>
                </tbody>
            </table>
        </div>
    </main>