<?php

    include 'mysql.php';
    
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

        if(preg_match($fnameRegEx,$fname) && preg_match($lnameRegEx,$lname)){
            ?>
            <script>
                alert("Name cannot be Mohit Badve");
                window.history.back();
            </script>
            <?php
        }
        else{
            if(check_exists($email,"test")){
                ?>
                <script type="text/javascript">
                    alert("USER ALREADY EXISTS");
                    window.history.back();
                </script>
                <?php
                exit();
            }
            else {
	            insert($email, $password, $fname, $lname, $gender, $age, $address, $state, $city, "test");
	            ?>
                <script>
                    var url = "<?php echo $_SERVER['HTTP_REFERER'] ?>";
                    url = url.split("/");
                    url = url[url.length - 1].split(".");
                    if (url[0] === "Register") {
                        window.location.href = "../Index.php";
                    } else if (url[0] === "RegisterPopUp")
                        window.close();
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
    
