<?php
	session_start();
	$_SESSION["user"] = "false";
	include 'mysql.php';
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$email = test_input($_POST["email"]);
		$password = test_input($_POST["pass"]);
		$emailRegEx = "/(spit)/i";
		if(preg_match($emailRegEx,$email)){
			?>
			<script>
				alert("Email cannot contain spit");
				window.history.back();
			</script>
			<?php
		}
		else{
			if(!check_exists($email,"test")){
				?>
				<script type="text/javascript">
					alert("USER DOES NOT EXIST");
					<?php
					$_SESSION["user"] = "false";
					?>
					window.history.back();
				</script>
				<?php
				exit();
			}
			elseif(!match_password($email,$password,"test")){
				?>
				<script type="text/javascript">
					alert("INCORRECT PASSWORD");
					<?php
					$_SESSION["user"] = "false";
					?>
					window.history.back();
				</script>
				<?php
				exit();
			}
			else{
				?>
				<script type="text/javascript">
					alert("LOGIN SUCCESSFUL");
					<?php
							$atpos = stripos($email,"@");
							$email = substr($email,0,$atpos);
							$_SESSION["user"] = "true";
							$_SESSION["username"] = $email;
					?>
					window.location.href = "http://cinematicket";
				</script>
				<?php
//				header("Location: http://cinematicket");
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
