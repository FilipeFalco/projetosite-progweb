<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>QHelp - Página inicial</title>

    <!-- CSS -->
    <link rel="stylesheet" href="localhost/projetosite-progweb/public/reset.css">
    <link rel="stylesheet" href="localhost/projetosite-progweb/public/style.css">

    <!-- CSS - Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body class="has-fixed-sidenav vsc-initialized">
    <header>
        <!-- Navbar superior -->
        <div class="navbar-fixed">
            <nav class="navbar white">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo grey-text text-darken-4">Bem-Vindo $user</a>
                    <ul id="nav-mobile" class="right">
                        <li class="hide-on-med-and-down">
                            <a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons icon-blue">notifications</i></a>
                        </li>
                        <li>
                            <a href="#!" data-target="chat-dropdown" class="dropdown-trigger waves-effect"><i class="material-icons icon-blue">account_circle</i></a>
                        </li>
                    </ul>
                    <!-- Menu para resposividade do sidebar -->
                    <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
                </div>
            </nav>
        </div>

        <!-- Navbar lateral -->
        <ul id="sidenav-left" class="sidenav sidenav-fixed blue darken-2 white-text ">
            <li>
                <a href="index.html" class="logo-containerwhite"> <img class="logo-corrector" src="app/View/Imagens/wink-branco.png"></a>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold waves-effect">
                        <a class="collapsible-header"><i class="large material-icons">dashboard</i>Dashboard</a>
                    </li>
                    <li class="bold waves-effect">
                        <a class="collapsible-header">Chat<i class="large material-icons">chat</i></a>
                    </li>
                    <li class="bold waves-effect">
                        <a class="collapsible-header">Histórico<i class="large material-icons">label</i></a>
                    </li>
                    <li class="bold waves-effect">
                        <a class="collapsible-header">Configurações<i class="large material-icons">settings</i></a>
                    </li>
                    <li class="bold waves-effect">
                        <a class="collapsible-header">Informações<i class="large material-icons">info_outline</i></a>
                    </li>
                </ul>
            </li>
        </ul>

        <main class="container">
            <div class="masonry row">
                <div class="col s12 l9 offset-l3">
                    <div class="card cards-correction">
                        <img class="image-corrector" src="app/View/Imagens/target.png">
                        <h5>Recursos Humanos</h5>
                        <p class="card-text-format">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, facere!</p>
                    </div>
                </div>
                <div class="col s12 l9 offset-l3">
                    <div class="card cards-correction">
                        <img class="image-corrector" src="app/View/Imagens/technical.png">
                        <h5>Departamento de informatica</h5>
                        <p class="card-text-format">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, atque!</p>
                    </div>
                </div>
                <div class="col s12 l9 offset-l3">
                    <div class="card cards-correction">
                        <img class="image-corrector" src="app/View/Imagens/payment-terminal.png">
                        <h5>Requisições de mercado</h5>
                        <p class="card-text-format">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, commodi.</p>
                    </div>
                </div>
            </div>
        </main>

    </header>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JavaScript - Materialize) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>