<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Messages Dashboard</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <div class="container">
        <h1>Messages</h1>
        <div class="messages">
            <?php
            require_once "database.php";

            $sqlSelectMessages = "SELECT * FROM contact_tbl";
            $result = mysqli_query($conn, $sqlSelectMessages);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='message'>";
                    echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
                    echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                    echo "<p><strong>Subject:</strong> " . $row["subject"] . "</p>";
                    echo "<p><strong>Message:</strong> " . $row["message"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No messages found</p>";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>

</html>
