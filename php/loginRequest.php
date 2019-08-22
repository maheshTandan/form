<?php
	session_start();
	if(isset($_SESSION["user"])){
		header("Location: index.php");
	}

	if(isset($_POST['sub'])){
		$id = $_POST['user'];
		$pass = $_POST['pass'];
		$sql = "SELECT * FROM `user` WHERE `email` = '$id' AND `password` = '$pass'";
		$run = mysqli_query($conn, $sql);
		$rows = mysqli_num_rows($run);
		if($rows >= 1){
			$result = mysqli_fetch_assoc($run);

			$_SESSION["email"] = $result['email'];

			header("Location: index.php");
		}
		else{
			?>
				<script>
					alert("Username or Password doesn't match");
				</script>
			<?php
		}
	}
?>