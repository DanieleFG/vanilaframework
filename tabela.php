<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-2.31.0.min.css" />
    <script src="js/javascript.js"></script>
    <title>Tabela Vanilla</title>
</head>

<body>

    <!--  Inicio Capa Destaque   -->
    <div class="p-strip--dark">
        <div class="row">
            <div class="col-12">
                <h1>Daniele <code>Ferreira</code> Galvão</h1>
                <h3>VANILLA <code>CSS - Framework</code></h3>

            </div>
        </div>
    </div>

    <!--  Inicio Navegação   -->
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
                        <a class="p-navigation__link" href="#">Services</a>
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
    <!--  Inicio Tabela   -->
    <div class="row">
        <div class="col-12">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Monitor</td>
                        <td>R$ 500,00</td>
                        <td>150</td>
                        <td>R$ 5.000,00</td>
                    </tr>
                    <tr>
                        <td>Core i5 nona</td>
                        <td>R$ 798,00</td>
                        <td>50</td>
                        <td>R$ 3.500,00</td>
                    </tr>
                    <tr>
                        <td>Nobreak</td>
                        <td>R$ 800,00</td>
                        <td>30</td>
                        <td>R$ 1.689,00</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

<!-- Inicio Footer -->
    <footer class="l-footer--sticky p-strip--light">
        <nav class="row" aria-label="Footer navigation">
            <div class="has-cookie">
                <p>© 2020 Canonical Ltd. <a href="#">Ubuntu</a> and <a href="#">Canonical</a> are registered trademarks
                    of Canonical Ltd.</p>
                <ul class="p-inline-list--middot">
                    <li class="p-inline-list__item">
                        <a href="#"><small>Legal information</small></a>
                    </li>
                    <li class="p-inline-list__item">
                        <a href="#"><small>Report a bug on this site</small></a>
                    </li>
                </ul>
                <span class="u-off-screen"><a href="#">Go to the top of the page</a></span>
            </div>
        </nav>
    </footer>
    </div>



</body>

</html>