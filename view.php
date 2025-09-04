<?php
include "database.php";

//getting records from my database
$result = $conn->query("SELECT * FROM student_record");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Student</title>
    <link rel="stylesheet" href="main_style.css">

</head>

<body>

    <section id="main-container">
        <div class="space"></div>
            <div id="reg-list-head">
                <h1>LIST OF REGISTERED STUDENTS</h1>
            </div>

            <table border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email </th>
                <th>Department</th>
                <th>Matric Number</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $i++ ?> </td>
                    <td class="cap-txt" ><?php echo $row['full_name'] ?> </td>
                    <td><?php echo $row['email'] ?> </td>
                    <td class="cap-txt"><?php echo $row['department'] ?> </td>
                    <td class="cap-txt"><?php echo $row['matric_number'] ?> </td>
                    <td><a class="del-btn" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
        <a class="back-link" href="index.php">Continue registration</a>
    </section>
</body>

</html>