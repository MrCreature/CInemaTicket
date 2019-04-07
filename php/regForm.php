<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $gender = test_input($_POST["fname"]);
    $age = test_input($_POST["age"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["pass"]);
    $address = test_input($_POST["address"]);
    $state = test_input($_POST["state"]);
    $city = test_input($_POST["city"]);

    $fnameRegEx = "/(mohit)/i";
    $lnameRegEx = "/(badve)/i";
    if(preg_match($fnameRegEx,$fname) || preg_match($lnameRegEx,$lname)){
        ?>
        <script>
            alert("Name cannot be Mohit Badve");
            window.history.back();
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            var fname = "<?php echo $fname ?>";
            var lname = "<?php echo $lname ?>";
            var age = "<?php echo $age ?>";
            var gender = "<?php echo $gender ?>";
            var email = "<?php echo $email ?>";
            var pass = "<?php echo $password ?>";
            var address = "<?php echo $address ?>";
            var state = "<?php echo $state ?>";
            var city = "<?php echo $city ?>";
            alert("Name : "+fname+" "+lname+"\nGender : "+gender+"     Age : "+age+"\nEmail : "+email+"     Password : "+pass+"\nAddress : "+address+"\nState : "+state+"     City : "+city);

            var url = "<?php echo $_SERVER['HTTP_REFERER'] ?>";
            console.log(url);
            url = url.split("/");
            url = url[url.length-1].split(".");
            if(url[0] === "Register")
                window.location.href = "../Home.html";
            else if(url[0] === "RegisterPopUp")
                window.close();
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

