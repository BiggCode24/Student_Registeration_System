<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Registered Student</title>
    <link rel="stylesheet" href="main_style.css">
</head>

<body>
    <div class="form-container">

        <h1>Student Registration</h1>
        <p class="user-guide">Fill in your records as specified.</p>

        <form class="center-form" method="post" action="process.php">
            <div class="form-group">

                <input type="text" name="full_name" placeholder="Fullname" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="text" name="department" placeholder="Department" required>
            </div>

            <div class="form-group">
                <input type="text" name="matric_number" placeholder="Matric Number" required>
            </div>

            <button>Register</button>
            
            <a href="view.php" class="link">View Registered student</a>
        </form>
    </div>
</body>

</html>