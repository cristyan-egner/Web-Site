<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    </head>
    <style>
        body {
            background-color: #0c1c33;
        }
        header {
            background-color: #0c1c33;
            box-shadow: 5px 2px 5px black;
        }
        ul {
            font-size: 25px;
        }
        .nav-brand {
            width: 140px;
            height: 100px;
        }
        .card-img-top {
            width: 414px;
            height: 350px;
        }
        .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        footer {
            background-color: #0c1c33;
            box-shadow: 0px -2px 5px black;
        }

        .card-text{
            color: green;
        }
        .container-textos{
            display:flex;
            gap:150px;
        }

    </style>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg sticky-top">
                <div class="container px-2">
                    <img src="cm32.jpeg" class="nav-brand">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link text-white" href="#sobremim">Carrinho</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#contato">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section>
                <div class="container">
                    <div class="row justify-content-center g-4">
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="galaxys23.avif" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Samsung Galaxy S23</h5>
                                    <div class="container-textos">
                                        <p class="card-text">R$3500.00</p>
                                        <p class="card-qntd">Em estoque: 50</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="notebook.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Notebook Dell Inspiron 15</h5>
                                    <div class="container-textos">
                                        <p class="card-text">R$4800.00</p>
                                        <p class="card-qntd">Em estoque: 30</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="lg50.avif" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Televisão LG 50" 4K</h5>
                                    <div class="container-textos">
                                        <p class="card-text">R$3500.00</p>
                                        <p class="card-qntd">Em estoque: 40</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="jbl.webp" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Fone de Ouvido JBL</h5>
                                    <div class="container-textos">
                                        <p class="card-text">R$500.00</p>
                                        <p class="card-qntd">Em estoque: 100</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="camera.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Câmera Digital Canon EOS R5</h5>
                                    <div class="container-textos">
                                        <p class="card-text">R$16000.00</p>
                                        <p class="card-qntd">Em estoque: 15</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="relogio.jpg" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <h5 class="card-title">Smartwatch Apple Watch Series 8</h5>
                                    <div class="container-textos">
                                        <p class="card-text">R$3500.00</p>
                                        <p class="card-qntd">Em estoque: 25</p>
                                    </div>
                                    <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="px-3">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; CM3 2025</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
</html>
