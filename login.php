<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="./build/css/demo.css" rel="stylesheet">
    <link href="./build/css/intlTelInput.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Log in</h4>
                    </header>
                    <article class="card-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Login" name="submit">
                            </div>
                        </form>
                        <div class="text-center">
                        <p>Don't have an account yet? <a href="register.php">Register here</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional, for certain Bootstrap features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "website_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query the database to check if the email exists
    $sql = "SELECT * FROM sign_in_tbl WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variables
            $_SESSION["user"] = $row["email"];
            $_SESSION["name"] = $row["first_name"]; // Assuming you have a 'first_name' column

            // Redirect to the home page or dashboard
            header("Location: indexIn.php");
            exit();
        } else {
            // Password is incorrect
            echo "Invalid email or password.";
        }
    } else {
        // Email does not exist
        echo "Invalid email or password.";
    }
}
?>

