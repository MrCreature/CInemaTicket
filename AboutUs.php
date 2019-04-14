<!DOCTYPE HTML>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WELCOME TO SPCINEMA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script type="text/javascript">
        $(document).ready(function () {
            var table = $("#about-table");
            table.fadeIn(1000);
            var cur_pos = table.position();
            table.animate({right:'100px'},"slow");
            table.animate({left:'100px'},"slow");
            table.animate({left : cur_pos.left},"slow");
        })
    </script>
</head>
<body id="about-body">
<div class="container-fluid custom-nav  bg-light">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <span class="navbar-brand mb-0 h1">SPCinema</span>
        <div class="navbar-collapse">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item">
                    <a class="nav-link" href="Index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Movies.php">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="AboutUs.php">About Us</a>
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

<div class="container-fluid justify-content-center my-5 py-3" align="center" id="about-para" style="left: -10px">
    <h1 class="display-4">Welcome</h1>
    <br>
    <p>At our website, we believe everyone should be able to book movie tickets with ease.</p>
    <p>No one should go through the hassle of going to the theatres to pre-book your tickets or waiting in long lines just before the movies starts without knowing whether you would be able to book your tickets or not</p>
</div>
<div class="container justify-content-center my-5 py-3 center-content" id="table-parent" align="center">
    <h1 class="display-4">Developers</h1>
    <br>

        <table id="about-table" class="table table-light table-border table-hover m-3 justify-content-center container" style="display: none;position: absolute">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Contributions</th>
                <th scope="col">Contact Info</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Amodh Akhelikar</td>
                <td>Webpage</td>
                <td>
                    <ul class="menu">
                        <li class="facebook"><a href="https://www.facebook.com" target="_blank"></a></li>
                        <li class="twitter"><a href="https://www.twitter.com" target="_blank"></a></li>
                        <li class="linkedin"><a href="https://www.linkedin.com" target="_blank"></a></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>Monil Dand</td>
                <td>Webpage</td>
                <td>
                    <ul class="menu">
                        <li class="facebook"><a href="https://www.facebook.com" target="_blank"></a></li>
                        <li class="twitter"><a href="https://www.twitter.com" target="_blank"></a></li>
                        <li class="linkedin"><a href="https://www.linkedin.com" target="_blank"></a></li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
</div>
<br>
<div class="footer fixed-bottom">
    <p>THIS IS A FOOTER</p>
</div>
</body>
</html>
