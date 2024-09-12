<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InaSoaps</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!--FONTS-->
    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header class="container-fluid p-0 m-0">
        <div class="row w-100 position-absolute z-1 p-0 mx-auto" id="top">
            <!--NOME/BANNER-->
            <div class="col-md-11 col-9 text-sm-center ">
                <div class="h1 titulo_principal ms-lg-5 ps-lg-5 ms-2 mb-2">
                    InaSoaps
                </div>
            </div>
            <!--TOGGLE BUTTON-->
            <div class="col-3 d-md-none align-self-end">
                <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src=""></img>
                </button>
            </div>
            <hr class="hr-topo col-11 mx-auto my-0">
            </hr>
            <!--NAVBAR-->
            <div class="row text-uppercase p-0 m-0">
                <div class="col-12 p-0">
                    <nav class="navbar navbar-expand-md">
                        <div class="container-fluid px-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="menu navbar-nav w-100 gap-3 me-auto mb-2 mb-lg-0 justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($pagina_atual == "home") ? "active": ""; ?>"
                                            aria-current="page" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($pagina_atual == "about_us") ? "active": ""; ?>"
                                            href="about_us.php">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($pagina_atual == "products") ? "active": ""; ?>"
                                            href="products.php">Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($pagina_atual == "contacts") ? "active": ""; ?>"
                                            href="contacts.php">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>