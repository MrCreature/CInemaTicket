<?php
	$servername = "localhost";
	$username = "root";
	$password = "12345678";
    
    function insert($email,$pass,$fname,$lname,$gender,$age,$address, $state, $city,$dbname){
	    $servername = "localhost";
	    $username = "root";
	    $password = "12345678";
	    
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "INSERT INTO `test` (`email`, `pass`, `fname`, `lname`, `gender`, `age`, `address`, `state`, `city`) VALUES ('$email', '$pass', '$fname', '$lname', '$gender', '$age', '$address', '$state', '$city')";
        $conn->query($sql);
        $conn->close();
        
        return;
    }
    
    function check_exists($email,$dbname){
	    $servername = "localhost";
	    $username = "root";
	    $password = "12345678";
	    
	    $conn = new mysqli($servername, $username, $password, $dbname);
	    
	    $sql = "SELECT * FROM $dbname WHERE email = '$email'";
	    $result = mysqli_query($conn, $sql);
	    $conn->close();
	    
	    if(mysqli_num_rows($result)==0){
	        return false;
        }
	    return true;
    }
    
    function match_password($email,$pass,$dbname){
	    $servername = "localhost";
	    $username = "root";
	    $password = "12345678";
	
	    $conn = new mysqli($servername, $username, $password, $dbname);
	
	    $sql = "SELECT * FROM $dbname WHERE email = '$email' AND pass = '$pass'";
	    $result = mysqli_query($conn, $sql);
	    $conn->close();
	
	    if(mysqli_num_rows($result)==0){
		    return false;
	    }
	    return true;
    }