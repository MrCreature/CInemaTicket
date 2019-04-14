<?php
	session_start();
	if (!isset($_SESSION['user']) || $_SESSION['user'] == '')
		$_SESSION["user"] = "false";
?>
<!DOCTYPE HTML>
<html  lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>WELCOME TO SPCINEMA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript">
        $(document).ready(function () {
            $('#logout-but').click(function(){
                $.ajax({
                    type: "POST",
                    url: "php/logout.php"
                }).done(function( ){
                	alert("LOGGED OUT CURRENT USER");
                    location.reload();
                });
            });
        });
	</script>
	<script>
        function initializePage() {
            var emailPara = document.getElementById("emailFailLogin");
            var passPara = document.getElementById("passFailLogin");
            initialize(emailPara);
            initialize(passPara);
        }
        function initialize(failPara){
            failPara.innerHTML="";
            failPara.style.visibility="hidden";
            failPara.style.display="none";
            failPara.style.overflow="hidden";
            failPara.style.height="0";
            failPara.style.lineHeight="0";
            failPara.style.border="0";
            failPara.style.margin="0";
        }
        function displayDiv(failPara,string) {
            failPara.innerHTML=string;
            failPara.style.visibility="";
            failPara.style.display="";
            failPara.style.overflow="";
            failPara.style.height="";
            failPara.style.lineHeight="";
            failPara.style.border="";
            failPara.style.margin="";
            failPara.style.marginTop="10px";
            failPara.classList.add("alert","alert-danger");
        }
        function validateForm(){
            var email = document.forms["loginForm"]["emailLogin"];
            var pass = document.forms["loginForm"]["passLogin"];
            var emailPara = document.getElementById("emailFailLogin");
            var passPara = document.getElementById("passFailLogin");

            var regexEmail = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
            var regexPass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
            var regexEmpty=/^$/;
            var flag;

            flag=0;
            initializePage();

            if(regexEmpty.test(email.value)){
                displayDiv(emailPara,"Email cannot be empty");
                flag=1;
            }
            else if(!regexEmail.test(email.value)){
                displayDiv(emailPara,"Email address is invalid");
                flag=1;
            }
            if(regexEmpty.test(pass.value)){
                displayDiv(passPara,"Password cannot be empty");
                flag=1;
            }
            else if(!regexPass.test(pass.value)) {
                displayDiv(passPara, "Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
                flag = 1;
            }
            return flag !== 1;
        }

        function coolRegister() {
            var w = 600;
            var h = 700;
            var left = (screen.width/2)-(w/2);
            var top = (screen.height/2)-(h/2);
            var newwindow = window.open("RegisterPopUp.php","newWindow", 'toolbar=no, location=no, directories=no, status=no, menubar=no, resizable=no, width='+w+', height='+h+', top='+top+', left='+left);
            var focusOnThisPopup = setInterval(function() {
                if (!newwindow.closed) {
                    newwindow.focus();
                }else {
                    window.location.href = "/";
                    clearInterval(focusOnThisPopup);
                }
            },50);
        }
	</script>
</head>
<body id="login-body" onload="initializePage()">
<div class="container-fluid custom-nav bg-light">
	<nav class="navbar navbar-default navbar-expand-lg navbar-light">
		<span class="navbar-brand mb-0 h1">SPCinema</span>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto mr-4">
				<li class="nav-item">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/Movies.php">Movies</a>
				</li>
				<?php
					if($_SESSION["user"] === "false"){
						?>
						<li class="nav-item active">
							<a class="nav-link" href="/Login.php">Login</a>
						</li>
						<?php
					}
				?>
				<li class="nav-item">
					<a class="nav-link" href="/AboutUs.php">About Us</a>
				</li>
				<li class="nav-item dropdown">
					<?php
						if($_SESSION["user"] === "true"){
							?>
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php echo $_SESSION["username"] ?>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<button class="dropdown-item" id="logout-but">Logout</button>
							</div>
							<?php
						}
					?>
				</li>
			</ul>
		</div>
	</nav>
</div>

<div id="disable-popup-div">
	<div class="container justify-content-center py-5 shadow-lg form-div">
		<form name="loginForm" onsubmit="return validateForm()" method="post" action="./php/loginForm.php">
			<h1 class="display-4">Login</h1>
			<br><br>
			<div class="form-group">
				<label for="emailLogin">Email-Id</label>
				<input type="text" id="emailLogin" name="email" class="form-control">
				<div id="emailFailLogin"></div>
			</div>
			<div class="form-group">
				<label for="emailLogin">Password</label>
				<input type="password" id="passLogin" class="form-control" name="pass">
				<div id="passFailLogin"></div>
			</div>
			<br>
			<div class="row">
				<button type="submit" class="btn btn-dark mx-2 col" >Login</button>
				<a href="Register.php" class="btn btn-success mx-2 col">Register</a>
				<button type="button" class="btn btnCOOL mx-2 col" onclick="return coolRegister()">Register (but in a popup)</button>
			</div>
		</form>
	</div>
	
	<div class="footer fixed-bottom">
		<p>THIS IS A FOOTER</p>
	</div>
</div>
</body>
</html>
