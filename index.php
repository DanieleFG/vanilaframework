<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-2.31.0.min.css" />
    <script src="js/javascript.js"></script>

    <title>Aprendendo Vanilla</title>
</head>

<body>

    <div class="p-strip--dark">
        <div class="row">
            <div class="col-12">
                <h1>Daniele <code>Ferreira</code> Galvão</h1>
                <h3>VANILLA <code>CSS - Framework</code></h3>

            </div>
        </div>
    </div>

    <header id="navigation" class="p-navigation">
        <div class="p-navigation__row">
            <div class="p-navigation__banner">
                <div class="p-navigation__logo">
                    <a class="p-navigation__item" href="index.php">
                        <img class="p-navigation__image" src="img/logo.png" alt="Jesus" width="95">
                    </a>
                </div>
                <a href="#navigation" class="p-navigation__toggle--open" title="menu">Menu</a>
                <a href="#navigation-closed" class="p-navigation__toggle--close" title="close menu">Close menu</a>
            </div>
            <nav class="p-navigation__nav" aria-label="Example main navigation">
                <span class="u-off-screen">
                    <a href="#main-content">Principal</a>
                </span>
                <ul class="p-navigation__items">
                    <li class="p-navigation__item is-selected">
                        <a class="p-navigation__link" href="tabela.php">Tabelas</a>
                    </li>
                    <li class="p-navigation__item">
                        <a class="p-navigation__link" href="api.php">Api</a>
                    </li>
                    <li class="p-navigation__item">
                        <a class="p-navigation__link" href="#">Partners</a>
                    </li>
                    <li class="p-navigation__link">
                        <a class="p-navigation__link" href="#">About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>


    </br></br>
    <div>
        <!--Inicio grid -->
        <div class="row">

            <div class="col-6 ">
                <span>
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    hy do we use it?
                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                    default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                    infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).

                </span>
            </div>
            <!--Fim col-->


            <div class="col-6 ">
                <span>
                    Where can I get some?
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                    tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                    to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
                    from repetition, injected humour, or non-characteristic words etc.
                </span>
            </div>
            <!--Fim col-->
            </br>
        </div>
        <!--Fim row -->


        <div class="row p-strip is-bordered">
            <!-- Inicio rom form -->
            <div class="col-12">
                <form action="#" class="p-form p-form--inline u-align--center ">
                    <div class="p-form__group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="p-form__control" name="nome" id="nome">

                        <label for="email">Email:</label>
                        <input type="email" class="p-form-validation__input" name="email" id="email">
                    </div>
                    <div class="p-form__group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="p-form-validation__input" name="senha" id="senha">
                    </div>
                    <div>

                        <label class="p-checkbox">
                            <input type="checkbox" value="dev2" name="dev" id="dev" class="p-checkbox__input">
                            <span class="p-checkbox__label">Dev junior</span>
                        </label>

                        <label class="p-checkbox">
                            <input type="checkbox" value="dev" name="dev" id="dev" class="p-checkbox__input">
                            <span class="p-checkbox__label">Dev Senior</span>
                        </label>
                    </div>

                    <textarea name="texto" id="texto" cols="3" rows="3" size="3">Linda de mais!</textarea>
                    <button class="p-button--positive">Enviar</button>

                </form> <!-- Fim  form -->
                <hr class="p-separator">
                </br></br>
                <div class="row">
                    <!-- Inicio rom form -->
                    <div class="col-12">
                        <table class="p-table--expanding" aria-label="Example of expanding table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Idade</th>
                                    <th>Email</th>
                                    <th>Senha</th>
                                    <th class="u-align--right">Action</th>
                                    <th aria-hidden="true">
                                        <!-- hidden empty cell required for validation -->
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Daniele Ferreira Galvão</td>
                                    <td>28</td>
                                    <td>daniele@gmail.com</td>
                                    <td>123456</td>
                                    <td class="u-align--right">
                                        <button class="u-toggle is-dense p-button--positive"
                                            aria-controls="expanded-row" aria-expanded="false" data-shown-text="Hide"
                                            data-hidden-text="Show">Show</button>
                                    </td>
                                    <td id="expanded-row" class="p-table__expanding-panel " aria-hidden="true">
                                        <div class="row">
                                            <div class="col-8">
                                                <h4>Expanding table cell<< /h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Consequuntur cum dicta beatae
                                                            nostrum eligendi similique earum, dolorem fuga quis, sequi
                                                            voluptates architecto ipsa
                                                            dolorum eaque rem expedita inventore voluptas odit
                                                            aspernatur alias molestias facere.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Francisco Galvão de Barros</td>
                                    <td>65</td>
                                    <td>fgbarros@gmail.com</td>
                                    <td>123456</td>
                                    <td class="u-align--right">
                                        <button class="u-toggle is-dense p-button--positive"
                                            aria-controls="expanded-row" aria-expanded="false"
                                            data-shown-text="Show">Show</button>
                                    </td>
                                    <td id="expanded-row-3" class="p-table__expanding-panel" aria-hidden="true">
                                        <div class="row">
                                            <div class="col-8">
                                                <h4>Expanding table cell</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Consequuntur cum dicta beatae
                                                    nostrum eligendi similique earum, dolorem fuga quis, sequi
                                                    voluptates architecto ipsa
                                                    dolorum eaque rem expedita inventore voluptas odit aspernatur alias
                                                    molestias facere.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Maria do Espirito Santo Ferreira </td>
                                    <td>56</td>
                                    <td>m.espirito@gmail.com</td>
                                    <td>123456</td>
                                    <td class="u-align--right">
                                        <button class="u-toggle is-dense p-button--positive"
                                            aria-controls="expanded-row" aria-expanded="false"
                                            data-shown-text="Show">Show</button>
                                    </td>
                                    <td id="expanded-row-3" class="p-table__expanding-panel" aria-hidden="true">
                                        <div class="row">
                                            <div class="col-8">
                                                <h4>Expanding table cell</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Consequuntur cum dicta beatae
                                                    nostrum eligendi similique earum, dolorem fuga quis, sequi
                                                    voluptates architecto ipsa
                                                    dolorum eaque rem expedita inventore voluptas odit aspernatur alias
                                                    molestias facere.</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Fim grid -->

    <!-- Inicio Footer -->
    <footer class="l-footer--sticky p-strip--dark">
        <nav class="row" aria-label="Footer navigation">
            <div class="has-cookie">
                <p>© 2021 <strong>Daniele Ferreira Galvão.</strong>
                    <br>Aprendendo Vanilla Css
                </p>                
            </div>
        </nav>
    </footer>
    </div>
</body>

</html>