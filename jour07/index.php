<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">LPTF</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        <a class="nav-link" href="#">Units</a>
                        <a class="nav-link" href="#">Jobs</a>
                        <a class="nav-link disabled">Skills</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid" style="background-color: #DCDCDC">
        <!-- TITRE -->
        <h1 class="text-center fw-light mb-3">LaPlateforme_</h1>

        <!-- BLOC DE GAUCHE-->
        <div class="d-flex ">
            <div class="card col-2 h-25 ">
                <img src="papillon.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-5">Un Papillon</h5>
                    <p class="card-text fs-6 fw-light">Un papillon, c'est un peu comme une chenille, mais avec des ailes.<br>Ne pas ingérer. </p>
                    <a class="btn btn-primary" href="#" role="button">Commander votre propre papillon</a>
                </div>
            </div>

            <!-- BLOC DU CENTRE -->
            <div class="col-7 ms-3 ps-2" style="background-color: #E9ECEF">
                <h1 class="fw-light mt-5"> Bonjour, monde !</h1>
                <p class="fs-4">Il existe plusieurs visions du terme :</p>
                <p class="fs-4 mb-5">le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.
                    <br>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnemenet plus ou moins naturel.
                </p>
                <hr class="ms-2 me-2 mb-5">
                <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                <div class="d-flex justify-content-between mb-5">
                    <button type="button" class="btn btn-danger ms-3 mb-5">Rebooter le monde</button>
                    <div class="spinner-border text-info" role="status">

                    </div>
                    <nav aria-label="Page navigation example  " class="float-end mt-5">
                        <ul class="pagination me-3 ">
                            <li class="page-item"><a class="page-link" href="#"><<</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">>></a></li>
                        </ul>
                    </nav>
                </div>

                <!-- BLOC DE DROITE -->
            </div>
            <ul class="nav flex-column bg-light ms-3 h-75">
                <li class="nav-item border">
                    <a class="nav-link p-3 bg-primary text-white" href="#">Limbes</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3" href="#">Luxure</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3" href="#">Gourmandise </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3">Avarice</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3">Colère </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3">Violence</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3">Ruse et tromperie </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3">Trahison </a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link p-3">Internet Explorer </a>
                </li>
            </ul>
        </div>

        <!-- BARRE  -->
        <h5 class=" offset-7 mt-5 mb-0">Installation de AI 9000</h5>
        <div class="container float-center d-flex offset-3">
            <i class="bi bi-arrow-bar-left"></i>
            <div class=" progress col-6 mt-2 ">

                <div class="progress-bar bg-warning p-4 " role="progressbar" style="width: 80%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <i class="bi bi-arrow-bar-right"></i>
        </div>

        <!-- FORMULAIRE -->
        <div class="d-flex justify-content-around mt-4 pb-5" id="page-form">
            <div class="col-4">
                <p class="h5">Recevez votre copie gratuite d'internet 2!</p>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Mot de passe" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
                <label for="basic-url" class="form-label">URL des Internets 2 et 2.1 Beta</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Doge Coin</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
            </div>
            <div class="col-2">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </main>
</body>
</html>