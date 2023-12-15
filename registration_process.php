<html>
	<head>
		<title>Registration Process</title>
	</head>
	
</body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			// Collect user input from the registration form
			$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
			$password = $_POST['password'];

    // Perform input validation
		if (empty($username) || empty($email) || empty($password)) {
		echo "Please fill in all the required fields.";
        
	// You can redirect the user back to the registration form here
		} elseif (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/\d/', $password) || !preg_match('/[\W_]/', $password)) {
        echo "Weak password. It must contain at least 8 characters, including uppercase, lowercase, digits, and special characters.";
        
	// You can redirect the user back to the registration form here
		} elseif (strlen($username) < 4 || strlen($username) > 20 || !preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        echo "Invalid username. It must be between 4 and 20 characters and contain only letters, digits, and underscores.";
        
		// You can redirect the user back to the registration form here
    } else {
        // Input is valid; you can proceed with registration
        // Further processing (e.g., hashing the password and storing in the database) should be done here

        // For demonstration purposes, we'll display the collected data
        echo "Registration successful!<br>";
        echo "Username: $username<br>";
        echo "Email: $email";
    }
	} else {
    // Handle non-POST requests (optional)
    echo "Invalid request method.";
	}
	?>
	
	
	
	</body>
	</html>
