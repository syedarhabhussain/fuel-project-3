<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <script src="../assets/js/script.js"></script>
    <title>Client Registration</title>
</head>

<body class="common-body">
    <?php include 'header.php'; ?>  
    <div class="login-container">
        <h2>Client Registration</h2>
        <div id="error-message" class="error"></div>
        <form id="registerForm" method="POST" action="profile.php" onsubmit="return validateRegister()">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <div class="form-group">
                <label>Already have an account? <a href="index.php">Login</a></label>
                <!-- <button type="button"onclick="location.href='register.php'">Register</button> -->
            </div>
        </form>
    </div>
</body>

</html>