<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color:rgb(117, 117, 120);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.2);
        }

        .container {
            background-color: #ffffff;
            width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #cccccc;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color:rgb(47, 196, 107);
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color:rgb(7, 193, 88);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            background-color:rgb(17, 214, 79);
        }

        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #777777;
        }

        .footer a {
            color:rgb(17, 132, 9);
            transition: 1s;
        }

        .footer a:hover {
            color:rgb(25, 185, 14);
            transition: 1s;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <h1>Register</h1>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <!-- <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div> -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <!-- <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
                </div> -->
                <button type="submit" class="btn">Register</button>
            </form>
            <div class="footer">
                sudah punya akun?  <a href="Login.php">Login</a>
            </div>
        </div>
    </form>
</body>
</html>
