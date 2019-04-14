<!DOCTYPE HTML>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WELCOME TO SPCINEMA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
    <script src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script>
        $(document).ready(function () {
            $("#accordion-bad").accordion();
        })
    </script>
</head>
<body id="movies-body">
<div class="container-fluid custom-nav  bg-light">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <span class="navbar-brand mb-0 h1">SPCinema</span>
        <div class="navbar-collapse">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item">
                    <a class="nav-link" href="Index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Movies.php">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
            </ul>
            <form>
                <div  class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
            </form>
        </div>
    </nav>
</div>
<div class="container my-4">
        <form class="">
            <!--<div id="accordion-bad">
                <h3>Language</h3>
                <div>
                    <div class="radio">
                        <label><input type="radio" name="language"> Hindi</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="language"> English</label>
                    </div>
                    <div class="radio disabled">
                        <label><input type="radio" name="language" disabled> Marathi</label>
                    </div>
                </div>
                <h3>Genre</h3>
                <div>
                    <div class="radio">
                    <label><input type="radio" name="genre"> Action</label>
                    </div>
                    <div class="radio">
                    <label><input type="radio" name="genre"> Adventure</label>
                    </div>
                    <div class="radio disabled">
                    <label><input type="radio" name="genre" disabled> Sci-Fi</label>
                    </div>
                </div>
                <h3>Type</h3>
                <div>
                    <div class="radio">
                    <label><input type="radio" name="genre"> 3D</label>
                    </div>
                    <div class="radio">
                    <label><input type="radio" name="genre"> 2D</label>
                    </div>
                    <div class="radio disabled">
                    <label><input type="radio" name="genre" disabled> IMAX</label>
                    </div>
                </div>
            </div>-->
            <div class="form-group">
                <div class="panel-group shadow-sm p-3">
                    <div class="panel panel-default bg-light p-3">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" href="#lang-coll">Language</a>
                            </h6>
                        </div>
                        <div id="lang-coll" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="radio">
                                    <label><input type="radio" name="language"> Hindi</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="language"> English</label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="language" disabled> Marathi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="panel panel-default bg-light p-3">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" href="#genre-coll">Genre</a>
                            </h6>
                        </div>
                        <div id="genre-coll" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="radio">
                                    <label><input type="radio" name="genre"> Action</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="genre"> Adventure</label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="genre" disabled> Sci-Fi</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="panel panel-default bg-light p-3">
                        <div class="panel-heading">
                            <h6 class="panel-title">
                                <a data-toggle="collapse" href="#format-coll">Format</a>
                            </h6>
                        </div>
                        <div id="format-coll" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="radio">
                                    <label><input type="radio" name="genre"> 3D</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="genre"> 2D</label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="genre" disabled> IMAX</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="card-deck mt-5">
            <div class="card custom-card">
                <img class="card-img-top" src="assets/spider-man.jpg" alt="404" >
                <div class="card-body">COOL MOVIE</div>
            </div>
            <div class="card custom-card">
                <img class="card-img-top" src="assets/spider-man.jpg" alt="404">
                <div class="card-body">COOL MOVIE</div>
            </div>
            <div class="card custom-card">
                <img class="card-img-top" src="assets/spider-man.jpg" alt="404">
                <div class="card-body">
                    <p class="card-text">COOL MOVIE</p>
                </div>
            </div>
            <div class="card custom-card">
                <img class="card-img-top" src="assets/spider-man.jpg" alt="404">
                <div class="card-body">
                    <p class="card-text">COOL MOVIE</p>
                </div>
            </div>
        </div>
</div>
<div class="footer">
    <p>THIS IS A FOOTER</p>
</div>
</body>
</html>
