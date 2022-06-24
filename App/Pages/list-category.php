<body>
    <main>
        <div class="container">
            <div class="card-panel indigo darken-3 white-text">
                <div class="col s2 center">
                    <h4>
                        <img src="assets/icons/category.svg" alt="Card" class="img-icon">
                    </h4>
                </div>
                <div class="col s10 center">
                    <h4> Listagem das Categorias </b> </h4>
                </div>
            </div>
            <div>
                <div class="row">
                    <h5>Filtros</h5>
                    <div class="divider"></div>
                    <form method="post">
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <p> Nome </p>
                                <input id="name" type="text" class="validate" name="name" <?php if (isset($_POST['name'])) echo "value=" . $_POST["name"] . "" ?> >
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
                        <th>Nome</th>
                        <th>Data de inserção</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($categoryList)) {

                        foreach ($categoryList as $category) {
                            echo '<tr>
                                <td>' . $category->Name . '</td>
                                <td>' . $category->CreationDate . '</td>
                                <td>
                                    <a href="edit-category.php?categoryId=' . $category->CategoryId . '">
                                        <i class="material-icons middle">create</i>
                                    </a>
                                    <a href="list-category.php?categoryId=' . $category->CategoryId . '&toDelete=true">
                                        <i class="material-icons middle">delete</i>
                                    </a>
                                </td>
                            </tr>';
                        }
                    } else {
                        foreach ($categories as $category) {
                            echo '<tr>
                                <td>' . $category->Name . '</td>
                                <td>' . $category->CreationDate . '</td>
                                <td>
                                    <a href="edit-category.php?categoryId=' . $category->CategoryId . '">
                                        <i class="material-icons middle">create</i>
                                    </a>
                                    <a href="list-category.php?categoryId=' . $category->CategoryId . '&toDelete=true">
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