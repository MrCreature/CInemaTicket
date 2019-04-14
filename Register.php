<!DOCTYPE HTML>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WELCOME TO SPCINEMA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css"/>
    <script src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script>
        function initializeDiv() {
            var fnamePara = document.getElementById("fnameFail");
            var lnamePara = document.getElementById("lnameFail");
            var agePara = document.getElementById("ageFail");
            var emailPara = document.getElementById("emailFail");
            var passPara = document.getElementById("passFail");
            var cityPara = document.getElementById("cityFail");
            var statePara = document.getElementById("stateFail");
            initialize(fnamePara);
            initialize(lnamePara);
            initialize(agePara);
            initialize(emailPara);
            initialize(passPara);
            initialize(cityPara);
            initialize(statePara);
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
        function validateForm(){
            var fname = document.forms["regForm"]["fname"].value;
            var lname = document.forms["regForm"]["lname"].value;
            var gender = document.forms["regForm"]["gender"].value;
            var age = document.forms["regForm"]["age"].value;
            var email = document.forms["regForm"]["email"].value;
            var pass = document.forms["regForm"]["pass"].value;
            var address = document.forms["regForm"]["address"].value;
            var city = document.forms["regForm"]["city"].value;
            var state = document.forms["regForm"]["state"].value;

            var fnamePara = document.getElementById("fnameFail");
            var lnamePara = document.getElementById("lnameFail");
            var agePara = document.getElementById("ageFail");
            var emailPara = document.getElementById("emailFail");
            var passPara = document.getElementById("passFail");
            var cityPara = document.getElementById("cityFail");
            var statePara = document.getElementById("stateFail");

            var regexEmail = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
            var regexPass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
            var regexEmpty=/^$/;
            var regexNum=/^[0-9]*$/;
            var flag;

            flag=0;
            initializeDiv();

            if(regexEmpty.test(fname)){
                displayDiv(fnamePara,"First name cannot be empty");
                flag=1;
            }
            if(regexEmpty.test(lname)){
                displayDiv(lnamePara,"Last name cannot be empty");
                flag=1;
            }
            if(regexEmpty.test(age)){
                displayDiv(agePara,"Age cannot be empty");
                flag = 1;
            }
            else if(!regexNum.test(age)){
                displayDiv(agePara, "Age must be a number");
                flag = 1;
            }
            if(regexEmpty.test(email)){
                displayDiv(emailPara,"Email cannot be empty");
                flag=1;
            }
            else if(!regexEmail.test(email)){
                displayDiv(emailPara,"Email address is invalid");
                flag=1;
            }
            if(regexEmpty.test(pass)){
                displayDiv(passPara,"Password cannot be empty");
                flag=1;
            }
            else if(!regexPass.test(pass)){
                displayDiv(passPara,"Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
                flag=1;
            }
            if(regexEmpty.test(city)){
                displayDiv(cityPara,"City cannot be empty");
                flag=1;
            }
            if(regexEmpty.test(state)){
                displayDiv(statePara,"State cannot be empty");
                flag=1;
            }
            return flag !== 1;
        }
    </script>
</head>
<body id="login-body" onload="initializeDiv()">
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
                    <a class="nav-link active" href="Login.php">Login</a>
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
<div class="container justify-content-center py-5 shadow-lg form-div">
    <form name="regForm" onsubmit="return validateForm()" method="post" action="./php/regForm.php">
        <h1 class="display-4">New User</h1>
        <br><br>
        <div class="form-group form-row">
            <div class="form-group col-md-6">
                <label for="fname">First Name <span style="color: red;font-weight: bolder">*</span></label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                <div id="fnameFail"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="lname">Last Name <span style="color: red;font-weight: bolder">*</span></label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                <div id="lnameFail"></div>
            </div>
        </div>
        <div class="form-group form-row">
            <div class="form-group col">
                <label for="gender">Gender <span style="color: red;font-weight: bolder">*</span></label>
                <select id="gender" class="form-control" name="gender">
                    <option value="male" selected>Male</option>
                    <option value="female" >Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="age">Age <span style="color: red;font-weight: bolder">*</span></label>
                <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                <div id="ageFail"></div>
            </div>
        </div>
        <br>
        <div class="form-group form-row">
            <div class="form-group col-md-6">
                <label for="email">Email-Id <span style="color: red;font-weight: bolder">*</span></label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                <div id="emailFail"></div>
            </div>
            <div class="form-group col-md-6">
                <label for="pass">Password <span style="color: red;font-weight: bolder">*</span></label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                <div id="passFail"></div>
            </div>
        </div>
        <div class="form-group form-row">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        </div>
        <div class="form-group form-row">
            <div class="form-group col">
                <label for="city">City <span style="color: red;font-weight: bolder">*</span></label>
                <input type="text" class="form-control" id="city" name="city">
                <div id="cityFail"></div>
            </div>
            <div class="form-group col">
                <label for="state">State <span style="color: red;font-weight: bolder">*</span></label>
                <input type="text" class="form-control" id="state" name="state">
                <div id="stateFail"></div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success mr-3" style="width: 30%">Register</button>
        <a href="Login.php" class="btn btn-dark" style="width: 30%">Back To Login</a>
    </form>
</div>

<div class="footer sticky-bottom">
    <p>THIS IS A FOOTER</p>
</div>
</body>
</html>
