<?php

require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register / Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/background.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.5);
            /* Adjust transparency here */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            backdrop-filter: blur(10px);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2e7d32;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #2e7d32;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #218838;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            border-bottom: 2px solid transparent;
        }

        .tab.active {
            border-bottom: 2px solid #28a745;
            font-weight: bold;
        }

        .form-container {
            display: none;
        }

        .form-container.active {
            display: block;
        }
    </style>
</head>

<body>
    <header>
        <h1 align="center">
            <?php
            output_username();
            ?></h1>
    </header>
    <section>
        <div class="container">
            <div class="tabs">
                <div class="tab active" onclick="showForm('signup')">Sign Up</div>
                <div class="tab" onclick="showForm('login')">Login</div>
            </div>
            <div id="signup" class="form-container active">
                <h2>Sign Up</h2>
                <form action="includes/signup.inc.php" method="post">
                    <?php
                    signup_data();
                    ?>
                    <button type="submit" class="btn">Sign Up</button>
                </form>
            </div>
            <div id="login" class="form-container">
                <h2>Login</h2>
                <form action="includes/login.inc.php" method="post">
                    <div class="form-group">
                        <label for="loginUsername">Username:</label>
                        <input type="text" id="loginUsername" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password:</label>
                        <input type="password" id="loginPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
            </div>

            <?php
            signup_errors();
            check_login_errors()
            ?>
        </div>
    </section>

    <script>
        function showForm(formId) {
            const forms = document.querySelectorAll('.form-container');
            const tabs = document.querySelectorAll('.tab');
            forms.forEach(form => {
                form.classList.remove('active');
            });
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });
            document.getElementById(formId).classList.add('active');
            document.querySelector(`.tab[onclick="showForm('${formId}')"]`).classList.add('active');
        }
    </script>
</body>

</html>