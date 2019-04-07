<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["pass"]);
    $emailRegEx = "/(spit)/i";
    if(preg_match($emailRegEx,$email)){
        ?>
        <script>
            alert("Email cannot contain spit");
            window.location.href = "../Login.html";
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            var email = "<?php echo $email ?>";
            var pass = "<?php echo $password ?>";
            alert("Email : "+email+"\nPassword : "+pass);
            window.location.href = "../Home.html";
        </script>
        <?php
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
