<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-change {
            background-color: #28a745;
        }
        .btn-change:hover {
            background-color: #218838;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_GET["message"]))
        {
            $message = htmlspecialchars($_GET["message"]);
            echo $message;
        }
    ?>
    <div class="container">
        <h2>Change User</h2>
        <form id="changeUserForm" action="include/edithandler.php" method="post">
            <div class="form-group">
                <label for="changeUsername">Username:</label>
                <input type="text" id="changeUsername" name="changeUsername" required>
            </div>
            <div class="form-group">
                <label for="changePassword">Password:</label>
                <input type="password" id="changePassword" name="changePassword" required>
            </div>
            <div class="form-group">
                <label for="changeEmail">Email:</label>
                <input type="email" id="changeEmail" name="changeEmail" required>
            </div>
            <button type="submit" class="btn btn-change">Change User</button>
        </form>
        <h2>Delete User</h2>
        <form id="deleteUserForm" action="includes/deletehandler.php" method="post">
            <div class="form-group">
                <label for="deleteUsername">Username:</label>
                <input type="text" id="deleteUsername" name="deleteUsername" required>
            </div>
            <div class="form-group">
                <label for="deletePassword">Password:</label>
                <input type="password" id="deletePassword" name="deletePassword" required>
            </div>
            <button type="submit" class="btn btn-delete">Delete User</button>
        </form>
    </div>
</body>
</html>
