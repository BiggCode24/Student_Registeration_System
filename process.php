<?php
include "database.php";

$message = "No Action Taken Yet";
$status = "info";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cleaning up my data
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $department = trim($_POST['department']);
    $matric_number = trim($_POST['matric_number']);

    // check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "❌ Invalid email format. Please go back and try again";
        $status = "error";

    } else {
        // Inserting data into DB 
        $statement = $conn->prepare("INSERT INTO student_record (full_name, email, department, matric_number) VALUES (?, ?, ?, ?)");
        $statement->bind_param("ssss", $full_name, $email, $department, $matric_number);

        //lets return something pleasing to the user asap
        if ($statement->execute()) {
            $message = "✅ Registration Successfully!";
            $status = "success";
        } else {
            $message = "❌ Error: " . $conn->error;
            $status = "error";
        }

        $statement->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Process Page</title>
    <link rel="stylesheet" href="main_style.css">
</head>

<body>

    <div class="box process-box <?php echo $status; ?>">
        <h2><?php echo $message; ?></h2>
        <a class="msg-btn" href="view.php">View Registered Students</a>
        <a class="msg-btn" href="index.php">Continue Registration</a>
    </div>

</body>

</html>