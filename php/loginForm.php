<?php

include 'mysql.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["pass"]);
    $emailRegEx = "/(spit)/i";
    $address = "http://localhost:63342/CInemaTicket/";
    if(preg_match($emailRegEx,$email)){
        ?>
        <script>
            alert("Email cannot contain spit");
            window.location.href = "<?php echo $address?>"+"Login.html";
        </script>
        <?php
    }
    else{
	    if(!check_exists($email,"test")){
		    ?>
            <script type="text/javascript">
                alert("USER DOES NOT EXIST");
                window.history.back();
            </script>
		    <?php
            exit();
	    }
	    elseif(!match_password($email,$password,"test")){
            ?>
            <script type="text/javascript">
                alert("INCORRECT PASSWORD");
                $_SESSION["loginStat"] = "absent";
                window.history.back();
            </script>
            <?php
            exit();
        }
        else{
            ?>
            <script type="text/javascript">
                alert("LOGIN SUCCESSFUL");
                window.location.href = "../Index.php";
            </script>
            <?php
            exit();
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
