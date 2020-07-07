<?php 
define('TITLE', 'Register');// Set the page title and include the header file:
include('templates/header.html');
$fileregister = 'user_registered.txt';
// Print some introductory text:
echo '<h2>Registration Form</h2>
	<p>Register so that you can take advantage of certain features 
	like this, that, and the other thing.</p>';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {// Check if the form has been submitted:
	$problem = false; // No problems so far.
	
	if (empty($_POST['email'])) {
		$problem = true;
		echo '<p class="text--error">Please enter your email address!</p>';
	}
	if (empty($_POST['password'])) {
		$problem = true;
		print '<p class="text--error">Please enter a password!</p>';
	}
	if (!$problem) { // If there weren't any problems...
        if(is_writable($fileregister)){
			file_put_contents($fileregister, $_POST['email'] .PHP_EOL, FILE_APPEND);
			file_put_contents($fileregister, $_POST['password'] .PHP_EOL, FILE_APPEND);
			echo '<p class="text--success">You are now registered!</p>';
		}
		$_POST = [];// Clear the posted values:
	} else { // Forgot a field.
		echo '<p class="text--error">Please try again!</p>';
	}
} // End of handle form IF.
// Create the form:
?>
<form action="register.php" method="post" class="form--inline">
	<p><label for="email">Email Address:</label><br>
	<input type="email" name="email" size="100" value="<?php 
	if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>"></p>
	<p><label for="password">Password:</label><br>
	<input type="password" name="password" size="100" value="<?php 
	if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } ?>"></p>
	<p><input type="submit" name="submit" value="Register" class="btn btn-primary"></p>
</form>
<?php include('templates/footer.html'); 
?>