<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Profile Management</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <script src="../assets/js/script.js"></script>
</head>

<body class="common-body">
    <?php include 'header.php'; ?>  
    <div class="register-container">
        <h2>Client Profile Management</h2>
        <form name="profileForm" method="POST" action="fuel-quote-form.php" onsubmit="return updateProfile()">
            <div class="form-group">
                <label for="fullName">Full Name *</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="address1">Address 1 *</label>
                <input type="text" id="address1" name="address1" required>
            </div>
            <div class="form-group">
                <label for="address2">Address 2</label>
                <input type="text" id="address2" name="address2">
            </div>
            <div class="form-group">
                <label for="city">City *</label>
                <input type="text" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="state">State *</label>
                <select id="state" name="state" required>
                    <option value="">Select a State</option>
                    <option value="TX">Texas</option>
                    <option value="CA">California</option>
                </select>
            </div>
            <div class="form-group">
                <label for="zipCode">Zip Code *</label>
                <input type="text" id="zipCode" name="zipCode" required>
            </div>
            <div class="form-group">
                <button type="submit">Update Profile</button>
            </div>
        </form>
    </div>

</body>

</html>