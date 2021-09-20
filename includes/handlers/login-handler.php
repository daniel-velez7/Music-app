<?php 
if(isset($_POST['loginButton'])) {
	//Login button was pressed
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	//what we put in parenthesis here must match the name of the form

	// Login function

	$result = $account->login($username, $password); 

	if($result == true) {
		$_SESSION['userLoggedIn'] = $username; 
		header("Location: index.php"); 
	}
}

?>

