<!-- <!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
        /* style.css */
    body {
    font-family: Arial, sans-serif;
    background-color: #f3f4f6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    }

    .container {
    background: #ffffff;
    padding: 20px 25px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 300px;
    }

    .container label {
    font-size: 14px;
    font-weight: bold;
    color: #333333;
    }

    .container input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 15px 0;
    border: 1px solid #cccccc;
    border-radius: 5px;
    font-size: 14px;
    }

    .container input[type="text"]:focus {
    border-color: #4a90e2;
    outline: none;
    }

    .container .login {
    text-align: center;
    }

    .container button {
    width: 100%;
    background: #4a90e2;
    color: #ffffff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
    }

    .container button:hover {
    background: #357ab8;
    }

    .container a {
    display: block;
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #4a90e2;
    text-decoration: none;
    }

    .container a:hover {
    text-decoration: underline;
    }
        </style>

    </head>
    <body>
        <form class="container" action="" method="post">
            <div class="name">
                <label for="username"> username </label> <br>
                <input type="text" name="username">
            </div>
            <div class="password">
                <label for="password"> password </label> <br>
                <input type="text" name="password">
            </div>
            <a href="Register.php"> Register akun </a>
            <div class="login">
                <button type="submit"> login </button>
            </div>
        </form>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color:rgb(159, 159, 159);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .login-container {
            background-color: white;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            padding: 30px;
            text-align: center;
        }
        
        .login-header {
            margin-bottom: 25px;
        }
        
        .login-header h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .login-form .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 500;
        }
        
        .login-form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        .login-form input:focus {
            outline: none;
            border-color:rgb(9, 161, 29);
        }
        
        .login-button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color:rgb(11, 116, 63);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        .login-button:hover {
            transition: 0.5s;
            background-color:rgb(22, 218, 114);
        }
        .register {
            text-decoration-line: none;
            color: rgb(16, 123, 66);
            transition: 0.5s;
        }

        .register:hover {
            transition: 0.5s;
            color: rgb(18, 227, 115);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Sistem Informasi Perpustakaan</h1>
            <p>Login form</p>
        </div>
        
        <form class="login-form" action="" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Masukkan username" name="username">
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Masukkan password" name="password">
            </div>

            <a href="Register.php" class="register">Register Akun</a>
            
            <button type="submit" class="login-button">MASUK</button>
        </form>
    </div>
</body>
</html>