<?php
include "database.php";
if (isset($_GET['id'])) {

    $id = intval($_GET['id']);

    $statement = $conn->prepare("DELETE FROM student_record WHERE id=?");
    $statement->bind_param("i", $id);

    if ($statement->execute()) {
        $message = "Deleted Successfully! <br>";
        $status = "Successful!";
    } else {
        $message = "Error: " . $statement->error;
        $status = "error";
    }

    $statement->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Successfully</title>
    <link rel="stylesheet" href="main_style.css">
</head>

<body>
    <div class="box del-panel <?php echo $status; ?>">
        <h2><?php echo $message; ?></h2>
        <a class="msg-btn" href='view.php'>Go back</a>
    </div>
</body>

</html>