<?php
// Database configuration
$servername = "localhost";
$username = "root";     // Database username
$password = "";          // Database password
$dbname = "donating_management"; // Database name

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $donor_name = $_POST['donor_name'];
    $email = htmlspecialchars($_POST['email']);
    $donation_amount = isset($_POST['donation_amount']) ? (float) $_POST['donation_amount'] : 0.0;;
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Establish connection to MySQL database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare an SQL statement to prevent SQL injection
    $addusersql = "INSERT INTO users ('donor_name', 'email', 'donation_amount', 'message')
        VALUES (null, '$donor_name', '$email', '$donation_amount', '$message')";

if($conn->query($addusersql) === TRUE) {
    header("Location: index.php?message_success=Registration successful!");
} else {
    echo "Error: " . $addusersql . "<br>" . $conn->error;
}

exit();
}

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<h2>Thank you for your donation! $donor_name</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Donation Amount: $" . number_format($donation_amount, 2) . "</p>";
        if (!empty($message)) {
            echo "<p>Message: $message</p>";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Basic styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #d7e7f6, #b3d4f0);
            font-family: 'Poppins', sans-serif;
        }

        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 10px 20px;
            background-color: #90caf9;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #64b5f6;
        }

        .back-link {
            margin-top: 20px;
            display: block;
            text-decoration: none;
            color: #4CAF50;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Your Donation Details</h2>

    <?php
    // Dummy array for demonstration - Replace this with a database fetch for actual data
    $donation = [
        ["donor_name" => 1, "donation_amount" => 100, "donation_date" => "2023-11-10", "status" => "Completed"],
        ["donor_name" => 2, "donation_amount" => 50, "donation_date" => "2023-11-09", "status" => "Pending"]
    ];

    if (count($donation) > 0): ?>
        <table>
            <tr>
                <th>Donation ID</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php foreach ($donation as $don): ?>
                <tr>
                    <td><?= $don['id']; ?></td>
                    <td><?= "₱ " . number_format($don['donation_amount'], 2); ?></td>
                    <td><?= $don['donation_date']; ?></td>
                    <td><?= $don['status']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No donations found.</p>
    <?php endif; ?>

</div>

</body>
</html>
